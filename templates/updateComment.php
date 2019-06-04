<div class="support">
<div class="container">
    <div class="col-sm-12">
<form method="post" action="../public/index.php?route=updateComment">
    <label for="title">Titre</label><br>
    <input type="text" id="pseudo" name="pseudo" value="<?= $comment->getPseudo();?>"><br>
    <label for="content">Contenu</label><br>
    <textarea id="content" name="content" ><?= $comment->getContent();?>
          </textarea><br>
<input type="hidden" name="id" value="<?=htmlspecialchars($comment->getId());?> ">
    <input type="submit" value="Mettre a jour" id="submit" name="submit"class="btn btn-primary px-4">

</form>
    </div></div></div>