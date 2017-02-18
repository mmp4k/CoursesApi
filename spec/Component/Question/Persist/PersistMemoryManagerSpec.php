<?php

namespace spec\Component\Question\Persist;

use Component\Question\Persist\PersistMemoryManager;
use PhpSpec\ObjectBehavior;

class PersistMemoryManagerSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(PersistMemoryManager::class);
    }
}
