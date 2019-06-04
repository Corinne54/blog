<?php

namespace App\src\controller;

use App\config\Parameter;


class BackController extends Controller
{


    public function addArticle(Parameter $post)
    {
                if($post->get('submit')) {

                    $imageName= $this->upload();
            $this->articleDAO->addArticle($post, $imageName);


                    $this->session->set('add_article', "l'article a bien été publié");
                    header('Location: ../public/index.php?route=adminHome');
        }
        return $this->view->render('add_article', [
            'post' => $post
        ]);
    }



private function upload()
{
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        // Vérifie si le fichier a été uploadé sans erreur.
        if (isset($_FILES["picture"]) && $_FILES["picture"]["error"] == 0) {
            $allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png");
            $filename = $_FILES["picture"]["name"];
            $filetype = $_FILES["picture"]["type"];
            $filesize = $_FILES["picture"]["size"];

            // Vérifie l'extension du fichier
            $ext = pathinfo($filename, PATHINFO_EXTENSION);
            if (!array_key_exists($ext, $allowed)) die("Erreur : Veuillez sélectionner un format de fichier valide.");

            // Vérifie la taille du fichier - 5Mo maximum
            $maxsize = 5 * 1024 * 1024;
            if ($filesize > $maxsize) die("Error: La taille du fichier est supérieure à la limite autorisée.");

            // Vérifie le type MIME du fichier
            if (in_array($filetype, $allowed)) {
                // Vérifie si le fichier existe avant de le télécharger.
                if (file_exists("../public/img/" . $_FILES["picture"]["name"])) {
                    echo $_FILES["picture"]["name"] . " existe déjà.";
                } else {
                    move_uploaded_file($_FILES["picture"]["tmp_name"], "../public/img/" . $_FILES["picture"]["name"]);
                    echo "Votre fichier a été téléchargé avec succès.";
                    return $filename;
                }

            } else {
                echo "Error: Il y a eu un problème de téléchargement de votre fichier. Veuillez réessayer.";
            }
        } else {
            echo "Error: " . $_FILES["picture"]["error"];
        }
    }
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

    $articles = $this->articleDAO->getArticlesAdmin();

    $reportComments = $this->commentDAO->getReport();

    return $this->view->render('adminHome', [
        'articles' => $articles, 'comments'=>$reportComments,
    ]);


    }

    public function deleteArticle($articleId)
    {
        $this->articleDAO->deleteArticle($articleId);
        $this->session->set('delete_article', "L'article a bien été supprimé");
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
            $this->session->set('update_article', "l'article a bien été modifié");
            header('Location: ../public/index.php?route=adminHome');
        }

    }

    public function updatePassword(Parameter $post)
    {
        if($post->get('submit'))

        {
            var_dump($post);
            $this->userDAO->updatePassword($post);
            $this->session->set('update_password', "Votre mot de passe a bien été modifié");
           // header('Location: ../public/index.php?route=adminHome');
        }
        return $this->view->render('adminUpdatePassword', [
            'post' => $post
        ]);
    }





    public function deleteComment($commentId)
    {
        $this->commentDAO->deleteComment($commentId);
        $this->session->set('delete_comment', 'Le commentaire a bien été supprimé');


        header('Location: ../public/index.php?route=adminHome');
    }


    public function EditComment($commentId)
    {
        $comment = $this->commentDAO->getComment($commentId);
        $this->view->render('updateComment', ['comment' => $comment]);
    }


    public function cancelReportComment($commentId) {

        $this->commentDAO->cancelReportComment($commentId);
        header('Location: ../public/index.php?route=adminHome');
    }


    public function updateComment(Parameter $comment)
    {
        if($comment->get('submit')) {
            $this->commentDAO->updateComment($comment);
            $this->session->set('update_comment', 'Le commentaire a bien été modifié');
            header('Location: ../public/index.php?route=adminHome');
        }

        }


    public function logout()
    {
        $this->userDAO->logout();
        header('Location: ../public/index.php');
    }



}