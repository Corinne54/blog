<?php $this->title = "Article"; ?>
<h1>Mon blog</h1>
<p>En construction</p>
<div>
    <h2><?= htmlspecialchars($article->getTitle());?></h2>
    <p><?= htmlspecialchars($article->getContent());?></p>
    <p><?= htmlspecialchars($article->getAuthor());?></p>
    <p>Créé le : <?= htmlspecialchars($article->getCreatedAt());?></p>
</div>
<br>
<a href="../public/index.php">Retour à l'accueil</a>
<div id="comments" class="text-left" style="margin-left: 50px">
    <h3>Commentaires</h3>
    <?php
    foreach ($comments as $comment)
    {
        ?>
        <h4><?= htmlspecialchars($comment->getPseudo());?></h4>
        <p><?= htmlspecialchars($comment->getContent());?></p>
        <p>Posté le <?= htmlspecialchars($comment->getCreatedAt());?></p>
        <?php
    }
    ?>
</div>

<h2>Ajouter un Commentaire</h2>

<form action="../public/index.php?route=postComment&idArt=<?= htmlspecialchars($article->getId()); ?>" method="post" class="form">
    <div class="formPseudo">
        <label for="pseudo">Votre pseudo</label>
        <input type="text" name="pseudo" id="pseudo" required value="<?php
        if(isset($post['pseudo'])) {
            echo filter_var($post['pseudo'], FILTER_SANITIZE_STRING);
        }
        ?>">
    </div>
    <div class="formContent">
        <label for="content">Votre commentaire</label>
        <br>
        <textarea id="content" name="content"><?php
            if (isset($post['content'])) {
                echo filter_var($post['content'], FILTER_SANITIZE_STRING);
            }
            ?></textarea>
    </div>
    <div class="formSubmit">
        <input type="submit" id="submit" class="buttonSubmit" name="submit" value="Envoyer">
    </div>
</form>