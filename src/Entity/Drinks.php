<?php

namespace App\Entity;

use App\Repository\DrinksRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=DrinksRepository::class)
 */
class Drinks
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
    private $marque;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $gout;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $packageFileName;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getGout(): ?string
    {
        return $this->gout;
    }

    public function setGout(string $gout): self
    {
        $this->gout = $gout;

        return $this;
    }

    public function getPackageFileName(): ?string
    {
        return $this->packageFileName;
    }

    public function setPackageFileName(string $packageFileName): self
    {
        $this->packageFileName = $packageFileName;

        return $this;
    }
}
