

<?= $this->session->show('add_article'); ?>
<?= $this->session->show('register'); ?>




<div class="titre"> Découvrez les 3 derniers chapitres</div>
<?php
foreach ($articles as $article)
{
    ?>

    <div class="news">
        <h3><a href="../public/index.php?route=article&articleId=<?= htmlspecialchars($article->getId());?>"><i class="fas fa-book"></i> <?= htmlspecialchars($article->getTitle());?></a></h3>
        <?= substr(htmlspecialchars($article->getContent()),0,300);?>
        <br><?= htmlspecialchars($article->getAuthor());?>
        <br>Créé le : <?= htmlspecialchars($article->getCreatedAt());?>
        <br><a href="../public/index.php?route=article&articleId=<?= htmlspecialchars($article->getId());?>"><i class="fas fa-book-reader"></i> Lire la suite </a>
    </div>


    <?php
}
?>
<div class="menuAside">
    Découvrez tous les chapitres
    <?php foreach ($articlesList as $articleList): ?>

        <li><a href="<?= "index.php?route=article&articleId=" . $articleList['id'] ?>">
                <?= $articleList['title'] ?></a>
        </li>

    <?php endforeach; ?>

</div>


