<?php

namespace App\Entity;

class Colors
{
    private $id;

    private $color;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getColor(): ?int
    {
        return $this->color;
    }

    public function setColor(int $color): self
    {
        $this->color = $color;

        return $this;
    }
}
