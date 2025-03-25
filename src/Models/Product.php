<?php

namespace Inserve\Pax8API\Models;

/**
 *
 */
final class Product
{
    protected ?string $id = null;
    protected ?string $name = null;
    protected ?string $vendorName = null;
    protected ?string $shortDescription = null;
    protected ?string $sku = null;
    protected ?string $vendorSku = null;

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
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @return string|null
     */
    public function getVendorName(): ?string
    {
        return $this->vendorName;
    }

    /**
     * @return string|null
     */
    public function getShortDescription(): ?string
    {
        return $this->shortDescription;
    }

    /**
     * @return string|null
     */
    public function getSku(): ?string
    {
        return $this->sku;
    }

    /**
     * @return string|null
     */
    public function getVendorSku(): ?string
    {
        return $this->vendorSku;
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
     * @param string|null $name
     *
     * @return $this
     */
    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @param string|null $vendorName
     *
     * @return $this
     */
    public function setVendorName(?string $vendorName): self
    {
        $this->vendorName = $vendorName;

        return $this;
    }

    /**
     * @param string|null $shortDescription
     *
     * @return $this
     */
    public function setShortDescription(?string $shortDescription): self
    {
        $this->shortDescription = $shortDescription;

        return $this;
    }

    /**
     * @param string|null $sku
     *
     * @return $this
     */
    public function setSku(?string $sku): self
    {
        $this->sku = $sku;

        return $this;
    }

    /**
     * @param string|null $vendorSku
     *
     * @return $this
     */
    public function setVendorSku(?string $vendorSku): self
    {
        $this->vendorSku = $vendorSku;

        return $this;
    }
}
