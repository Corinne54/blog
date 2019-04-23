
<div class="news">
    <h2><?= htmlspecialchars($article->getTitle());?></h2>
    <p><?= htmlspecialchars($article->getContent());?></p>
    <p><?= htmlspecialchars($article->getAuthor());?></p>
    <p>Créé le : <?= htmlspecialchars($article->getCreatedAt());?></p>
</div>
<br>

<div id="comments" class="comments" >
    <h3>Commentaires</h3>
    <?php
    foreach ($comments as $comment)
    {
        ?>
        <h3><?= htmlspecialchars($comment->getPseudo());?></h3>
        <p><?= htmlspecialchars($comment->getContent());?></p>
        <p>Posté le <?= htmlspecialchars($comment->getCreatedAt());?></p>
        <a href="../public/index.php?route=deleteComment&commentId=<?= htmlspecialchars($comment->getId());?>"class="button large">Supprimer le commentaire</a>
<p>
    <a href="../public/index.php?route=EditComment&commentId=<?= htmlspecialchars($comment->getId());?>">Modifier le commentaire</a></p>
        <?php
    }
    ?>

</div>
