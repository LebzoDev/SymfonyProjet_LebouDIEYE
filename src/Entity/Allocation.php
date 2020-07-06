<?php

namespace App\Entity;

use App\Repository\AllocationRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=AllocationRepository::class)
 */
class Allocation
{

    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $idAlloc;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $matricule;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $numeroChambre;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $typeChambre;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $numeroBatiment;

    public function getIdAlloc(): ?int
    {
        return $this->idAlloc;
    }

    public function setIdAlloc(int $idAlloc): self
    {
        $this->idAlloc = $idAlloc;

        return $this;
    }

    public function getMatricule(): ?string
    {
        return $this->matricule;
    }

    public function setMatricule(string $matricule): self
    {
        $this->matricule = $matricule;

        return $this;
    }

    public function getNumeroChambre(): ?string
    {
        return $this->numeroChambre;
    }

    public function setNumeroChambre(string $numeroChambre): self
    {
        $this->numeroChambre = $numeroChambre;

        return $this;
    }

    public function getTypeChambre(): ?string
    {
        return $this->typeChambre;
    }

    public function setTypeChambre(string $typeChambre): self
    {
        $this->typeChambre = $typeChambre;

        return $this;
    }

    public function getNumeroBatiment(): ?string
    {
        return $this->numeroBatiment;
    }

    public function setNumeroBatiment(string $numeroBatiment): self
    {
        $this->numeroBatiment = $numeroBatiment;

        return $this;
    }
}
