
<div class="news">
    <h2><?= htmlspecialchars($article->getTitle());?></h2>
    <p><?= htmlspecialchars($article->getContent());?></p>
    <p><?= htmlspecialchars($article->getAuthor());?></p>
    <p>Créé le : <?= htmlspecialchars($article->getCreatedAt());?></p>
</div>

<div id="comments" class="comments" >
    <h2> <i class="fa fa-comments"></i> Commentaires</h2>
    <?php
    foreach ($comments as $comment)
    {
        ?>
        <h5><?= htmlspecialchars($comment->getPseudo());?></h5>
        <p><?= htmlspecialchars($comment->getContent());?></p>
        <p>Posté le <?= htmlspecialchars($comment->getCreatedAt());?></p>
        <?php
    }
    ?>

<div >


<form action="../public/index.php?route=postComment&idArt=<?= htmlspecialchars($article->getId()); ?>" method="post" class="form">
    <div>
        <h3>Ajouter un Commentaire</h3>
        <label for="pseudo">Votre pseudo</label>
        <input type="text" name="pseudo" id="pseudo" required value="<?php
        if(isset($post['pseudo'])) {
            echo filter_var($post['pseudo'], FILTER_SANITIZE_STRING);
        }
        ?>">
    </div>
    <div >
        <label for="content">Votre commentaire</label>
        <br>
        <textarea id="content" name="content"><?php
            if (isset($post['content'])) {
                echo filter_var($post['content'], FILTER_SANITIZE_STRING);
            }
            ?></textarea>
    </div>
    <div >
        <input type="submit" id="submit" class="buttonSubmit" name="submit" value="Envoyer">
    </div></div>
</form>
    <br>
    <a href="../public/index.php">Retour à l'accueil</a>
</div>