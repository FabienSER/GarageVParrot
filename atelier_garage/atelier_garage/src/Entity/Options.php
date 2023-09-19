<?php

namespace App\Entity;

use App\Repository\OptionsRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: OptionsRepository::class)]
class Options
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $IdOption = null;

    #[ORM\Column(length: 20)]
    private ?string $NameOption = null;

    #[ORM\Column(length: 200, nullable: true)]
    private ?string $DescripOption = null;

    #[ORM\ManyToMany(targetEntity: Cars::class, inversedBy: 'IdOption')]
    private Collection $IdCar;

    public function __construct()
    {
        $this->IdCar = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
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

    public function getNameOption(): ?string
    {
        return $this->NameOption;
    }

    public function setNameOption(string $NameOption): static
    {
        $this->NameOption = $NameOption;

        return $this;
    }

    public function getDescripOption(): ?string
    {
        return $this->DescripOption;
    }

    public function setDescripOption(?string $DescripOption): static
    {
        $this->DescripOption = $DescripOption;

        return $this;
    }

    /**
     * @return Collection<int, Cars>
     */
    public function getIdCar(): Collection
    {
        return $this->IdCar;
    }

    public function addIdCar(Cars $idCar): static
    {
        if (!$this->IdCar->contains($idCar)) {
            $this->IdCar->add($idCar);
        }

        return $this;
    }

    public function removeIdCar(Cars $idCar): static
    {
        $this->IdCar->removeElement($idCar);

        return $this;
    }
}
