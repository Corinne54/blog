





<!--Navbar -->
<?php if (empty($_SESSION['id'])) { ?>
<nav class="navbar navbar-expand-lg navbar-dark cyan fixed-top">
    <div class="container">
        <a class="navbar-brand" href="../public/index.php">
            <img src="images/nav-logo.png" alt="Jean Forteroche">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-4" aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="../public/index.php">Accueil <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../public/index.php?route=quisuisje">Qui suis-je?</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="../public/index.php?route=leschapitres">Tous les chapitres </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="../public/index.php?route=logIn">se connecter </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<?php } else { ?>

    <nav class="navbar navbar-expand-lg navbar-dark cyan fixed-top">
        <div class="container">
            <a class="navbar-brand" href="../public/index.php?route=adminHome">
                <img src="images/nav-logo.png" alt="Menu d'administration">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-4" aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="../public/index.php?route=adminHome">Accueil Administration <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../public/index.php?route=register">Inscrire un nouvel administrateur</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="../public/index.php?route=logout">Se déconnecter </a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>



<?php } ?>

<!--/.Navbar -->
