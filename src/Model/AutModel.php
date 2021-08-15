<?php


namespace App\Model;


use W1020\Table as ORMTable;

/**
 * Выборка данных из БД с необходимой проверкой
 */
class AutModel extends ORMTable
{
    /** Проверка на соответствие логина и пароля
     * @param string $login
     * @param string $pass
     * @return array<array>
     * @throws \Exception
     */
    public function checkUser(string $login, string $pass): array
    {
        $sql = <<<SQL
SELECT
    `users`.`id`,
    `users`.`name`,
    `users`.`login`,
    `users`.`password`,
    `user_groups`.`name` AS 'group_name',
    `user_groups`.`code`
FROM
    `users`,
    `user_groups`
WHERE
    `users`.`user_groups_id` = `user_groups`.`id`
    AND 
    `users`.`login`='$login' AND `users`.`password`='$pass'
SQL;

//        return $this->query("SELECT * FROM `$this->tableName` WHERE login='$login' AND pass='$pass'");
        return $this->query($sql);
//        if (empty($row)) {
//            return false;
//        } else {
//            return $row[0]['user_group'];
//        }
        //print_r($this->query("SELECT * FROM `users` WHERE login='$login' AND pass='$pass'")[0]['user_group']);
    }

    /** Проверка на существование логина
     * @param string $login
     * @return bool
     * @throws \Exception
     */
    public function checkUserExists(string $login): bool
    {
        return $this->query("SELECT COUNT(*) AS 'C' FROM `$this->tableName` WHERE `login`='$login'")[0]['C'];
    }

    /** Добавление нового пользователя в БД
     * @throws \Exception
     */
    public function addNewUser(string $login, string $pass, string $name): void
    {
        $guestId = $this->query("SELECT `id` FROM `user_groups` WHERE `code` = 'guest'")[0]['id'];
//        echo $sql = "INSERT INTO `users`(`login`, `pass`, `name`, `user_group`) " .
//            "VALUES ('$login','$pass','$name','$guestId')";
        $this->runSQL("INSERT INTO `users`(`name`, `login`, `password`, `user_groups_id`) " .
            "VALUES ('$name','$login','$pass','$guestId')");
    }
}