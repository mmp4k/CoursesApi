<?php

namespace AppBundle\Persister;

use Component\Course\Model\Course;
use Doctrine\ORM\EntityManager;

class CoursePersister implements \Component\Course\Persister\CoursePersister
{
    /**
     * @var EntityManager
     */
    private $entityManager;

    public function __construct(EntityManager $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    public function persist(Course $course)
    {
        $this->entityManager->persist($course);
        $this->entityManager->flush($course);
    }

}