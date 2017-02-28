<?php

namespace spec\Component\Course\Creator;

use Component\Course\Creator\CourseCreator;
use Component\Course\Model\DTO\AddCourse;
use Component\Course\Persister\CoursePersister;
use PhpSpec\ObjectBehavior;

class CourseCreatorSpec extends ObjectBehavior
{
    function it_is_initializable(CoursePersister $persister)
    {
        $this->beConstructedWith($persister);
        $this->shouldHaveType(CourseCreator::class);
    }

    function it_can_be_created(AddCourse $course, CoursePersister $persister)
    {
        $this->beConstructedWith($persister);
        $question = $this->create($course);

        $question->getUuid()->shouldBeString();
    }
}
