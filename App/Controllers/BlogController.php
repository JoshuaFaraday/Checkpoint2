<?php


namespace App\Controllers;

use App\Core\AControllerBase;
use App\Models\Article;

class BlogController extends AControllerBase
{

    public function index()
    {
        return Article::getAll();
    }

    public function add(){


        if (isset($_POST['title']))
        {
            $article = new Article($_POST['title'], $_POST['text']);
            $article->save();

            $this->redirectToIndex();

        }

    }

    public function delete(){
        if (isset($_GET['id'])) {
            $art = Article::getOne($_GET['id']);
            $art->delete();
        }
        $this->redirectToIndex();

    }

    public function edit(){
        $art = Article::getOne($_GET['id']);
        if (isset($_POST['title'])) {

            $art->setTitle($_POST['title']);
            $art->setText($_POST['text']);
            $art->save();
            $this->redirectToIndex();

        }
        return [
            'model' => $art,

        ];
    }



    public function redirectToIndex()
    {
        header("Location:?c=blog");
        die();
    }
}