<?php


namespace App\Controllers;
use Enaylal\Controller;

/**
 * Class ErrorController
 * @package App\Controllers
 */
class AdminController extends Controller
{

    /**
     * Index de la page d'accueil
     */
    public function index()
    {
        return $this->getView('admin/index');
    }


}