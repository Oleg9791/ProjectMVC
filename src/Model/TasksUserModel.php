<?php


namespace App\Model;

use W1020\Table as ORMTable;

class TasksUserModel extends ORMTable
{
    /**
     * @param int $page
     * @return array<array>
     * @throws \Exception
     */
    public function getPage(int $page = 1): array
    {
        $sql = <<<SQL
SELECT
    `tasks`.`id`,
    `tasks`.`discription`,
    `tasks`.`start_date`,
    `tasks`.`end_date`,
    `users`.`name` AS 'users_id'
FROM
    `tasks`,
    `users`
WHERE
    `tasks`.`users_id` = `users`.`id` 
SQL;
        return $this->query(
            "$sql LIMIT " . (($page - 1) * $this->pageSize) . ",$this->pageSize;"
        );
    }

    public function getGroupList()
    {
        $data = $this->query("SELECT `id`,`name` FROM `user_groups`");
        $arr = [];
        foreach ($data as $row) {
            $arr[$row['id']] = $row['name'];
        }
        return $arr;
    }

    public function getNameList()
    {
        $data = $this->query("SELECT `id`,`login` FROM `users` WHERE `user_groups_id`=2");
        $arr = [];
        foreach ($data as $row) {
            $arr[$row['id']] = $row['login'];
        }
        return $arr;

    }
}