

<?= $this->session->show('add_article'); ?>
<h2 align="center"> Bienvenue sur votre espace d'administration</h2>



<?php
foreach ($articles as $article)
{
    ?>

    <div class="news">
        <h3><a href="../public/index.php?route=article&articleId=<?= htmlspecialchars($article->getId());?>"><?= htmlspecialchars($article->getTitle());?></a></h3>
        <?= htmlspecialchars($article->getContent());?>
        <p>
            <a href="../public/index.php?route=deleteArticle&articleId=<?= htmlspecialchars($article->getId());?>" >Supprimer l'article</a> -
            <a href="../public/index.php?route=EditArticle&idArt=<?= htmlspecialchars($article->getId());?>">Modifier l'article</a>
    </div>


    <?php
}
?>

