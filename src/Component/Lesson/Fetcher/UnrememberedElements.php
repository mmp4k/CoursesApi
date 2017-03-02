<?php

namespace Component\Lesson\Fetcher;

use Component\Lesson\Model\Lesson;

class UnrememberedElements
{
    public function fetchUnremembered(Lesson $lesson)
    {
        $questions = [];

        foreach ($lesson->getMarkableElements() as $element) {
            if ($element->remembered()) {
                continue;
            }

            $questions[] = $questions;
        }

        return $questions;
    }
}
