<?php

namespace App\src\controller;

use App\config\Parameter;


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

    public function adminArticle($articleId)
    {
        $article = $this->articleDAO->getArticle($articleId);
        $comments = $this->commentDAO->getCommentsFromArticle($articleId);


        return $this->view->render('adminSingle', [
            'article' => $article,
            'comments' => $comments,
            //         'comment' => $comment,
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
        $this->session->set('delete_article', 'Larticle a bien été supprimé');
        header('Location: ../public/index.php?route=adminHome');
    }



    public function EditArticle($articleId)
    {
        $article = $this->articleDAO->getArticle($articleId);
        $this->view->render('updateArticle', ['article' => $article]);
    }


    public function updateArticle(Parameter $post)
    {
        if($post->get('submit')) {
            $this->articleDAO->updateArticle($post);
            $this->session->set('add_article', 'article a bien été modifié');
            header('Location: ../public/index.php?route=adminHome');
        }

    }



    public function deleteComment($commentId)
    {
        $this->commentDAO->deleteComment($commentId);
        $this->session->set('delete_comment', 'Le commentaire a bien été supprimé');


        header('Location: ../public/index.php');
    }


    public function EditComment($commentId)
    {
        $comment = $this->commentDAO->getComment($commentId);
        $this->view->render('updateComment', ['comment' => $comment]);
    }


    public function updateComment(Parameter $comment)
    {
        if($comment->get('submit')) {
            $this->commentDAO->updateComment($comment);
            $this->session->set('update_comment', 'Le commentaire a bien été modifié');
            header('Location: ../public/index.php?route=adminHome');
        }

        }






}