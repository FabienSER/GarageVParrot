<?php

namespace App\Entity;

use App\Repository\ListOptionRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ListOptionRepository::class)]
class ListOption
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $IdCar = null;

    #[ORM\Column]
    private ?int $IdOption = null;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getIdOption(): ?int
    {
        return $this->IdOption;
    }

    public function setIdOption(int $IdOption): static
    {
        $this->IdOption = $IdOption;

        return $this;
    }
}
