<?php

namespace App\Entity;

use App\Repository\RoleRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=RoleRepository::class)
 */
class Role
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=Movie::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $MovieID;

    /**
     * @ORM\ManyToOne(targetEntity=Actor::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $ActorID;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Role;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMovieID(): ?Movie
    {
        return $this->MovieID;
    }

    public function setMovieID(?Movie $MovieID): self
    {
        $this->MovieID = $MovieID;

        return $this;
    }

    public function getActorID(): ?Actor
    {
        return $this->ActorID;
    }

    public function setActorID(?Actor $ActorID): self
    {
        $this->ActorID = $ActorID;

        return $this;
    }

    public function getRole(): ?string
    {
        return $this->Role;
    }

    public function setRole(string $Role): self
    {
        $this->Role = $Role;

        return $this;
    }
}
