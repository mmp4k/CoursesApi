<?php

namespace Component\Course\Creator;

use Component\Course\Model\Course;
use Component\Course\Model\DTO\AddCourse;
use Component\Course\Model\DTO\CreateCourse;
use Component\Course\Persister\CoursePersister;
use Ramsey\Uuid\Uuid;

class CourseCreator
{
    private $persister;

    public function __construct(CoursePersister $persister)
    {
        $this->persister = $persister;
    }

    public function create(AddCourse $addCourse)
    {
        $course = new Course(Uuid::uuid4());

        $this->persister->persist($course);

        return $course;
    }
}
