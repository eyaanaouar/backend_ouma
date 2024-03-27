<?php

namespace App\Entity;

use App\Repository\Bouchematg5Repository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: Bouchematg5Repository::class)]
class Bouchematg5
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $date = null;

    #[ORM\Column]
    private ?float $tauxdegradation = null;

    #[ORM\Column]
    private ?float $defconso = null;

    #[ORM\Column]
    private ?float $rendement = null;

    #[ORM\Column]
    private ?float $consogaz = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): static
    {
        $this->date = $date;

        return $this;
    }

    public function getTauxdegradatioj(): ?float
    {
        return $this->tauxdegradatioj;
    }

    public function setTauxdegradatioj(float $tauxdegradatioj): static
    {
        $this->tauxdegradatioj = $tauxdegradatioj;

        return $this;
    }

    public function getDefconso(): ?float
    {
        return $this->defconso;
    }

    public function setDefconso(float $defconso): static
    {
        $this->defconso = $defconso;

        return $this;
    }

    public function getRendement(): ?float
    {
        return $this->rendement;
    }

    public function setRendement(float $rendement): static
    {
        $this->rendement = $rendement;

        return $this;
    }

    public function getConsogaz(): ?float
    {
        return $this->consogaz;
    }

    public function setConsogaz(float $consogaz): static
    {
        $this->consogaz = $consogaz;

        return $this;
    }
}
