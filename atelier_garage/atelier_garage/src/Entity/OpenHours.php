<?php

namespace App\Entity;

use App\Repository\OpenHoursRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: OpenHoursRepository::class)]
class OpenHours
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $IdDay = null;

    #[ORM\Column(length: 5, nullable: true)]
    private ?string $StartMorning = null;

    #[ORM\Column(length: 5, nullable: true)]
    private ?string $EndMorning = null;

    #[ORM\Column(length: 5, nullable: true)]
    private ?string $StartAfternoon = null;

    #[ORM\Column(length: 5, nullable: true)]
    private ?string $EndAfternoon = null;

    #[ORM\Column(length: 15)]
    private ?string $LabelDay = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdDay(): ?int
    {
        return $this->IdDay;
    }

    public function setIdDay(int $IdDay): static
    {
        $this->IdDay = $IdDay;

        return $this;
    }

    public function getStartMorning(): ?string
    {
        return $this->StartMorning;
    }

    public function setStartMorning(?string $StartMorning): static
    {
        $this->StartMorning = $StartMorning;

        return $this;
    }

    public function getEndMorning(): ?string
    {
        return $this->EndMorning;
    }

    public function setEndMorning(?string $EndMorning): static
    {
        $this->EndMorning = $EndMorning;

        return $this;
    }

    public function getStartAfternoon(): ?string
    {
        return $this->StartAfternoon;
    }

    public function setStartAfternoon(?string $StartAfternoon): static
    {
        $this->StartAfternoon = $StartAfternoon;

        return $this;
    }

    public function getEndAfternoon(): ?string
    {
        return $this->EndAfternoon;
    }

    public function setEndAfternoon(?string $EndAfternoon): static
    {
        $this->EndAfternoon = $EndAfternoon;

        return $this;
    }

    public function getLabelDay(): ?string
    {
        return $this->LabelDay;
    }

    public function setLabelDay(string $LabelDay): static
    {
        $this->LabelDay = $LabelDay;

        return $this;
    }
}
