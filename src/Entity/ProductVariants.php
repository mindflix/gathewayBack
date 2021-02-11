<?php

namespace App\Entity;

class ProductVariants
{
    private $id;

    private $quantity;

    private $idSize;

    private $idProduct;

    private $idColor;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getQuantity(): ?int
    {
        return $this->quantity;
    }

    public function setQuantity(int $quantity): self
    {
        $this->quantity = $quantity;

        return $this;
    }

    public function getIdSize(): ?Sizes
    {
        return $this->idSize;
    }

    public function setIdSize(?Sizes $idSize): self
    {
        $this->idSize = $idSize;

        return $this;
    }

    public function getIdProduct(): ?Products
    {
        return $this->idProduct;
    }

    public function setIdProduct(?Products $idProduct): self
    {
        $this->idProduct = $idProduct;

        return $this;
    }

    public function getIdColor(): ?Colors
    {
        return $this->idColor;
    }

    public function setIdColor(?Colors $idColor): self
    {
        $this->idColor = $idColor;

        return $this;
    }
}
