<?php

namespace Component\Question\Remover;

use Component\Question\Model\Question;

interface QuestionRemoverInterface
{
    /**
     * @param Question $question
     * @return void
     */
    public function remove(Question $question);
}