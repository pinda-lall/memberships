<?php

class LoginTest extends \PHPUnit_Framework_TestCase
{
  protected $user;

  public function setUp()
  {
    $this->user = new \App\Models\Admin;
  }

  public function testThatWeCanGetUserName()
  {
    $this->user->setUsername('admin');
    $this->assertEquals($this->user->getUsername(), 'admin');
  }

  public function testThatWeCanGetPassword()
  {
    $this->user->setPassword('admin');
    $this->assertEquals($this->user->getPassword(), 'admin');
  }
}
