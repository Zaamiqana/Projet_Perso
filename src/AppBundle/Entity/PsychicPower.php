<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PsychicPower
 *
 * @ORM\Table(name="psychic_power")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\PsychicPowerRepository")
 */
class PsychicPower
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
     * @ORM\Column(name="powerName", type="string", length=255)
     */
    private $powerName;

    /**
     * @var int
     *
     * @ORM\Column(name="powerLvl", type="integer")
     */
    private $powerLvl;


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
     * Set powerName.
     *
     * @param string $powerName
     *
     * @return PsychicPower
     */
    public function setPowerName($powerName)
    {
        $this->powerName = $powerName;

        return $this;
    }

    /**
     * Get powerName.
     *
     * @return string
     */
    public function getPowerName()
    {
        return $this->powerName;
    }

    /**
     * Set powerLvl.
     *
     * @param int $powerLvl
     *
     * @return PsychicPower
     */
    public function setPowerLvl($powerLvl)
    {
        $this->powerLvl = $powerLvl;

        return $this;
    }

    /**
     * Get powerLvl.
     *
     * @return int
     */
    public function getPowerLvl()
    {
        return $this->powerLvl;
    }
}
