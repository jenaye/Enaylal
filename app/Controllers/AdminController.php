<?php


namespace App\Controllers;
use Enaylal\Controller;
use \DB;

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

    public function all(){
        $data = DB::table('articles')->get();
        dump($data);
    }

    public function single($id){
        $datas = DB::table('articles')->where('id', $id)->first();
        return $this->getView('admin/single', [
            'datas' => $datas
        ]);
    }


}