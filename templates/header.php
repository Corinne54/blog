


<?= $this->session->show('add_article'); ?>

<!--
<?php if (empty($_SESSION['id'])) { ?>
    <header class="header">
    <a class="menuTitle"><a href="../public/index.php"> <h1> Billet simple pour l'Alaska - Le blog de Jean Forteroche</h1></a>
    </header>
     <a href="../public/index.php?route=logIn"><i class="fas fa-user-edit"></i> Se connecter</a>


     Sinon affiche l'utilisateur et le lien de deconnexion
<?php } else { ?>
    <header class="header-admin">
        <h1> <a href="../public/index.php"> <h1> Billet simple pour l'Alaska </a></h1>
       <p>  Menu d'administration
    </header>
    <a href="../public/index.php?route=adminHome"> <i class="fa fa-home"></i>"Accueil Admninistration</a>
    <a href="../public/index.php?route=register"><i class="fas fa-caret-square-right"></i> Inscrire un nouvel administrateur</a>
     <a href="../public/index.php?route=logout"> <i class="fas fa-sign-out-alt"></i>Se déconnecter</a>



<?php } ?>
-->


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
                    <a class="nav-link" href="contact.html">contact </a>
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
            <a class="navbar-brand" href="index.html">
                <img src="images/nav-logo.png" alt="Menu d'administration">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-4" aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="../public/index.php?route=adminHome">Accueil Admninistration <span class="sr-only">(current)</span></a>
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
