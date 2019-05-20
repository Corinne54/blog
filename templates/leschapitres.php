<div class="about-page">
    <div class="container">
        <h2>Découvrez tous les chapitres</h2>
        <br>
        <figure class="figure">
        <img src="../public/img/alaska03.jpg">
        </figure>
        <br>



<?php foreach ($articlesList as $articleList): ?>
    <section class="blog-single">
        <div class="main-contant">
                        <div class="row">
                            <div class="col-sm-12">

    <a href="<?= "index.php?route=article&articleId=" . $articleList['id'] ?>">
            <?= $articleList['title'] ?></a>
<br>

                            </div></div></div>   </section>
<?php endforeach; ?>

</div></div>
