<?php

namespace App\Entity;
use App\Repository\PersonneRepository;
use App\Repository\AdminRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=AdminRepository::class)
 */
class Admin extends PersonneRepository
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
    private $id_A;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Departement;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdA(): ?string
    {
        return $this->id_A;
    }

    public function setIdA(string $id_A): self
    {
        $this->id_A = $id_A;

        return $this;
    }

    public function getDepartement(): ?string
    {
        return $this->Departement;
    }

    public function setDepartement(string $Departement): self
    {
        $this->Departement = $Departement;

        return $this;
    }
}
