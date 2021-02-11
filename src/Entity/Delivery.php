<?php

namespace App\Entity;

class Delivery
{
    private $trackingNumber;

    private $idOrder;

    public function getTrackingNumber(): ?int
    {
        return $this->trackingNumber;
    }

    public function getIdOrder(): ?Orders
    {
        return $this->idOrder;
    }

    public function setIdOrder(?Orders $idOrder): self
    {
        $this->idOrder = $idOrder;

        return $this;
    }
}
