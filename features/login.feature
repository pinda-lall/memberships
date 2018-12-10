Feature: login
  In order to login and view list of members
  As a admin
  I must enter the correct username and password

  Scenario: I enter the correct login details
  Given I am on "http://localhost/memberships/login.php"
  When I fill in "user" with "admin"
  And I fill in "password" with "admin"
  And I press "Login"
  Then I should be redirected to "/localhost/memberships/index.php"
