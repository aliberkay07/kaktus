<?php


namespace app\controllers;


use app\core\Application;

/**
 * @package app\controllers
 */
class SiteController
{

    public function handleContact()
    {
        return "Handling submitted data";
    }

    public function contact()
    {
        //TODO: belki ilerde view fonksiyonu yazılabilir
        return Application::$app->router->renderView('contact');
    }

    public function home()
    {
        $params = [
            'name' => "Ali",
        ];
        return Application::$app->router->renderView('home', $params);
    }


}