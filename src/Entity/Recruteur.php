<?php

namespace App\Entity;
use App\Repository\PersonneRepository;
use App\Repository\RecruteurRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=RecruteurRepository::class)
 */
class Recruteur extends PersonneRepository
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $civilite;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Courrier;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Fonction;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $NomEtablissement;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCivilite(): ?string
    {
        return $this->civilite;
    }

    public function setCivilite(string $civilite): self
    {
        $this->civilite = $civilite;

        return $this;
    }

    public function getCourrier(): ?string
    {
        return $this->Courrier;
    }

    public function setCourrier(string $Courrier): self
    {
        $this->Courrier = $Courrier;

        return $this;
    }

    public function getFonction(): ?string
    {
        return $this->Fonction;
    }

    public function setFonction(string $Fonction): self
    {
        $this->Fonction = $Fonction;

        return $this;
    }

    public function getNomEtablissement(): ?string
    {
        return $this->NomEtablissement;
    }

    public function setNomEtablissement(string $NomEtablissement): self
    {
        $this->NomEtablissement = $NomEtablissement;

        return $this;
    }
}
