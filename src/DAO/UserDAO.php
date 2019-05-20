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

                $_SESSION['id'] = $fetch['id'];
                $_SESSION['pseudo'] = $post->get('pseudo');

                // Affiche la vue accueil administration
                 header('Location: ../public/index.php?route=adminHome');

            }
            else {

                header('Location: ../public/index.php?route=logIn');
}
            }




    public function logout()
    {
        $_SESSION = array();
        session_destroy();

        // Suppression des cookies de connexion automatique
        setcookie('pseudo', '');
        setcookie('pass_hache', '');
    }










    }
