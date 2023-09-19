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
    private ?string $password = null;

    #[ORM\Column]
    private ?int $LvlPerm = null;

    #[ORM\Column(length: 30)]
    private ?string $UserName = null;

    #[ORM\Column(length: 30)]
    private ?string $UserFirstName = null;

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
        return $this->password;
    }

    public function setPassword(string $password): static
    {
        $this->password = $password;

        return $this;
    }

    public function getLvlPerm(): ?int
    {
        return $this->LvlPerm;
    }

    public function setLvlPerm(int $LvlPerm): static
    {
        $this->LvlPerm = $LvlPerm;

        return $this;
    }

    public function getUserName(): ?string
    {
        return $this->UserName;
    }

    public function setUserName(string $UserName): static
    {
        $this->UserName = $UserName;

        return $this;
    }

    public function getUserFirstName(): ?string
    {
        return $this->UserFirstName;
    }

    public function setUserFirstName(string $UserFirstName): static
    {
        $this->UserFirstName = $UserFirstName;

        return $this;
    }
}
