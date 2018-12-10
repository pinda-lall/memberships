Feature: login
  In order to sign up
  As a new member
  I must enter a first name, last name, email, address, date of birth and contact number

  Scenario: I enter the membership details
  Given I am on "/localhost/memberships/login.php"
  When I click on the button Create a new member
  And I fill in "firstName" with "firstName"
  And I fill in "lastName" with "lastName"
  And I fill in "email" with "email"
  And I fill in "address" with "address"
  And I select a "date" from "date"
  And I fill in "number" with "number"
  And I choose "monthly" from "subscription"
  And I press "create"
  Then I should see a confirmation message saying "Membership created."
