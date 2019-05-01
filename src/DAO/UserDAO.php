<?php

namespace App\src\DAO;

use App\config\Parameter;


class UserDAO extends DAO
{
    public function register(Parameter $post)
    {


        $sql = 'INSERT INTO users (pseudo, mail, password) VALUES (?, ?, ?)';

        $this->createQuery($sql, [$post->get('pseudo'), $post->get('mail'), $post->get('password')]);

    }

    public function logIn(Parameter $post)
    {

        $sql = 'SELECT id, password FROM users WHERE mail =:mail';
        $result = $this->createQuery($sql, ['mail' => $post->get('mail')]);


        // Verifies if the login is in the database
        $fetch = $result->fetch();
        $checkPassword = password_verify($post->get('password'), $fetch['password']);

        var_dump($checkPassword);
        return $checkPassword;
    }








    }
