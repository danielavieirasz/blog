<?php

namespace App\Http\Blog;

use Framework\Database\Connection;
use Framework\Http\Controller;

class HomeController extends Controller
{
    public function __invoke()
    {
        //conexão com o banco de dados

        $conn = Connection::getInstance();

        $stmt = $conn->prepare('SELECT * from posts');

        $stmt->execute();

        $posts = $stmt->fetchAll();

        //====

        $view = $this->view->render('blog::home',['posts'=>$posts, 'title'=>'Bem vindo ao blog']);

        $this->response->getBody()->write($view);

        return $this->response;

    }
}