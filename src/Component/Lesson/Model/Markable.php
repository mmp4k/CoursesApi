<?php

namespace Component\Lesson\Model;

interface Markable
{
    public function setRetires(int $retries);

    /**
     * @return void
     */
    public function isRemembered();

    /**
     * @return bool
     */
    public function remembered(): bool;
}
