<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="calidad")
 */
class Calidad
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
	 * @ORM\Column(type="string", length=10, nullable=true)
	 */
	private $p62;
	
	/**
	 * @ORM\Column(type="string", length=10, nullable=true)
	 */
	private $p63;
	
	/**
	 * @ORM\Column(type="string", length=10, nullable=true)
	 */
	private $p64;
	
	/**
	 * @ORM\Column(type="string", length=10, nullable=true)
	 */
	private $p65;
	
	/**
	 * @ORM\Column(type="string", length=10, nullable=true)
	 */
	private $p66;
	
	/**
	 * @ORM\Column(type="string", length=10, nullable=true)
	 */
	private $p67;
	
	/**
	 * @ORM\Column(type="string", length=80, nullable=true)
	 */
	private $p68;
	
	/**
	 * @ORM\Column(type="string", length=10, nullable=true)
	 */
	private $p69;
	
	/**
	 * @ORM\Column(type="string", length=10, nullable=true)
	 */
	private $p70;
	
	/**
	 * @ORM\Column(type="string", length=10, nullable=true)
	 */
	private $p71;
	
	/**
	 * @ORM\Column(type="string", length=10, nullable=true)
	 */
	private $p72;
	
	/**
	 * @ORM\Column(type="string", length=30, nullable=true)
	 */
	private $p73;
	
	/**
	 * @ORM\Column(type="string", length=10, nullable=true)
	 */
	private $p74a;
	
	/**
	 * @ORM\Column(type="string", length=10, nullable=true)
	 */
	private $p74b;
	
	/**
	 * @ORM\Column(type="string", length=10, nullable=true)
	 */
	private $p74c;
	
	/**
	 * @ORM\Column(type="string", length=10, nullable=true)
	 */
	private $p74d;
	
	/**
	 * @ORM\Column(type="string", length=60, nullable=true)
	 */
	private $p75;
	

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
     * @return Calidad
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
     * Set p62
     *
     * @param string $p62
     *
     * @return Calidad
     */
    public function setP62($p62)
    {
        $this->p62 = $p62;

        return $this;
    }

    /**
     * Get p62
     *
     * @return string
     */
    public function getP62()
    {
        return $this->p62;
    }

    /**
     * Set p63
     *
     * @param string $p63
     *
     * @return Calidad
     */
    public function setP63($p63)
    {
        $this->p63 = $p63;

        return $this;
    }

    /**
     * Get p63
     *
     * @return string
     */
    public function getP63()
    {
        return $this->p63;
    }

    /**
     * Set p64
     *
     * @param string $p64
     *
     * @return Calidad
     */
    public function setP64($p64)
    {
        $this->p64 = $p64;

        return $this;
    }

    /**
     * Get p64
     *
     * @return string
     */
    public function getP64()
    {
        return $this->p64;
    }

    /**
     * Set p65
     *
     * @param string $p65
     *
     * @return Calidad
     */
    public function setP65($p65)
    {
        $this->p65 = $p65;

        return $this;
    }

    /**
     * Get p65
     *
     * @return string
     */
    public function getP65()
    {
        return $this->p65;
    }

    /**
     * Set p66
     *
     * @param string $p66
     *
     * @return Calidad
     */
    public function setP66($p66)
    {
        $this->p66 = $p66;

        return $this;
    }

    /**
     * Get p66
     *
     * @return string
     */
    public function getP66()
    {
        return $this->p66;
    }

    /**
     * Set p67
     *
     * @param string $p67
     *
     * @return Calidad
     */
    public function setP67($p67)
    {
        $this->p67 = $p67;

        return $this;
    }

    /**
     * Get p67
     *
     * @return string
     */
    public function getP67()
    {
        return $this->p67;
    }

    /**
     * Set p68
     *
     * @param string $p68
     *
     * @return Calidad
     */
    public function setP68($p68)
    {
        $this->p68 = $p68;

        return $this;
    }

    /**
     * Get p68
     *
     * @return string
     */
    public function getP68()
    {
        return $this->p68;
    }

    /**
     * Set p69
     *
     * @param string $p69
     *
     * @return Calidad
     */
    public function setP69($p69)
    {
        $this->p69 = $p69;

        return $this;
    }

    /**
     * Get p69
     *
     * @return string
     */
    public function getP69()
    {
        return $this->p69;
    }

    /**
     * Set p70
     *
     * @param string $p70
     *
     * @return Calidad
     */
    public function setP70($p70)
    {
        $this->p70 = $p70;

        return $this;
    }

    /**
     * Get p70
     *
     * @return string
     */
    public function getP70()
    {
        return $this->p70;
    }

    /**
     * Set p71
     *
     * @param string $p71
     *
     * @return Calidad
     */
    public function setP71($p71)
    {
        $this->p71 = $p71;

        return $this;
    }

    /**
     * Get p71
     *
     * @return string
     */
    public function getP71()
    {
        return $this->p71;
    }

    /**
     * Set p72
     *
     * @param string $p72
     *
     * @return Calidad
     */
    public function setP72($p72)
    {
        $this->p72 = $p72;

        return $this;
    }

    /**
     * Get p72
     *
     * @return string
     */
    public function getP72()
    {
        return $this->p72;
    }

    /**
     * Set p73
     *
     * @param string $p73
     *
     * @return Calidad
     */
    public function setP73($p73)
    {
        $this->p73 = $p73;

        return $this;
    }

    /**
     * Get p73
     *
     * @return string
     */
    public function getP73()
    {
        return $this->p73;
    }

    /**
     * Set p74a
     *
     * @param string $p74a
     *
     * @return Calidad
     */
    public function setP74a($p74a)
    {
        $this->p74a = $p74a;

        return $this;
    }

    /**
     * Get p74a
     *
     * @return string
     */
    public function getP74a()
    {
        return $this->p74a;
    }

    /**
     * Set p74b
     *
     * @param string $p74b
     *
     * @return Calidad
     */
    public function setP74b($p74b)
    {
        $this->p74b = $p74b;

        return $this;
    }

    /**
     * Get p74b
     *
     * @return string
     */
    public function getP74b()
    {
        return $this->p74b;
    }

    /**
     * Set p74c
     *
     * @param string $p74c
     *
     * @return Calidad
     */
    public function setP74c($p74c)
    {
        $this->p74c = $p74c;

        return $this;
    }

    /**
     * Get p74c
     *
     * @return string
     */
    public function getP74c()
    {
        return $this->p74c;
    }

    /**
     * Set p74d
     *
     * @param string $p74d
     *
     * @return Calidad
     */
    public function setP74d($p74d)
    {
        $this->p74d = $p74d;

        return $this;
    }

    /**
     * Get p74d
     *
     * @return string
     */
    public function getP74d()
    {
        return $this->p74d;
    }

    /**
     * Set p75
     *
     * @param string $p75
     *
     * @return Calidad
     */
    public function setP75($p75)
    {
        $this->p75 = $p75;

        return $this;
    }

    /**
     * Get p75
     *
     * @return string
     */
    public function getP75()
    {
        return $this->p75;
    }
}
