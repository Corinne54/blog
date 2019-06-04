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
        $article->setPicture($row['picture']);
        return $article;
    }

    public function getArticles()
    {
        $sql = 'SELECT id, title, content , author, createdAt, picture FROM article ORDER BY id DESC LIMIT 0,3';
        $result = $this->createQuery($sql);
        $articles = [];
        foreach ($result as $row){
            $articleId = $row['id'];
            $articles[$articleId] = $this->buildObject($row);
        }
        $result->closeCursor();
        return $articles;
    }


    public function getLastArticle()
    {
        $sql = 'SELECT id, title, content , author, createdAt, picture FROM article ORDER BY id DESC LIMIT 0,1';
        $result = $this->createQuery($sql);
        $articles = [];
        foreach ($result as $row){
            $articleId = $row['id'];
            $articles[$articleId] = $this->buildObject($row);
        }
        $result->closeCursor();
        return $articles;
    }


    public function getArticlesAdmin()
    {
        $sql = 'SELECT id, title, content , author, createdAt, picture FROM article ORDER BY id';
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
        $sql = 'SELECT id, title, content, author, createdAt, picture FROM article WHERE id = ?';
        $result = $this->createQuery($sql, [$articleId]);
        $article = $result->fetch();
        $result->closeCursor();
        return $this->buildObject($article);
    }



    public function getArticlesList()
    {
        $sql = "SELECT id, title, content FROM article";
        $articlesList = $this->createQuery($sql);

        return $articlesList;
    }




    public function addArticle(Parameter $post, $imageName)
    {

        $sql = 'INSERT INTO article (title, content, author, picture, createdAt) VALUES (?, ?, ?,?, NOW())';
        $this->createQuery($sql, [$post->get('title'), $post->get('content'), $post->get('author'), $imageName]);
    }

    public function deleteArticle( $articleId )
    {
        $sql = 'DELETE FROM comment WHERE article_id = ?';
        $this->createQuery($sql,[$articleId]);
        $sql = 'DELETE FROM article WHERE id = ?';
        $this->createQuery($sql,[$articleId]);
    }





    public function updateArticle(Parameter $post)

    {

        $sql = "UPDATE article SET title=:title, content = :content WHERE id =:id";
        $this->createQuery($sql,[
            'title'=> $post->get('title'),
            'content'=> $post->get('content'),
            'id'=> $post->get('id')

        ]);

    }

}