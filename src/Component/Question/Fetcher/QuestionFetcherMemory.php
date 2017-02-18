<?php

namespace Component\Question\Fetcher;

use Component\Question\Model\Question;

class QuestionFetcherMemory implements QuestionFetcherInterface
{
    /**
     * @inheritdoc
     */
    public function getQuestion(string $uuid): Question
    {
        return new Question($uuid);
    }
}
