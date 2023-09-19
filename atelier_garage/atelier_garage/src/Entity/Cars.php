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

    #[ORM\Column]
    private ?int $PriceCar = null;

    #[ORM\Column(length: 15)]
    private ?string $TypeCar = null;

    #[ORM\Column]
    private ?int $Kilometer = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $DateCirculCar = null;

    #[ORM\Column]
    private ?int $NbDoorCar = null;

    #[ORM\Column]
    private ?int $NbPlaceCar = null;

    #[ORM\Column(length: 15, nullable: true)]
    private ?string $ColorCar = null;

    #[ORM\Column(nullable: true)]
    private ?float $UtilityAreaCar = null;

    #[ORM\Column]
    private ?int $PowerCar = null;

    #[ORM\Column(nullable: true)]
    private ?int $CO2 = null;

    #[ORM\Column(length: 20)]
    private ?string $EnergyCar = null;

    #[ORM\Column(length: 15, nullable: true)]
    private ?string $AutonomyCar = null;

    #[ORM\Column(nullable: true)]
    private ?float $Conso100 = null;

    #[ORM\Column]
    private ?bool $BoitCar = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $DescripCar = null;

    #[ORM\OneToMany(mappedBy: 'IdCar', targetEntity: Pictures::class, orphanRemoval: true)]
    private Collection $IdPhoto;

    #[ORM\ManyToMany(targetEntity: Options::class, mappedBy: 'IdCar')]
    private Collection $IdOption;

    #[ORM\Column(nullable: true)]
    private ?int $IdPhotoPrinc = null;

    public function __construct()
    {
        $this->IdPhoto = new ArrayCollection();
        $this->IdOption = new ArrayCollection();
    }

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

    public function getPriceCar(): ?int
    {
        return $this->PriceCar;
    }

    public function setPriceCar(int $PriceCar): static
    {
        $this->PriceCar = $PriceCar;

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

    public function getKilometer(): ?int
    {
        return $this->Kilometer;
    }

    public function setKilometer(int $Kilometer): static
    {
        $this->Kilometer = $Kilometer;

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

    public function getColorCar(): ?string
    {
        return $this->ColorCar;
    }

    public function setColorCar(?string $ColorCar): static
    {
        $this->ColorCar = $ColorCar;

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

    public function getPowerCar(): ?int
    {
        return $this->PowerCar;
    }

    public function setPowerCar(int $PowerCar): static
    {
        $this->PowerCar = $PowerCar;

        return $this;
    }

    public function getCO2(): ?int
    {
        return $this->CO2;
    }

    public function setCO2(?int $CO2): static
    {
        $this->CO2 = $CO2;

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

    public function getAutonomyCar(): ?string
    {
        return $this->AutonomyCar;
    }

    public function setAutonomyCar(?string $AutonomyCar): static
    {
        $this->AutonomyCar = $AutonomyCar;

        return $this;
    }

    public function getConso100(): ?float
    {
        return $this->Conso100;
    }

    public function setConso100(?float $Conso100): static
    {
        $this->Conso100 = $Conso100;

        return $this;
    }

    public function isBoitCar(): ?bool
    {
        return $this->BoitCar;
    }

    public function setBoitCar(bool $BoitCar): static
    {
        $this->BoitCar = $BoitCar;

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

    /**
     * @return Collection<int, Pictures>
     */
    public function getIdPhoto(): Collection
    {
        return $this->IdPhoto;
    }

    public function addIdPhoto(Pictures $idPhoto): static
    {
        if (!$this->IdPhoto->contains($idPhoto)) {
            $this->IdPhoto->add($idPhoto);
            $idPhoto->setIdCar($this);
        }

        return $this;
    }

    public function removeIdPhoto(Pictures $idPhoto): static
    {
        if ($this->IdPhoto->removeElement($idPhoto)) {
            // set the owning side to null (unless already changed)
            if ($idPhoto->getIdCar() === $this) {
                $idPhoto->setIdCar(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Options>
     */
    public function getIdOption(): Collection
    {
        return $this->IdOption;
    }

    public function addIdOption(Options $idOption): static
    {
        if (!$this->IdOption->contains($idOption)) {
            $this->IdOption->add($idOption);
            $idOption->addIdCar($this);
        }

        return $this;
    }

    public function removeIdOption(Options $idOption): static
    {
        if ($this->IdOption->removeElement($idOption)) {
            $idOption->removeIdCar($this);
        }

        return $this;
    }

    public function getIdPhotoPrinc(): ?int
    {
        return $this->IdPhotoPrinc;
    }

    public function setIdPhotoPrinc(?int $IdPhotoPrinc): static
    {
        $this->IdPhotoPrinc = $IdPhotoPrinc;

        return $this;
    }
}
