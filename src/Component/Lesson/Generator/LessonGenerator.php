<?php

namespace Component\Lesson\Generator;

use Component\Lesson\Model\Lesson;
use Component\Lesson\Model\Markable;

class LessonGenerator
{
    /**
     * @param Markable[] $questions
     * @return Lesson
     */
    public function generateLesson(array $questions)
    {
        $lesson = new Lesson();
        $lesson->setMarkableElements($questions);

        return $lesson;
    }
}
