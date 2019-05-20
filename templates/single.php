



<!-- Blog-Section -->
<section class="blog-single">
    <div class="container">
        <div class="main-contant">
            <div class="row">
                <div class="col-sm-12">
                    <figure class="figure">
                        <img src="../public/img/<?=htmlspecialchars($article->getPicture());?>" class="figure-img img-fluid" >
                                            </figure>
                </div>
                <div class="col-sm-12">
                    <p>Créé le : <?= htmlspecialchars($article->getCreatedAt());?></p>
                    <h3><?= htmlspecialchars($article->getTitle());?></h3>

                   <p>
                       <?= htmlspecialchars($article->getContent());?>



                    <p><?= htmlspecialchars($article->getAuthor());?></p>


                   </p>
                </div>
            </div>


            <hr/>


            <div class="post">
                <div class="row">
                    <div class="col-sm-12">
                        <h2>Vos commentaires</h2>
                    </div>
                    <?php
                    foreach ($comments as $comment)
                    {
                    ?>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-12">
                        <div class="col1">


                            <p><strong><span>Posté le <?= htmlspecialchars($comment->getCreatedAt());?></span>
                                    <?= htmlspecialchars($comment->getPseudo());?></strong>
                                <?= htmlspecialchars($comment->getContent());?></p>
                            <a class="btn btn-danger" href="../public/index.php?route=reportComment&articleId=<?= ($article->getId());?>&commentId=<?= ($comment->getId());?>"> Signaler</a>
                        </div>
                    </div>
                    <?php
                    }
                    ?>


                </div>

                <h2>Ajouter un Commentaire</h2>
                <form class="form" action="../public/index.php?route=postComment&idArt=<?= htmlspecialchars($article->getId()); ?>" method="post">
                    <div class="form-row">
                        <div class="col-md-4 mb-3">
                            <input type="text" class="form-control"  name="pseudo" id="pseudo"placeholder="Votre pseudo " required>
                        </div>

                        <div class="col-md-12 mb-3">
                            <textarea class="form-control" rows="5" id="content" name="content" placeholder="Ecrivez votre commentaire" required></textarea>
                        </div>
                    </div>
                    <button class="btn btn-primary" type="submit"  id="submit" name="submit">Envoyer votre commentaire</button>
                </form>

                <a href="../public/index.php">Retour à l'accueil</a>
            </div>
        </div>
    </div>
    <a href="javascript:" id="return-to-top"><i class="fa fa-long-arrow-up" aria-hidden="true"></i></a>
</section>