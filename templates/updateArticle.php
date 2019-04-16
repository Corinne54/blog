<form method="post" action="../public/index.php?route=updateArticle">
    <label for="title">Titre</label><br>
    <input type="text" id="title" name="title" value="<?=htmlspecialchars($article->getTitle());?>"><br>
    <label for="content">Contenu</label><br>
    <textarea id="content" name="content"><?= $article->getContent();?>
          </textarea><br>

    <input type="submit" value="Mettre a jour" id="submit" name="submit">
</form>
