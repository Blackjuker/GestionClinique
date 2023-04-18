<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Repository\ReglementRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ReglementRepository::class)]
#[ApiResource]
class Reglement
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $numero = null;

    #[ORM\Column]
    private ?int $annee = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $dateReglement = null;

    #[ORM\ManyToOne(inversedBy: 'reglements')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Patient $patient = null;

    #[ORM\Column(length: 255)]
    private ?string $modReglement = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $numPiece = null;

    #[ORM\Column]
    private ?float $montant = null;

    #[ORM\Column(length: 255)]
    private ?string $observation = null;

    #[ORM\ManyToOne(inversedBy: 'reglements')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Modereg $modereg = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNumero(): ?int
    {
        return $this->numero;
    }

    public function setNumero(int $numero): self
    {
        $this->numero = $numero;

        return $this;
    }

    public function getAnnee(): ?int
    {
        return $this->annee;
    }

    public function setAnnee(int $annee): self
    {
        $this->annee = $annee;

        return $this;
    }

    public function getDateReglement(): ?\DateTimeInterface
    {
        return $this->dateReglement;
    }

    public function setDateReglement(\DateTimeInterface $dateReglement): self
    {
        $this->dateReglement = $dateReglement;

        return $this;
    }

    public function getPatient(): ?Patient
    {
        return $this->patient;
    }

    public function setPatient(?Patient $patient): self
    {
        $this->patient = $patient;

        return $this;
    }

    public function getModReglement(): ?string
    {
        return $this->modReglement;
    }

    public function setModReglement(string $modReglement): self
    {
        $this->modReglement = $modReglement;

        return $this;
    }

    public function getNumPiece(): ?string
    {
        return $this->numPiece;
    }

    public function setNumPiece(?string $numPiece): self
    {
        $this->numPiece = $numPiece;

        return $this;
    }

    public function getMontant(): ?float
    {
        return $this->montant;
    }

    public function setMontant(float $montant): self
    {
        $this->montant = $montant;

        return $this;
    }

    public function getObservation(): ?string
    {
        return $this->observation;
    }

    public function setObservation(string $observation): self
    {
        $this->observation = $observation;

        return $this;
    }

    public function getModereg(): ?Modereg
    {
        return $this->modereg;
    }

    public function setModereg(?Modereg $modereg): self
    {
        $this->modereg = $modereg;

        return $this;
    }
}
