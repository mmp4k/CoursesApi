<?php

namespace spec\Component\Question\Fetcher;

use Component\Question\Fetcher\QuestionFetcherMemory;
use PhpSpec\ObjectBehavior;

class QuestionFetcherMemorySpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(QuestionFetcherMemory::class);
    }
}
