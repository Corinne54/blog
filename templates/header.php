


<?= $this->session->show('add_article'); ?>


<?php if (empty($_SESSION['id'])) { ?>
    <header class="header">
    <a class="menuTitle"><a href="../public/index.php"> <h1> Billet simple pour l'Alaska - Le blog de Jean Forteroche</h1></a>
    </header>
     <a href="../public/index.php?route=logIn"><i class="fas fa-user-edit"></i> Se connecter</a>


    <!-- Sinon affiche l'utilisateur et le lien de deconnexion -->
<?php } else { ?>
    <header class="header-admin">
        <h1> <a href="../public/index.php"> <h1> Billet simple pour l'Alaska </a></h1>
       <p>  Menu d'administration
    </header>
    <a href="../public/index.php?route=adminHome"> <i class="fa fa-home"></i>"Accueil Admninistration</a>
    <a href="../public/index.php?route=register"><i class="fas fa-caret-square-right"></i> Inscrire un nouvel administrateur</a>
     <a href="../public/index.php?route=logout"> <i class="fas fa-sign-out-alt"></i>Se déconnecter</a>



<?php } ?>