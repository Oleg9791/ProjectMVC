<?php


namespace App\Controller;


use App\View\View;

/**
 * Класс перенаправляет на дефолтную страницу
 */
class Main extends AbstractController
{
    public function actionIndex(): void
    {
        $this
            ->view
            ->setTemplate("Main/index");
//            ->view();
    }
}