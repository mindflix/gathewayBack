<?php

namespace App\Entity;

class CollectionProducts
{
    private $id;

    private $idCollection;

    private $idProduct;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdCollection(): ?Collections
    {
        return $this->idCollection;
    }

    public function setIdCollection(?Collections $idCollection): self
    {
        $this->idCollection = $idCollection;

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
}
