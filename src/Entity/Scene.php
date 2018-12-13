<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\SceneRepository")
 */
class Scene
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
     * @ORM\Column(type="string", length=600, nullable=true)
     */
    private $description;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $picture;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $sound;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Player", mappedBy="scene")
     */
    private $players;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Path", mappedBy="start", orphanRemoval=true)
     */
    private $start;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Path", mappedBy="end", orphanRemoval=true)
     */
    private $end;



    public function __construct()
    {
        $this->players = new ArrayCollection();
        $this->start = new ArrayCollection();
        $this->end = new ArrayCollection();
    }

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

    public function getPicture(): ?string
    {
        return $this->picture;
    }

    public function setPicture(?string $picture): self
    {
        $this->picture = $picture;

        return $this;
    }

    public function getSound(): ?string
    {
        return $this->sound;
    }

    public function setSound(?string $sound): self
    {
        $this->sound = $sound;

        return $this;
    }


    /**
     * @return Collection|Player[]
     */
    public function getPlayers(): Collection
    {
        return $this->players;
    }

    public function addCharacter(Player $player): self
    {
        if (!$this->players->contains($player)) {
            $this->players[] = $player;
            $player->setScene($this);
        }

        return $this;
    }

    public function removePlayer(Player $player): self
    {
        if ($this->players->contains($player)) {
            $this->players->removeElement($player);
            // set the owning side to null (unless already changed)
            if ($player->getScene() === $this) {
                $player->setScene(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Path[]
     */
    public function getStart(): Collection
    {
        return $this->start;
    }

    public function addStart(Path $start): self
    {
        if (!$this->start->contains($start)) {
            $this->start[] = $start;
            $start->setStart($this);
        }

        return $this;
    }

    public function removeStart(Path $start): self
    {
        if ($this->start->contains($start)) {
            $this->start->removeElement($start);
            // set the owning side to null (unless already changed)
            if ($start->getStart() === $this) {
                $start->setStart(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Path[]
     */
    public function getEnd(): Collection
    {
        return $this->end;
    }

    public function addEnd(Path $end): self
    {
        if (!$this->end->contains($end)) {
            $this->end[] = $end;
            $end->setEnd($this);
        }

        return $this;
    }

    public function removeEnd(Path $end): self
    {
        if ($this->end->contains($end)) {
            $this->end->removeElement($end);
            // set the owning side to null (unless already changed)
            if ($end->getEnd() === $this) {
                $end->setEnd(null);
            }
        }

        return $this;
    }

}
