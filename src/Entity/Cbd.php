<?php

namespace App\Entity;

use App\Repository\CbdRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CbdRepository::class)
 */
class Cbd
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
    private $percent;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $forme;

    /**
     * @return mixed
     */
    public function getForme()
    {
        return $this->forme;
    }

    /**
     * @param mixed $forme
     */
    public function setForme($forme): void
    {
        $this->forme = $forme;
    }

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $cbdFileName;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $marque;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPercent(): ?string
    {
        return $this->percent;
    }

    public function setPercent(string $percent): self
    {
        $this->percent = $percent;

        return $this;
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

    public function getCbdFileName(): ?string
    {
        return $this->cbdFileName;
    }

    public function setCbdFileName(string $cbdFileName): self
    {
        $this->cbdFileName = $cbdFileName;

        return $this;
    }

    public function getMarque(): ?string
    {
        return $this->marque;
    }

    public function setMarque(string $marque): self
    {
        $this->marque = $marque;

        return $this;
    }
}
