<?php

namespace Component\Question\Remover;

use Component\Question\Model\Question;

class QuestionRemover implements QuestionRemoverInterface
{
    /**
     * @var QuestionRemoverInterface
     */
    protected $questionRemover;

    /**
     * @param QuestionRemoverInterface $questionRemover
     */
    public function __construct(QuestionRemoverInterface $questionRemover)
    {
        $this->questionRemover = $questionRemover;
    }

    /**
     * @inheritdoc
     */
    public function remove(Question $question)
    {
        $question->remove();

        $this->questionRemover->remove($question);
    }


}
