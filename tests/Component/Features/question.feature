Feature: Questions
  In order to manage questions
  As an user
  I want to give user possibility to add, remove and fetch questions

  Scenario: Creating question
    Given there is question "Some question." with answer "some answer"
    When I create question
    Then I should get UUID of question

  Scenario: Removing question
    Given there is question UUID "some-uuid"
    When I remove question
    Then I should get question marked as deleted

  Scenario: Fetching question
    Given there is question UUID "some-uuid"
    When I fetch question
    Then I should get question