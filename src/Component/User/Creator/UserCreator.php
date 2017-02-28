<?php

namespace Component\User\Creator;

use Component\User\Model\DTO\AddUser;
use Component\User\Model\User;
use Component\User\Persister\UserPersister;
use Ramsey\Uuid\Uuid;

class UserCreator
{
    /**
     * @var UserPersister
     */
    private $persister;

    public function __construct(UserPersister $persister)
    {
        $this->persister = $persister;
    }

    public function create(AddUser $addUser)
    {
        $user = new User(Uuid::uuid4());

        $this->persister->persist($user);

        return $user;
    }
}
