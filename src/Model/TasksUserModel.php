<?php


namespace App\Model;

use W1020\Table as ORMTable;

class TasksUserModel extends ORMTable
{

    protected int $userId;

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
    `tasks`.`users_id` = `users`.`id` and `users`.`id` = $this->userId
SQL;
        return $this->query(
            "$sql LIMIT " . (($page - 1) * $this->pageSize) . ",$this->pageSize;"
        );
    }

    public function rowCount(): int
    {
        return $this->query("SELECT COUNT(*) as COUNT FROM `$this->tableName` WHERE `users_id` = $this->userId")[0]["COUNT"];
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

    /**
     * @param int $userId
     * @return $this
     */
    public function setUserId(int $userId): static
    {
        $this->userId = $userId;
        return $this;
    }

//    public function getPerformance()
//    {
//        $data = $this->query("SELECT `id`,`performance` FROM `tasks`");
//        $arr = [];
//        foreach ($data as $row) {
//            $arr[$row['id']] = $row['performance'];
//        }
//        return $arr;
//
//    }


}