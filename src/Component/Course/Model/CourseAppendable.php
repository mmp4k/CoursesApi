<?php

namespace Component\Course\Model;

interface CourseAppendable
{
    public function appendToCourse(Course $course);

    /**
     * @return Course[]
     */
    public function getCourses();
}
