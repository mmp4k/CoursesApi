<?php

namespace AppBundle\Command;

use AppBundle\Model\DTO\AddCourse;
use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class CreateCourseCommand extends ContainerAwareCommand
{
    /**
     * {@inheritdoc}
     */
    protected function configure()
    {
        $this
            ->setName('app:create-course');
    }

    /**
     * {@inheritdoc}
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $course = new AddCourse();
        $addedCourse = $this->getCourseCreator()->create($course);

        $output->writeln($addedCourse->getUuid());
    }

    private function getCourseCreator()
    {
        return $this->getContainer()->get('course_creator');
    }
}
