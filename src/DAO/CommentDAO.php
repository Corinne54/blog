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



    public function getComment($commentId) {
        $sql = 'SELECT * FROM comment WHERE id = ?';
        $result = $this->createQuery($sql, [$commentId]);
        $comment = $result->fetch();
        if($comment) {
            return $this->buildObject($comment);
        }
        else {
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

  //  public function addComment($idArt, $comment) {
    //    extract($comment);
      //  if (isset($pseudo, $content) && !empty($pseudo) && !empty($content)) {
        //    $sql ='INSERT INTO comment (pseudo, content, article_id, createdAt) VALUES (?, ?, ?, NOW())';
          //  $this->createQuery($sql, [$pseudo, $content, $idArt]);
        //}
    //}


    public function addComment(Parameter $comment)
    {

        $sql = 'INSERT INTO comment (pseudo, content, article_id, createdAt) VALUES (?, ?, ?, NOW())';
        $this->createQuery($sql, [$comment->get('pseudo'), $comment->get('content'), $comment->get('articleId')]);
    }


    public function deleteComment($idComment)
    {
        $sql = 'DELETE FROM comment WHERE id = ?';
        $this->createQuery($sql,[$idComment]);
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