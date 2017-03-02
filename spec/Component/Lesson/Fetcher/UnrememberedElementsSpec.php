<?php

namespace spec\Component\Lesson\Fetcher;

use Component\Lesson\Fetcher\UnrememberedElements;
use Component\Lesson\Model\Lesson;
use Component\Lesson\Model\QuestionMarkable;
use PhpSpec\ObjectBehavior;

class UnrememberedElementsSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(UnrememberedElements::class);
    }

    function it_can_fetch_unremembered_elements(Lesson $lesson)
    {
        $lesson->getMarkableElements()->will(
            function () {
                $q1 = new QuestionMarkable();
                $q2 = new QuestionMarkable();
                $q2->isRemembered();
                $q3 = new QuestionMarkable();

                return [$q1, $q2, $q3];
            }
        );

        $questions = $this->fetchUnremembered($lesson);

        $questions->shouldBeArray();
        $questions->shouldHaveCount(2);
    }
}
