<?php

namespace Component\Question\Persist;

use Component\Question\Model\Question;

class PersistMemoryManager implements PersistManagerInterface
{
    /**
     * @inheritdoc
     */
    public function persist(Question $question)
    {
    }

}
