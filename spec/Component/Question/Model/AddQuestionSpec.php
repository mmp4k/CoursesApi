<?php

namespace spec\Component\Question\Model;

use Component\Question\Model\AddQuestion;
use PhpSpec\ObjectBehavior;

class AddQuestionSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->beConstructedWith('question', 'some answer');
        $this->shouldHaveType(AddQuestion::class);
        $this->getQuestion()->shouldReturn('question');
        $this->getAnswer()->shouldReturn('some answer');
    }
}
