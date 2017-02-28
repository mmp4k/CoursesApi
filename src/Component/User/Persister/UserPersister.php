<?php

namespace Component\User\Persister;

use Component\User\Model\User;

abstract class UserPersister
{
    abstract public function persist(User $user);
}
