<?php

namespace spec\Component\Lesson\Generator;

use Component\Lesson\Generator\LessonGenerator;
use Component\Lesson\Model\Lesson;
use Component\Lesson\Model\Markable;
use PhpSpec\ObjectBehavior;

class LessonGeneratorSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(LessonGenerator::class);
    }

    function it_can_generate_lesson(Markable $question1, Markable $question2, Markable $question3)
    {
        $setsOfQuestions = [$question1, $question2, $question3];

        $lesson = $this->generateLesson($setsOfQuestions);

        $lesson->getMarkableElements()->shouldBeArray();
        $lesson->shouldBeAnInstanceOf(Lesson::class);
    }
}
