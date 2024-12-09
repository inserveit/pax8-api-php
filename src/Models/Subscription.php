<?php

namespace Inserve\Pax8API\Models;

/**
 *
 */
class Subscription
{
    protected ?string $id = null;
    protected ?string $companyId = null;
    protected ?string $productId = null;
    protected ?int $quantity = null;
    protected ?string $startDate = null;
    protected ?string $createdDate = null;
    protected ?string $billingStart = null;
    protected ?string $status = null;
    protected ?float $price = null;
    protected ?string $billingTerm = null;
    protected ?Commitment $commitment = null;

    /**
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * @return string|null
     */
    public function getCompanyId(): ?string
    {
        return $this->companyId;
    }

    /**
     * @return string|null
     */
    public function getProductId(): ?string
    {
        return $this->productId;
    }

    /**
     * @return int|null
     */
    public function getQuantity(): ?int
    {
        return $this->quantity;
    }

    /**
     * @return string|null
     */
    public function getStartDate(): ?string
    {
        return $this->startDate;
    }

    /**
     * @return string|null
     */
    public function getCreatedDate(): ?string
    {
        return $this->createdDate;
    }

    /**
     * @return string|null
     */
    public function getBillingStart(): ?string
    {
        return $this->billingStart;
    }

    /**
     * @return string|null
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * @return float|null
     */
    public function getPrice(): ?float
    {
        return $this->price;
    }

    /**
     * @return string|null
     */
    public function getBillingTerm(): ?string
    {
        return $this->billingTerm;
    }

    /**
     * @return Commitment|null
     */
    public function getCommitment(): ?Commitment
    {
        return $this->commitment;
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
     * @param string|null $companyId
     *
     * @return $this
     */
    public function setCompanyId(?string $companyId): self
    {
        $this->companyId = $companyId;

        return $this;
    }

    /**
     * @param string|null $productId
     *
     * @return $this
     */
    public function setProductId(?string $productId): self
    {
        $this->productId = $productId;

        return $this;
    }

    /**
     * @param int|null $quantity
     *
     * @return $this
     */
    public function setQuantity(?int $quantity): self
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * @param string|null $startDate
     *
     * @return $this
     */
    public function setStartDate(?string $startDate): self
    {
        $this->startDate = $startDate;

        return $this;
    }

    /**
     * @param string|null $createdDate
     *
     * @return $this
     */
    public function setCreatedDate(?string $createdDate): self
    {
        $this->createdDate = $createdDate;

        return $this;
    }

    /**
     * @param string|null $billingStart
     *
     * @return $this
     */
    public function setBillingStart(?string $billingStart): self
    {
        $this->billingStart = $billingStart;

        return $this;
    }

    /**
     * @param string|null $status
     *
     * @return $this
     */
    public function setStatus(?string $status): self
    {
        $this->status = $status;

        return $this;
    }

    /**
     * @param float|null $price
     *
     * @return $this
     */
    public function setPrice(?float $price): self
    {
        $this->price = $price;

        return $this;
    }

    /**
     * @param string|null $billingTerm
     *
     * @return $this
     */
    public function setBillingTerm(?string $billingTerm): self
    {
        $this->billingTerm = $billingTerm;

        return $this;
    }

    /**
     * @param Commitment|null $commitment
     *
     * @return $this
     */
    public function setCommitment(?Commitment $commitment): self
    {
        $this->commitment = $commitment;

        return $this;
    }
}
