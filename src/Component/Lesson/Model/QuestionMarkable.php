<?php

namespace Component\Lesson\Model;

class QuestionMarkable implements Markable
{
    protected $retries = 0;
    protected $remembered = false;

    public function setRetires(int $retries)
    {
        $this->retries = $retries;
    }

    public function isRemembered()
    {
        return $this->remembered = true;
    }

    public function remembered(): bool
    {
        return $this->remembered;
    }

}