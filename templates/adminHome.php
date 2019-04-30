


<h2 align="center"> Bienvenue sur votre espace d'administration</h2>

<div class="admin">
<a href="../public/index.php?route=addArticle">Ecrire un nouvel article</a>
<?php
foreach ($articles as $article)
{
?></div>

    <div class="news">
        <h3><a href="../public/index.php?route=adminArticle&articleId=<?= htmlspecialchars($article->getId());?>"><?= htmlspecialchars($article->getTitle());?></a></h3>
        <?= htmlspecialchars($article->getContent());?>
        <p>
            <a href="../public/index.php?route=deleteArticle&articleId=<?= htmlspecialchars($article->getId());?>" >Supprimer l'article</a> -
            <a href="../public/index.php?route=EditArticle&articleId=<?= htmlspecialchars($article->getId());?>">Modifier l'article</a>
    </div>



    <?php
}
?>


