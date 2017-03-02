<?php

namespace Component\Lesson\Model;

class Lesson
{
    /**
     * @var Markable[]
     */
    protected $markableElements;

    /**
     * @return Markable[]
     */
    public function getMarkableElements(): array
    {
        return $this->markableElements;
    }

    /**
     * @param Markable[] $markableElements
     * @return self
     */
    public function setMarkableElements(array $markableElements)
    {
        $this->markableElements = $markableElements;

        return $this;
    }


}