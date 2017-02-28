<?php

namespace Component\Course\Appender;

use Component\Course\Model\Course;
use Component\Course\Model\CourseAppendable;

class CourseAppender
{
    public function appendToCourse(CourseAppendable $appendable, Course $course)
    {
        $appendable->appendToCourse($course);
    }
}
