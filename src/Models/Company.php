<?php

namespace Inserve\Pax8API\Models;

/**
 *
 */
class Company
{
    protected ?string $id = null;
    protected ?string $name = null;
    protected ?Address $address = null;
    protected ?string $website = null;
    protected ?string $status = null;
    protected ?bool $selfServiceAllowed = null;
    protected ?bool $billOnBehalfOfEnabled = null;
    protected ?bool $orderApprovalRequired = null;

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
     * @return Address|null
     */
    public function getAddress(): ?Address
    {
        return $this->address;
    }

    /**
     * @return string|null
     */
    public function getWebsite(): ?string
    {
        return $this->website;
    }

    /**
     * @return string|null
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * @return bool|null
     */
    public function getSelfServiceAllowed(): ?bool
    {
        return $this->selfServiceAllowed;
    }

    /**
     * @return bool|null
     */
    public function getBillOnBehalfOfEnabled(): ?bool
    {
        return $this->billOnBehalfOfEnabled;
    }

    /**
     * @return bool|null
     */
    public function getOrderApprovalRequired(): ?bool
    {
        return $this->orderApprovalRequired;
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
     * @param Address|null $address
     *
     * @return $this
     */
    public function setAddress(?Address $address): self
    {
        $this->address = $address;

        return $this;
    }

    /**
     * @param string|null $website
     *
     * @return $this
     */
    public function setWebsite(?string $website): self
    {
        $this->website = $website;

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
     * @param bool|null $selfServiceAllowed
     *
     * @return $this
     */
    public function setSelfServiceAllowed(?bool $selfServiceAllowed): self
    {
        $this->selfServiceAllowed = $selfServiceAllowed;

        return $this;
    }

    /**
     * @param bool|null $billOnBehalfOfEnabled
     *
     * @return $this
     */
    public function setBillOnBehalfOfEnabled(?bool $billOnBehalfOfEnabled): self
    {
        $this->billOnBehalfOfEnabled = $billOnBehalfOfEnabled;

        return $this;
    }

    /**
     * @param bool|null $orderApprovalRequired
     *
     * @return $this
     */
    public function setOrderApprovalRequired(?bool $orderApprovalRequired): self
    {
        $this->orderApprovalRequired = $orderApprovalRequired;

        return $this;
    }
}
