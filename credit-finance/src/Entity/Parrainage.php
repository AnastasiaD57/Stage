<?php

namespace App\Entity;

use App\Repository\ParrainageRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ParrainageRepository::class)]
class Parrainage
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $NomParrain = null;

    #[ORM\Column(length: 255)]
    private ?string $MailParrain = null;

    #[ORM\Column(length: 100)]
    private ?string $TelParrain = null;

    #[ORM\Column(length: 255)]
    private ?string $NomFilleul = null;

    #[ORM\Column(length: 255)]
    private ?string $MailFilleul = null;

    #[ORM\Column(length: 100)]
    private ?string $TelFilleul = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomParrain(): ?string
    {
        return $this->NomParrain;
    }

    public function setNomParrain(string $NomParrain): static
    {
        $this->NomParrain = $NomParrain;

        return $this;
    }

    public function getMailParrain(): ?string
    {
        return $this->MailParrain;
    }

    public function setMailParrain(string $MailParrain): static
    {
        $this->MailParrain = $MailParrain;

        return $this;
    }

    public function getTelParrain(): ?string
    {
        return $this->TelParrain;
    }

    public function setTelParrain(string $TelParrain): static
    {
        $this->TelParrain = $TelParrain;

        return $this;
    }

    public function getNomFilleul(): ?string
    {
        return $this->NomFilleul;
    }

    public function setNomFilleul(string $NomFilleul): static
    {
        $this->NomFilleul = $NomFilleul;

        return $this;
    }

    public function getMailFilleul(): ?string
    {
        return $this->MailFilleul;
    }

    public function setMailFilleul(string $MailFilleul): static
    {
        $this->MailFilleul = $MailFilleul;

        return $this;
    }

    public function getTelFilleul(): ?string
    {
        return $this->TelFilleul;
    }

    public function setTelFilleul(string $TelFilleul): static
    {
        $this->TelFilleul = $TelFilleul;

        return $this;
    }
}
