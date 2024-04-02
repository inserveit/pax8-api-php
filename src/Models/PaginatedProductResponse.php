<?php

namespace Inserve\Pax8API\Models;

/**
 *
 */
class PaginatedProductResponse extends PaginatedResponse
{
    /** @var Product[]|null */
    protected ?array $content = [];

    /**
     * @return Product[]|null
     */
    public function getContent(): ?array
    {
        return $this->content;
    }

    /**
     * @param Product[]|null $content
     */
    public function setContent(?array $content): self
    {
        $this->content = $content;

        return $this;
    }
}
