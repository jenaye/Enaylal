<?php


namespace App\Controllers;
use Enaylal\Controller;

/**
 * Class HomeController
 * @package App\Controllers
 */
class HomeController extends Controller
{

    /**
     * Index de la page d'accueil
     */
    public function index()
    {
        return $this->getView('/home/index');
    }
    

}