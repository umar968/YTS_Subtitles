<?php

namespace App\Entity;

use App\Repository\MovieGenreRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=MovieGenreRepository::class)
 */
class MovieGenre
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
     * @ORM\ManyToOne(targetEntity=Genre::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $GenreID;

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

    public function getGenreID(): ?Genre
    {
        return $this->GenreID;
    }

    public function setGenreID(?Genre $GenreID): self
    {
        $this->GenreID = $GenreID;

        return $this;
    }
}
