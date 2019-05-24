<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ProducteurRepository")
 */
class Producteur
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nom;

    /**
     * @ORM\Column(type="text")
     */
    private $description;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $drapeau;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $capitale;

    /**
     * @ORM\Column(type="text")
     */
    private $habitant;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $surface;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $tonne;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $pourcent;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $arabica;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $robusta;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $lon;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $lat;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Cafe", mappedBy="provenance")
     */
    private $cafes;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Commande", mappedBy="origine")
     */
    private $commandes;

    public function __construct()
    {
        $this->cafes = new ArrayCollection();
        $this->commandes = new ArrayCollection();
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

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getDrapeau(): ?string
    {
        return $this->drapeau;
    }

    public function setDrapeau(string $drapeau): self
    {
        $this->drapeau = $drapeau;

        return $this;
    }

    public function getCapitale(): ?string
    {
        return $this->capitale;
    }

    public function setCapitale(string $capitale): self
    {
        $this->capitale = $capitale;

        return $this;
    }

    public function getHabitant(): ?string
    {
        return $this->habitant;
    }

    public function setHabitant(string $habitant): self
    {
        $this->habitant = $habitant;

        return $this;
    }

    public function getSurface(): ?string
    {
        return $this->surface;
    }

    public function setSurface(string $surface): self
    {
        $this->surface = $surface;

        return $this;
    }

    public function getTonne(): ?string
    {
        return $this->tonne;
    }

    public function setTonne(string $tonne): self
    {
        $this->tonne = $tonne;

        return $this;
    }

    public function getPourcent(): ?string
    {
        return $this->pourcent;
    }

    public function setPourcent(string $pourcent): self
    {
        $this->pourcent = $pourcent;

        return $this;
    }

    public function getArabica(): ?string
    {
        return $this->arabica;
    }

    public function setArabica(string $arabica): self
    {
        $this->arabica = $arabica;

        return $this;
    }

    public function getRobusta(): ?string
    {
        return $this->robusta;
    }

    public function setRobusta(string $robusta): self
    {
        $this->robusta = $robusta;

        return $this;
    }

    public function getLon(): ?string
    {
        return $this->lon;
    }

    public function setLon(string $lon): self
    {
        $this->lon = $lon;

        return $this;
    }

    public function getLat(): ?string
    {
        return $this->lat;
    }

    public function setLat(string $lat): self
    {
        $this->lat = $lat;

        return $this;
    }

    /**
     * @return Collection|Cafe[]
     */
    public function getCafes(): Collection
    {
        return $this->cafes;
    }

    public function addCafe(Cafe $cafe): self
    {
        if (!$this->cafes->contains($cafe)) {
            $this->cafes[] = $cafe;
            $cafe->setProvenance($this);
        }

        return $this;
    }

    public function removeCafe(Cafe $cafe): self
    {
        if ($this->cafes->contains($cafe)) {
            $this->cafes->removeElement($cafe);
            // set the owning side to null (unless already changed)
            if ($cafe->getProvenance() === $this) {
                $cafe->setProvenance(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Commande[]
     */
    public function getCommandes(): Collection
    {
        return $this->commandes;
    }

    public function addCommande(Commande $commande): self
    {
        if (!$this->commandes->contains($commande)) {
            $this->commandes[] = $commande;
            $commande->setOrigine($this);
        }

        return $this;
    }

    public function removeCommande(Commande $commande): self
    {
        if ($this->commandes->contains($commande)) {
            $this->commandes->removeElement($commande);
            // set the owning side to null (unless already changed)
            if ($commande->getOrigine() === $this) {
                $commande->setOrigine(null);
            }
        }

        return $this;
    }
}
