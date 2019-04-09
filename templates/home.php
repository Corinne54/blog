<link href="../public/css/style.css" rel="stylesheet"/>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<div class="bloc_page">
<header id="header">
    <div class="menuTitle">
        <h1> Billet simple pour l'Alaska</h1>

    </div>




</header>
<p>En construction</p>
<?= $this->session->show('add_article'); ?>
    <nav class="navbar navbar-dark bg-dark">
    <a href="../public/index.php?route=addArticle">Nouvel article</a>
    </nav>
<?php
foreach ($articles as $article)
{
    ?>
    <div>
        <h3><a href="../public/index.php?route=article&articleId=<?= htmlspecialchars($article->getId());?>"><?= htmlspecialchars($article->getTitle());?></a></h3>
        <p><?= htmlspecialchars($article->getContent());?></p>
        <p><?= htmlspecialchars($article->getAuthor());?></p>
        <p>Créé le : <?= htmlspecialchars($article->getCreatedAt());?></p>
    </div>
    <br>

    <?php
}
?>
</div>
