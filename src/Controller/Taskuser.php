<?php

namespace App\Controller;

use App\Model\TasksUserModel;

/**
 * Наследует родительский класс Tasks,
 * перегружает методы из данного класса
 */
class Taskuser extends Tasks
{
    public function __construct()
    {
        parent::__construct();
        $config = include __DIR__ . "/../../config.php";
        $config["table"] = $this->tableName;
        $this->pageSize = $config["page_size"];
        $this->model = new TasksUserModel($config);
        $this->model->setUserId($_SESSION['user']['id']);
    }

    /**
     * Показывает таблицу
     * @throws \Exception
     */
    public function actionShow(): void
    {
        parent::actionShow();
        $this->view->setTemplate("Taskuser/show");
    }

    /**
     * Показывает страницу для редактирования строки
     */
    public function actionShowEdit(): void
    {
        parent::actionShowEdit();
        $this->view->setTemplate("Taskuser/add_edit");
    }
}