<?php

namespace Inserve\Pax8API\Models;

/**
 *
 */
class PaginatedResponse
{
    protected ?Page $page = null;

    /**
     * @return Page|null
     */
    public function getPage(): ?Page
    {
        return $this->page;
    }

    /**
     * @param Page|null $page
     *
     * @return $this
     */
    public function setPage(?Page $page): self
    {
        $this->page = $page;

        return $this;
    }
}
