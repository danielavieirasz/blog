<?php

namespace App\Http\Blog;
use Framework\Database\Connection;
use Framework\Http\Controller;

class PostController extends Controller
{

    public function __invoke($request,$params)
    {
        //conexão com o banco de dados

        $conn = Connection::getInstance();

        $stmt = $conn->prepare("SELECT * from posts WHERE slug = '{$params['slug']}' ");

        $stmt->execute();

        $post = $stmt->fetch();

        //====

        $view = $this->view->render('blog::show',['post'=>$post]);

        $this->response->getBody()->write($view);

        return $this->response;

    }

}