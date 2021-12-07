<?php

namespace App\Entity;
use App\Repository\PersonneRepository;

use App\Repository\EtudiantRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=EtudiantRepository::class)
 */
class Etudiant extends PersonneRepository
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
    private $CNE;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Filiere;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCNE(): ?string
    {
        return $this->CNE;
    }

    public function setCNE(string $CNE): self
    {
        $this->CNE = $CNE;

        return $this;
    }

    public function getFiliere(): ?string
    {
        return $this->Filiere;
    }

    public function setFiliere(string $Filiere): self
    {
        $this->Filiere = $Filiere;

        return $this;
    }
}
