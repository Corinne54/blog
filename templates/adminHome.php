
<?= $this->session->show('bienvenue'); ?>



<h2 align="center"> Bienvenue sur votre espace d'administration</h2> <?= $_SESSION['id']; ?>


<div class="admin">
<a href="../public/index.php?route=addArticle"><i class="fas fa-file-signature"></i> Ecrire un nouvel article</a>
<?php
foreach ($articles as $article)
{
?></div>

    <div class="news">
        <h3><a href="../public/index.php?route=adminArticle&articleId=<?= htmlspecialchars($article->getId());?>"><?= htmlspecialchars($article->getTitle());?></a></h3>
        <?= htmlspecialchars($article->getContent());?>
        <p>
            <a href="../public/index.php?route=deleteArticle&articleId=<?= htmlspecialchars($article->getId());?>" ><i class="fa fa-times"></i> Supprimer l'article</a> -
            <a href="../public/index.php?route=EditArticle&articleId=<?= htmlspecialchars($article->getId());?>"><i class="fa fa-file"></i> Modifier l'article</a>
    </div>



    <?php
}
?>


