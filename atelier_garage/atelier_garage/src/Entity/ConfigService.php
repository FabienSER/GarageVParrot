<?php

namespace App\Entity;

use App\Repository\ConfigServiceRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ConfigServiceRepository::class)]
class ConfigService
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $IdService = null;

    #[ORM\Column(length: 30)]
    private ?string $NameService = null;

    #[ORM\Column(length: 150, nullable: true)]
    private ?string $DescripService = null;

    #[ORM\Column]
    private ?bool $StateService = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdService(): ?int
    {
        return $this->IdService;
    }

    public function setIdService(int $IdService): static
    {
        $this->IdService = $IdService;

        return $this;
    }

    public function getNameService(): ?string
    {
        return $this->NameService;
    }

    public function setNameService(string $NameService): static
    {
        $this->NameService = $NameService;

        return $this;
    }

    public function getDescripService(): ?string
    {
        return $this->DescripService;
    }

    public function setDescripService(?string $DescripService): static
    {
        $this->DescripService = $DescripService;

        return $this;
    }

    public function isStateService(): ?bool
    {
        return $this->StateService;
    }

    public function setStateService(bool $StateService): static
    {
        $this->StateService = $StateService;

        return $this;
    }
}
