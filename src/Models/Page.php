<?php

namespace Inserve\Pax8API\Models;

/**
 *
 */
final class Page
{
    protected ?int $size = null;
    protected ?int $totalElements = null;
    protected ?int $totalPages = null;
    protected ?int $number = null;

    /**
     * @return int|null
     */
    public function getSize(): ?int
    {
        return $this->size;
    }

    /**
     * @return int|null
     */
    public function getTotalElements(): ?int
    {
        return $this->totalElements;
    }

    /**
     * @return int|null
     */
    public function getTotalPages(): ?int
    {
        return $this->totalPages;
    }

    /**
     * @return int|null
     */
    public function getNumber(): ?int
    {
        return $this->number;
    }

    /**
     * @param int|null $size
     *
     * @return $this
     */
    public function setSize(?int $size): self
    {
        $this->size = $size;

        return $this;
    }

    /**
     * @param int|null $totalElements
     *
     * @return $this
     */
    public function setTotalElements(?int $totalElements): self
    {
        $this->totalElements = $totalElements;

        return $this;
    }

    /**
     * @param int|null $totalPages
     *
     * @return $this
     */
    public function setTotalPages(?int $totalPages): self
    {
        $this->totalPages = $totalPages;

        return $this;
    }

    /**
     * @param int|null $number
     *
     * @return $this
     */
    public function setNumber(?int $number): self
    {
        $this->number = $number;

        return $this;
    }
}
