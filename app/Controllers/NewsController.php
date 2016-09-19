<?php


namespace App\Controllers;
use Enaylal\Connection;
use Enaylal\Controller;

/**
 * Class NewsController
 * @package App\Controllers
 */
class NewsController extends Controller
{


    public function index()
    {
       
    }

    public function details($id)
    {
        $db = new Connection('mysql:host=localhost;dbname=tuto', 'root', '');
        $comments = $db->query('SELECT * FROM comments WHERE id > :id', [
            ':id' => 0
        ]);


        return $this->getView('news/details', [
            'idNews' => $id,
            'comments' => $comments
        ]);
    }

}
