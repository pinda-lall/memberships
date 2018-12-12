<?php

class RegisterTest extends \PHPUnit_Framework_TestCase
{

  protected $user;

  public function setUp()
  {
    $this->user = new \App\Models\GymMembers;
  }

  public function testThatWeCanGetFirstName()
  {
    $this->user->setFirstName('Rupinder');
    $this->assertEquals($this->user->getFirstName(), 'Rupinder');
  }

  public function testThatWeCanGetLastName()
  {
    $this->user->setLastName('Lall');
    $this->assertEquals($this->user->getLastName(), 'Lall');
  }

  public function testThatWeGetFullName()
  {
    $this->user->setLastName('Lall');
    $this->user->setFirstName('Rupinder');
    $this->assertEquals($this->user->getFullName(), 'Rupinder Lall');
  }

  public function testThatWeCanGetEmail()
  {
    $this->user->setEmail('rupinder.lall@outlook.com');
    $this->assertEquals($this->user->getEmail(), 'rupinder.lall@outlook.com');
  }

  public function testThatWeCanGetAddress()
  {
    $this->user->setAddress('55 Ribbesford Avenue');
    $this->assertEquals($this->user->getAddress(), '55 Ribbesford Avenue');
  }

  public function testThatWeCanGetNumber()
  {
    $this->user->setNumber('07895924431');
    $this->assertEquals($this->user->getNumber(), '07895924431');
  }

  public function testThatWeCanGetSubscription()
  {
    $this->user->setSubscription('monthly');
    $this->assertEquals($this->user->getSubscription(), 'monthly');
  }


}
