

<?= $this->session->show('add_article'); ?>
<?= $this->session->show('register'); ?>


<div class="menuAside">
Tous les chapitres
<?php foreach ($articlesList as $articleList): ?>

        <li><a href="<?= "index.php?route=article&articleId=" . $articleList['id'] ?>">
                <?= $articleList['title'] ?></a>
        </li>

<?php endforeach; ?>

</div>
<h2 align="center"> Découvrez les 3 derniers chapitres</h2>
<?php
foreach ($articles as $article)
{
    ?>

    <div class="news">
        <h3><a href="../public/index.php?route=article&articleId=<?= htmlspecialchars($article->getId());?>"><?= htmlspecialchars($article->getTitle());?></a></h3>
        <?= substr(htmlspecialchars($article->getContent()),0,300);?>
        <br><?= htmlspecialchars($article->getAuthor());?>
        <br>Créé le : <?= htmlspecialchars($article->getCreatedAt());?>
        <br><a href="../public/index.php?route=article&articleId=<?= htmlspecialchars($article->getId());?>">Lire la suite </a>
    </div>


    <?php
}
?>

