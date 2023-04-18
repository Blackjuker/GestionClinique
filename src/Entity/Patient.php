<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Repository\PatientRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PatientRepository::class)]
#[ApiResource]
class Patient
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nom = null;

    #[ORM\Column(length: 255)]
    private ?string $prenom = null;

    #[ORM\Column]
    private ?int $age = null;

    #[ORM\Column(length: 255)]
    private ?string $adresse = null;

    #[ORM\Column(length: 255)]
    private ?string $ville = null;

    #[ORM\Column(length: 255)]
    private ?string $genre = null;

    #[ORM\Column(length: 255)]
    private ?string $tel = null;

    #[ORM\Column(length: 255)]
    private ?string $email = null;

    #[ORM\Column(length: 255)]
    private ?string $etatCivil = null;

    #[ORM\Column(length: 255)]
    private ?string $nomConjoint = null;

    #[ORM\Column(length: 255)]
    private ?string $lieuParente = null;

    #[ORM\Column]
    private ?int $nbrEnfant = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 2)]
    private ?string $taille = null;

    #[ORM\Column]
    private ?int $poids = null;

    #[ORM\Column(length: 255)]
    private ?string $groupSanguin = null;

    #[ORM\Column(length: 255)]
    private ?string $profession = null;

    #[ORM\Column(length: 255)]
    private ?string $identUnique = null;

    #[ORM\Column(length: 255)]
    private ?string $priseEnCharge = null;

  

    #[ORM\Column(length: 255)]
    private ?string $medecin = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $datePrdv = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $dateDrdv = null;

    #[ORM\Column(length: 255)]
    private ?string $motCles = null;

    #[ORM\Column(length: 255)]
    private ?string $codeApci = null;

    #[ORM\Column(length: 255)]
    private ?string $regCnam = null;

    #[ORM\Column(length: 255)]
    private ?string $date = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $datevalidite = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $qualite = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?Nationalite $nationlite = null;

    #[ORM\ManyToOne]
    private ?Domaine $domaine = null;

    #[ORM\ManyToOne]
    private ?Assureur $assureur = null;

    #[ORM\OneToMany(mappedBy: 'patient', targetEntity: Rdv::class, orphanRemoval: true)]
    private Collection $rdvs;

    #[ORM\OneToMany(mappedBy: 'patient', targetEntity: Consultation::class, orphanRemoval: true)]
    private Collection $consultations;

    #[ORM\OneToMany(mappedBy: 'patient', targetEntity: Reglement::class, orphanRemoval: true)]
    private Collection $reglements;

    public function __construct()
    {
        $this->rdvs = new ArrayCollection();
        $this->consultations = new ArrayCollection();
        $this->reglements = new ArrayCollection();
    }

   

   

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getAge(): ?int
    {
        return $this->age;
    }

    public function setAge(int $age): self
    {
        $this->age = $age;

        return $this;
    }

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(string $adresse): self
    {
        $this->adresse = $adresse;

        return $this;
    }

    public function getVille(): ?string
    {
        return $this->ville;
    }

    public function setVille(string $ville): self
    {
        $this->ville = $ville;

        return $this;
    }

    public function getGenre(): ?string
    {
        return $this->genre;
    }

    public function setGenre(string $genre): self
    {
        $this->genre = $genre;

        return $this;
    }

    public function getTel(): ?string
    {
        return $this->tel;
    }

    public function setTel(string $tel): self
    {
        $this->tel = $tel;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getEtatCivil(): ?string
    {
        return $this->etatCivil;
    }

    public function setEtatCivil(string $etatCivil): self
    {
        $this->etatCivil = $etatCivil;

        return $this;
    }

    public function getNomConjoint(): ?string
    {
        return $this->nomConjoint;
    }

    public function setNomConjoint(string $nomConjoint): self
    {
        $this->nomConjoint = $nomConjoint;

        return $this;
    }

    public function getLieuParente(): ?string
    {
        return $this->lieuParente;
    }

    public function setLieuParente(string $lieuParente): self
    {
        $this->lieuParente = $lieuParente;

        return $this;
    }

    public function getNbrEnfant(): ?int
    {
        return $this->nbrEnfant;
    }

    public function setNbrEnfant(int $nbrEnfant): self
    {
        $this->nbrEnfant = $nbrEnfant;

        return $this;
    }

    public function getTaille(): ?string
    {
        return $this->taille;
    }

    public function setTaille(string $taille): self
    {
        $this->taille = $taille;

        return $this;
    }

    public function getPoids(): ?int
    {
        return $this->poids;
    }

    public function setPoids(int $poids): self
    {
        $this->poids = $poids;

        return $this;
    }

    public function getGroupSanguin(): ?string
    {
        return $this->groupSanguin;
    }

    public function setGroupSanguin(string $groupSanguin): self
    {
        $this->groupSanguin = $groupSanguin;

        return $this;
    }

    public function getProfession(): ?string
    {
        return $this->profession;
    }

    public function setProfession(string $profession): self
    {
        $this->profession = $profession;

        return $this;
    }

    public function getIdentUnique(): ?string
    {
        return $this->identUnique;
    }

    public function setIdentUnique(string $identUnique): self
    {
        $this->identUnique = $identUnique;

        return $this;
    }

    public function getPriseEnCharge(): ?string
    {
        return $this->priseEnCharge;
    }

    public function setPriseEnCharge(string $priseEnCharge): self
    {
        $this->priseEnCharge = $priseEnCharge;

        return $this;
    }

  
    public function getMedecin(): ?string
    {
        return $this->medecin;
    }

    public function setMedecin(string $medecin): self
    {
        $this->medecin = $medecin;

        return $this;
    }

    public function getDatePrdv(): ?\DateTimeInterface
    {
        return $this->datePrdv;
    }

    public function setDatePrdv(\DateTimeInterface $datePrdv): self
    {
        $this->datePrdv = $datePrdv;

        return $this;
    }

    public function getDateDrdv(): ?\DateTimeInterface
    {
        return $this->dateDrdv;
    }

    public function setDateDrdv(\DateTimeInterface $dateDrdv): self
    {
        $this->dateDrdv = $dateDrdv;
 
        return $this;
    }

    public function getMotCles(): ?string
    {
        return $this->motCles;
    }
 
    public function setMotCles(string $motCles): self
    {
        $this->motCles = $motCles;

        return $this;
    }

    public function getCodeApci(): ?string
    {
        return $this->codeApci;
    }

    public function setCodeApci(string $codeApci): self
    {
        $this->codeApci = $codeApci;

        return $this;
    }

    public function getRegCnam(): ?string
    {
        return $this->regCnam;
    }

    public function setRegCnam(string $regCnam): self
    {
        $this->regCnam = $regCnam;

        return $this;
    }

   

    public function getDatevalidite(): ?\DateTimeInterface
    {
        return $this->datevalidite;
    }

    public function setDatevalidite(\DateTimeInterface $datevalidite): self
    {
        $this->datevalidite = $datevalidite;

        return $this;
    }

    public function getQualite(): ?string
    {
        return $this->qualite;
    }

    public function setQualite(?string $qualite): self
    {
        $this->qualite = $qualite;

        return $this;
    }

    public function getNationlite(): ?Nationalite
    {
        return $this->nationlite;
    }

    public function setNationlite(?Nationalite $nationlite): self
    {
        $this->nationlite = $nationlite;

        return $this;
    }

    public function getDomaine(): ?Domaine
    {
        return $this->domaine;
    }

    public function setDomaine(?Domaine $domaine): self
    {
        $this->domaine = $domaine;

        return $this;
    }

    public function getAssureur(): ?Assureur
    {
        return $this->assureur;
    }

    public function setAssureur(?Assureur $assureur): self
    {
        $this->assureur = $assureur;

        return $this;
    }

    /**
     * @return Collection<int, Rdv>
     */
    public function getRdvs(): Collection
    {
        return $this->rdvs;
    }

    public function addRdv(Rdv $rdv): self
    {
        if (!$this->rdvs->contains($rdv)) {
            $this->rdvs->add($rdv);
            $rdv->setPatient($this);
        }

        return $this;
    }

    public function removeRdv(Rdv $rdv): self
    {
        if ($this->rdvs->removeElement($rdv)) {
            // set the owning side to null (unless already changed)
            if ($rdv->getPatient() === $this) {
                $rdv->setPatient(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Consultation>
     */
    public function getConsultations(): Collection
    {
        return $this->consultations;
    }

    public function addConsultation(Consultation $consultation): self
    {
        if (!$this->consultations->contains($consultation)) {
            $this->consultations->add($consultation);
            $consultation->setPatient($this);
        }

        return $this;
    }

    public function removeConsultation(Consultation $consultation): self
    {
        if ($this->consultations->removeElement($consultation)) {
            // set the owning side to null (unless already changed)
            if ($consultation->getPatient() === $this) {
                $consultation->setPatient(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Reglement>
     */
    public function getReglements(): Collection
    {
        return $this->reglements;
    }

    public function addReglement(Reglement $reglement): self
    {
        if (!$this->reglements->contains($reglement)) {
            $this->reglements->add($reglement);
            $reglement->setPatient($this);
        }

        return $this;
    }

    public function removeReglement(Reglement $reglement): self
    {
        if ($this->reglements->removeElement($reglement)) {
            // set the owning side to null (unless already changed)
            if ($reglement->getPatient() === $this) {
                $reglement->setPatient(null);
            }
        }

        return $this;
    }

   
}
