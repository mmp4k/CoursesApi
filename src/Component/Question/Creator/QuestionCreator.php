<?php

namespace Component\Question\Creator;

use Component\Question\Model\AddQuestionInterface;
use Component\Question\Model\Question;
use Component\Question\Persist\PersistManagerInterface;
use Ramsey\Uuid\Uuid;

class QuestionCreator
{
    /**
     * @var PersistManagerInterface
     */
    protected $persistManager;

    /**
     * @param PersistManagerInterface $persistManager
     */
    public function __construct(PersistManagerInterface $persistManager)
    {
        $this->persistManager = $persistManager;
    }

    /**
     * @param AddQuestionInterface $addQuestion
     * @return Question
     */
    public function createQuestion(AddQuestionInterface $addQuestion)
    {
        $question = new Question(Uuid::uuid4());

        $this->persistManager->persist($question);

        return $question;
    }
}
