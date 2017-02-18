<?php

namespace Component\Question\Model;

class Question
{
    /**
     * @var string
     */
    private $uuid;

    /**
     * @var \DateTime
     */
    private $created;

    /**
     * @var bool
     */
    private $removed = false;

    /**
     * @var null|\DateTime
     */
    private $removedAt = null;

    /**
     * @param string $uuid
     */
    public function __construct(string $uuid)
    {
        $this->uuid = $uuid;
        $this->created = new \DateTime();
    }

    /**
     * @return string
     */
    public function getUuid()
    {
        return $this->uuid;
    }

    /**
     * @return \DateTime
     */
    public function getCreated()
    {
        return $this->created;
    }

    public function remove()
    {
        $this->removed = true;
        $this->removedAt = new \DateTime();
    }

    /**
     * @return bool
     */
    public function isRemoved()
    {
        return $this->removed;
    }

    /**
     * @return \DateTime|null
     */
    public function getRemovedAt()
    {
        return $this->removedAt;
    }


}