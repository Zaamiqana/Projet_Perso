<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PlayerCharacterSheetAnima
 *
 * @ORM\Table(name="player_character_sheet_anima")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\PlayerCharacterSheetAnimaRepository")
 */
class PlayerCharacterSheetAnima
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
     * @ORM\Column(name="charName", type="string", length=255)
     */
    private $charName;

    /**
     * @var string
     *
     * @ORM\Column(name="charRace", type="string", length=255)
     */
    private $charRace;

    /**
     * @var string
     *
     * @ORM\Column(name="charClass", type="string", length=255)
     */
    private $charClass;

    /**
     * @var int
     *
     * @ORM\Column(name="charLevel", type="integer")
     */
    private $charLevel;

    /**
     * @var int
     *
     * @ORM\Column(name="charAge", type="integer")
     */
    private $charAge;

    /**
     * @var string
     *
     * @ORM\Column(name="charGender", type="string", length=255)
     */
    private $charGender;

    /**
     * @var string
     *
     * @ORM\Column(name="charHair", type="string", length=255)
     */
    private $charHair;

    /**
     * @var string
     *
     * @ORM\Column(name="charEyes", type="string", length=255)
     */
    private $charEyes;

    /**
     * @var int
     *
     * @ORM\Column(name="charDevPoints", type="integer")
     */
    private $charDevPoints;

    /**
     * @var int
     *
     * @ORM\Column(name="charHeight", type="integer")
     */
    private $charHeight;

    /**
     * @var int
     *
     * @ORM\Column(name="charWeight", type="integer")
     */
    private $charWeight;

    /**
     * @var int
     *
     * @ORM\Column(name="charAppearance", type="integer")
     */
    private $charAppearance;

    /**
     * @var int
     *
     * @ORM\Column(name="charSize", type="integer")
     */
    private $charSize;

    /**
     * @var int
     *
     * @ORM\Column(name="charGnosis", type="integer")
     */
    private $charGnosis;

    /**
     * @var int
     *
     * @ORM\Column(name="charNatura", type="integer")
     */
    private $charNatura;

    /**
     * @var int
     *
     * @ORM\Column(name="charStr", type="integer")
     */
    private $charStr;

    /**
     * @var int
     *
     * @ORM\Column(name="charDex", type="integer")
     */
    private $charDex;

    /**
     * @var int
     *
     * @ORM\Column(name="charAgi", type="integer")
     */
    private $charAgi;

    /**
     * @var int
     *
     * @ORM\Column(name="charCon", type="integer")
     */
    private $charCon;

    /**
     * @var int
     *
     * @ORM\Column(name="charInt", type="integer")
     */
    private $charInt;

    /**
     * @var int
     *
     * @ORM\Column(name="charPow", type="integer")
     */
    private $charPow;

    /**
     * @var int
     *
     * @ORM\Column(name="charWillpower", type="integer")
     */
    private $charWillpower;

    /**
     * @var int
     *
     * @ORM\Column(name="charPer", type="integer")
     */
    private $charPer;

    /**
     * @var int
     *
     * @ORM\Column(name="charExperience", type="integer")
     */
    private $charExperience;

    /**
     * @var int
     *
     * @ORM\Column(name="charNextLvlXp", type="integer")
     */
    private $charNextLvlXp;

    /**
     * @var string
     *
     * @ORM\Column(name="charCurrentEffects", type="string", length=255)
     */
    private $charCurrentEffects;

    /**
     * @var string
     *
     * @ORM\Column(name="charNotes", type="string", length=255)
     */
    private $charNotes;

    /**
     * @var int
     *
     * @ORM\Column(name="charElanLevel", type="integer")
     */
    private $charElanLevel;

    /**
     * @var string
     *
     * @ORM\Column(name="charElanEntity", type="string",  length=255, nullable=true)
     */
    private $charElanEntity;

    /**
     * @ORM\OneToOne(targetEntity="Resistances", cascade={"persist"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $resistances;

    /**
     * @ORM\OneToOne(targetEntity="Inventory", cascade={"persist"})
     */
    private $inventory;

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
     * Set charName.
     *
     * @param string $charName
     *
     * @return PlayerCharacterSheetAnima
     */
    public function setCharName($charName)
    {
        $this->charName = $charName;

        return $this;
    }

    /**
     * Get charName.
     *
     * @return string
     */
    public function getCharName()
    {
        return $this->charName;
    }

    /**
     * Set charRace.
     *
     * @param string $charRace
     *
     * @return PlayerCharacterSheetAnima
     */
    public function setCharRace($charRace)
    {
        $this->charRace = $charRace;

        return $this;
    }

    /**
     * Get charRace.
     *
     * @return string
     */
    public function getCharRace()
    {
        return $this->charRace;
    }

    /**
     * Set charClass.
     *
     * @param string $charClass
     *
     * @return PlayerCharacterSheetAnima
     */
    public function setCharClass($charClass)
    {
        $this->charClass = $charClass;

        return $this;
    }

    /**
     * Get charClass.
     *
     * @return string
     */
    public function getCharClass()
    {
        return $this->charClass;
    }

    /**
     * Set charLevel.
     *
     * @param int $charLevel
     *
     * @return PlayerCharacterSheetAnima
     */
    public function setCharLevel($charLevel)
    {
        $this->charLevel = $charLevel;

        return $this;
    }

    /**
     * Get charLevel.
     *
     * @return int
     */
    public function getCharLevel()
    {
        return $this->charLevel;
    }

    /**
     * Set charAge.
     *
     * @param int $charAge
     *
     * @return PlayerCharacterSheetAnima
     */
    public function setCharAge($charAge)
    {
        $this->charAge = $charAge;

        return $this;
    }

    /**
     * Get charAge.
     *
     * @return int
     */
    public function getCharAge()
    {
        return $this->charAge;
    }

    /**
     * Set charGender.
     *
     * @param string $charGender
     *
     * @return PlayerCharacterSheetAnima
     */
    public function setCharGender($charGender)
    {
        $this->charGender = $charGender;

        return $this;
    }

    /**
     * Get charGender.
     *
     * @return string
     */
    public function getCharGender()
    {
        return $this->charGender;
    }

    /**
     * Set charHair.
     *
     * @param int $charHair
     *
     * @return PlayerCharacterSheetAnima
     */
    public function setCharHair($charHair)
    {
        $this->charHair = $charHair;

        return $this;
    }

    /**
     * Get charHair.
     *
     * @return int
     */
    public function getCharHair()
    {
        return $this->charHair;
    }

    /**
     * Set charEyes.
     *
     * @param string $charEyes
     *
     * @return PlayerCharacterSheetAnima
     */
    public function setCharEyes($charEyes)
    {
        $this->charEyes = $charEyes;

        return $this;
    }

    /**
     * Get charEyes.
     *
     * @return string
     */
    public function getCharEyes()
    {
        return $this->charEyes;
    }

    /**
     * Set charDevPoints.
     *
     * @param int $charDevPoints
     *
     * @return PlayerCharacterSheetAnima
     */
    public function setCharDevPoints($charDevPoints)
    {
        $this->charDevPoints = $charDevPoints;

        return $this;
    }

    /**
     * Get charDevPoints.
     *
     * @return int
     */
    public function getCharDevPoints()
    {
        return $this->charDevPoints;
    }

    /**
     * Set charHeight.
     *
     * @param int $charHeight
     *
     * @return PlayerCharacterSheetAnima
     */
    public function setCharHeight($charHeight)
    {
        $this->charHeight = $charHeight;

        return $this;
    }

    /**
     * Get charHeight.
     *
     * @return int
     */
    public function getCharHeight()
    {
        return $this->charHeight;
    }

    /**
     * Set charWeight.
     *
     * @param int $charWeight
     *
     * @return PlayerCharacterSheetAnima
     */
    public function setCharWeight($charWeight)
    {
        $this->charWeight = $charWeight;

        return $this;
    }

    /**
     * Get charWeight.
     *
     * @return int
     */
    public function getCharWeight()
    {
        return $this->charWeight;
    }

    /**
     * Set charAppearance.
     *
     * @param int $charAppearance
     *
     * @return PlayerCharacterSheetAnima
     */
    public function setCharAppearance($charAppearance)
    {
        $this->charAppearance = $charAppearance;

        return $this;
    }

    /**
     * Get charAppearance.
     *
     * @return int
     */
    public function getCharAppearance()
    {
        return $this->charAppearance;
    }

    /**
     * Set charSize.
     *
     * @param int $charSize
     *
     * @return PlayerCharacterSheetAnima
     */
    public function setCharSize($charSize)
    {
        $this->charSize = $charSize;

        return $this;
    }

    /**
     * Get charSize.
     *
     * @return int
     */
    public function getCharSize()
    {
        return $this->charSize;
    }

    /**
     * Set charGnosis.
     *
     * @param int $charGnosis
     *
     * @return PlayerCharacterSheetAnima
     */
    public function setCharGnosis($charGnosis)
    {
        $this->charGnosis = $charGnosis;

        return $this;
    }

    /**
     * Get charGnosis.
     *
     * @return int
     */
    public function getCharGnosis()
    {
        return $this->charGnosis;
    }

    /**
     * Set charNatura.
     *
     * @param int $charNatura
     *
     * @return PlayerCharacterSheetAnima
     */
    public function setCharNatura($charNatura)
    {
        $this->charNatura = $charNatura;

        return $this;
    }

    /**
     * Get charNatura.
     *
     * @return int
     */
    public function getCharNatura()
    {
        return $this->charNatura;
    }

    /**
     * Set charStr.
     *
     * @param int $charStr
     *
     * @return PlayerCharacterSheetAnima
     */
    public function setCharStr($charStr)
    {
        $this->charStr = $charStr;

        return $this;
    }

    /**
     * Get charStr.
     *
     * @return int
     */
    public function getCharStr()
    {
        return $this->charStr;
    }

    /**
     * Set charDex.
     *
     * @param int $charDex
     *
     * @return PlayerCharacterSheetAnima
     */
    public function setCharDex($charDex)
    {
        $this->charDex = $charDex;

        return $this;
    }

    /**
     * Get charDex.
     *
     * @return int
     */
    public function getCharDex()
    {
        return $this->charDex;
    }

    /**
     * Set charAgi.
     *
     * @param int $charAgi
     *
     * @return PlayerCharacterSheetAnima
     */
    public function setCharAgi($charAgi)
    {
        $this->charAgi = $charAgi;

        return $this;
    }

    /**
     * Get charAgi.
     *
     * @return int
     */
    public function getCharAgi()
    {
        return $this->charAgi;
    }

    /**
     * Set charCon.
     *
     * @param int $charCon
     *
     * @return PlayerCharacterSheetAnima
     */
    public function setCharCon($charCon)
    {
        $this->charCon = $charCon;

        return $this;
    }

    /**
     * Get charCon.
     *
     * @return int
     */
    public function getCharCon()
    {
        return $this->charCon;
    }

    /**
     * Set charInt.
     *
     * @param int $charInt
     *
     * @return PlayerCharacterSheetAnima
     */
    public function setCharInt($charInt)
    {
        $this->charInt = $charInt;

        return $this;
    }

    /**
     * Get charInt.
     *
     * @return int
     */
    public function getCharInt()
    {
        return $this->charInt;
    }

    /**
     * Set charPow.
     *
     * @param int $charPow
     *
     * @return PlayerCharacterSheetAnima
     */
    public function setCharPow($charPow)
    {
        $this->charPow = $charPow;

        return $this;
    }

    /**
     * Get charPow.
     *
     * @return int
     */
    public function getCharPow()
    {
        return $this->charPow;
    }

    /**
     * Set charWillpower.
     *
     * @param int $charWillpower
     *
     * @return PlayerCharacterSheetAnima
     */
    public function setCharWillpower($charWillpower)
    {
        $this->charWillpower = $charWillpower;

        return $this;
    }

    /**
     * Get charWillpower.
     *
     * @return int
     */
    public function getCharWillpower()
    {
        return $this->charWillpower;
    }

    /**
     * Set charPer.
     *
     * @param int $charPer
     *
     * @return PlayerCharacterSheetAnima
     */
    public function setCharPer($charPer)
    {
        $this->charPer = $charPer;

        return $this;
    }

    /**
     * Get charPer.
     *
     * @return int
     */
    public function getCharPer()
    {
        return $this->charPer;
    }

    /**
     * Set charExperience.
     *
     * @param int $charExperience
     *
     * @return PlayerCharacterSheetAnima
     */
    public function setCharExperience($charExperience)
    {
        $this->charExperience = $charExperience;

        return $this;
    }

    /**
     * Get charExperience.
     *
     * @return int
     */
    public function getCharExperience()
    {
        return $this->charExperience;
    }

    /**
     * Set charNextLvlXp.
     *
     * @param int $charNextLvlXp
     *
     * @return PlayerCharacterSheetAnima
     */
    public function setCharNextLvlXp($charNextLvlXp)
    {
        $this->charNextLvlXp = $charNextLvlXp;

        return $this;
    }

    /**
     * Get charNextLvlXp.
     *
     * @return int
     */
    public function getCharNextLvlXp()
    {
        return $this->charNextLvlXp;
    }

    /**
     * Set charCurrentEffects.
     *
     * @param string $charCurrentEffects
     *
     * @return PlayerCharacterSheetAnima
     */
    public function setCharCurrentEffects($charCurrentEffects)
    {
        $this->charCurrentEffects = $charCurrentEffects;

        return $this;
    }

    /**
     * Get charCurrentEffects.
     *
     * @return string
     */
    public function getCharCurrentEffects()
    {
        return $this->charCurrentEffects;
    }

    /**
     * Set charNotes.
     *
     * @param string $charNotes
     *
     * @return PlayerCharacterSheetAnima
     */
    public function setCharNotes($charNotes)
    {
        $this->charNotes = $charNotes;

        return $this;
    }

    /**
     * Get charNotes.
     *
     * @return string
     */
    public function getCharNotes()
    {
        return $this->charNotes;
    }

    /**
     * Set charElanLevel.
     *
     * @param int $charElanLevel
     *
     * @return PlayerCharacterSheetAnima
     */
    public function setCharElanLevel($charElanLevel)
    {
        $this->charElanLevel = $charElanLevel;

        return $this;
    }

    /**
     * Get charElanLevel.
     *
     * @return int
     */
    public function getCharElanLevel()
    {
        return $this->charElanLevel;
    }

    /**
     * Set charElanEntity.
     *
     * @param string|null $charElanEntity
     *
     * @return PlayerCharacterSheetAnima
     */
    public function setCharElanEntity($charElanEntity = null)
    {
        $this->charElanEntity = $charElanEntity;

        return $this;
    }

    /**
     * Get charElanEntity.
     *
     * @return string|null
     */
    public function getCharElanEntity()
    {
        return $this->charElanEntity;
    }

    /**
     * Set resistances.
     *
     * @param \AppBundle\Entity\Resistances $resistances
     *
     * @return PlayerCharacterSheetAnima
     */
    public function setResistances(\AppBundle\Entity\Resistances $resistances)
    {
        $this->resistances = $resistances;

        return $this;
    }

    /**
     * Get resistances.
     *
     * @return \AppBundle\Entity\Resistances
     */
    public function getResistances()
    {
        return $this->resistances;
    }

    /**
     * Set inventory.
     *
     * @param \AppBundle\Entity\Inventory|null $inventory
     *
     * @return PlayerCharacterSheetAnima
     */
    public function setInventory(\AppBundle\Entity\Inventory $inventory = null)
    {
        $this->inventory = $inventory;

        return $this;
    }

    /**
     * Get inventory.
     *
     * @return \AppBundle\Entity\Inventory|null
     */
    public function getInventory()
    {
        return $this->inventory;
    }
}
