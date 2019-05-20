<?= $this->session->show('erreur'); ?>
    <div class="support">
    <div class="container">
        <div class="col-sm-12">
            <figure class="figure">
                <img src="../public/img/alaska05.jpg" class="figure-img img-fluid">
            </figure>
        </div>
<div align="center" >
    <form method="post" action="../public/index.php?route=logIn">
    <div align="center" >
        <h2> Pour vous connecter, <br>merci de renseigner votre pseudo et votre mot de passe :</h2>
        <br>
        <div >
            <label for="pseudo">pseudo(*)</label>
            <br>
            <input type="text" class="form-control" id="pseudo" name="pseudo" autofocus required>
        </div>
        <div class="field">
            <label for="password">mot de passe(*)</label>
            <br>
            <input type="password"class="form-control"  id="password" name="password" required>
        </div>

    </div>
    <br>
    <div class="button">
        <button type="submit" value="submit" id="submit" name="submit" class="btn btn-primary px-4" />VALIDER
    </div>
</form>
</div>
    </div>
    </div>
