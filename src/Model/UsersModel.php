<?php


namespace App\Model;

use W1020\Table as ORMTable;

/**
 * Выборка данных из БД по sql-запросу
 */
class UsersModel extends ORMTable
{
    /**
     * Отображение страницы с данными из двух таблиц
     * @param int $page
     * @return array<array>
     * @throws \Exception
     */
    public function getPage(int $page = 1): array
    {
        $sql = <<<SQL
SELECT
    `users`.`id`,
    `users`.`name`,
    `users`.`login`,
    `users`.`password`,
    `user_groups`.`name` AS 'user_groups_id'
FROM
    `users`,
    `user_groups`
WHERE
    `users`.`user_groups_id` = `user_groups`.`id`
SQL;

        return $this->query(
            "$sql LIMIT " . (($page - 1) * $this->pageSize) . ",$this->pageSize;"
        );
    }

    /**
     * отображение на странице данных с названием и номером группы пользователей
     * @return array<array>
     * @throws \Exception
     */
    public function getGroupList(): array
    {
        $data = $this->query("SELECT `id`,`name` FROM `user_groups`");
        $arr = [];
        foreach ($data as $row) {
            $arr[$row['id']] = $row['name'];
        }
        return $arr;
    }
}