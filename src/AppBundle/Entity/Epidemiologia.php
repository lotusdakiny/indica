<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="epidemiologia")
 */
class Epidemiologia
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
	private $p1a;
	
	/**
	 * @ORM\Column(type="string", length=10, nullable=true)
	 */
	private $p1b;
	
	/**
	 * @ORM\Column(type="string", length=10, nullable=true)
	 */
	private $p1c;
	
	/**
	 * @ORM\Column(type="string", length=10, nullable=true)
	 */
	private $p1d;
	
	/**
	 * @ORM\Column(type="string", length=10, nullable=true)
	 */
	private $p2a;
	
	/**
	 * @ORM\Column(type="string", length=10, nullable=true)
	 */
	private $p2b;
	
	/**
	 * @ORM\Column(type="string", length=10, nullable=true)
	 */
	private $p2c;
	
	/**
	 * @ORM\Column(type="string", length=10, nullable=true)
	 */
	private $p2d;
	
	/**
	 * @ORM\Column(type="string", length=10, nullable=true)
	 */
	private $p2e;
	
	/**
	 * @ORM\Column(type="string", length=10, nullable=true)
	 */
	private $p3;
	
	/**
	 * @ORM\Column(type="string", length=100, nullable=true)
	 */
	private $p4;
	
	/**
	 * @ORM\Column(type="string", length=10, nullable=true)
	 */
	private $p5;
	
	/**
	 * @ORM\Column(type="string", length=10, nullable=true)
	 */
	private $p6;
	
	/**
	 * @ORM\Column(type="string", length=10, nullable=true)
	 */
	private $p7;
	
	/**
	 * @ORM\Column(type="string", length=60, nullable=true)
	 */
	private $p8;
	
	/**
	 * @ORM\Column(type="string", length=50, nullable=true)
	 */
	private $p9;
	
	/**
	 * @ORM\Column(type="string", length=10, nullable=true)
	 */
	private $p10;
	
	/**
	 * @ORM\Column(type="string", length=10, nullable=true)
	 */
	private $p11a;
	
	/**
	 * @ORM\Column(type="string", length=10, nullable=true)
	 */
	private $p11b;
	
	/**
	 * @ORM\Column(type="string", length=10, nullable=true)
	 */
	private $p11c;
	
	/**
	 * @ORM\Column(type="string", length=10, nullable=true)
	 */
	private $p11d;
	
	/**
	 * @ORM\Column(type="string", length=10, nullable=true)
	 */
	private $p12;
	
	/**
	 * @ORM\Column(type="string", length=10, nullable=true)
	 */
	private $p13;
	
	/**
	 * @ORM\Column(type="string", length=10, nullable=true)
	 */
	private $p14;

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
     * @return Epidemiologia
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
     * Set p1a
     *
     * @param string $p1a
     *
     * @return Epidemiologia
     */
    public function setP1a($p1a)
    {
        $this->p1a = $p1a;

        return $this;
    }

    /**
     * Get p1a
     *
     * @return string
     */
    public function getP1a()
    {
        return $this->p1a;
    }

    /**
     * Set p1b
     *
     * @param string $p1b
     *
     * @return Epidemiologia
     */
    public function setP1b($p1b)
    {
        $this->p1b = $p1b;

        return $this;
    }

    /**
     * Get p1b
     *
     * @return string
     */
    public function getP1b()
    {
        return $this->p1b;
    }

    /**
     * Set p1c
     *
     * @param string $p1c
     *
     * @return Epidemiologia
     */
    public function setP1c($p1c)
    {
        $this->p1c = $p1c;

        return $this;
    }

    /**
     * Get p1c
     *
     * @return string
     */
    public function getP1c()
    {
        return $this->p1c;
    }

    /**
     * Set p1d
     *
     * @param string $p1d
     *
     * @return Epidemiologia
     */
    public function setP1d($p1d)
    {
        $this->p1d = $p1d;

        return $this;
    }

    /**
     * Get p1d
     *
     * @return string
     */
    public function getP1d()
    {
        return $this->p1d;
    }

    /**
     * Set p2a
     *
     * @param string $p2a
     *
     * @return Epidemiologia
     */
    public function setP2a($p2a)
    {
        $this->p2a = $p2a;

        return $this;
    }

    /**
     * Get p2a
     *
     * @return string
     */
    public function getP2a()
    {
        return $this->p2a;
    }

    /**
     * Set p2b
     *
     * @param string $p2b
     *
     * @return Epidemiologia
     */
    public function setP2b($p2b)
    {
        $this->p2b = $p2b;

        return $this;
    }

    /**
     * Get p2b
     *
     * @return string
     */
    public function getP2b()
    {
        return $this->p2b;
    }

    /**
     * Set p2c
     *
     * @param string $p2c
     *
     * @return Epidemiologia
     */
    public function setP2c($p2c)
    {
        $this->p2c = $p2c;

        return $this;
    }

    /**
     * Get p2c
     *
     * @return string
     */
    public function getP2c()
    {
        return $this->p2c;
    }

    /**
     * Set p2d
     *
     * @param string $p2d
     *
     * @return Epidemiologia
     */
    public function setP2d($p2d)
    {
        $this->p2d = $p2d;

        return $this;
    }

    /**
     * Get p2d
     *
     * @return string
     */
    public function getP2d()
    {
        return $this->p2d;
    }

    /**
     * Set p2e
     *
     * @param string $p2e
     *
     * @return Epidemiologia
     */
    public function setP2e($p2e)
    {
        $this->p2e = $p2e;

        return $this;
    }

    /**
     * Get p2e
     *
     * @return string
     */
    public function getP2e()
    {
        return $this->p2e;
    }

    /**
     * Set p3
     *
     * @param string $p3
     *
     * @return Epidemiologia
     */
    public function setP3($p3)
    {
        $this->p3 = $p3;

        return $this;
    }

    /**
     * Get p3
     *
     * @return string
     */
    public function getP3()
    {
        return $this->p3;
    }

    /**
     * Set p4
     *
     * @param string $p4
     *
     * @return Epidemiologia
     */
    public function setP4($p4)
    {
        $this->p4 = $p4;

        return $this;
    }

    /**
     * Get p4
     *
     * @return string
     */
    public function getP4()
    {
        return $this->p4;
    }

    /**
     * Set p5
     *
     * @param string $p5
     *
     * @return Epidemiologia
     */
    public function setP5($p5)
    {
        $this->p5 = $p5;

        return $this;
    }

    /**
     * Get p5
     *
     * @return string
     */
    public function getP5()
    {
        return $this->p5;
    }

    /**
     * Set p6
     *
     * @param string $p6
     *
     * @return Epidemiologia
     */
    public function setP6($p6)
    {
        $this->p6 = $p6;

        return $this;
    }

    /**
     * Get p6
     *
     * @return string
     */
    public function getP6()
    {
        return $this->p6;
    }

    /**
     * Set p7
     *
     * @param string $p7
     *
     * @return Epidemiologia
     */
    public function setP7($p7)
    {
        $this->p7 = $p7;

        return $this;
    }

    /**
     * Get p7
     *
     * @return string
     */
    public function getP7()
    {
        return $this->p7;
    }

    /**
     * Set p8
     *
     * @param string $p8
     *
     * @return Epidemiologia
     */
    public function setP8($p8)
    {
        $this->p8 = $p8;

        return $this;
    }

    /**
     * Get p8
     *
     * @return string
     */
    public function getP8()
    {
        return $this->p8;
    }

    /**
     * Set p9
     *
     * @param string $p9
     *
     * @return Epidemiologia
     */
    public function setP9($p9)
    {
        $this->p9 = $p9;

        return $this;
    }

    /**
     * Get p9
     *
     * @return string
     */
    public function getP9()
    {
        return $this->p9;
    }

    /**
     * Set p10
     *
     * @param string $p10
     *
     * @return Epidemiologia
     */
    public function setP10($p10)
    {
        $this->p10 = $p10;

        return $this;
    }

    /**
     * Get p10
     *
     * @return string
     */
    public function getP10()
    {
        return $this->p10;
    }

    /**
     * Set p11a
     *
     * @param string $p11a
     *
     * @return Epidemiologia
     */
    public function setP11a($p11a)
    {
        $this->p11a = $p11a;

        return $this;
    }

    /**
     * Get p11a
     *
     * @return string
     */
    public function getP11a()
    {
        return $this->p11a;
    }

    /**
     * Set p11b
     *
     * @param string $p11b
     *
     * @return Epidemiologia
     */
    public function setP11b($p11b)
    {
        $this->p11b = $p11b;

        return $this;
    }

    /**
     * Get p11b
     *
     * @return string
     */
    public function getP11b()
    {
        return $this->p11b;
    }

    /**
     * Set p11c
     *
     * @param string $p11c
     *
     * @return Epidemiologia
     */
    public function setP11c($p11c)
    {
        $this->p11c = $p11c;

        return $this;
    }

    /**
     * Get p11c
     *
     * @return string
     */
    public function getP11c()
    {
        return $this->p11c;
    }

    /**
     * Set p11d
     *
     * @param string $p11d
     *
     * @return Epidemiologia
     */
    public function setP11d($p11d)
    {
        $this->p11d = $p11d;

        return $this;
    }

    /**
     * Get p11d
     *
     * @return string
     */
    public function getP11d()
    {
        return $this->p11d;
    }

    /**
     * Set p12
     *
     * @param string $p12
     *
     * @return Epidemiologia
     */
    public function setP12($p12)
    {
        $this->p12 = $p12;

        return $this;
    }

    /**
     * Get p12
     *
     * @return string
     */
    public function getP12()
    {
        return $this->p12;
    }

    /**
     * Set p13
     *
     * @param string $p13
     *
     * @return Epidemiologia
     */
    public function setP13($p13)
    {
        $this->p13 = $p13;

        return $this;
    }

    /**
     * Get p13
     *
     * @return string
     */
    public function getP13()
    {
        return $this->p13;
    }

    /**
     * Set p14
     *
     * @param string $p14
     *
     * @return Epidemiologia
     */
    public function setP14($p14)
    {
        $this->p14 = $p14;

        return $this;
    }

    /**
     * Get p14
     *
     * @return string
     */
    public function getP14()
    {
        return $this->p14;
    }
}
