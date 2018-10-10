<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MagicStats
 *
 * @ORM\Table(name="magic_stats")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\MagicStatsRepository")
 */
class MagicStats
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
     * @var int
     *
     * @ORM\Column(name="baseMagicAccumulation", type="integer")
     */
    private $baseMagicAccumulation;

    /**
     * @var int
     *
     * @ORM\Column(name="multiplesMA", type="integer")
     */
    private $multiplesMA;

    /**
     * @var int
     *
     * @ORM\Column(name="bonusMagicAccumulation", type="integer")
     */
    private $bonusMagicAccumulation;

    /**
     * @var int
     *
     * @ORM\Column(name="finalMagicAccumulation", type="integer")
     */
    private $finalMagicAccumulation;

    /**
     * @var int
     *
     * @ORM\Column(name="baseZeon", type="integer")
     */
    private $baseZeon;

    /**
     * @var int
     *
     * @ORM\Column(name="classZeon", type="integer")
     */
    private $classZeon;

    /**
     * @var int
     *
     * @ORM\Column(name="multiplesZeon", type="integer")
     */
    private $multiplesZeon;

    /**
     * @var int
     *
     * @ORM\Column(name="bonusZeon", type="integer")
     */
    private $bonusZeon;

    /**
     * @var int
     *
     * @ORM\Column(name="finalZeon", type="integer")
     */
    private $finalZeon;

    /**
     * @var int
     *
     * @ORM\Column(name="actualZeon", type="integer")
     */
    private $actualZeon;

    /**
     * @var int
     *
     * @ORM\Column(name="baseMagicProjection", type="integer")
     */
    private $baseMagicProjection;

    /**
     * @var int
     *
     * @ORM\Column(name="bonusMagicProjection", type="integer")
     */
    private $bonusMagicProjection;

    /**
     * @var int
     *
     * @ORM\Column(name="finalMagicProjection", type="integer")
     */
    private $finalMagicProjection;

    /**
     * @var int
     *
     * @ORM\Column(name="maxMagicLevel", type="integer")
     */
    private $maxMagicLevel;

    /**
     * @var int
     *
     * @ORM\Column(name="usedMagicLevel", type="integer")
     */
    private $usedMagicLevel;

    /**
     * @var int
     *
     * @ORM\Column(name="baseInnateMagic", type="integer")
     */
    private $baseInnateMagic;

    /**
     * @var int
     *
     * @ORM\Column(name="bonusInnateMagic", type="integer")
     */
    private $bonusInnateMagic;

    /**
     * @var string
     *
     * @ORM\Column(name="freeAccessSpells", type="string", length=255)
     */
    private $freeAccessSpells;

    /**
     * @var string
     *
     * @ORM\Column(name="subpathSpells", type="string", length=255)
     */
    private $subpathSpells;

    /**
     * @var string
     *
     * @ORM\Column(name="selectedSpells", type="string", length=255)
     */
    private $selectedSpells;

    /**
     * @var string
     *
     * @ORM\Column(name="maintainedSpells", type="string", length=255)
     */
    private $maintainedSpells;

    /**
     * @var int
     *
     * @ORM\Column(name="baseZeonRecovery", type="integer")
     */
    private $baseZeonRecovery;

    /**
     * @var int
     *
     * @ORM\Column(name="finalZeonRecovery", type="integer")
     */
    private $finalZeonRecovery;

    /**
     * @var string
     *
     * @ORM\Column(name="actualZeonRecovery", type="string", length=255)
     */
    private $actualZeonRecovery;


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
     * Set baseMagicAccumulation.
     *
     * @param int $baseMagicAccumulation
     *
     * @return MagicStats
     */
    public function setBaseMagicAccumulation($baseMagicAccumulation)
    {
        $this->baseMagicAccumulation = $baseMagicAccumulation;

        return $this;
    }

    /**
     * Get baseMagicAccumulation.
     *
     * @return int
     */
    public function getBaseMagicAccumulation()
    {
        return $this->baseMagicAccumulation;
    }

    /**
     * Set multiplesMA.
     *
     * @param int $multiplesMA
     *
     * @return MagicStats
     */
    public function setMultiplesMA($multiplesMA)
    {
        $this->multiplesMA = $multiplesMA;

        return $this;
    }

    /**
     * Get multiplesMA.
     *
     * @return int
     */
    public function getMultiplesMA()
    {
        return $this->multiplesMA;
    }

    /**
     * Set bonusMagicAccumulation.
     *
     * @param int $bonusMagicAccumulation
     *
     * @return MagicStats
     */
    public function setBonusMagicAccumulation($bonusMagicAccumulation)
    {
        $this->bonusMagicAccumulation = $bonusMagicAccumulation;

        return $this;
    }

    /**
     * Get bonusMagicAccumulation.
     *
     * @return int
     */
    public function getBonusMagicAccumulation()
    {
        return $this->bonusMagicAccumulation;
    }

    /**
     * Set finalMagicAccumulation.
     *
     * @param int $finalMagicAccumulation
     *
     * @return MagicStats
     */
    public function setFinalMagicAccumulation($finalMagicAccumulation)
    {
        $this->finalMagicAccumulation = $finalMagicAccumulation;

        return $this;
    }

    /**
     * Get finalMagicAccumulation.
     *
     * @return int
     */
    public function getFinalMagicAccumulation()
    {
        return $this->finalMagicAccumulation;
    }

    /**
     * Set baseZeon.
     *
     * @param int $baseZeon
     *
     * @return MagicStats
     */
    public function setBaseZeon($baseZeon)
    {
        $this->baseZeon = $baseZeon;

        return $this;
    }

    /**
     * Get baseZeon.
     *
     * @return int
     */
    public function getBaseZeon()
    {
        return $this->baseZeon;
    }

    /**
     * Set classZeon.
     *
     * @param int $classZeon
     *
     * @return MagicStats
     */
    public function setClassZeon($classZeon)
    {
        $this->classZeon = $classZeon;

        return $this;
    }

    /**
     * Get classZeon.
     *
     * @return int
     */
    public function getClassZeon()
    {
        return $this->classZeon;
    }

    /**
     * Set multiplesZeon.
     *
     * @param int $multiplesZeon
     *
     * @return MagicStats
     */
    public function setMultiplesZeon($multiplesZeon)
    {
        $this->multiplesZeon = $multiplesZeon;

        return $this;
    }

    /**
     * Get multiplesZeon.
     *
     * @return int
     */
    public function getMultiplesZeon()
    {
        return $this->multiplesZeon;
    }

    /**
     * Set bonusZeon.
     *
     * @param int $bonusZeon
     *
     * @return MagicStats
     */
    public function setBonusZeon($bonusZeon)
    {
        $this->bonusZeon = $bonusZeon;

        return $this;
    }

    /**
     * Get bonusZeon.
     *
     * @return int
     */
    public function getBonusZeon()
    {
        return $this->bonusZeon;
    }

    /**
     * Set finalZeon.
     *
     * @param int $finalZeon
     *
     * @return MagicStats
     */
    public function setFinalZeon($finalZeon)
    {
        $this->finalZeon = $finalZeon;

        return $this;
    }

    /**
     * Get finalZeon.
     *
     * @return int
     */
    public function getFinalZeon()
    {
        return $this->finalZeon;
    }

    /**
     * Set actualZeon.
     *
     * @param int $actualZeon
     *
     * @return MagicStats
     */
    public function setActualZeon($actualZeon)
    {
        $this->actualZeon = $actualZeon;

        return $this;
    }

    /**
     * Get actualZeon.
     *
     * @return int
     */
    public function getActualZeon()
    {
        return $this->actualZeon;
    }

    /**
     * Set baseMagicProjection.
     *
     * @param int $baseMagicProjection
     *
     * @return MagicStats
     */
    public function setBaseMagicProjection($baseMagicProjection)
    {
        $this->baseMagicProjection = $baseMagicProjection;

        return $this;
    }

    /**
     * Get baseMagicProjection.
     *
     * @return int
     */
    public function getBaseMagicProjection()
    {
        return $this->baseMagicProjection;
    }

    /**
     * Set bonusMagicProjection.
     *
     * @param int $bonusMagicProjection
     *
     * @return MagicStats
     */
    public function setBonusMagicProjection($bonusMagicProjection)
    {
        $this->bonusMagicProjection = $bonusMagicProjection;

        return $this;
    }

    /**
     * Get bonusMagicProjection.
     *
     * @return int
     */
    public function getBonusMagicProjection()
    {
        return $this->bonusMagicProjection;
    }

    /**
     * Set finalMagicProjection.
     *
     * @param int $finalMagicProjection
     *
     * @return MagicStats
     */
    public function setFinalMagicProjection($finalMagicProjection)
    {
        $this->finalMagicProjection = $finalMagicProjection;

        return $this;
    }

    /**
     * Get finalMagicProjection.
     *
     * @return int
     */
    public function getFinalMagicProjection()
    {
        return $this->finalMagicProjection;
    }

    /**
     * Set maxMagicLevel.
     *
     * @param int $maxMagicLevel
     *
     * @return MagicStats
     */
    public function setMaxMagicLevel($maxMagicLevel)
    {
        $this->maxMagicLevel = $maxMagicLevel;

        return $this;
    }

    /**
     * Get maxMagicLevel.
     *
     * @return int
     */
    public function getMaxMagicLevel()
    {
        return $this->maxMagicLevel;
    }

    /**
     * Set usedMagicLevel.
     *
     * @param int $usedMagicLevel
     *
     * @return MagicStats
     */
    public function setUsedMagicLevel($usedMagicLevel)
    {
        $this->usedMagicLevel = $usedMagicLevel;

        return $this;
    }

    /**
     * Get usedMagicLevel.
     *
     * @return int
     */
    public function getUsedMagicLevel()
    {
        return $this->usedMagicLevel;
    }

    /**
     * Set baseInnateMagic.
     *
     * @param int $baseInnateMagic
     *
     * @return MagicStats
     */
    public function setBaseInnateMagic($baseInnateMagic)
    {
        $this->baseInnateMagic = $baseInnateMagic;

        return $this;
    }

    /**
     * Get baseInnateMagic.
     *
     * @return int
     */
    public function getBaseInnateMagic()
    {
        return $this->baseInnateMagic;
    }

    /**
     * Set bonusInnateMagic.
     *
     * @param int $bonusInnateMagic
     *
     * @return MagicStats
     */
    public function setBonusInnateMagic($bonusInnateMagic)
    {
        $this->bonusInnateMagic = $bonusInnateMagic;

        return $this;
    }

    /**
     * Get bonusInnateMagic.
     *
     * @return int
     */
    public function getBonusInnateMagic()
    {
        return $this->bonusInnateMagic;
    }

    /**
     * Set freeAccessSpells.
     *
     * @param string $freeAccessSpells
     *
     * @return MagicStats
     */
    public function setFreeAccessSpells($freeAccessSpells)
    {
        $this->freeAccessSpells = $freeAccessSpells;

        return $this;
    }

    /**
     * Get freeAccessSpells.
     *
     * @return string
     */
    public function getFreeAccessSpells()
    {
        return $this->freeAccessSpells;
    }

    /**
     * Set subpathSpells.
     *
     * @param string $subpathSpells
     *
     * @return MagicStats
     */
    public function setSubpathSpells($subpathSpells)
    {
        $this->subpathSpells = $subpathSpells;

        return $this;
    }

    /**
     * Get subpathSpells.
     *
     * @return string
     */
    public function getSubpathSpells()
    {
        return $this->subpathSpells;
    }

    /**
     * Set selectedSpells.
     *
     * @param string $selectedSpells
     *
     * @return MagicStats
     */
    public function setSelectedSpells($selectedSpells)
    {
        $this->selectedSpells = $selectedSpells;

        return $this;
    }

    /**
     * Get selectedSpells.
     *
     * @return string
     */
    public function getSelectedSpells()
    {
        return $this->selectedSpells;
    }

    /**
     * Set maintainedSpells.
     *
     * @param string $maintainedSpells
     *
     * @return MagicStats
     */
    public function setMaintainedSpells($maintainedSpells)
    {
        $this->maintainedSpells = $maintainedSpells;

        return $this;
    }

    /**
     * Get maintainedSpells.
     *
     * @return string
     */
    public function getMaintainedSpells()
    {
        return $this->maintainedSpells;
    }

    /**
     * Set baseZeonRecovery.
     *
     * @param int $baseZeonRecovery
     *
     * @return MagicStats
     */
    public function setBaseZeonRecovery($baseZeonRecovery)
    {
        $this->baseZeonRecovery = $baseZeonRecovery;

        return $this;
    }

    /**
     * Get baseZeonRecovery.
     *
     * @return int
     */
    public function getBaseZeonRecovery()
    {
        return $this->baseZeonRecovery;
    }

    /**
     * Set finalZeonRecovery.
     *
     * @param int $finalZeonRecovery
     *
     * @return MagicStats
     */
    public function setFinalZeonRecovery($finalZeonRecovery)
    {
        $this->finalZeonRecovery = $finalZeonRecovery;

        return $this;
    }

    /**
     * Get finalZeonRecovery.
     *
     * @return int
     */
    public function getFinalZeonRecovery()
    {
        return $this->finalZeonRecovery;
    }

    /**
     * Set actualZeonRecovery.
     *
     * @param string $actualZeonRecovery
     *
     * @return MagicStats
     */
    public function setActualZeonRecovery($actualZeonRecovery)
    {
        $this->actualZeonRecovery = $actualZeonRecovery;

        return $this;
    }

    /**
     * Get actualZeonRecovery.
     *
     * @return string
     */
    public function getActualZeonRecovery()
    {
        return $this->actualZeonRecovery;
    }
}
