<?php

namespace Tests\Component\Features\Context;

use Behat\Behat\Context\Context;
use Component\Question\Creator\QuestionCreator;
use Component\Question\Fetcher\QuestionFetcher;
use Component\Question\Fetcher\QuestionFetcherMemory;
use Component\Question\Model\AddQuestion;
use Component\Question\Model\Question;
use Component\Question\Persist\PersistManager;
use Component\Question\Persist\PersistMemoryManager;
use Component\Question\Remover\QuestionMemoryRemover;
use Component\Question\Remover\QuestionRemover;

class QuestionContext implements Context
{
    /**
     * @var AddQuestion
     */
    protected $question;

    /**
     * @var Question
     */
    protected $createdQuestion;

    /**
     * @var string
     */
    protected $uuid;

    /**
     * @When I create question
     */
    public function iCreateQuestion()
    {
        $manager = new QuestionCreator(new PersistManager(new PersistMemoryManager()));
        $this->createdQuestion = $manager->createQuestion($this->question);
    }

    /**
     * @Then I should get UUID of question
     */
    public function iShouldGetUuidOfQuestion()
    {
        if (!$this->createdQuestion->getUuid()) {
            throw new \Exception("Question has not uuid.");
        }
    }

    /**
     * @Given there is question UUID :uuid
     */
    public function thereIsQuestionUuid($uuid)
    {
        $this->uuid = $uuid;
    }

    /**
     * @When I remove question
     */
    public function iRemoveQuestion()
    {
        $manager = new QuestionFetcher(new QuestionFetcherMemory());

        $this->createdQuestion = $manager->getQuestion($this->uuid);

        $removed = new QuestionRemover(new QuestionMemoryRemover());

        $removed->remove($this->createdQuestion);
    }

    /**
     * @Then I should get question marked as deleted
     */
    public function iShouldGetQuestionMarkedAsDeleted()
    {
        if (!$this->createdQuestion->isRemoved()) {
            throw new \Exception("Question has not been removed.");
        }
    }

    /**
     * @Given /^there is question "([^"]*)" with answer "([^"]*)"$/
     */
    public function thereIsQuestionWithAnswer(string $question, string $answer)
    {
        $this->question = new AddQuestion($question, $answer);
    }

    /**
     * @When /^I fetch question$/
     */
    public function iFetchQuestion()
    {
        $manager = new QuestionFetcher(new QuestionFetcherMemory());

        $this->createdQuestion = $manager->getQuestion($this->uuid);

    }

    /**
     * @Then /^I should get question$/
     */
    public function iShouldGetQuestion()
    {
        if (!$this->createdQuestion instanceof Question) {
            throw new \Exception("Fetch can't find the question.");
        }
    }
}
