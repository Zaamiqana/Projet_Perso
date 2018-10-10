<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Inventory
 *
 * @ORM\Table(name="inventory")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\InventoryRepository")
 */
class Inventory
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
     * @ORM\Column(name="charMiscItem", type="string", length=255)
     */
    private $charMiscItem;

    /**
     * @var string
     *
     * @ORM\Column(name="charWeapon", type="string", length=255)
     */
    private $charWeapon;

    /**
     * @var int
     *
     * @ORM\Column(name="charGold", type="integer")
     */
    private $charGold;

    /**
     * @var int
     *
     * @ORM\Column(name="charSilver", type="integer")
     */
    private $charSilver;

    /**
     * @var int
     *
     * @ORM\Column(name="charCopper", type="integer")
     */
    private $charCopper;

    /**
     * @var string
     *
     * @ORM\Column(name="charRation", type="string", length=255)
     */
    private $charRation;


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
     * Set charMiscItem.
     *
     * @param string $charMiscItem
     *
     * @return Inventory
     */
    public function setCharMiscItem($charMiscItem)
    {
        $this->charMiscItem = $charMiscItem;

        return $this;
    }

    /**
     * Get charMiscItem.
     *
     * @return string
     */
    public function getCharMiscItem()
    {
        return $this->charMiscItem;
    }

    /**
     * Set charWeapon.
     *
     * @param string $charWeapon
     *
     * @return Inventory
     */
    public function setCharWeapon($charWeapon)
    {
        $this->charWeapon = $charWeapon;

        return $this;
    }

    /**
     * Get charWeapon.
     *
     * @return string
     */
    public function getCharWeapon()
    {
        return $this->charWeapon;
    }

    /**
     * Set charGold.
     *
     * @param int $charGold
     *
     * @return Inventory
     */
    public function setCharGold($charGold)
    {
        $this->charGold = $charGold;

        return $this;
    }

    /**
     * Get charGold.
     *
     * @return int
     */
    public function getCharGold()
    {
        return $this->charGold;
    }

    /**
     * Set charSilver.
     *
     * @param int $charSilver
     *
     * @return Inventory
     */
    public function setCharSilver($charSilver)
    {
        $this->charSilver = $charSilver;

        return $this;
    }

    /**
     * Get charSilver.
     *
     * @return int
     */
    public function getCharSilver()
    {
        return $this->charSilver;
    }

    /**
     * Set charCopper.
     *
     * @param int $charCopper
     *
     * @return Inventory
     */
    public function setCharCopper($charCopper)
    {
        $this->charCopper = $charCopper;

        return $this;
    }

    /**
     * Get charCopper.
     *
     * @return int
     */
    public function getCharCopper()
    {
        return $this->charCopper;
    }

    /**
     * Set charRation.
     *
     * @param string $charRation
     *
     * @return Inventory
     */
    public function setCharRation($charRation)
    {
        $this->charRation = $charRation;

        return $this;
    }

    /**
     * Get charRation.
     *
     * @return string
     */
    public function getCharRation()
    {
        return $this->charRation;
    }
}
