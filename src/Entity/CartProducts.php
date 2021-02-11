<?php

namespace App\Entity;

class CartProducts
{
    private $id;

    private $quantity;

    private $idCart;

    private $idProduct;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getQuantity(): ?int
    {
        return $this->quantity;
    }

    public function setQuantity(?int $quantity): self
    {
        $this->quantity = $quantity;

        return $this;
    }

    public function getIdCart(): ?Carts
    {
        return $this->idCart;
    }

    public function setIdCart(?Carts $idCart): self
    {
        $this->idCart = $idCart;

        return $this;
    }

    public function getIdProduct(): ?ProductVariants
    {
        return $this->idProduct;
    }

    public function setIdProduct(?ProductVariants $idProduct): self
    {
        $this->idProduct = $idProduct;

        return $this;
    }
}
