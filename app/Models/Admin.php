<?php

namespace App\Models;

class Admin
{
    public $username;
    public $password;

    public function setUsername($user_name)
    {
      $this->username = $user_name;
    }

    public function getUsername()
    {
      return $this->username;
    }

    public function setPassword($pass_word)
    {
      $this->password = $pass_word;
    }

    public function getPassword()
    {
      return $this->password;
    }
}
