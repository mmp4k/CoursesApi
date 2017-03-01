<?php

namespace spec\Component\Lesson\Marker;

use Component\Lesson\Marker\QuestionMarker;
use Component\Lesson\Model\Markable;
use PhpSpec\ObjectBehavior;

class QuestionMarkerSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(QuestionMarker::class);
    }

    function it_can_mark_question_as_remembered(Markable $markable)
    {
        $this->markQuestionAsRemembered($markable, 15);

        $markable->setRetires(15)->shouldHaveBeenCalled();
    }
}
