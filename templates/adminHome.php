<div class="alert alert-info" role="alert"><?= $this->session->show('bienvenue'); ?>
<?= $this->session->show('add_article'); ?>
<?= $this->session->show('update_article'); ?>
<?= $this->session->show('delete_article'); ?>
<?= $this->session->show('delete_comment'); ?>
<?= $this->session->show('update_comment'); ?>
</div>

<section class="blog-single">
<div class="container">
    <div class="main-contant">

<h2 align="center"> Bienvenue sur votre espace d'administration <?= $_SESSION['pseudo']; ?></h2>

    </div></div>

    <h3> <a href="../public/index.php?route=addArticle"><i class="fas fa-file-signature"></i> <button class="btn-primary" >Ecrire un nouvel article</button></a></h3>

</section>



<section class="blog-single">
    <h2>GESTION DES CHAPITRES :</h2>


<?php
foreach ($articles as $article)
{
?>
    <div class="main-contant" >

        <h1><a href="../public/index.php?route=adminArticle&articleId=<?= htmlspecialchars($article->getId());?>"><?= htmlspecialchars($article->getTitle());?></a></h1>
        <?= substr(htmlspecialchars($article->getContent()),0,300);?>
<br>
            <a href="../public/index.php?route=adminArticle&articleId=<?= htmlspecialchars($article->getId());?>"><i class="fas fa-book-reader"></i> Lire la suite </a>
            <br>
            <a href="../public/index.php?route=deleteArticle&articleId=<?= htmlspecialchars($article->getId());?>" ><i class="fa fa-times"></i> Supprimer l'article</a>
            <br>
            <a href="../public/index.php?route=EditArticle&articleId=<?= htmlspecialchars($article->getId());?>"><i class="fa fa-file"></i> Modifier l'article</a>



    </div>
    <?php
}
?>





<div class="container" >

    <!-- AFFICHE LES COMMENTAIRES SIGNALES -->
    <h2>Gestion des commentaires signalés :</h2>
    <?php foreach ($comments as $comment): ?>
        <!-- FORMULAIRE MODIFICATION DU COMMENTAIRE -->


                <!-- Auteur et date d'ajout du commentaire -->
                <legend><b><?= $comment['pseudo'] ?></b> a commenté :</legend>



                <!-- Contenu du commentaire -->
                <?= $comment['content'] ?>



                <!-- Données supplémentaires envoyées -->

                <input type="hidden" name="idComment" value="<?= $comment['id'] ?>" />
                <input type="hidden" name="username" value="<?= $comment['pseudo'] ?>" />

      <br>  <a href="../public/index.php?route=cancelReportComment&commentId=<?= htmlspecialchars($comment['id']);?>" >annuler le signalement</a>

        <a href="../public/index.php?route=deleteComment&commentId=<?= htmlspecialchars($comment['id']);?>"class="button large"><i class="fa fa-times"></i> Supprimer le commentaire</a>
    <?php endforeach; ?>
</div>



</section>