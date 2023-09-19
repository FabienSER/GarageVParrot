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

    #[ORM\Column(type: Types::BLOB)]
    private $Picture = null;

    #[ORM\ManyToOne(inversedBy: 'IdPhoto')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Cars $IdCar = null;

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

    public function getPicture()
    {
        return $this->Picture;
    }

    public function setPicture($Picture): static
    {
        $this->Picture = $Picture;

        return $this;
    }

    public function getIdCar(): ?Cars
    {
        return $this->IdCar;
    }

    public function setIdCar(?Cars $IdCar): static
    {
        $this->IdCar = $IdCar;

        return $this;
    }
}
