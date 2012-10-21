<?php

namespace Redmonster\PaulRevereBundle\Model;

abstract class Announcement
{
    protected $id;

    /**
     * Text body of the announcement
     *
     * @var string
     */
    protected $body;

    /**
     * When the announcement was created.
     *
     * @var \DateTime
     */
    protected $createdAt;

    public function __construct()
    {
        $this->createdAt = new \DateTime();
    }

    public function getId()
    {
        return $this->id;
    }

    public function getBody()
    {
        return $this->body;
    }

    public function setBody($body)
    {
        $this->body = $body;
    }

    public function getCreatedAt()
    {
        return $this->createdAt;
    }
}