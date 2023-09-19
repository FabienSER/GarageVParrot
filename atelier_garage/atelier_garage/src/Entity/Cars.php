<?php

namespace App\Entity;

use App\Repository\CarsRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CarsRepository::class)]
class Cars
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $IdCar = null;

    #[ORM\Column(length: 20)]
    private ?string $MarkCar = null;

    #[ORM\Column(length: 30)]
    private ?string $ModelCar = null;

    #[ORM\Column(length: 10)]
    private ?string $TypeCar = null;

    #[ORM\Column]
    private ?int $KilometrageCar = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $DateCirculCar = null;

    #[ORM\Column(length: 10, nullable: true)]
    private ?string $ColorCar = null;

    #[ORM\Column]
    private ?int $NbDoorCar = null;

    #[ORM\Column]
    private ?int $NbPlaceCar = null;

    #[ORM\Column(nullable: true)]
    private ?float $UtilityAreaCar = null;

    #[ORM\Column]
    private ?int $PriceCar = null;

    #[ORM\Column(nullable: true)]
    private ?int $CO2Car = null;

    #[ORM\Column]
    private ?int $PowerCar = null;

    #[ORM\Column(length: 30)]
    private ?string $EnergyCar = null;

    #[ORM\Column(nullable: true)]
    private ?int $AutonomyCar = null;

    #[ORM\Column(nullable: true)]
    private ?float $Consum100 = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $DescripCar = null;

    #[ORM\Column]
    private ?bool $BoiteCar = null;

    #[ORM\ManyToOne(inversedBy: 'IdCar')]
    private ?Picture $IdCar2 = null;

    #[ORM\Column]
    private ?int $StateCar = null;

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

    public function getMarkCar(): ?string
    {
        return $this->MarkCar;
    }

    public function setMarkCar(string $MarkCar): static
    {
        $this->MarkCar = $MarkCar;

        return $this;
    }

    public function getModelCar(): ?string
    {
        return $this->ModelCar;
    }

    public function setModelCar(string $ModelCar): static
    {
        $this->ModelCar = $ModelCar;

        return $this;
    }

    public function getTypeCar(): ?string
    {
        return $this->TypeCar;
    }

    public function setTypeCar(string $TypeCar): static
    {
        $this->TypeCar = $TypeCar;

        return $this;
    }

    public function getKilometrageCar(): ?int
    {
        return $this->KilometrageCar;
    }

    public function setKilometrageCar(int $KilometrageCar): static
    {
        $this->KilometrageCar = $KilometrageCar;

        return $this;
    }

    public function getDateCirculCar(): ?\DateTimeInterface
    {
        return $this->DateCirculCar;
    }

    public function setDateCirculCar(\DateTimeInterface $DateCirculCar): static
    {
        $this->DateCirculCar = $DateCirculCar;

        return $this;
    }

    public function getColorCar(): ?string
    {
        return $this->ColorCar;
    }

    public function setColorCar(?string $ColorCar): static
    {
        $this->ColorCar = $ColorCar;

        return $this;
    }

    public function getNbDoorCar(): ?int
    {
        return $this->NbDoorCar;
    }

    public function setNbDoorCar(int $NbDoorCar): static
    {
        $this->NbDoorCar = $NbDoorCar;

        return $this;
    }

    public function getNbPlaceCar(): ?int
    {
        return $this->NbPlaceCar;
    }

    public function setNbPlaceCar(int $NbPlaceCar): static
    {
        $this->NbPlaceCar = $NbPlaceCar;

        return $this;
    }

    public function getUtilityAreaCar(): ?float
    {
        return $this->UtilityAreaCar;
    }

    public function setUtilityAreaCar(?float $UtilityAreaCar): static
    {
        $this->UtilityAreaCar = $UtilityAreaCar;

        return $this;
    }

    public function getPriceCar(): ?int
    {
        return $this->PriceCar;
    }

    public function setPriceCar(int $PriceCar): static
    {
        $this->PriceCar = $PriceCar;

        return $this;
    }

    public function getCO2Car(): ?int
    {
        return $this->CO2Car;
    }

    public function setCO2Car(?int $CO2Car): static
    {
        $this->CO2Car = $CO2Car;

        return $this;
    }

    public function getPowerCar(): ?int
    {
        return $this->PowerCar;
    }

    public function setPowerCar(int $PowerCar): static
    {
        $this->PowerCar = $PowerCar;

        return $this;
    }

    public function getEnergyCar(): ?string
    {
        return $this->EnergyCar;
    }

    public function setEnergyCar(string $EnergyCar): static
    {
        $this->EnergyCar = $EnergyCar;

        return $this;
    }

    public function getAutonomyCar(): ?int
    {
        return $this->AutonomyCar;
    }

    public function setAutonomyCar(?int $AutonomyCar): static
    {
        $this->AutonomyCar = $AutonomyCar;

        return $this;
    }

    public function getConsum100(): ?float
    {
        return $this->Consum100;
    }

    public function setConsum100(?float $Consum100): static
    {
        $this->Consum100 = $Consum100;

        return $this;
    }

    public function getDescripCar(): ?string
    {
        return $this->DescripCar;
    }

    public function setDescripCar(?string $DescripCar): static
    {
        $this->DescripCar = $DescripCar;

        return $this;
    }

    public function isBoiteCar(): ?bool
    {
        return $this->BoiteCar;
    }

    public function setBoiteCar(bool $BoiteCar): static
    {
        $this->BoiteCar = $BoiteCar;

        return $this;
    }

    public function getIdCar2(): ?Picture
    {
        return $this->IdCar2;
    }

    public function setIdCar2(?Picture $IdCar2): static
    {
        $this->IdCar2 = $IdCar2;

        return $this;
    }

    public function getStateCar(): ?int
    {
        return $this->StateCar;
    }

    public function setStateCar(int $StateCar): static
    {
        $this->StateCar = $StateCar;

        return $this;
    }
}
