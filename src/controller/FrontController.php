<?php

namespace App\src\controller;

use App\config\Parameter;
use App\src\DAO\CommentDAO;


class FrontController extends Controller
{
    public function home()
    {
        $articles = $this->articleDAO->getArticles();
        $articlesList = $this->articleDAO->getArticlesList();
        $lastArticle= $this->articleDAO->getLastArticle();

        return $this->view->render('home', [
            'articles' => $articles, 'articlesList' => $articlesList, 'lastArticle'=>$lastArticle
        ]);
    }

    public function quisuisje()
    {
        return $this->view->render('quisuisje');
    }

    public function leschapitres()
    {
        $articles = $this->articleDAO->getArticlesAdmin();
        return $this->view->render('leschapitres', ['articles' => $articles]

        );
    }


    public function article($articleId)
    {
        $article = $this->articleDAO->getArticle($articleId);
        $comments = $this->commentDAO->getCommentsFromArticle($articleId);


        return $this->view->render('single', [
            'article' => $article,
            'comments' => $comments,

        ]);
    }


    public function addComment($idArt, $post)
    {
        if (isset($post['submit']) && !empty($post['pseudo']) && !empty($post['content'])) {
            header('Location: ../public/index.php?route=article&articleId=' . $idArt);
            $this->commentDAO->addComment($idArt, $post);
            $this->view->render('single', [
                'post' => $post
            ]);
        }
        header('Location: ../public/index.php?route=article&articleId=' . $idArt);
    }

    public function reportComment($commentId, $articleId) {

        $this->commentDAO->reportComment($commentId);
        header('Location: ../public/index.php?route=article&articleId='.$articleId);
    }

    public function register(Parameter $post)
    {
        if ($post->get('submit')) {
            $this->userDAO->register($post);
            $this->session->set('register', 'Votre inscription a bien été effectuée');
            header('Location: ../public/index.php');
        }
        return $this->view->render('register', [
            'post' => $post
        ]);

    }


    public function logIn(Parameter $post)
    {
        if ($post->get('submit')) {
            $this->userDAO->logIn($post);
            $this->session->get($post);
            $this->session->set('bienvenue', 'Vous êtes bien connecté');

        }


        else {
            $this->session->set('erreur', 'Erreur de pseudo ou mot de passe');
        }



        return $this->view->render('adminLogin', [
            'post' => $post

        ]);


}

    }


