<?php

namespace App\src\DAO;

use App\config\Parameter;


class UserDAO extends DAO
{
    public function register(Parameter $post)
    {
        $pass_hache = password_hash($post->get('password'), PASSWORD_DEFAULT);

        $sql = 'INSERT INTO users (pseudo, mail, password) VALUES (?, ?, ?)';

        $this->createQuery($sql, [$post->get('pseudo'), $post->get('mail'), $pass_hache]);

    }

    public function logIn(Parameter $post)
    {

        $sql = 'SELECT id, password FROM users WHERE pseudo =:pseudo';
        $result = $this->createQuery($sql, ['pseudo' => $post->get('pseudo')]);


        // Verifies if the login is in the database
        $fetch = $result->fetch();


        $checkPassword = password_verify($_POST['password'], $fetch['password']);


        if (!$result) {
            echo 'Mauvais identifiant ou mot de passe !';
        } else {
            if ($checkPassword) {
                session_start();
                $_SESSION['id'] = $result['id'];
                $_SESSION['pseudo'] = $post->get('pseudo');

                // Affiche la vue accueil administration
                $this->adminHome();

            } // Sinon affiche un message d'erreur
            else {
                echo "Votre identifiant ou votre mot de passe est incorrect";
                header('Location: ../public/index.php');
            }
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
