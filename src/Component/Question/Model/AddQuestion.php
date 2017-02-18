<?php

namespace Component\Question\Model;

class AddQuestion implements AddQuestionInterface
{
    /**
     * @var string
     */
    protected $question;

    /**
     * @var string
     */
    protected $answer;

    /**
     * @param string $question
     * @param string $answer
     */
    public function __construct(string $question, string $answer)
    {
        $this->question = $question;
        $this->answer = $answer;
    }

    /**
     * @return string
     */
    public function getAnswer()
    {
        return $this->answer;
    }

    /**
     * @return string
     */
    public function getQuestion()
    {
        return $this->question;
    }
}
