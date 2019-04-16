<?php

namespace App\src\controller;

use App\src\DAO\CommentDAO;

class FrontController extends Controller
{
    public function home()
    {
        $articles = $this->articleDAO->getArticles();
        return $this->view->render('home', [
            'articles' => $articles
        ]);
    }

    public function article($articleId)
    {
        $article = $this->articleDAO->getArticle($articleId);
        $comments = $this->commentDAO->getCommentsFromArticle($articleId);


        return $this->view->render('single', [
            'article' => $article,
            'comments' => $comments,
            //         'comment' => $comment,
        ]);
    }


    public function addComment($idArt, $post) {
        if (isset($post['submit']) && !empty($post['pseudo']) && !empty($post['content'])) {
            header('Location: ../public/index.php?route=article&articleId='.$idArt);
            $commentDAO = new CommentDAO();
            $commentDAO->addComment($idArt, $post);
            $this->view->render('single', [
                'post' => $post
            ]);
        }
        header('Location: ../public/index.php?route=article&articleId='.$idArt);
    }
}


