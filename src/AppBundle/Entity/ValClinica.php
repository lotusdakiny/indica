<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="valclinica")
 */
class ValClinica
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
	 * @ORM\Column(type="string", length=50, nullable=true)
	 */
	private $p42;
	
	/**
	 * @ORM\Column(type="string", length=50, nullable=true)
	 */
	private $p43;
	
	/**
	 * @ORM\Column(type="string", length=10, nullable=true)
	 */
	private $p44a;
	
	/**
	 * @ORM\Column(type="string", length=10, nullable=true)
	 */
	private $p44b;
	
	/**
	 * @ORM\Column(type="string", length=10, nullable=true)
	 */
	private $p44c;
	
	/**
	 * @ORM\Column(type="string", length=10, nullable=true)
	 */
	private $p44d;
	
	/**
	 * @ORM\Column(type="string", length=100, nullable=true)
	 */
	private $p45;
	
	/**
	 * @ORM\Column(type="array", nullable=true)
	 */
	private $p46 = array();
	
	/**
	 * @ORM\Column(type="string", length=10, nullable=true)
	 */
	private $p47;
	
	/**
	 * @ORM\Column(type="string", length=10, nullable=true)
	 */
	private $p48;
	
	/**
	 * @ORM\Column(type="string", length=10, nullable=true)
	 */
	private $p49;
	
	/**
	 * @ORM\Column(type="string", length=80, nullable=true)
	 */
	private $p50;
	
	/**
	 * @ORM\Column(type="string", length=120, nullable=true)
	 */
	private $p51;
	
	/**
	 * @ORM\Column(type="string", length=10, nullable=true)
	 */
	private $p52;
	
	/**
	 * @ORM\Column(type="string", length=10, nullable=true)
	 */
	private $p53;

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
     * Set userid
     *
     * @param integer $userid
     *
     * @return ValClinica
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

    /**
     * Set p42
     *
     * @param string $p42
     *
     * @return ValClinica
     */
    public function setP42($p42)
    {
        $this->p42 = $p42;

        return $this;
    }

    /**
     * Get p42
     *
     * @return string
     */
    public function getP42()
    {
        return $this->p42;
    }

    /**
     * Set p43
     *
     * @param string $p43
     *
     * @return ValClinica
     */
    public function setP43($p43)
    {
        $this->p43 = $p43;

        return $this;
    }

    /**
     * Get p43
     *
     * @return string
     */
    public function getP43()
    {
        return $this->p43;
    }

    /**
     * Set p44a
     *
     * @param string $p44a
     *
     * @return ValClinica
     */
    public function setP44a($p44a)
    {
        $this->p44a = $p44a;

        return $this;
    }

    /**
     * Get p44a
     *
     * @return string
     */
    public function getP44a()
    {
        return $this->p44a;
    }

    /**
     * Set p44b
     *
     * @param string $p44b
     *
     * @return ValClinica
     */
    public function setP44b($p44b)
    {
        $this->p44b = $p44b;

        return $this;
    }

    /**
     * Get p44b
     *
     * @return string
     */
    public function getP44b()
    {
        return $this->p44b;
    }

    /**
     * Set p44c
     *
     * @param string $p44c
     *
     * @return ValClinica
     */
    public function setP44c($p44c)
    {
        $this->p44c = $p44c;

        return $this;
    }

    /**
     * Get p44c
     *
     * @return string
     */
    public function getP44c()
    {
        return $this->p44c;
    }

    /**
     * Set p44d
     *
     * @param string $p44d
     *
     * @return ValClinica
     */
    public function setP44d($p44d)
    {
        $this->p44d = $p44d;

        return $this;
    }

    /**
     * Get p44d
     *
     * @return string
     */
    public function getP44d()
    {
        return $this->p44d;
    }

    /**
     * Set p45
     *
     * @param string $p45
     *
     * @return ValClinica
     */
    public function setP45($p45)
    {
        $this->p45 = $p45;

        return $this;
    }

    /**
     * Get p45
     *
     * @return string
     */
    public function getP45()
    {
        return $this->p45;
    }

    /**
     * Set p46
     *
     * @param string $p46
     *
     * @return ValClinica
     */
    public function setP46($p46)
    {
        $this->p46 = $p46;

        return $this;
    }

    /**
     * Get p46
     *
     * @return string
     */
    public function getP46()
    {
        return $this->p46;
    }

    /**
     * Set p47
     *
     * @param string $p47
     *
     * @return ValClinica
     */
    public function setP47($p47)
    {
        $this->p47 = $p47;

        return $this;
    }

    /**
     * Get p47
     *
     * @return string
     */
    public function getP47()
    {
        return $this->p47;
    }

    /**
     * Set p48
     *
     * @param string $p48
     *
     * @return ValClinica
     */
    public function setP48($p48)
    {
        $this->p48 = $p48;

        return $this;
    }

    /**
     * Get p48
     *
     * @return string
     */
    public function getP48()
    {
        return $this->p48;
    }

    /**
     * Set p49
     *
     * @param string $p49
     *
     * @return ValClinica
     */
    public function setP49($p49)
    {
        $this->p49 = $p49;

        return $this;
    }

    /**
     * Get p49
     *
     * @return string
     */
    public function getP49()
    {
        return $this->p49;
    }

    /**
     * Set p50
     *
     * @param string $p50
     *
     * @return ValClinica
     */
    public function setP50($p50)
    {
        $this->p50 = $p50;

        return $this;
    }

    /**
     * Get p50
     *
     * @return string
     */
    public function getP50()
    {
        return $this->p50;
    }

    /**
     * Set p51
     *
     * @param string $p51
     *
     * @return ValClinica
     */
    public function setP51($p51)
    {
        $this->p51 = $p51;

        return $this;
    }

    /**
     * Get p51
     *
     * @return string
     */
    public function getP51()
    {
        return $this->p51;
    }

    /**
     * Set p52
     *
     * @param string $p52
     *
     * @return ValClinica
     */
    public function setP52($p52)
    {
        $this->p52 = $p52;

        return $this;
    }

    /**
     * Get p52
     *
     * @return string
     */
    public function getP52()
    {
        return $this->p52;
    }

    /**
     * Set p53
     *
     * @param string $p53
     *
     * @return ValClinica
     */
    public function setP53($p53)
    {
        $this->p53 = $p53;

        return $this;
    }

    /**
     * Get p53
     *
     * @return string
     */
    public function getP53()
    {
        return $this->p53;
    }
}
