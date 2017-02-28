<?php

namespace spec\Component\Question\Creator;

use Component\Question\Creator\QuestionCreator;
use Component\Question\Model\AddQuestion;
use Component\Question\Model\AddQuestionInterface;
use Component\Question\Model\Question;
use Component\Question\Persist\PersistManagerInterface;
use PhpSpec\ObjectBehavior;

class QuestionCreatorSpec extends ObjectBehavior
{
    function it_is_initializable(PersistManagerInterface $manager)
    {
        $this->beConstructedWith($manager);
        $this->shouldHaveType(QuestionCreator::class);
    }

    function it_create_and_save_question(PersistManagerInterface $manager, AddQuestionInterface $question)
    {
        $question->beADoubleOf(AddQuestion::class);
        $question->beConstructedWith(['question', 'answer']);

        $this->beConstructedWith($manager);

        $createdQuestion = $this->createQuestion($question);
        $createdQuestion->shouldBeAnInstanceOf(Question::class);
        $createdQuestion->getUuid()->shouldBeString();
        $createdQuestion->getCreated()->shouldBeAnInstanceOf(\DateTime::class);

    }
}
