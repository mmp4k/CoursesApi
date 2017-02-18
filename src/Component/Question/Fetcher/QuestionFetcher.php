<?php

namespace Component\Question\Fetcher;

use Component\Question\Model\Question;

class QuestionFetcher implements QuestionFetcherInterface
{
    /**
     * @var QuestionFetcherInterface
     */
    protected $fetcher;

    /**
     * @param QuestionFetcherInterface $fetcher
     */
    public function __construct(QuestionFetcherInterface $fetcher)
    {
        $this->fetcher = $fetcher;
    }

    /**
     * @inheritdoc
     */
    public function getQuestion(string $uuid): Question
    {
        return $this->fetcher->getQuestion($uuid);
    }
}
