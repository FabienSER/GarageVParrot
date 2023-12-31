<?php

namespace App\Entity;

use App\Repository\ListCommentRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ListCommentRepository::class)]
class ListComment
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $IdComment = null;

    #[ORM\Column(length: 30)]
    private ?string $UserMailComment = null;

    #[ORM\Column(length: 20, nullable: true)]
    private ?string $UserNameComment = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $TextComment = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $DateComment = null;

    #[ORM\Column]
    private ?int $EvalComment = null;

    #[ORM\Column]
    private ?int $StateComment = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdComment(): ?int
    {
        return $this->IdComment;
    }

    public function setIdComment(int $IdComment): static
    {
        $this->IdComment = $IdComment;

        return $this;
    }

    public function getUserMailComment(): ?string
    {
        return $this->UserMailComment;
    }

    public function setUserMailComment(string $UserMailComment): static
    {
        $this->UserMailComment = $UserMailComment;

        return $this;
    }

    public function getUserNameComment(): ?string
    {
        return $this->UserNameComment;
    }

    public function setUserNameComment(?string $UserNameComment): static
    {
        $this->UserNameComment = $UserNameComment;

        return $this;
    }

    public function getTextComment(): ?string
    {
        return $this->TextComment;
    }

    public function setTextComment(string $TextComment): static
    {
        $this->TextComment = $TextComment;

        return $this;
    }

    public function getDateComment(): ?\DateTimeInterface
    {
        return $this->DateComment;
    }

    public function setDateComment(\DateTimeInterface $DateComment): static
    {
        $this->DateComment = $DateComment;

        return $this;
    }

    public function getEvalComment(): ?int
    {
        return $this->EvalComment;
    }

    public function setEvalComment(int $EvalComment): static
    {
        $this->EvalComment = $EvalComment;

        return $this;
    }

    public function getStateComment(): ?int
    {
        return $this->StateComment;
    }

    public function setStateComment(int $StateComment): static
    {
        $this->StateComment = $StateComment;

        return $this;
    }
}
