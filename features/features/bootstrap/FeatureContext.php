<?php

use Behat\Behat\Tester\Exception\PendingException;
use Behat\Behat\Context\Context;
use Behat\Behat\Context\SnippetAcceptingContext;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;
use Behat\MinkExtension\Context\MinkContext;

/**
 * Defines application features from the specific context.
 */
class FeatureContext extends MinkContext implements Context, SnippetAcceptingContext
{

  /**
 * Initializes context.
 */
public function __construct()
{
}
  /**
 * @Given I am on :arg1
 */
  public function iAmOn($arg1)
  {
      // $this->visitPath("/localhost/memberships/login.php");
            throw new PendingException();
  }

  /**
   * @When I enter :arg1 as username
   */
  public function iEnterAsUsername($arg1)
  {
      // $this->getSession()->getPage()->fillField('user', 'admin');
            throw new PendingException();
  }

  /**
   * @When I enter :arg1 as password
   */
  public function iEnterAsPassword($arg1)
  {
      // $this->getSession()->getPage()->fillField('password', 'admin');
            throw new PendingException();
  }

  /**
 * @When I press the Login button
 */
  public function iPressTheLoginButton()
  {
      // $this->getSession()->getPage()->find('css', 'btn-primary');
            throw new PendingException();
  }

  /**
   * @Then I should be redirected to :arg1
   */
  public function iShouldBeRedirectedTo($arg1)
  {
      // $this->visitPath("/localhost/memberships/index.php");
            throw new PendingException();
  }

  /**
   * @When I enter a :arg1 in the first name field
   */
  public function iEnterAInTheFirstNameField($arg1)
  {
      throw new PendingException();
  }

  /**
   * @When I enter a :arg1 in the last name field
   */
  public function iEnterAInTheLastNameField($arg1)
  {
      throw new PendingException();
  }

  /**
   * @When I enter a :arg1 in the email field
   */
  public function iEnterAInTheEmailField($arg1)
  {
      throw new PendingException();
  }

  /**
   * @When I enter a :arg1 in the address field
   */
  public function iEnterAInTheAddressField($arg1)
  {
      throw new PendingException();
  }

  /**
   * @When I enter a :arg1 in first name
   */
  public function iEnterAInFirstName($arg1)
  {
      throw new PendingException();
  }

  /**
   * @When I select a :arg1 from the date field
   */
  public function iSelectAFromTheDateField($arg1)
  {
      throw new PendingException();
  }

  /**
   * @When I enter a :arg1 in the contact number field
   */
  public function iEnterAInTheContactNumberField($arg1)
  {
      throw new PendingException();
  }

  /**
   * @When I choose :arg1 from the radio buttons
   */
  public function iChooseFromTheRadioButtons($arg1)
  {
      throw new PendingException();
  }

  /**
   * @Then I should see a confirmation message saying :arg1
   */
  public function iShouldSeeAConfirmationMessageSaying($arg1)
  {
      throw new PendingException();
  }

  /**
  * @When I click on the edit button
  */
 public function iClickOnTheEditButton()
 {
     throw new PendingException();
 }

 /**
  * @When I enter :arg1 in the username field
  */
 public function iEnterInTheUsernameField($arg1)
 {
     throw new PendingException();
 }

 /**
  * @When I press the save button
  */
 public function iPressTheSaveButton()
 {
     throw new PendingException();
 }

 /**
 * @When I click on the button Create a new member
 */
  public function iClickOnTheButtonCreateANewMember()
  {
      throw new PendingException();
  }

    /**
   * @When I click on the logout button
   */
  public function iClickOnTheLogoutButton()
  {
      throw new PendingException();
  }

  /**
 * @When I click :arg1
 */
public function iClick($arg1)
{
    throw new PendingException();
}

/**
 * @When I select a :arg1 from :arg2
 */
public function iSelectAFrom($arg1, $arg2)
{
    throw new PendingException();
}

/**
 * @When I choose :arg1 from :arg2
 */
public function iChooseFrom($arg1, $arg2)
{
    throw new PendingException();
}

}
