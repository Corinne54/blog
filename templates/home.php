

<?= $this->session->show('add_article'); ?>
<?= $this->session->show('register'); ?>




<!--Carousel Wrapper-->

<div id="carousel-thumb" class="carousel slide carousel-fade carousel-thumbnails" data-ride="carousel">
    <!--Slides-->
    <div class="carousel-inner" role="listbox">
        <?php
        foreach ($lastArticle as $lastArticle)
        {
        ?>
        <div class="carousel-item active">
            <img class="d-block w-100" src="../public/img/alaska04.jpg" alt="First slide">
            <div class="gradient"></div>
            <div class="carousel-caption">
                <h1>Le dernier chapitre</h1>
                <p class="lead"><?= htmlspecialchars($lastArticle->getTitle());?></p>
                <a class="btn btn-primary" href="../public/index.php?route=article&articleId=<?= htmlspecialchars($lastArticle->getId());?>" class="btn btn-danger"><span>Lire</span></a>
            </div>
        </div>
            <?php
        }
        ?>
        <div class="carousel-item">
            <img class="d-block w-100" src="../public/img/alaska03.jpg" alt="Second slide">
            <div class="gradient"></div>
            <div class="carousel-caption">
                <h1>Billet simple pour l'Alaska</h1>
                <p class="lead">Le dernier roman de Jean Forteroche</p>
                <a class="btn btn-primary" href="../public/index.php?route=leschapitres"><span>Découvrir</span></a>
            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="../public/img/portrait.jpg" alt="Third slide">
            <div class="gradient"></div>
            <div class="carousel-caption">
                <h1>Qui suis-je?</h1>
                <p class="lead">Ecrivain - aventurier</p>
                <a class="btn btn-primary" href="../public/index.php?route=quisuisje"><span>En savoir plus</span></a>
            </div>
        </div>

    </div>
    <!--/.Slides-->

    <!--/.Controls-->
    <ol class="carousel-indicators">
        <li data-target="#carousel-thumb" data-slide-to="0" class="active"> <img class="d-block w-100" src="../public/img/alaska04.jpg" class="img-fluid">
            <span>Le dernier chapitre</span>
        </li>
        <li data-target="#carousel-thumb" data-slide-to="1"><img class="d-block w-100" src="../public/img/alaska03.jpg" class="img-fluid">
            <span>Tous les chapitres</span>
        </li>
        <li data-target="#carousel-thumb" data-slide-to="2"><img class="d-block w-100" src="../public/img/portrait.jpg" class="img-fluid">
            <span>Qui suis-je?</span>
        </li>

    </ol>
</div>
<br>
<div class="container">

    <h1>Découvrez les 3 derniers chapitres :</h1>
</div>

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

                        <h6><?= substr(($article->getContent()),0,250);?></h6>

                         <br>  <?= htmlspecialchars($article->getAuthor());?>
                        <br>
                        Créé le : <?= htmlspecialchars($article->getCreatedAt());?>
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
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.js"></script>
<!-- Custom JavaScript -->
<script src="../public/js/animate.js"></script>
<script src="../public/js/custom.js"></script>
<script>
    $(document).on('click', '[data-toggle="lightbox"]', function(event) {
        event.preventDefault();
        $(this).ekkoLightbox();
    });
</script>






