<?php

namespace App\Entity;

use App\Repository\MovieRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=MovieRepository::class)
 */
class Movie
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
    private $Title;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $Year;

    /**
     * @ORM\Column(type="time", nullable=true)
     */
    private $Runtime;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $IMDM_Rating;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $Release_Date;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $Description;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Trailer;

    /**
     * @ORM\ManyToMany(targetEntity=Genre::class)
     */
    private $Genre;

    /**
     * @ORM\ManyToMany(targetEntity=Actor::class)
     */
    private $Actors;

    public function __construct()
    {
        $this->Genre = new ArrayCollection();
        $this->Actors = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->Title;
    }

    public function setTitle(string $Title): self
    {
        $this->Title = $Title;

        return $this;
    }

    public function getYear(): ?string
    {
        return $this->Year;
    }

    public function setYear(?string $Year): self
    {
        $this->Year = $Year;

        return $this;
    }

    public function getRuntime(): ?\DateTimeInterface
    {
        return $this->Runtime;
    }

    public function setRuntime(?\DateTimeInterface $Runtime): self
    {
        $this->Runtime = $Runtime;

        return $this;
    }

    public function getIMDMRating(): ?float
    {
        return $this->IMDM_Rating;
    }

    public function setIMDMRating(?float $IMDM_Rating): self
    {
        $this->IMDM_Rating = $IMDM_Rating;

        return $this;
    }

    public function getReleaseDate(): ?\DateTimeInterface
    {
        return $this->Release_Date;
    }

    public function setReleaseDate(?\DateTimeInterface $Release_Date): self
    {
        $this->Release_Date = $Release_Date;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->Description;
    }

    public function setDescription(?string $Description): self
    {
        $this->Description = $Description;

        return $this;
    }

    public function getTrailer(): ?string
    {
        return $this->Trailer;
    }

    public function setTrailer(string $Trailer): self
    {
        $this->Trailer = $Trailer;

        return $this;
    }

    /**
     * @return Collection|Genre[]
     */
    public function getGenre(): Collection
    {
        return $this->Genre;
    }

    public function addGenre(Genre $genre): self
    {
        if (!$this->Genre->contains($genre)) {
            $this->Genre[] = $genre;
        }

        return $this;
    }

    public function removeGenre(Genre $genre): self
    {
        $this->Genre->removeElement($genre);

        return $this;
    }

    /**
     * @return Collection|Actor[]
     */
    public function getActors(): Collection
    {
        return $this->Actors;
    }

    public function addActor(Actor $actor): self
    {
        if (!$this->Actors->contains($actor)) {
            $this->Actors[] = $actor;
        }

        return $this;
    }

    public function removeActor(Actor $actor): self
    {
        $this->Actors->removeElement($actor);

        return $this;
    }

    public function __toString()
    {

        return $this->getTitle();
    }
}
