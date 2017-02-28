<?php

namespace Component\Course\Persister;

use Component\Course\Model\Course;

interface CoursePersister
{
    public function persist(Course $course);
}
