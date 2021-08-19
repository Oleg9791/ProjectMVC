<?php

namespace App\Controller;

use App\View\View;

/**
 * Класс включает в себя функцию отображения с
 * определением имени контроллера
 */
abstract class AbstractController
{
    /**
     * @var View
     */
    public View $view;

    public function __construct()
    {
        $this->view = new View();
        $this->view->setData(['controllerName' => $this->getCurrentClass()]);
    }

    /** Перенаправление на указанный url
     * адрес
     */
    public function redirect(string $url): void
    {
        header("Location: $url");
        exit();
    }

    /**
     * Определяет имя текущего контроллера
     */
    public function getCurrentClass(): string
    {
        return (new \ReflectionClass($this))->getShortName();
    }
}