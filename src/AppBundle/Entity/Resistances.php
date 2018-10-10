<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Resistances
 *
 * @ORM\Table(name="resistances")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ResistancesRepository")
 */
class Resistances
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
     * @ORM\Column(name="basePresence", type="integer")
     */
    private $basePresence;

    /**
     * @var string
     *
     * @ORM\Column(name="physResBonuses", type="integer")
     */
    private $physResBonuses;

    /**
     * @var int
     *
     * @ORM\Column(name="finalPhysRes", type="integer")
     */
    private $finalPhysRes;

    /**
     * @var string
     *
     * @ORM\Column(name="diseaseResBonuses", type="integer")
     */
    private $diseaseResBonuses;

    /**
     * @var int
     *
     * @ORM\Column(name="finalDiseaseRes", type="integer")
     */
    private $finalDiseaseRes;

    /**
     * @var string
     *
     * @ORM\Column(name="poisonResBonuses", type="integer")
     */
    private $poisonResBonuses;

    /**
     * @var int
     *
     * @ORM\Column(name="finalPoisonRes", type="integer")
     */
    private $finalPoisonRes;

    /**
     * @var string
     *
     * @ORM\Column(name="magicResBonuses", type="integer")
     */
    private $magicResBonuses;

    /**
     * @var int
     *
     * @ORM\Column(name="finalMagicRes", type="integer")
     */
    private $finalMagicRes;

    /**
     * @var string
     *
     * @ORM\Column(name="psychicResBonuses", type="integer")
     */
    private $psychicResBonuses;

    /**
     * @var int
     *
     * @ORM\Column(name="finalPsychicRes", type="integer")
     */
    private $finalPsychicRes;


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
     * Set basePresence.
     *
     * @param int $basePresence
     *
     * @return Resistances
     */
    public function setBasePresence($basePresence)
    {
        $this->basePresence = $basePresence;

        return $this;
    }

    /**
     * Get basePresence.
     *
     * @return int
     */
    public function getBasePresence()
    {
        return $this->basePresence;
    }

    /**
     * Set physResBonuses.
     *
     * @param string $physResBonuses
     *
     * @return Resistances
     */
    public function setPhysResBonuses($physResBonuses)
    {
        $this->physResBonuses = $physResBonuses;

        return $this;
    }

    /**
     * Get physResBonuses.
     *
     * @return string
     */
    public function getPhysResBonuses()
    {
        return $this->physResBonuses;
    }

    /**
     * Set finalPhysRes.
     *
     * @param int $finalPhysRes
     *
     * @return Resistances
     */
    public function setFinalPhysRes($finalPhysRes)
    {
        $this->finalPhysRes = $finalPhysRes;

        return $this;
    }

    /**
     * Get finalPhysRes.
     *
     * @return int
     */
    public function getFinalPhysRes()
    {
        return $this->finalPhysRes;
    }

    /**
     * Set diseaseResBonuses.
     *
     * @param int $diseaseResBonuses
     *
     * @return Resistances
     */
    public function setDiseaseResBonuses($diseaseResBonuses)
    {
        $this->diseaseResBonuses = $diseaseResBonuses;

        return $this;
    }

    /**
     * Get diseaseResBonuses.
     *
     * @return int
     */
    public function getDiseaseResBonuses()
    {
        return $this->diseaseResBonuses;
    }

    /**
     * Set finalDiseaseRes.
     *
     * @param int $finalDiseaseRes
     *
     * @return Resistances
     */
    public function setFinalDiseaseRes($finalDiseaseRes)
    {
        $this->finalDiseaseRes = $finalDiseaseRes;

        return $this;
    }

    /**
     * Get finalDiseaseRes.
     *
     * @return int
     */
    public function getFinalDiseaseRes()
    {
        return $this->finalDiseaseRes;
    }

    /**
     * Set poisonResBonuses.
     *
     * @param int $poisonResBonuses
     *
     * @return Resistances
     */
    public function setPoisonResBonuses($poisonResBonuses)
    {
        $this->poisonResBonuses = $poisonResBonuses;

        return $this;
    }

    /**
     * Get poisonResBonuses.
     *
     * @return int
     */
    public function getPoisonResBonuses()
    {
        return $this->poisonResBonuses;
    }

    /**
     * Set finalPoisonRes.
     *
     * @param int $finalPoisonRes
     *
     * @return Resistances
     */
    public function setFinalPoisonRes($finalPoisonRes)
    {
        $this->finalPoisonRes = $finalPoisonRes;

        return $this;
    }

    /**
     * Get finalPoisonRes.
     *
     * @return int
     */
    public function getFinalPoisonRes()
    {
        return $this->finalPoisonRes;
    }

    /**
     * Set magicResBonuses.
     *
     * @param int $magicResBonuses
     *
     * @return Resistances
     */
    public function setMagicResBonuses($magicResBonuses)
    {
        $this->magicResBonuses = $magicResBonuses;

        return $this;
    }

    /**
     * Get magicResBonuses.
     *
     * @return int
     */
    public function getMagicResBonuses()
    {
        return $this->magicResBonuses;
    }

    /**
     * Set finalMagicRes.
     *
     * @param int $finalMagicRes
     *
     * @return Resistances
     */
    public function setFinalMagicRes($finalMagicRes)
    {
        $this->finalMagicRes = $finalMagicRes;

        return $this;
    }

    /**
     * Get finalMagicRes.
     *
     * @return int
     */
    public function getFinalMagicRes()
    {
        return $this->finalMagicRes;
    }

    /**
     * Set psychicResBonuses.
     *
     * @param int $psychicResBonuses
     *
     * @return Resistances
     */
    public function setPsychicResBonuses($psychicResBonuses)
    {
        $this->psychicResBonuses = $psychicResBonuses;

        return $this;
    }

    /**
     * Get psychicResBonuses.
     *
     * @return int
     */
    public function getPsychicResBonuses()
    {
        return $this->psychicResBonuses;
    }

    /**
     * Set finalPsychicRes.
     *
     * @param int $finalPsychicRes
     *
     * @return Resistances
     */
    public function setFinalPsychicRes($finalPsychicRes)
    {
        $this->finalPsychicRes = $finalPsychicRes;

        return $this;
    }

    /**
     * Get finalPsychicRes.
     *
     * @return int
     */
    public function getFinalPsychicRes()
    {
        return $this->finalPsychicRes;
    }
}
