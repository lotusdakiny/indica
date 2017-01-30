<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 * @ORM\Table(name="cuestionario")
 */
class Cuestionario
{
	/**
	 * @ORM\Id
	 * @ORM\Column(type="integer")
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	private $id;
	
	/**
	 * @ORM\Column(type="integer")
	 */
	private $userid;
	
	/**
	 * @ORM\Column(type="string", length=255)
	 * @Assert\NotBlank()
	 */
	private $p1;

	/**
	 * @ORM\Column(type="string", length=255)
	 * @Assert\NotBlank()
	 */
	private $p2;

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set p1
     *
     * @param string $p1
     *
     * @return Cuestionario
     */
    public function setP1($p1)
    {
        $this->p1 = $p1;

        return $this;
    }

    /**
     * Get p1
     *
     * @return string
     */
    public function getP1()
    {
        return $this->p1;
    }

    /**
     * Set p2
     *
     * @param string $p2
     *
     * @return Cuestionario
     */
    public function setP2($p2)
    {
        $this->p2 = $p2;

        return $this;
    }

    /**
     * Get p2
     *
     * @return string
     */
    public function getP2()
    {
        return $this->p2;
    }

    /**
     * Set userid
     *
     * @param integer $userid
     *
     * @return Cuestionario
     */
    public function setUserid($userid)
    {
        $this->userid = $userid;

        return $this;
    }

    /**
     * Get userid
     *
     * @return integer
     */
    public function getUserid()
    {
        return $this->userid;
    }
}
