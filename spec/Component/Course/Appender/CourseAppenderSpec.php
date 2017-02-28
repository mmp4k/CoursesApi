<?php

namespace spec\Component\Course\Appender;

use Component\Course\Appender\CourseAppender;
use Component\Course\Model\Course;
use Component\Course\Model\CourseAppendable;
use PhpSpec\ObjectBehavior;

class CourseAppenderSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(CourseAppender::class);
    }

    function it_is_appendable(CourseAppendable $appendable, Course $course)
    {
        $this->appendToCourse($appendable, $course);

        $appendable->appendToCourse($course)->shouldHaveBeenCalled();
    }
}
