<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Model\User as BaseUser;

/**
 * User
 *
 * @ORM\Table(name="user")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\UserRepository")
 */
class User extends BaseUser
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\ManyToMany(targetEntity="Games", inversedBy="players")
     */
    private $games;


    public function __construct()
    {
        parent::__construct();
    }

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
     * Add game.
     *
     * @param \AppBundle\Entity\Games $game
     *
     * @return User
     */
    public function addGame(\AppBundle\Entity\Games $game)
    {
        $this->games[] = $game;

        return $this;
    }

    /**
     * Remove game.
     *
     * @param \AppBundle\Entity\Games $game
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeGame(\AppBundle\Entity\Games $game)
    {
        return $this->games->removeElement($game);
    }

    /**
     * Get games.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getGames()
    {
        return $this->games;
    }
}
