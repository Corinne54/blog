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


        $checkPassword = password_verify($post->get('password'), $fetch['password']);



            if ($checkPassword) {



                // Affiche la vue accueil administration
                 header('Location: ../public/index.php?route=adminHome');

            } // Sinon affiche un message d'erreur
            else {

                header('Location: ../public/index.php');
}
            }



  /*  public function login(Parameter $post){

        $sql = 'SELECT id, password,  FROM users WHERE pseudo =:pseudo';
        $result = $this->createQuery($sql, [$post->get('pseudo')]);
        $row = $result->fetch();

        // Verifies if the login is in the database
        if($row){
            $checkPassword = password_verify($post->get('password'), $row['password']);
            // And if the password typed is the right one
            if($checkPassword == true){

                //Charging the credentials of the session
                $_SESSION['id'] = $row['id'];
                $_SESSION['pseudo'] = $post->get('pseudo');


                // Regarding the status of the member, the redirection is different

                    header('Location: Location: ../public/index.php');

            } else {
                echo 'Mauvais identifiant ou mot de passe';
            }
        }

    }*/



    public function logout()
    {
        $_SESSION = array();
        session_destroy();

        // Suppression des cookies de connexion automatique
        setcookie('login', '');
        setcookie('pass_hache', '');
    }










    }
