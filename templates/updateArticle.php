<div class="support">
    <div class="container">
        <div class="col-sm-12">
            <h2>Modifier le chapitre</h2>
            <br>
<form method="post" action="../public/index.php?route=updateArticle">
     <label for="title">Titre</label><br>
    <input class="form-control" type="text" id="title" name="title" value="<?= $article->getTitle();?>"><br>
    <label for="content">Contenu</label><br>
    <textarea class="form-control" id="content" name="content" ><?= $article->getContent();?>
          </textarea><br>
<input type="hidden" name="id" value="<?=htmlspecialchars($article->getId());?> ">
    <input type="submit" value="Mettre a jour" id="submit" name="submit" class="btn btn-primary px-4">

</form>
    </div>
</div>
</div>