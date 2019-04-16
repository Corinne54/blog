<?php

namespace App\src\controller;

use App\config\Parameter;
use PDO;

class BackController extends Controller
{
    public function addArticle(Parameter $post)
    {
        if($post->get('submit')) {
            $this->articleDAO->addArticle($post);
            $this->session->set('add_article', 'Le nouvel article a bien été ajouté');
            header('Location: ../public/index.php');
        }
        return $this->view->render('add_article', [
            'post' => $post
        ]);
    }

public function adminHome()
{

    $articles = $this->articleDAO->getArticles();
    return $this->view->render('adminHome', [
        'articles' => $articles
    ]);
}

    public function deleteArticle($articleId)
    {
        $this->articleDAO->deleteArticle($articleId);
        header('Location: ../public/index.php?route=adminHome');
    }


    public function EditArticle($articleId)
    {
        $article = $this->articleDAO->getArticle($articleId);
        $this->view->render('updateArticle', ['article' => $article]);
    }

    public function updateArticle($post)
    {

        if(isset($post['submit'])) {
            $article = $this->articleDAO->updateArticle($post);
            header('Location: ../public/index.php');
        }
        $this->view->render('adminHome', ['article' => $article]);

    }



}