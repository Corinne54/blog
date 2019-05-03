<?php

namespace App\src\DAO;

use App\config\Parameter;


class UserDAO extends DAO
{
    public function register(Parameter $post)
    {
        $pass_hache = password_hash($post->get('password'), PASSWORD_DEFAULT);

        $sql = 'INSERT INTO user (pseudo, mail, password) VALUES (?, ?, ?)';

        $this->createQuery($sql, [$post->get('pseudo'), $post->get('mail'), $pass_hache]);

    }

    public function logIn(Parameter $post)
    {

        $sql = 'SELECT id, password FROM user WHERE pseudo =:pseudo';
        $result = $this->createQuery($sql, ['pseudo' => $post->get('pseudo')]);


        // Verifies if the login is in the database
        $fetch = $result->fetch();


        $checkPassword = password_verify($post->get('password'), $fetch['password']);



            if ($checkPassword) {



                // Affiche la vue accueil administration
                 header('Location: ../public/index.php?route=adminHome');

            } // Sinon affiche un message d'erreur
            else {

                header('Location: ../public/index.php');
}
            }




    public function logout()
    {
        $_SESSION = array();
        session_destroy();

        // Suppression des cookies de connexion automatique
        setcookie('login', '');
        setcookie('pass_hache', '');
    }










    }
