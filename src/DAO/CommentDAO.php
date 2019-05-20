<?php

namespace App\src\DAO;

use App\src\model\Comment;
use App\config\Parameter;

class CommentDAO extends DAO
{
    private function buildObject($row)
    {
        $comment = new Comment();
        $comment->setId($row['id']);
        $comment->setPseudo($row['pseudo']);
        $comment->setContent($row['content']);
        $comment->setCreatedAt($row['createdAt']);

        return $comment;
    }



    public function getComment($commentId)
    {
        $sql = 'SELECT * FROM comment WHERE id = ?';
        $result = $this->createQuery($sql, [$commentId]);
        $comment = $result->fetch();
        if ($comment) {
            return $this->buildObject($comment);
        } else {
            header('Location: ../templates/unknown.php');
        }
    }




    public function getCommentsFromArticle($articleId)
    {
        $sql = 'SELECT id, pseudo, content, createdAt FROM comment WHERE article_id = ? ORDER BY createdAt DESC';
        $result = $this->createQuery($sql, [$articleId]);
        $comments = [];
        foreach ($result as $row) {
            $commentId = $row['id'];
            $comments[$commentId] = $this->buildObject($row);
        }
        $result->closeCursor();
        return $comments;
    }


    public function getReport()
    {
        $sql = "SELECT id, article_id, pseudo, content, createdAt AS  is_reported FROM comment WHERE is_reported = 1";

        $reportComments = $this->createQuery($sql);

        return $reportComments;
    }




   public function addComment($idArt, $comment) {
       extract($comment);
       if (isset($pseudo, $content) && !empty($pseudo) && !empty($content)) {
            $sql ='INSERT INTO comment (pseudo, content, article_id, createdAt) VALUES (?, ?, ?, NOW())';
            $this->createQuery($sql, [$pseudo, $content, $idArt]);
        }
    }


    public function reportComment($commentId) {
        $sql = 'UPDATE comment SET is_reported = 1 WHERE id = ?';
        $this->createQuery($sql, [$commentId]);

    }


    public function cancelReportComment($commentId) {
        $sql = 'UPDATE comment SET is_reported = 0 WHERE id = ?';
        $this->createQuery($sql, [$commentId]);

    }


    public function deleteComment($commentId)
    {
        $sql = 'DELETE FROM comment WHERE id = ?';

        $this->createQuery($sql, [$commentId]);
    }


    public function updateComment(Parameter $comment)

    {

        $sql = "UPDATE comment SET pseudo=:pseudo, content = :content WHERE id =:id";
        $this->createQuery($sql,[
            'pseudo'=> $comment->get('pseudo'),
            'content'=> $comment->get('content'),
            'id'=> $comment->get('id')

        ]);

    }

}

