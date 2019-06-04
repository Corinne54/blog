<head>

    <script type="text/javascript" src="../public/tinymce/js/tinymce/tinymce.js"></script>
    <script type="text/javascript">
        tinyMCE.init({
            mode : "textareas"
        });
    </script></head>
<div class="support">
    <div class="container">
        <div class="col-sm-12">
            <h2> Ecrire un nouveau chapitre</h2>
            <br>
    <form method="post" action="../public/index.php?route=addArticle" enctype="multipart/form-data" >
        <label for="title" >Titre</label><br>
        <input type="text" id="title" name="title" class="form-control"><br>

        <label for="content" >Contenu</label><br>
        <textarea id="mytextarea" name="content" class="form-control"></textarea><br>

        <label for="picture" >Image</label><br>
                <input type="file" id="picture" name="picture" class="form-control"><br>

        <label for="author" >Auteur</label><br>
        <input type="text" id="author" name="author"class="form-control"><br>
        <input type="submit" value="Publier" id="submit" name="submit" class="btn btn-primary px-4" >
    </form>

</div>
    </div></div>