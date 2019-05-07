


<h2 align="center"> Bienvenue sur votre espace d'administration</h2> <?= $_SESSION['id']; ?>
<div class="alert alert-info" role="alert"><?= $this->session->show('bienvenue'); ?>
<?= $this->session->show('add_article'); ?>
<?= $this->session->show('update_article'); ?>
<?= $this->session->show('delete_article'); ?>
<?= $this->session->show('delete_comment'); ?>
<?= $this->session->show('update_comment'); ?>
</div>
<div class="admin">
<a href="../public/index.php?route=addArticle"><i class="fas fa-file-signature"></i> Ecrire un nouvel article</a>
<?php
foreach ($articles as $article)
{
?></div>

    <div class="news">
        <h3><a href="../public/index.php?route=adminArticle&articleId=<?= htmlspecialchars($article->getId());?>"><?= htmlspecialchars($article->getTitle());?></a></h3>
        <?= substr(htmlspecialchars($article->getContent()),0,300);?>
        <p>
            <a href="../public/index.php?route=adminArticle&articleId=<?= htmlspecialchars($article->getId());?>"><i class="fas fa-book-reader"></i> Lire la suite </a>
            <a href="../public/index.php?route=deleteArticle&articleId=<?= htmlspecialchars($article->getId());?>" ><i class="fa fa-times"></i> Supprimer l'article</a> -
            <a href="../public/index.php?route=EditArticle&articleId=<?= htmlspecialchars($article->getId());?>"><i class="fa fa-file"></i> Modifier l'article</a>
    </div>



    <?php
}
?>

<h2>Gestion des commentaires signalés :</h2>
<div class="comments">
    <!-- AFFICHE LES COMMENTAIRES SIGNALES -->

    <?php foreach ($comments as $comment): ?>
        <!-- FORMULAIRE MODIFICATION DU COMMENTAIRE -->


                <!-- Auteur et date d'ajout du commentaire -->
                <legend><b><?= $comment['pseudo'] ?></b> a commenté :</legend>



                <!-- Contenu du commentaire -->
                <?= $comment['content'] ?>



                <!-- Données supplémentaires envoyées -->

                <input type="hidden" name="idComment" value="<?= $comment['id'] ?>" />
                <input type="hidden" name="username" value="<?= $comment['pseudo'] ?>" />
        <a href="../public/index.php?route=deleteComment&commentId=<?= htmlspecialchars($comment['id']);?>"class="button large"><i class="fa fa-times"></i> Supprimer le commentaire</a>

    <?php endforeach; ?>
</div>



