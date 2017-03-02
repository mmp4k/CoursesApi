<?php

namespace Component\Lesson\Marker;

use Component\Lesson\Model\Markable;

class QuestionMarker
{
    public function markQuestionAsRemembered(Markable $markable, int $retries)
    {
        $markable->setRetires($retries);
        $markable->isRemembered();

        return $markable;
    }
}
