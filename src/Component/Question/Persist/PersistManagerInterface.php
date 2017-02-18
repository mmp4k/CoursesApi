<?php

namespace Component\Question\Persist;

use Component\Question\Model\Question;

interface PersistManagerInterface
{
    /**
     * @param Question $question
     * @return void
     */
    public function persist(Question $question);
}