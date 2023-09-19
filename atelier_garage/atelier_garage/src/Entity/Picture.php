<?php

namespace App\Entity;

use App\Repository\PictureRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PictureRepository::class)]
class Picture
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\OneToMany(mappedBy: 'IdCar2', targetEntity: Cars::class)]
    private Collection $IdCar;

    public function __construct()
    {
        $this->IdCar = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
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
            $idCar->setIdCar2($this);
        }

        return $this;
    }

    public function removeIdCar(Cars $idCar): static
    {
        if ($this->IdCar->removeElement($idCar)) {
            // set the owning side to null (unless already changed)
            if ($idCar->getIdCar2() === $this) {
                $idCar->setIdCar2(null);
            }
        }

        return $this;
    }
}
