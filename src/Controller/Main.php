<?php


namespace App\Controller;


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
    }
}