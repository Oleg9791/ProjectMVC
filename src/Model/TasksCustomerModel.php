<?php


namespace App\Model;

use W1020\Table as ORMTable;

/**
 * Выборка данных из БД по sql-запросу
 */
class TasksCustomerModel extends ORMTable
{
    /**
     * @var int
     */
    protected int $userId;

    /**
     * @param int $userId
     * @return $this
     */
    public function setUserId(int $userId): static
    {
        $this->userId = $userId;
        return $this;
    }

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
    `tasks`.`id`,
    `tasks`.`discription`,
    `tasks`.`start_date`,
    `tasks`.`end_date`,
    `users`.`name` AS 'users_id',
    `tasks`.`performance`,
     `tasks`.`customer_id`


FROM
    `tasks`,
    `users`
WHERE
    `tasks`.`users_id` = `users`.`id` AND `tasks`.`customer_id`=$this->userId
SQL;
        return $this->query(
            "$sql LIMIT " . (($page - 1) * $this->pageSize) . ",$this->pageSize;"
        );
    }

    /**
     * возвращает количество строк по данному запросу
     * @return int
     * @throws \Exception
     */
    public function rowCount(): int
    {
        return $this->query("SELECT COUNT(*) as COUNT FROM `$this->tableName` WHERE `customer_id` = $this->userId")[0]["COUNT"];
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

    /**
     * отображение на странице данных с логином и номером группы (рабочих)
     * @return array<array>
     * @throws \Exception
     */
    public function getNameList(): array
    {
        $data = $this->query("SELECT `id`,`login` FROM `users` WHERE `user_groups_id`=2");
        $arr = [];
        foreach ($data as $row) {
            $arr[$row['id']] = $row['login'];
        }
        return $arr;

    }

}

