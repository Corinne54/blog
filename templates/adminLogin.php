<form method="post" action="../public/index.php?route=logIn">
    <div class="fields">
        <div class="field">
            <label for="userName">pseudo(*)</label>
            <input type="text" id="userName" name="userName" autofocus required>
        </div>
        <div class="field">
            <label for="password">mot de passe(*)</label>
            <input type="password" id="password" name="password" required>
        </div>

    </div>
    <ul class="actions">
        <li><input type="submit" value="Connexion" id="submit" name="submit" /></li>
    </ul>
</form>