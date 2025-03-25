<?php

namespace Inserve\Pax8API\Models;

/**
 *
 */
final class PaginatedSubscriptionResponse extends PaginatedResponse
{
    /** @var Subscription[]|null */
    protected ?array $content = [];

    /**
     * @return Subscription[]|null
     */
    public function getContent(): ?array
    {
        return $this->content;
    }

    /**
     * @param Subscription[]|null $content
     */
    public function setContent(?array $content): self
    {
        $this->content = $content;

        return $this;
    }
}
