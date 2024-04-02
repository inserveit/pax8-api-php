<?php

namespace Inserve\Pax8API\Models;

/**
 *
 */
class ErrorResponse
{
    protected ?string $type = null;
    protected ?string $message = null;
    protected ?string $instance = null;
    protected ?int $status = null;
    /** @var Details[]|null */
    protected ?array $details = [];

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
     * @return Details[]|null
     */
    public function getDetails(): ?array
    {
        return $this->details;
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

    /**
     * @param Details[]|null $details
     */
    public function setDetails(?array $details): self
    {
        $this->details = $details;

        return $this;
    }
}
