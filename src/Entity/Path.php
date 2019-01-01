<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\PathRepository")
 */
class Path
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
    private $name;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $description;

    /**
     * @ORM\Column(type="integer", options={"default" : 0})
     */
    private $cost;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Scene", inversedBy="start")
     * @ORM\JoinColumn(nullable=false)
     */
    private $start;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Scene", inversedBy="end")
     * @ORM\JoinColumn(nullable=false)
     */
    private $end;

    /**
     * @ORM\Column(type="string", length=2)
     */
    private $cardinal;


    public function __toString(): string
    {
        return $this->name;
    }


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getCost(): ?int
    {
        return $this->cost;
    }

    public function setCost(int $cost): self
    {
        $this->cost = $cost;

        return $this;
    }

    public function getStart(): ?Scene
    {
        return $this->start;
    }

    public function setStart(?Scene $start): self
    {
        $this->start = $start;

        return $this;
    }

    public function getEnd(): ?Scene
    {
        return $this->end;
    }

    public function setEnd(?Scene $end): self
    {
        $this->end = $end;

        return $this;
    }

    public function getCardinal(): ?string
    {
        return $this->cardinal;
    }

    public function setCardinal(string $cardinal): self
    {
        $this->cardinal = $cardinal;

        return $this;
    }

}
