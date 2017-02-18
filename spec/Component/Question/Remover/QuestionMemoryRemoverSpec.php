<?php

namespace spec\Component\Question\Remover;

use Component\Question\Remover\QuestionMemoryRemover;
use PhpSpec\ObjectBehavior;

class QuestionMemoryRemoverSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(QuestionMemoryRemover::class);
    }
}
