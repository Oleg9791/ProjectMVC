<?php


namespace App\Controller;


use App\Model\UsersModel;

/**
 * Наследует родительский класс Table,
 * переопределяет текущие методы CRUD
 */
class Users extends Table
{
    protected string $tableName = "users";
    /**
     * @var UsersModel
     */

    protected $model;

    public function __construct()
    {
        parent::__construct();
        $config = include __DIR__ . "/../../config.php";
        $config["table"] = $this->tableName;
        $this->pageSize = $config["page_size"];
        $this->model = new UsersModel($config);
    }

    /**
     * Показывает страницу для редактирования строки
     * @throws \Exception
     */

    public function actionShowEdit(): void
    {
        parent::actionShowEdit();
        $this
            ->view
            ->addData(["groupList" => $this->model->getGroupList()])
            ->setTemplate("Users/add_edit");
    }

    /**
     * Показывает страницу для добавления новой строки
     * @throws \Exception
     */

    public function actionShowAdd(): void
    {
        parent::actionShowAdd();
        $this
            ->view
            ->addData(["groupList" => $this->model->getGroupList()])
            ->setTemplate("Users/add_edit");
    }
}