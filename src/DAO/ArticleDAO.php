<?php

namespace App\src\DAO;

use App\config\Parameter;
use App\src\model\Article;

class ArticleDAO extends DAO
{
    private function buildObject($row)
    {
        $article = new Article();
        $article->setId($row['id']);
        $article->setTitle($row['title']);
        $article->setContent($row['content']);
        $article->setAuthor($row['author']);
        $article->setCreatedAt($row['createdAt']);
        return $article;
    }

    public function getArticles()
    {
        $sql = 'SELECT id, title, content, author, createdAt FROM article ORDER BY id DESC';
        $result = $this->createQuery($sql);
        $articles = [];
        foreach ($result as $row){
            $articleId = $row['id'];
            $articles[$articleId] = $this->buildObject($row);
        }
        $result->closeCursor();
        return $articles;
    }

    public function getArticle($articleId)
    {
        $sql = 'SELECT id, title, content, author, createdAt FROM article WHERE id = ?';
        $result = $this->createQuery($sql, [$articleId]);
        $article = $result->fetch();
        $result->closeCursor();
        return $this->buildObject($article);
    }

    public function addArticle(Parameter $post)
    {
        //Permet de récupérer les variables $title, $content et $author
        $sql = 'INSERT INTO article (title, content, author, createdAt) VALUES (?, ?, ?, NOW())';
        $this->createQuery($sql, [$post->get('title'), $post->get('content'), $post->get('author')]);
    }

    public function deleteArticle( $articleId )
    {
        $sql = 'DELETE FROM article WHERE id = ?';
        $this->createQuery($sql,[$articleId]);
    }


    public function updateArticle($post)

    {
        extract($post);
        $title = $_POST['title'];
        $content = $_POST['content'];
        $id = $_POST['id'];
        $sql = "UPDATE Article SET title='$title', content = '$content' WHERE id = '$id'";
        $this->createQuery($sql);

    }

}