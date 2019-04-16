

<?= $this->session->show('add_article'); ?>
<h2 align="center"> Découvrez les derniers chapitres</h2>
<?php
foreach ($articles as $article)
{
    ?>

    <div class="news">
        <h3><a href="../public/index.php?route=article&articleId=<?= htmlspecialchars($article->getId());?>"><?= htmlspecialchars($article->getTitle());?></a></h3>
        <?= htmlspecialchars($article->getContent());?>
        <br><?= htmlspecialchars($article->getAuthor());?>
        <br>Créé le : <?= htmlspecialchars($article->getCreatedAt());?>
    </div>


    <?php
}
?>

