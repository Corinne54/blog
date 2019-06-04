
    <div class="support">
    <div class="container">
        <div class="col-sm-12">
            <figure class="figure">
                <img src="../public/img/alaska05.jpg" class="figure-img img-fluid">
            </figure>
        </div>



<div align="center" >
    <form method="post" action="../public/index.php?route=updatePassword">

        <h2> Choisissez votre nouveau mot de passe :</h2>
        <br>
        <div>
            <label for="pseudo">pseudo(*)</label>
            <br>
            <input type="text" class="form-control" id="pseudo" name="pseudo" value="<?= $_SESSION['pseudo']; ?>" >


            <label for="password">mot de passe(*)</label>
            <br>
            <input type="password" class="form-control"  id="password" name="password" ">


    </div>
    <br>
    <div class="button">
        <button type="submit" value="submit" id="submit" name="submit" class="btn btn-primary px-4" />VALIDER
    </div>
</form>

    </div>
    </div>
