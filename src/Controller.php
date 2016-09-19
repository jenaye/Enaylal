<?php


namespace Enaylal;


use duncan3dc\Laravel\BladeInstance;

class Controller
{

    protected function getView($file, $params = [])
    {
        $viewsPath = realpath(__DIR__.'/../public/views');
        $cachePath = realpath(__DIR__.'/../cache');

        $blade = new BladeInstance($viewsPath, $cachePath);
        return $blade->render($file, $params);
    }

}