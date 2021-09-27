<?php

namespace App\Entity;

use App\Repository\SubtitleRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=SubtitleRepository::class)
 */
class Subtitle
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
     * @ORM\Column(type="string", length=255)
     */
    private $Subtitle_File;

    /**
     * @ORM\ManyToOne(targetEntity=Movie::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $MovieID;

    /**
     * @ORM\ManyToOne(targetEntity=Language::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $LanguageID;

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

    public function getSubtitleFile(): ?string
    {
        return $this->Subtitle_File;
    }

    public function setSubtitleFile(string $Subtitle_File): self
    {
        $this->Subtitle_File = $Subtitle_File;

        return $this;
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

    public function getLanguageID(): ?Language
    {
        return $this->LanguageID;
    }

    public function setLanguageID(?Language $LanguageID): self
    {
        $this->LanguageID = $LanguageID;

        return $this;
    }
}
