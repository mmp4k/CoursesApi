<?php

namespace Component\Question\Persist;

use Component\Question\Model\Question;

class PersistManager implements PersistManagerInterface
{
    /**
     * @var PersistManagerInterface
     */
    protected $persistManager;

    /**
     * @param PersistManagerInterface $persistManager
     */
    public function __construct(PersistManagerInterface $persistManager)
    {
        $this->persistManager = $persistManager;
    }

    /**
     * @inheritdoc
     */
    public function persist(Question $question)
    {
        $this->persistManager->persist($question);
    }


}
