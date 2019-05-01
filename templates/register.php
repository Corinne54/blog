<form method="post" action="../public/index.php?route=register">
    <div class="fields">
        <div class="field">
            <label for="pseudo">pseudo(*)</label>
            <input type="text" id="pseudo" name="pseudo" autofocus required>
        </div>
        <div class="field">
            <label for="password">mot de passe(*)</label>
            <input type="password" id="password" name="password" required>
        </div>
        <div class="field">
            <label for="mail">mail(*)</label>
            <input type="email" id="mail" name="mail" required>
        </div>
    </div>
    <ul class="actions">
        <li><input type="submit" value="submit" id="submit" name="submit" /></li>
    </ul>
</form>