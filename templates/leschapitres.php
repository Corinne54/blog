<div class="about-page">
    <div class="container">
        <h2>Découvrez tous les chapitres</h2>
        <br>
        <figure class="figure">
        <img src="../public/img/alaska03.jpg">
        </figure>
        <br>

        <?php
        foreach ($articles as $article)
        {
            ?>
            <section class="blog-single">

                <div class="container">

                    <div class="main-contant">

                        <div class="col-lg-12 col-md-12 left-side">


                            <div class="row">
                                <div class="col-md-6">

                                    <figure class="figure">

                                        <a href="../public/index.php?route=article&articleId=<?= htmlspecialchars($article->getId());?>"><img src="../public/img/<?=htmlspecialchars($article->getPicture());?>" class="figure-img img-fluid" ></a>

                                    </figure>
                                </div>
                                <div class="col-md-6">

                                    <h2><a href="../public/index.php?route=article&articleId=<?= htmlspecialchars($article->getId());?>"> <?= htmlspecialchars($article->getTitle());?></a></h2>

                                    <h6><?= substr(htmlspecialchars($article->getContent()),0,250);?></h6>


                                    <br> <div class="btn-group">
                                        <a href="../public/index.php?route=article&articleId=<?= htmlspecialchars($article->getId());?>" class="btn btn-danger">Lire la suite</a>
                                    </div>

                                </div>



                            </div>



                        </div>

            </section>
            <?php
        }
        ?>


    <a href="javascript:" id="return-to-top"><i class="fa fa-long-arrow-up" aria-hidden="true"></i></a>

</div></div>
