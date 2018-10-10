<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PsychicAbilities
 *
 * @ORM\Table(name="psychic_abilities")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\PsychicAbilitiesRepository")
 */
class PsychicAbilities
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
     * @ORM\Column(name="basePsychicPotential", type="integer")
     */
    private $basePsychicPotential;

    /**
     * @var int
     *
     * @ORM\Column(name="bonusPsychicPotential", type="integer")
     */
    private $bonusPsychicPotential;

    /**
     * @var int
     *
     * @ORM\Column(name="basePsychicProjection", type="integer")
     */
    private $basePsychicProjection;

    /**
     * @var int
     *
     * @ORM\Column(name="bonusPsychicProjection", type="integer")
     */
    private $bonusPsychicProjection;

    /**
     * @var int
     *
     * @ORM\Column(name="finalPsychicPotential", type="integer")
     */
    private $finalPsychicPotential;

    /**
     * @var int
     *
     * @ORM\Column(name="finalPsychicProjection", type="integer")
     */
    private $finalPsychicProjection;

    /**
     * @var int
     *
     * @ORM\Column(name="basePyschicPoints", type="integer")
     */
    private $basePyschicPoints;

    /**
     * @var int
     *
     * @ORM\Column(name="freePsychicPoints", type="integer")
     */
    private $freePsychicPoints;

    /**
     * @var int
     *
     * @ORM\Column(name="actualPsychicPoints", type="integer")
     */
    private $actualPsychicPoints;

    /**
     * @var string
     *
     * @ORM\Column(name="psychicDisciplines", type="string", length=255)
     */
    private $psychicDisciplines;

    /**
     * @var string
     *
     * @ORM\Column(name="innatePsyPowers", type="string", length=255)
     */
    private $innatePsyPowers;


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
     * Set basePsychicPotential.
     *
     * @param int $basePsychicPotential
     *
     * @return PsychicAbilities
     */
    public function setBasePsychicPotential($basePsychicPotential)
    {
        $this->basePsychicPotential = $basePsychicPotential;

        return $this;
    }

    /**
     * Get basePsychicPotential.
     *
     * @return int
     */
    public function getBasePsychicPotential()
    {
        return $this->basePsychicPotential;
    }

    /**
     * Set bonusPsychicPotential.
     *
     * @param int $bonusPsychicPotential
     *
     * @return PsychicAbilities
     */
    public function setBonusPsychicPotential($bonusPsychicPotential)
    {
        $this->bonusPsychicPotential = $bonusPsychicPotential;

        return $this;
    }

    /**
     * Get bonusPsychicPotential.
     *
     * @return int
     */
    public function getBonusPsychicPotential()
    {
        return $this->bonusPsychicPotential;
    }

    /**
     * Set basePsychicProjection.
     *
     * @param int $basePsychicProjection
     *
     * @return PsychicAbilities
     */
    public function setBasePsychicProjection($basePsychicProjection)
    {
        $this->basePsychicProjection = $basePsychicProjection;

        return $this;
    }

    /**
     * Get basePsychicProjection.
     *
     * @return int
     */
    public function getBasePsychicProjection()
    {
        return $this->basePsychicProjection;
    }

    /**
     * Set bonusPsychicProjection.
     *
     * @param int $bonusPsychicProjection
     *
     * @return PsychicAbilities
     */
    public function setBonusPsychicProjection($bonusPsychicProjection)
    {
        $this->bonusPsychicProjection = $bonusPsychicProjection;

        return $this;
    }

    /**
     * Get bonusPsychicProjection.
     *
     * @return int
     */
    public function getBonusPsychicProjection()
    {
        return $this->bonusPsychicProjection;
    }

    /**
     * Set finalPsychicPotential.
     *
     * @param int $finalPsychicPotential
     *
     * @return PsychicAbilities
     */
    public function setFinalPsychicPotential($finalPsychicPotential)
    {
        $this->finalPsychicPotential = $finalPsychicPotential;

        return $this;
    }

    /**
     * Get finalPsychicPotential.
     *
     * @return int
     */
    public function getFinalPsychicPotential()
    {
        return $this->finalPsychicPotential;
    }

    /**
     * Set finalPsychicProjection.
     *
     * @param int $finalPsychicProjection
     *
     * @return PsychicAbilities
     */
    public function setFinalPsychicProjection($finalPsychicProjection)
    {
        $this->finalPsychicProjection = $finalPsychicProjection;

        return $this;
    }

    /**
     * Get finalPsychicProjection.
     *
     * @return int
     */
    public function getFinalPsychicProjection()
    {
        return $this->finalPsychicProjection;
    }

    /**
     * Set basePyschicPoints.
     *
     * @param int $basePyschicPoints
     *
     * @return PsychicAbilities
     */
    public function setBasePyschicPoints($basePyschicPoints)
    {
        $this->basePyschicPoints = $basePyschicPoints;

        return $this;
    }

    /**
     * Get basePyschicPoints.
     *
     * @return int
     */
    public function getBasePyschicPoints()
    {
        return $this->basePyschicPoints;
    }

    /**
     * Set freePsychicPoints.
     *
     * @param int $freePsychicPoints
     *
     * @return PsychicAbilities
     */
    public function setFreePsychicPoints($freePsychicPoints)
    {
        $this->freePsychicPoints = $freePsychicPoints;

        return $this;
    }

    /**
     * Get freePsychicPoints.
     *
     * @return int
     */
    public function getFreePsychicPoints()
    {
        return $this->freePsychicPoints;
    }

    /**
     * Set actualPsychicPoints.
     *
     * @param int $actualPsychicPoints
     *
     * @return PsychicAbilities
     */
    public function setActualPsychicPoints($actualPsychicPoints)
    {
        $this->actualPsychicPoints = $actualPsychicPoints;

        return $this;
    }

    /**
     * Get actualPsychicPoints.
     *
     * @return int
     */
    public function getActualPsychicPoints()
    {
        return $this->actualPsychicPoints;
    }

    /**
     * Set psychicDisciplines.
     *
     * @param string $psychicDisciplines
     *
     * @return PsychicAbilities
     */
    public function setPsychicDisciplines($psychicDisciplines)
    {
        $this->psychicDisciplines = $psychicDisciplines;

        return $this;
    }

    /**
     * Get psychicDisciplines.
     *
     * @return string
     */
    public function getPsychicDisciplines()
    {
        return $this->psychicDisciplines;
    }

    /**
     * Set innatePsyPowers.
     *
     * @param string $innatePsyPowers
     *
     * @return PsychicAbilities
     */
    public function setInnatePsyPowers($innatePsyPowers)
    {
        $this->innatePsyPowers = $innatePsyPowers;

        return $this;
    }

    /**
     * Get innatePsyPowers.
     *
     * @return string
     */
    public function getInnatePsyPowers()
    {
        return $this->innatePsyPowers;
    }
}
