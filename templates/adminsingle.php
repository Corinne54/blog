<section class="blog-single">
    <div class="container">

        <div class="main-contant">

    <h2><?= htmlspecialchars($article->getTitle());?></h2>

            <figure class="figure">
            <img src="../public/img/<?=htmlspecialchars($article->getPicture());?>">
            </figure>
    <p><?= ($article->getContent());?></p>
    <p><?= htmlspecialchars($article->getAuthor());?></p>
    <p>Créé le : <?= htmlspecialchars($article->getCreatedAt());?></p>
</div>
<br><div class="main-contant">


    <h3> Commentaires</h3>
    <?php
    foreach ($comments as $comment)
    {
        ?>

        <div class="row">
                <div class="col-lg-12 col-md-12 col-12">

                    <br><strong><?= htmlspecialchars($comment->getPseudo());?></strong>
        <br><?= htmlspecialchars($comment->getContent());?>
       <br> Posté le <?= htmlspecialchars($comment->getCreatedAt());?>

       <br> <a href="../public/index.php?route=deleteComment&commentId=<?= htmlspecialchars($comment->getId());?>"><i class="fa fa-times"></i> Supprimer le commentaire</a>

    <a href="../public/index.php?route=EditComment&commentId=<?= htmlspecialchars($comment->getId());?>"><i class="fa fa-file"></i> Modifier le commentaire</a>
                </div></div>
        <?php
    }
    ?>

</div>
    <a href="javascript:" id="return-to-top"><i class="fa fa-long-arrow-up" aria-hidden="true"></i></a>
                </div>
</section>
