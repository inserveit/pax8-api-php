<?php

namespace Inserve\Pax8API\Models;

/**
 *
 */
final class Commitment
{
    protected ?string $id = null;
    protected ?string $term = null;
    protected ?string $endDate = null;

    /**
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * @param string|null $id
     *
     * @return $this
     */
    public function setId(?string $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getTerm(): ?string
    {
        return $this->term;
    }

    /**
     * @param string|null $term
     *
     * @return $this
     */
    public function setTerm(?string $term): self
    {
        $this->term = $term;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getEndDate(): ?string
    {
        return $this->endDate;
    }

    /**
     * @param string|null $endDate
     *
     * @return $this
     */
    public function setEndDate(?string $endDate): self
    {
        $this->endDate = $endDate;

        return $this;
    }
}
