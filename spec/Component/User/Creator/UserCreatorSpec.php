<?php

namespace spec\Component\User\Creator;

use Component\User\Creator\UserCreator;
use Component\User\Model\DTO\AddUser;
use Component\User\Persister\UserPersister;
use PhpSpec\ObjectBehavior;

class UserCreatorSpec extends ObjectBehavior
{
    function it_is_initializable($persister)
    {
        $persister->beADoubleOf(UserPersister::class);

        $this->beConstructedWith($persister);
        $this->shouldHaveType(UserCreator::class);
    }

    function it_can_create_user(AddUser $addUser, $persister)
    {
        $persister->beADoubleOf(UserPersister::class);
        $this->beConstructedWith($persister);

        $user = $this->create($addUser);

        $user->getUuid()->shouldBeString();
    }
}
