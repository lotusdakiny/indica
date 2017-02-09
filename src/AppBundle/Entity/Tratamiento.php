<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="tratamiento")
 */
class Tratamiento
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
	 * @ORM\Column(type="array", nullable=true)
	 */
	private $p24 = array();
	
	/**
	 * @ORM\Column(type="string", length=30, nullable=true)
	 */
	private $p25;
	
	/**
	 * @ORM\Column(type="array", nullable=true)
	 */
	private $p26 = array();
	
	/**
	 * @ORM\Column(type="array", nullable=true)
	 */
	private $p27 = array();
	
	/**
	 * @ORM\Column(type="string", length=100, nullable=true)
	 */
	private $p28;
	
	/**
	 * @ORM\Column(type="string", length=80, nullable=true)
	 */
	private $p29;
	
	/**
	 * @ORM\Column(type="array", nullable=true)
	 */
	private $p30 = array();
	
	/**
	 * @ORM\Column(type="string", length=10, nullable=true)
	 */
	private $p31;
	
	/**
	 * @ORM\Column(type="string", length=10, nullable=true)
	 */
	private $p32;
	
	/**
	 * @ORM\Column(type="string", length=80, nullable=true)
	 */
	private $p33;
	
	/**
	 * @ORM\Column(type="string", length=80, nullable=true)
	 */
	private $p34;
	
	/**
	 * @ORM\Column(type="string", length=120, nullable=true)
	 */
	private $p35;
	
	/**
	 * @ORM\Column(type="array", nullable=true)
	 */
	private $p36 = array();
	
	/**
	 * @ORM\Column(type="string", length=10, nullable=true)
	 */
	private $p37a;
	
	/**
	 * @ORM\Column(type="string", length=10, nullable=true)
	 */
	private $p37b;
	
	/**
	 * @ORM\Column(type="string", length=10, nullable=true)
	 */
	private $p37c;
	
	/**
	 * @ORM\Column(type="string", length=10, nullable=true)
	 */
	private $p37d;
	

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
     * @return Tratamiento
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
     * Set p24
     *
     * @param array $p24
     *
     * @return Tratamiento
     */
    public function setP24($p24)
    {
        $this->p24 = $p24;

        return $this;
    }

    /**
     * Get p24
     *
     * @return array
     */
    public function getP24()
    {
        return $this->p24;
    }

    /**
     * Set p25
     *
     * @param string $p25
     *
     * @return Tratamiento
     */
    public function setP25($p25)
    {
        $this->p25 = $p25;

        return $this;
    }

    /**
     * Get p25
     *
     * @return string
     */
    public function getP25()
    {
        return $this->p25;
    }

    /**
     * Set p26
     *
     * @param array $p26
     *
     * @return Tratamiento
     */
    public function setP26($p26)
    {
        $this->p26 = $p26;

        return $this;
    }

    /**
     * Get p26
     *
     * @return array
     */
    public function getP26()
    {
        return $this->p26;
    }

    /**
     * Set p27
     *
     * @param array $p27
     *
     * @return Tratamiento
     */
    public function setP27($p27)
    {
        $this->p27 = $p27;

        return $this;
    }

    /**
     * Get p27
     *
     * @return array
     */
    public function getP27()
    {
        return $this->p27;
    }

    /**
     * Set p28
     *
     * @param string $p28
     *
     * @return Tratamiento
     */
    public function setP28($p28)
    {
        $this->p28 = $p28;

        return $this;
    }

    /**
     * Get p28
     *
     * @return string
     */
    public function getP28()
    {
        return $this->p28;
    }

    /**
     * Set p29
     *
     * @param string $p29
     *
     * @return Tratamiento
     */
    public function setP29($p29)
    {
        $this->p29 = $p29;

        return $this;
    }

    /**
     * Get p29
     *
     * @return string
     */
    public function getP29()
    {
        return $this->p29;
    }

    /**
     * Set p30
     *
     * @param array $p30
     *
     * @return Tratamiento
     */
    public function setP30($p30)
    {
        $this->p30 = $p30;

        return $this;
    }

    /**
     * Get p30
     *
     * @return array
     */
    public function getP30()
    {
        return $this->p30;
    }

    /**
     * Set p31
     *
     * @param string $p31
     *
     * @return Tratamiento
     */
    public function setP31($p31)
    {
        $this->p31 = $p31;

        return $this;
    }

    /**
     * Get p31
     *
     * @return string
     */
    public function getP31()
    {
        return $this->p31;
    }

    /**
     * Set p32
     *
     * @param string $p32
     *
     * @return Tratamiento
     */
    public function setP32($p32)
    {
        $this->p32 = $p32;

        return $this;
    }

    /**
     * Get p32
     *
     * @return string
     */
    public function getP32()
    {
        return $this->p32;
    }

    /**
     * Set p33
     *
     * @param string $p33
     *
     * @return Tratamiento
     */
    public function setP33($p33)
    {
        $this->p33 = $p33;

        return $this;
    }

    /**
     * Get p33
     *
     * @return string
     */
    public function getP33()
    {
        return $this->p33;
    }

    /**
     * Set p34
     *
     * @param string $p34
     *
     * @return Tratamiento
     */
    public function setP34($p34)
    {
        $this->p34 = $p34;

        return $this;
    }

    /**
     * Get p34
     *
     * @return string
     */
    public function getP34()
    {
        return $this->p34;
    }

    /**
     * Set p35
     *
     * @param string $p35
     *
     * @return Tratamiento
     */
    public function setP35($p35)
    {
        $this->p35 = $p35;

        return $this;
    }

    /**
     * Get p35
     *
     * @return string
     */
    public function getP35()
    {
        return $this->p35;
    }

    /**
     * Set p36
     *
     * @param array $p36
     *
     * @return Tratamiento
     */
    public function setP36($p36)
    {
        $this->p36 = $p36;

        return $this;
    }

    /**
     * Get p36
     *
     * @return array
     */
    public function getP36()
    {
        return $this->p36;
    }

    /**
     * Set p37a
     *
     * @param string $p37a
     *
     * @return Tratamiento
     */
    public function setP37a($p37a)
    {
        $this->p37a = $p37a;

        return $this;
    }

    /**
     * Get p37a
     *
     * @return string
     */
    public function getP37a()
    {
        return $this->p37a;
    }

    /**
     * Set p37b
     *
     * @param string $p37b
     *
     * @return Tratamiento
     */
    public function setP37b($p37b)
    {
        $this->p37b = $p37b;

        return $this;
    }

    /**
     * Get p37b
     *
     * @return string
     */
    public function getP37b()
    {
        return $this->p37b;
    }

    /**
     * Set p37c
     *
     * @param string $p37c
     *
     * @return Tratamiento
     */
    public function setP37c($p37c)
    {
        $this->p37c = $p37c;

        return $this;
    }

    /**
     * Get p37c
     *
     * @return string
     */
    public function getP37c()
    {
        return $this->p37c;
    }

    /**
     * Set p37d
     *
     * @param string $p37d
     *
     * @return Tratamiento
     */
    public function setP37d($p37d)
    {
        $this->p37d = $p37d;

        return $this;
    }

    /**
     * Get p37d
     *
     * @return string
     */
    public function getP37d()
    {
        return $this->p37d;
    }
}
