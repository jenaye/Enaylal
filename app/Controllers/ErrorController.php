<?php


namespace App\Controllers;
use Enaylal\Controller;

/**
 * Class ErrorController
 * @package App\Controllers
 */
class ErrorController extends Controller
{

    /**
     * Index de la page d'accueil
     */
    public function _404()
    {
       return $this->getView('error/404');
    }


}