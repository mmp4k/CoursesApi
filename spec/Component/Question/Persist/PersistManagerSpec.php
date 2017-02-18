<?php

namespace spec\Component\Question\Persist;

use Component\Question\Persist\PersistManager;
use Component\Question\Persist\PersistManagerInterface;
use PhpSpec\ObjectBehavior;

class PersistManagerSpec extends ObjectBehavior
{
    function it_is_initializable(PersistManagerInterface $persistMemoryManager)
    {
        $this->beConstructedWith($persistMemoryManager);
        $this->shouldHaveType(PersistManager::class);
    }
}
