<?php $this->title = "Page de connexion"; ?>

        <h3>Connexion</h3>

<form class="formConnexion" action="../public/index.php?route=admin_login" method="post">

            <label for="email">Votre e-mail : </label>
            <input type="text" name="email" id="email">

            <label for="password">Mot de passe : </label>
            <input type="password" name="password" id="password">
        </div>
        <div class="textButton">
            <input class="buttonLogin" type="submit" value="Se connecter">
        </div>
    </form>



        <h3>Message d'erreur</h3>


        <p><?= $message ?></p>
