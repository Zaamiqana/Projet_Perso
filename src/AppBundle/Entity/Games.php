<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Games
 *
 * @ORM\Table(name="games")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\GamesRepository")
 */
class Games
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="gamePlayed", type="string", length=255)
     */
    private $gamePlayed;

    /**
     * @ORM\ManyToMany(targetEntity="User", mappedBy="games")
     */
    private $players;

    /**
     * @ORM\OneToMany(targetEntity="NpcCharacterSheetAnima")
     */
    private $npcCharacterSheetAnima;

    /**
     * @ORM\OneToMany(targetEntity="PlayerCharacterSheetAnima")
     */
    private $playerCharacterSheetAnima;

    /**
     * @var string
     *
     * @ORM\Column(name="scenarioName", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="maps", type="string", length=255)
     */
    private $maps;

    /**
     * @var string
     *
     * @ORM\Column(name="backgroundMusic", type="string", length=255)
     */
    private $backgroundMusic;


    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set game.
     *
     * @param string $game
     *
     * @return Games
     */
    public function setGame($game)
    {
        $this->game = $game;

        return $this;
    }

    /**
     * Get game.
     *
     * @return string
     */
    public function getGame()
    {
        return $this->game;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->players = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set gamePlayed.
     *
     * @param string $gamePlayed
     *
     * @return Games
     */
    public function setGamePlayed($gamePlayed)
    {
        $this->gamePlayed = $gamePlayed;

        return $this;
    }

    /**
     * Get gamePlayed.
     *
     * @return string
     */
    public function getGamePlayed()
    {
        return $this->gamePlayed;
    }

    /**
     * Add player.
     *
     * @param \AppBundle\Entity\User $player
     *
     * @return Games
     */
    public function addPlayer(\AppBundle\Entity\User $player)
    {
        $this->players[] = $player;

        return $this;
    }

    /**
     * Remove player.
     *
     * @param \AppBundle\Entity\User $player
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removePlayer(\AppBundle\Entity\User $player)
    {
        return $this->players->removeElement($player);
    }

    /**
     * Get players.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPlayers()
    {
        return $this->players;
    }
}
