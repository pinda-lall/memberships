<?php

namespace App\Models;

class GymMembers
{

    public $firstName;
    public $lastName;
    public $email;
    public $address;
    public $number;

    public function setFirstName($first_name)
    {
      $this->firstName = $first_name;
    }

    public function getFirstName()
    {
      return $this->firstName;
    }

    public function setLastName($last_name)
    {
      $this->lastName = $last_name;
    }

    public function getLastName()
    {
      return $this->lastName;
    }

    public function setEmail($email)
    {
      $this->email = $email;
    }

    public function getEmail()
    {
      return $this->email;
    }

    public function setAddress($address)
    {
      $this->address = $address;
    }

    public function getAddress()
    {
      return $this->address;
    }

    public function setNumber($number)
    {
      $this->number = $number;
    }

    public function getNumber()
    {
      return $this->number;
    }

    public function setSubscription($subscription)
    {
      $this->subscription = $subscription;
    }

    public function getSubscription()
    {
      return $this->subscription;
    }

    public function getFullName()
    {
      return $this->firstName . ' ' . $this->lastName;
    }
}
