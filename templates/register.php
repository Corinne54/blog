<div align="center" >
<form method="post" action="../public/index.php?route=register">
    <div >
        <h3> Pour inscrire un nouvel administrateur, merci de choisir un pseudo et un mot de passe et de renseigner un e-mail :</h3>
        <div >
            <label for="pseudo">pseudo(*)</label>
            <br>
            <input type="text" id="pseudo" name="pseudo" autofocus required>
        </div>
        <div >
            <label for="password">mot de passe(*)</label>
            <br>
            <input type="password" id="password" name="password" required>
        </div>
        <div >
            <label for="mail">mail(*)</label>
            <br>
            <input type="email" id="mail" name="mail" required>
        </div>
    </div>
    <br>
    <div class="button">
        <button type="submit" value="submit" id="submit" name="submit" />VALIDER
    </div>
</form>
</div>