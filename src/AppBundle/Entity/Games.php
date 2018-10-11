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
     * @ORM\OneToMany(targetEntity="NpcCharacterSheetAnima", mappedBy="games")
     */
    private $npcCharacterSheetAnima;

    /**
     * @ORM\OneToMany(targetEntity="PlayerCharacterSheetAnima", mappedBy="games")
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

    /**
     * Set name.
     *
     * @param string $name
     *
     * @return Games
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set maps.
     *
     * @param string $maps
     *
     * @return Games
     */
    public function setMaps($maps)
    {
        $this->maps = $maps;

        return $this;
    }

    /**
     * Get maps.
     *
     * @return string
     */
    public function getMaps()
    {
        return $this->maps;
    }

    /**
     * Set backgroundMusic.
     *
     * @param string $backgroundMusic
     *
     * @return Games
     */
    public function setBackgroundMusic($backgroundMusic)
    {
        $this->backgroundMusic = $backgroundMusic;

        return $this;
    }

    /**
     * Get backgroundMusic.
     *
     * @return string
     */
    public function getBackgroundMusic()
    {
        return $this->backgroundMusic;
    }

    /**
     * Add npcCharacterSheetAnima.
     *
     * @param \AppBundle\Entity\NpcCharacterSheetAnima $npcCharacterSheetAnima
     *
     * @return Games
     */
    public function addNpcCharacterSheetAnima(\AppBundle\Entity\NpcCharacterSheetAnima $npcCharacterSheetAnima)
    {
        $this->npcCharacterSheetAnima[] = $npcCharacterSheetAnima;

        return $this;
    }

    /**
     * Remove npcCharacterSheetAnima.
     *
     * @param \AppBundle\Entity\NpcCharacterSheetAnima $npcCharacterSheetAnima
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeNpcCharacterSheetAnima(\AppBundle\Entity\NpcCharacterSheetAnima $npcCharacterSheetAnima)
    {
        return $this->npcCharacterSheetAnima->removeElement($npcCharacterSheetAnima);
    }

    /**
     * Get npcCharacterSheetAnima.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getNpcCharacterSheetAnima()
    {
        return $this->npcCharacterSheetAnima;
    }

    /**
     * Add playerCharacterSheetAnima.
     *
     * @param \AppBundle\Entity\PlayerCharacterSheetAnima $playerCharacterSheetAnima
     *
     * @return Games
     */
    public function addPlayerCharacterSheetAnima(\AppBundle\Entity\PlayerCharacterSheetAnima $playerCharacterSheetAnima)
    {
        $this->playerCharacterSheetAnima[] = $playerCharacterSheetAnima;

        return $this;
    }

    /**
     * Remove playerCharacterSheetAnima.
     *
     * @param \AppBundle\Entity\PlayerCharacterSheetAnima $playerCharacterSheetAnima
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removePlayerCharacterSheetAnima(\AppBundle\Entity\PlayerCharacterSheetAnima $playerCharacterSheetAnima)
    {
        return $this->playerCharacterSheetAnima->removeElement($playerCharacterSheetAnima);
    }

    /**
     * Get playerCharacterSheetAnima.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPlayerCharacterSheetAnima()
    {
        return $this->playerCharacterSheetAnima;
    }
}
