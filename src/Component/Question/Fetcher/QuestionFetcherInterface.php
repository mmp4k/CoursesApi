<?php

namespace Component\Question\Fetcher;

use Component\Question\Model\Question;

interface QuestionFetcherInterface
{
    /**
     * @param string $uuid
     * @return Question
     */
    public function getQuestion(string $uuid): Question;
}