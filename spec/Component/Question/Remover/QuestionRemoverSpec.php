<?php

namespace spec\Component\Remover;

use Component\Remover\QuestionMemoryRemover;
use Component\Remover\QuestionRemover;
use PhpSpec\ObjectBehavior;

class QuestionRemoverSpec extends ObjectBehavior
{
    function it_is_initializable(QuestionMemoryRemover $memoryRemover)
    {
        $this->beConstructedWith($memoryRemover);
        $this->shouldHaveType(QuestionRemover::class);
    }
}
