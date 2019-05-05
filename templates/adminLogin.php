<?= $this->session->show('erreur'); ?>

<div align="center" >
    <form method="post" action="../public/index.php?route=logIn">
    <div align="center" >
        <h3> Pour vous connecter, merci de renseigner votre pseudo et votre mot de passe :</h3>
        <div >
            <label for="pseudo">pseudo(*)</label>
            <br>
            <input type="text" id="pseudo" name="pseudo" autofocus required>
        </div>
        <div class="field">
            <label for="password">mot de passe(*)</label>
            <br>
            <input type="password" id="password" name="password" required>
        </div>

    </div>
    <br>
    <div class="button">
        <button type="submit" value="submit" id="submit" name="submit" />VALIDER
    </div>
</form>

