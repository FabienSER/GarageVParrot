<?php

namespace App\Entity;

use App\Repository\UsersRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: UsersRepository::class)]
class Users
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 30)]
    private ?string $IdUser = null;

    #[ORM\Column(length: 50)]
    private ?string $Password = null;

    #[ORM\Column(length: 20)]
    private ?string $NameUser = null;

    #[ORM\Column(length: 20, nullable: true)]
    private ?string $FirstNameUser = null;

    #[ORM\Column]
    private ?int $LvlAction = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdUser(): ?string
    {
        return $this->IdUser;
    }

    public function setIdUser(string $IdUser): static
    {
        $this->IdUser = $IdUser;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->Password;
    }

    public function setPassword(string $Password): static
    {
        $this->Password = $Password;

        return $this;
    }

    public function getNameUser(): ?string
    {
        return $this->NameUser;
    }

    public function setNameUser(string $NameUser): static
    {
        $this->NameUser = $NameUser;

        return $this;
    }

    public function getFirstNameUser(): ?string
    {
        return $this->FirstNameUser;
    }

    public function setFirstNameUser(?string $FirstNameUser): static
    {
        $this->FirstNameUser = $FirstNameUser;

        return $this;
    }

    public function getLvlAction(): ?int
    {
        return $this->LvlAction;
    }

    public function setLvlAction(int $LvlAction): static
    {
        $this->LvlAction = $LvlAction;

        return $this;
    }
}
