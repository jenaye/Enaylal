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
        /*
         * getview cherche un "dossier/fichier" dans /public/views/
         * par default il ajoute l'extension blade.php au fichier
         */
        return $this->getView('/home/index');
    }
    

}