Feature: admin
  In order to edit a member on the database
  As a admin
  I must click on the edit button

  Scenario: I update a existing members details on the database
  Given I am on "/localhost/memberships/index.php"
  When I click "Edit"
  And I enter "name updated" in the username field
  And I press the save button
  Then I should see a confirmation message saying "Membership updated."

  Scenario: I created a new member as a admin
  Given I am on "/localhost/memberships/index.php"
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

  Scenario: I logout as a admin
  Given I am on "/localhost/memberships/index.php"
  When I click "logout"
  Then I should be redirected to "/localhost/memberships/login.php"
