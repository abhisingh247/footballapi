<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\FootballTeamRepository")
 */
class FootballTeam
{

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\League", inversedBy="footballteams")
     * @ORM\JoinColumn(name="strip", referencedColumnName="id")
     */

     private $strip;

     public function getStrip(): League
     {
         return $this->strip;
     }

     public function setStrip(League $strip): self
     {
         $this->strip = $strip;

         return $this;
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

    // public function getStrip(): int
    // {
    //     return $this->strip;
    // }
    //
    // public function setStrip(int $strip): self
    // {
    //     $this->strip = $strip;
    //
    //     return $this;
    // }
}
