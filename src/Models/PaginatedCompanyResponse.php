<?php

namespace Inserve\Pax8API\Models;

/**
 *
 */
final class PaginatedCompanyResponse extends PaginatedResponse
{
    /** @var Company[]|null */
    protected ?array $content = [];

    /**
     * @return Company[]|null
     */
    public function getContent(): ?array
    {
        return $this->content;
    }

    /**
     * @param Company[]|null $content
     */
    public function setContent(?array $content): self
    {
        $this->content = $content;

        return $this;
    }
}
