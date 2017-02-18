<?php

namespace spec\Component\Question\Fetcher;

use Component\Question\Fetcher\QuestionFetcher;
use Component\Question\Fetcher\QuestionFetcherInterface;
use Component\Question\Fetcher\QuestionFetcherMemory;
use Component\Question\Model\Question;
use PhpSpec\ObjectBehavior;

class QuestionFetcherSpec extends ObjectBehavior
{
    function it_is_initializable(QuestionFetcherInterface $fetcher)
    {
        $this->beConstructedWith($fetcher);
        $this->shouldHaveType(QuestionFetcher::class);
    }

    function it_can_fetch_question(QuestionFetcherMemory $fetcherMemory)
    {
        $fetcherMemory->getQuestion('some-uuid')->will(
            function ($args) {
                return new Question($args[0]);
            }
        );
        $this->beConstructedWith($fetcherMemory);
        $this->shouldHaveType(QuestionFetcher::class);

        $this->getQuestion('some-uuid')->shouldBeAnInstanceOf(Question::class);
    }
}
