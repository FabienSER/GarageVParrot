<?php

namespace App\Entity;

use App\Repository\PicturesRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PicturesRepository::class)]
class Pictures
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $IdPicture = null;

    #[ORM\Column(type: Types::OBJECT)]
    private ?object $Picture = null;

    #[ORM\Column]
    private ?int $IdCar = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdPicture(): ?int
    {
        return $this->IdPicture;
    }

    public function setIdPicture(int $IdPicture): static
    {
        $this->IdPicture = $IdPicture;

        return $this;
    }

    public function getPicture(): ?object
    {
        return $this->Picture;
    }

    public function setPicture(object $Picture): static
    {
        $this->Picture = $Picture;

        return $this;
    }

    public function getIdCar(): ?int
    {
        return $this->IdCar;
    }

    public function setIdCar(int $IdCar): static
    {
        $this->IdCar = $IdCar;

        return $this;
    }
}
