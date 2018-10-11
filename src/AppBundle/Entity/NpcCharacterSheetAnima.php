<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * NpcCharacterSheetAnima
 *
 * @ORM\Table(name="npc_character_sheet_anima")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\NpcCharacterSheetAnimaRepository")
 */
class NpcCharacterSheetAnima
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
     * @ORM\Column(name="npcName", type="string", length=255)
     */
    private $npcName;

    /**
     * @var string
     *
     * @ORM\Column(name="npcClass", type="string", length=255)
     */
    private $npcClass;

    /**
     * @var int
     *
     * @ORM\Column(name="npcLvl", type="integer")
     */
    private $npcLvl;

    /**
     * @var int
     *
     * @ORM\Column(name="npcAge", type="integer")
     */
    private $npcAge;

    /**
     * @var string
     *
     * @ORM\Column(name="npcGender", type="string", length=255)
     */
    private $npcGender;

    /**
     * @var string
     *
     * @ORM\Column(name="npcRace", type="string", length=255)
     */
    private $npcRace;

    /**
     * @var string
     *
     * @ORM\Column(name="npcHair", type="string", length=255)
     */
    private $npcHair;

    /**
     * @var string
     *
     * @ORM\Column(name="npcEyes", type="string", length=255)
     */
    private $npcEyes;

    /**
     * @var int
     *
     * @ORM\Column(name="npcDevPoints", type="integer")
     */
    private $npcDevPoints;

    /**
     * @var int
     *
     * @ORM\Column(name="npcHeight", type="integer")
     */
    private $npcHeight;

    /**
     * @var int
     *
     * @ORM\Column(name="npcWeight", type="integer")
     */
    private $npcWeight;

    /**
     * @var int
     *
     * @ORM\Column(name="npcAppearance", type="integer")
     */
    private $npcAppearance;

    /**
     * @var int
     *
     * @ORM\Column(name="npcSize", type="integer")
     */
    private $npcSize;

    /**
     * @var int
     *
     * @ORM\Column(name="npcGnosis", type="integer")
     */
    private $npcGnosis;

    /**
     * @var int
     *
     * @ORM\Column(name="npcNatura", type="integer")
     */
    private $npcNatura;

    /**
     * @var int
     *
     * @ORM\Column(name="npcStr", type="integer")
     */
    private $npcStr;

    /**
     * @var int
     *
     * @ORM\Column(name="npcDex", type="integer")
     */
    private $npcDex;

    /**
     * @var int
     *
     * @ORM\Column(name="npcAgi", type="integer")
     */
    private $npcAgi;

    /**
     * @var int
     *
     * @ORM\Column(name="npcCon", type="integer")
     */
    private $npcCon;

    /**
     * @var int
     *
     * @ORM\Column(name="npcInt", type="integer")
     */
    private $npcInt;

    /**
     * @var int
     *
     * @ORM\Column(name="npcPow", type="integer")
     */
    private $npcPow;

    /**
     * @var int
     *
     * @ORM\Column(name="npcWillpower", type="integer")
     */
    private $npcWillpower;

    /**
     * @var int
     *
     * @ORM\Column(name="npcPer", type="integer")
     */
    private $npcPer;

    /**
     * @var int
     *
     * @ORM\Column(name="npcExperience", type="integer")
     */
    private $npcExperience;

    /**
     * @var int
     *
     * @ORM\Column(name="npcNextLvlXp", type="integer")
     */
    private $npcNextLvlXp;

    /**
     * @var string
     *
     * @ORM\Column(name="npcCurrentEffects", type="string", length=255)
     */
    private $npcCurrentEffects;

    /**
     * @var string
     *
     * @ORM\Column(name="npcNotes", type="string", length=255)
     */
    private $npcNotes;

    /**
     * @var int
     *
     * @ORM\Column(name="npcElanLevel", type="integer")
     */
    private $npcElanLevel;

    /**
     * @var string
     *
     * @ORM\Column(name="npcElanEntity", type="string",  length=255, nullable=true)
     */
    private $npcElanEntity;

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
     * @ORM\ManyToOne(targetEntity="Games", inversedBy="npcCharacterSheetAnima")
     */
    private $games;


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
     * Set npcName.
     *
     * @param string $npcName
     *
     * @return NpcCharacterSheetAnima
     */
    public function setNpcName($npcName)
    {
        $this->npcName = $npcName;

        return $this;
    }

    /**
     * Get npcName.
     *
     * @return string
     */
    public function getNpcName()
    {
        return $this->npcName;
    }

    /**
     * Set npcClass.
     *
     * @param string $npcClass
     *
     * @return NpcCharacterSheetAnima
     */
    public function setNpcClass($npcClass)
    {
        $this->npcClass = $npcClass;

        return $this;
    }

    /**
     * Get npcClass.
     *
     * @return string
     */
    public function getNpcClass()
    {
        return $this->npcClass;
    }

    /**
     * Set npcLvl.
     *
     * @param int $npcLvl
     *
     * @return NpcCharacterSheetAnima
     */
    public function setNpcLvl($npcLvl)
    {
        $this->npcLvl = $npcLvl;

        return $this;
    }

    /**
     * Get npcLvl.
     *
     * @return int
     */
    public function getNpcLvl()
    {
        return $this->npcLvl;
    }

    /**
     * Set npcAge.
     *
     * @param int $npcAge
     *
     * @return NpcCharacterSheetAnima
     */
    public function setNpcAge($npcAge)
    {
        $this->npcAge = $npcAge;

        return $this;
    }

    /**
     * Get npcAge.
     *
     * @return int
     */
    public function getNpcAge()
    {
        return $this->npcAge;
    }

    /**
     * Set npcGender.
     *
     * @param string $npcGender
     *
     * @return NpcCharacterSheetAnima
     */
    public function setNpcGender($npcGender)
    {
        $this->npcGender = $npcGender;

        return $this;
    }

    /**
     * Get npcGender.
     *
     * @return string
     */
    public function getNpcGender()
    {
        return $this->npcGender;
    }

    /**
     * Set npcRace.
     *
     * @param string $npcRace
     *
     * @return NpcCharacterSheetAnima
     */
    public function setNpcRace($npcRace)
    {
        $this->npcRace = $npcRace;

        return $this;
    }

    /**
     * Get npcRace.
     *
     * @return string
     */
    public function getNpcRace()
    {
        return $this->npcRace;
    }

    /**
     * Set npcHair.
     *
     * @param string $npcHair
     *
     * @return NpcCharacterSheetAnima
     */
    public function setNpcHair($npcHair)
    {
        $this->npcHair = $npcHair;

        return $this;
    }

    /**
     * Get npcHair.
     *
     * @return string
     */
    public function getNpcHair()
    {
        return $this->npcHair;
    }

    /**
     * Set npcEyes.
     *
     * @param string $npcEyes
     *
     * @return NpcCharacterSheetAnima
     */
    public function setNpcEyes($npcEyes)
    {
        $this->npcEyes = $npcEyes;

        return $this;
    }

    /**
     * Get npcEyes.
     *
     * @return string
     */
    public function getNpcEyes()
    {
        return $this->npcEyes;
    }

    /**
     * Set npcDevPoints.
     *
     * @param int $npcDevPoints
     *
     * @return NpcCharacterSheetAnima
     */
    public function setNpcDevPoints($npcDevPoints)
    {
        $this->npcDevPoints = $npcDevPoints;

        return $this;
    }

    /**
     * Get npcDevPoints.
     *
     * @return int
     */
    public function getNpcDevPoints()
    {
        return $this->npcDevPoints;
    }

    /**
     * Set npcHeight.
     *
     * @param int $npcHeight
     *
     * @return NpcCharacterSheetAnima
     */
    public function setNpcHeight($npcHeight)
    {
        $this->npcHeight = $npcHeight;

        return $this;
    }

    /**
     * Get npcHeight.
     *
     * @return int
     */
    public function getNpcHeight()
    {
        return $this->npcHeight;
    }

    /**
     * Set npcWeight.
     *
     * @param int $npcWeight
     *
     * @return NpcCharacterSheetAnima
     */
    public function setNpcWeight($npcWeight)
    {
        $this->npcWeight = $npcWeight;

        return $this;
    }

    /**
     * Get npcWeight.
     *
     * @return int
     */
    public function getNpcWeight()
    {
        return $this->npcWeight;
    }

    /**
     * Set npcAppearance.
     *
     * @param int $npcAppearance
     *
     * @return NpcCharacterSheetAnima
     */
    public function setNpcAppearance($npcAppearance)
    {
        $this->npcAppearance = $npcAppearance;

        return $this;
    }

    /**
     * Get npcAppearance.
     *
     * @return int
     */
    public function getNpcAppearance()
    {
        return $this->npcAppearance;
    }

    /**
     * Set npcSize.
     *
     * @param int $npcSize
     *
     * @return NpcCharacterSheetAnima
     */
    public function setNpcSize($npcSize)
    {
        $this->npcSize = $npcSize;

        return $this;
    }

    /**
     * Get npcSize.
     *
     * @return int
     */
    public function getNpcSize()
    {
        return $this->npcSize;
    }

    /**
     * Set npcGnosis.
     *
     * @param int $npcGnosis
     *
     * @return NpcCharacterSheetAnima
     */
    public function setNpcGnosis($npcGnosis)
    {
        $this->npcGnosis = $npcGnosis;

        return $this;
    }

    /**
     * Get npcGnosis.
     *
     * @return int
     */
    public function getNpcGnosis()
    {
        return $this->npcGnosis;
    }

    /**
     * Set npcNatura.
     *
     * @param int $npcNatura
     *
     * @return NpcCharacterSheetAnima
     */
    public function setNpcNatura($npcNatura)
    {
        $this->npcNatura = $npcNatura;

        return $this;
    }

    /**
     * Get npcNatura.
     *
     * @return int
     */
    public function getNpcNatura()
    {
        return $this->npcNatura;
    }

    /**
     * Set npcStrength.
     *
     * @param int $npcStrength
     *
     * @return NpcCharacterSheetAnima
     */
    public function setNpcStrength($npcStrength)
    {
        $this->npcStrength = $npcStrength;

        return $this;
    }

    /**
     * Get npcStrength.
     *
     * @return int
     */
    public function getNpcStrength()
    {
        return $this->npcStrength;
    }

    /**
     * Set npcDex.
     *
     * @param int $npcDex
     *
     * @return NpcCharacterSheetAnima
     */
    public function setNpcDex($npcDex)
    {
        $this->npcDex = $npcDex;

        return $this;
    }

    /**
     * Get npcDex.
     *
     * @return int
     */
    public function getNpcDex()
    {
        return $this->npcDex;
    }

    /**
     * Set npcAgi.
     *
     * @param int $npcAgi
     *
     * @return NpcCharacterSheetAnima
     */
    public function setNpcAgi($npcAgi)
    {
        $this->npcAgi = $npcAgi;

        return $this;
    }

    /**
     * Get npcAgi.
     *
     * @return int
     */
    public function getNpcAgi()
    {
        return $this->npcAgi;
    }

    /**
     * Set npcCon.
     *
     * @param int $npcCon
     *
     * @return NpcCharacterSheetAnima
     */
    public function setNpcCon($npcCon)
    {
        $this->npcCon = $npcCon;

        return $this;
    }

    /**
     * Get npcCon.
     *
     * @return int
     */
    public function getNpcCon()
    {
        return $this->npcCon;
    }

    /**
     * Set npcInt.
     *
     * @param int $npcInt
     *
     * @return NpcCharacterSheetAnima
     */
    public function setNpcInt($npcInt)
    {
        $this->npcInt = $npcInt;

        return $this;
    }

    /**
     * Get npcInt.
     *
     * @return int
     */
    public function getNpcInt()
    {
        return $this->npcInt;
    }

    /**
     * Set npcPow.
     *
     * @param int $npcPow
     *
     * @return NpcCharacterSheetAnima
     */
    public function setNpcPow($npcPow)
    {
        $this->npcPow = $npcPow;

        return $this;
    }

    /**
     * Get npcPow.
     *
     * @return int
     */
    public function getNpcPow()
    {
        return $this->npcPow;
    }

    /**
     * Set npcWillpower.
     *
     * @param int $npcWillpower
     *
     * @return NpcCharacterSheetAnima
     */
    public function setNpcWillpower($npcWillpower)
    {
        $this->npcWillpower = $npcWillpower;

        return $this;
    }

    /**
     * Get npcWillpower.
     *
     * @return int
     */
    public function getNpcWillpower()
    {
        return $this->npcWillpower;
    }

    /**
     * Set npcPer.
     *
     * @param int $npcPer
     *
     * @return NpcCharacterSheetAnima
     */
    public function setNpcPer($npcPer)
    {
        $this->npcPer = $npcPer;

        return $this;
    }

    /**
     * Get npcPer.
     *
     * @return int
     */
    public function getNpcPer()
    {
        return $this->npcPer;
    }

    /**
     * Set npcExperience.
     *
     * @param int $npcExperience
     *
     * @return NpcCharacterSheetAnima
     */
    public function setNpcExperience($npcExperience)
    {
        $this->npcExperience = $npcExperience;

        return $this;
    }

    /**
     * Get npcExperience.
     *
     * @return int
     */
    public function getNpcExperience()
    {
        return $this->npcExperience;
    }

    /**
     * Set npcNextLvlXp.
     *
     * @param int $npcNextLvlXp
     *
     * @return NpcCharacterSheetAnima
     */
    public function setNpcNextLvlXp($npcNextLvlXp)
    {
        $this->npcNextLvlXp = $npcNextLvlXp;

        return $this;
    }

    /**
     * Get npcNextLvlXp.
     *
     * @return int
     */
    public function getNpcNextLvlXp()
    {
        return $this->npcNextLvlXp;
    }

    /**
     * Set npcResistances.
     *
     * @param string $npcResistances
     *
     * @return NpcCharacterSheetAnima
     */
    public function setNpcResistances($npcResistances)
    {
        $this->npcResistances = $npcResistances;

        return $this;
    }

    /**
     * Get npcResistances.
     *
     * @return string
     */
    public function getNpcResistances()
    {
        return $this->npcResistances;
    }

    /**
     * Set npcMagicAccumulation.
     *
     * @param string $npcMagicAccumulation
     *
     * @return NpcCharacterSheetAnima
     */
    public function setNpcMagicAccumulation($npcMagicAccumulation)
    {
        $this->npcMagicAccumulation = $npcMagicAccumulation;

        return $this;
    }

    /**
     * Get npcMagicAccumulation.
     *
     * @return string
     */
    public function getNpcMagicAccumulation()
    {
        return $this->npcMagicAccumulation;
    }

    /**
     * Set npcCurrentEffects.
     *
     * @param string $npcCurrentEffects
     *
     * @return NpcCharacterSheetAnima
     */
    public function setNpcCurrentEffects($npcCurrentEffects)
    {
        $this->npcCurrentEffects = $npcCurrentEffects;

        return $this;
    }

    /**
     * Get npcCurrentEffects.
     *
     * @return string
     */
    public function getNpcCurrentEffects()
    {
        return $this->npcCurrentEffects;
    }

    /**
     * Set npcNotes.
     *
     * @param string $npcNotes
     *
     * @return NpcCharacterSheetAnima
     */
    public function setNpcNotes($npcNotes)
    {
        $this->npcNotes = $npcNotes;

        return $this;
    }

    /**
     * Get npcNotes.
     *
     * @return string
     */
    public function getNpcNotes()
    {
        return $this->npcNotes;
    }

    /**
     * Set npcStr.
     *
     * @param int $npcStr
     *
     * @return NpcCharacterSheetAnima
     */
    public function setNpcStr($npcStr)
    {
        $this->npcStr = $npcStr;

        return $this;
    }

    /**
     * Get npcStr.
     *
     * @return int
     */
    public function getNpcStr()
    {
        return $this->npcStr;
    }

    /**
     * Set npcElanLevel.
     *
     * @param int $npcElanLevel
     *
     * @return NpcCharacterSheetAnima
     */
    public function setNpcElanLevel($npcElanLevel)
    {
        $this->npcElanLevel = $npcElanLevel;

        return $this;
    }

    /**
     * Get npcElanLevel.
     *
     * @return int
     */
    public function getNpcElanLevel()
    {
        return $this->npcElanLevel;
    }

    /**
     * Set npcElanEntity.
     *
     * @param string|null $npcElanEntity
     *
     * @return NpcCharacterSheetAnima
     */
    public function setNpcElanEntity($npcElanEntity = null)
    {
        $this->npcElanEntity = $npcElanEntity;

        return $this;
    }

    /**
     * Get npcElanEntity.
     *
     * @return string|null
     */
    public function getNpcElanEntity()
    {
        return $this->npcElanEntity;
    }

    /**
     * Set resistances.
     *
     * @param \AppBundle\Entity\Resistances $resistances
     *
     * @return NpcCharacterSheetAnima
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
     * @return NpcCharacterSheetAnima
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

    /**
     * Set games.
     *
     * @param \AppBundle\Entity\Games|null $games
     *
     * @return NpcCharacterSheetAnima
     */
    public function setGames(\AppBundle\Entity\Games $games = null)
    {
        $this->games = $games;

        return $this;
    }

    /**
     * Get games.
     *
     * @return \AppBundle\Entity\Games|null
     */
    public function getGames()
    {
        return $this->games;
    }
}
