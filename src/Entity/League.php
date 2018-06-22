<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

/**
 * @ORM\Entity(repositoryClass="App\Repository\LeagueRepository")
 */
class League
{
    /**
    * @ORM\OneToMany(targetEntity="App\Entity\FootballTeam", mappedBy="strip")
    */

    private $footballteams;

    public function __construct()
    {
        $this->footballteams = new ArrayCollection();
    }

    /**
     * @return Collection|FootballTeam[]
     */
    public function getFootballTeams(): Collection
    {
        return $this->footballteams;
    }


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

    public function getId()
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }
}
