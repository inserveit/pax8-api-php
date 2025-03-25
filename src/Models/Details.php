<?php

namespace Inserve\Pax8API\Models;

/**
 *
 */
final class Details
{
    protected ?string $type = null;
    protected ?string $message = null;
    protected ?string $instance = null;
    protected ?int $status = null;

    /**
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * @return string|null
     */
    public function getMessage(): ?string
    {
        return $this->message;
    }

    /**
     * @return string|null
     */
    public function getInstance(): ?string
    {
        return $this->instance;
    }

    /**
     * @return int|null
     */
    public function getStatus(): ?int
    {
        return $this->status;
    }

    /**
     * @param string|null $type
     *
     * @return $this
     */
    public function setType(?string $type): self
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @param string|null $message
     *
     * @return $this
     */
    public function setMessage(?string $message): self
    {
        $this->message = $message;

        return $this;
    }

    /**
     * @param string|null $instance
     *
     * @return $this
     */
    public function setInstance(?string $instance): self
    {
        $this->instance = $instance;

        return $this;
    }

    /**
     * @param int|null $status
     *
     * @return $this
     */
    public function setStatus(?int $status): self
    {
        $this->status = $status;

        return $this;
    }
}
