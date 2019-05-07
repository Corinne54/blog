<head><script src="https://cloud.tinymce.com/5/tinymce.min.js?apiKey=xmom5az6g2yph25sn5dkugrgc8zuw39iruzlavovza2pxbxh"></script>
<script>
    tinymce.init({
        selector: '#mytextarea'
    });
</script>
</head>
<div>
    <form method="post" action="../public/index.php?route=addArticle">
        <label for="title">Titre</label><br>
        <input type="text" id="title" name="title"><br>
        <label for="content">Contenu</label><br>
        <textarea id="mytextarea" name="content"></textarea><br>
        <label for="author">Auteur</label><br>
        <input type="text" id="author" name="author"><br>
        <input type="submit" value="Publier" id="submit" name="submit">
    </form>
    <a href="../public/index.php">Retour à l'accueil</a>
</div>