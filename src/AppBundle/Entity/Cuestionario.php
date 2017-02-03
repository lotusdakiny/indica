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
	 * @ORM\Column(type="string", length=1, nullable=true)
	 */
	private $p0a;
	
	/**
	 * @ORM\Column(type="smallint", nullable=true)
	 * @Assert\Range(
     *      min = 18,
     *      max = 100,
     *      minMessage = "You must be at least {{ limit }} years old to enter",
     *      maxMessage = "You cannot be older than {{ limit }} to enter"
     * )
	 */
	private $p0b;
	
	/**
	 * @ORM\Column(type="smallint", nullable=true)
	 * @Assert\Range(
	 *      min = 0,
	 *      max = 90,
	 *      minMessage = "You must be at least {{ limit }} years old to enter",
	 *      maxMessage = "You cannot be older than {{ limit }} to enter"
	 * )
	 */
	private $p0c;
	
	/**
	 * @ORM\Column(type="string", length=30, nullable=true)
	 */
	private $p0d;
	
	/**
	 * @ORM\Column(type="smallint", nullable=true)
	 * @Assert\Range(
	 *      min = 0,
	 *      max = 90,
	 *      minMessage = "You must be at least {{ limit }} years old to enter",
	 *      maxMessage = "You cannot be older than {{ limit }} to enter"
	 * )
	 */
	private $p0e;
	
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
	private $p12a;
	
	/**
	 * @ORM\Column(type="string", length=10, nullable=true)
	 */
	private $p12b;
	
	/**
	 * @ORM\Column(type="string", length=10, nullable=true)
	 */
	private $p12c;
	
	/**
	 * @ORM\Column(type="string", length=10, nullable=true)
	 */
	private $p12d;
	
	/**
	 * @ORM\Column(type="string", length=10, nullable=true)
	 */
	private $p12e;
	
	/**
	 * @ORM\Column(type="string", length=10, nullable=true)
	 */
	private $p13;
	
	/**
	 * @ORM\Column(type="string", length=10, nullable=true)
	 */
	private $p14;
	
	/**
	 * @ORM\Column(type="string", length=10, nullable=true)
	 */
	private $p15;
	
	/**
	 * @ORM\Column(type="string", length=10, nullable=true)
	 */
	private $p16;
	
	/**
	 * @ORM\Column(type="string", length=40, nullable=true)
	 */
	private $p17;
	
	/**
	 * @ORM\Column(type="string", length=50, nullable=true)
	 */
	private $p18;
	
	/**
	 * @ORM\Column(type="string", length=20, nullable=true)
	 */
	private $p19;
	
	/**
	 * @ORM\Column(type="string", length=30, nullable=true)
	 */
	private $p20;
	
	/**
	 * @ORM\Column(type="string", length=40, nullable=true)
	 */
	private $p21;
	
	/**
	 * @ORM\Column(type="string", length=10, nullable=true)
	 */
	private $p22a;
	
	/**
	 * @ORM\Column(type="string", length=10, nullable=true)
	 */
	private $p22b;
	
	/**
	 * @ORM\Column(type="string", length=10, nullable=true)
	 */
	private $p22c;
	
	/**
	 * @ORM\Column(type="string", length=10, nullable=true)
	 */
	private $p22d;
	
	/**
	 * @ORM\Column(type="string", length=10, nullable=true)
	 */
	private $p22e;
	
	/**
	 * @ORM\Column(type="string", length=80, nullable=true)
	 */
	private $p23;
	
	/**
	 * @ORM\Column(type="array", nullable=true)
	 */
	private $p24 = array();
	
	/**
	 * @ORM\Column(type="string", length=10, nullable=true)
	 */
	private $p24a;
	
	/**
	 * @ORM\Column(type="string", length=10, nullable=true)
	 */
	private $p24b;
	
	/**
	 * @ORM\Column(type="string", length=10, nullable=true)
	 */
	private $p24c;
		
	/**
	 * @ORM\Column(type="string", length=10, nullable=true)
	 */
	private $p24d;
	
	/**
	 * @ORM\Column(type="string", length=10, nullable=true)
	 */
	private $p24e;
	
	/**
	 * @ORM\Column(type="string", length=10, nullable=true)
	 */
	private $p24f;
	
	/**
	 * @ORM\Column(type="string", length=10, nullable=true)
	 */
	private $p24g;
	
	/**
	 * @ORM\Column(type="string", length=10, nullable=true)
	 */
	private $p24h;
	
	/**
	 * @ORM\Column(type="string", length=50, nullable=true)
	 */
	private $p25;
	
	/**
	 * @ORM\Column(type="simple_array", nullable=true)
	 */
	private $p26 = array();
	
	/**
	 * @ORM\Column(type="string", length=10, nullable=true)
	 */
	private $p27a;
	
	/**
	 * @ORM\Column(type="string", length=10, nullable=true)
	 */
	private $p27b;
	
	/**
	 * @ORM\Column(type="string", length=10, nullable=true)
	 */
	private $p27c;
	
	/**
	 * @ORM\Column(type="string", length=10, nullable=true)
	 */
	private $p27d;
	
	/**
	 * @ORM\Column(type="string", length=10, nullable=true)
	 */
	private $p27e;
	
	/**
	 * @ORM\Column(type="string", length=10, nullable=true)
	 */
	private $p27f;
	
	/**
	 * @ORM\Column(type="string", length=10, nullable=true)
	 */
	private $p28;
	
	/**
	 * @ORM\Column(type="string", length=30, nullable=true)
	 */
	private $p29;
	
	/**
	 * @ORM\Column(type="array", nullable=true)
	 */
	private $p30 = array();
	
	/**
	 * @ORM\Column(type="string", length=30, nullable=true)
	 */
	private $p31;
	
	/**
	 * @ORM\Column(type="array", nullable=true)
	 */
	private $p32 = array();
	
	/**
	 * @ORM\Column(type="array", nullable=true)
	 */
	private $p33 = array();
	
	/**
	 * @ORM\Column(type="string", length=100, nullable=true)
	 */
	private $p34;
	
	/**
	 * @ORM\Column(type="string", length=80, nullable=true)
	 */
	private $p35;
	
	/**
	 * @ORM\Column(type="array", nullable=true)
	 */
	private $p36 = array();
	
	/**
	 * @ORM\Column(type="string", length=10, nullable=true)
	 */
	private $p37;
	
	/**
	 * @ORM\Column(type="string", length=10, nullable=true)
	 */
	private $p38;
	
	/**
	 * @ORM\Column(type="string", length=80, nullable=true)
	 */
	private $p39;
	
	/**
	 * @ORM\Column(type="string", length=80, nullable=true)
	 */
	private $p40;
	
	/**
	 * @ORM\Column(type="string", length=120, nullable=true)
	 */
	private $p41;
	
	/**
	 * @ORM\Column(type="array", nullable=true)
	 */
	private $p42 = array();
	
	/**
	 * @ORM\Column(type="string", length=10, nullable=true)
	 */
	private $p43a;
	
	/**
	 * @ORM\Column(type="string", length=10, nullable=true)
	 */
	private $p43b;
	
	/**
	 * @ORM\Column(type="string", length=10, nullable=true)
	 */
	private $p43c;
	
	/**
	 * @ORM\Column(type="string", length=10, nullable=true)
	 */
	private $p43d;
	
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
	 * @ORM\Column(type="string", length=10, nullable=true)
	 */
	private $p44e;
	
	/**
	 * @ORM\Column(type="string", length=10, nullable=true)
	 */
	private $p44f;
	
	/**
	 * @ORM\Column(type="string", length=10, nullable=true)
	 */
	private $p44g;
	
	/**
	 * @ORM\Column(type="string", length=10, nullable=true)
	 */
	private $p44h;
	
	/**
	 * @ORM\Column(type="string", length=10, nullable=true)
	 */
	private $p44i;
	
	/**
	 * @ORM\Column(type="string", length=10, nullable=true)
	 */
	private $p44j;
	
	/**
	 * @ORM\Column(type="string", length=10, nullable=true)
	 */
	private $p44k;
	
	/**
	 * @ORM\Column(type="string", length=10, nullable=true)
	 */
	private $p44l;
	
	/**
	 * @ORM\Column(type="string", length=10, nullable=true)
	 */
	private $p44m;
	
	/**
	 * @ORM\Column(type="string", length=10, nullable=true)
	 */
	private $p44n;
	
	/**
	 * @ORM\Column(type="string", length=10, nullable=true)
	 */
	private $p44o;
	
	/**
	 * @ORM\Column(type="string", length=10, nullable=true)
	 */
	private $p44p;
	
	/**
	 * @ORM\Column(type="string", length=30, nullable=true)
	 */
	private $p45a;
	
	/**
	 * @ORM\Column(type="string", length=10, nullable=true)
	 */
	private $p45b;
	
	/**
	 * @ORM\Column(type="string", length=10, nullable=true)
	 */
	private $p45c;
	
	/**
	 * @ORM\Column(type="string", length=10, nullable=true)
	 */
	private $p45d;
	
	/**
	 * @ORM\Column(type="string", length=10, nullable=true)
	 */
	private $p45e;
	
	/**
	 * @ORM\Column(type="string", length=10, nullable=true)
	 */
	private $p45f;
	
	/**
	 * @ORM\Column(type="string", length=10, nullable=true)
	 */
	private $p45g;
	
	/**
	 * @ORM\Column(type="string", length=10, nullable=true)
	 */
	private $p45h;
	
	/**
	 * @ORM\Column(type="string", length=10, nullable=true)
	 */
	private $p45i;
	
	/**
	 * @ORM\Column(type="string", length=10, nullable=true)
	 */
	private $p45j;
	
	/**
	 * @ORM\Column(type="string", length=10, nullable=true)
	 */
	private $p45k;
	
	/**
	 * @ORM\Column(type="string", length=10, nullable=true)
	 */
	private $p45l;
	
	/**
	 * @ORM\Column(type="string", length=10, nullable=true)
	 */
	private $p45m;
	
	/**
	 * @ORM\Column(type="string", length=10, nullable=true)
	 */
	private $p45n;
	
	/**
	 * @ORM\Column(type="string", length=10, nullable=true)
	 */
	private $p45o;
	
	/**
	 * @ORM\Column(type="string", length=10, nullable=true)
	 */
	private $p46a;
	
	/**
	 * @ORM\Column(type="string", length=10, nullable=true)
	 */
	private $p46b;
	
	/**
	 * @ORM\Column(type="string", length=10, nullable=true)
	 */
	private $p46c;
	
	/**
	 * @ORM\Column(type="string", length=10, nullable=true)
	 */
	private $p46d;
	
	/**
	 * @ORM\Column(type="string", length=10, nullable=true)
	 */
	private $p46e;
	
	/**
	 * @ORM\Column(type="string", length=10, nullable=true)
	 */
	private $p46f;
	
	/**
	 * @ORM\Column(type="string", length=10, nullable=true)
	 */
	private $p46g;
	
	/**
	 * @ORM\Column(type="string", length=10, nullable=true)
	 */
	private $p47;
	
	/**
	 * @ORM\Column(type="string", length=50, nullable=true)
	 */
	private $p48;
	
	/**
	 * @ORM\Column(type="string", length=50, nullable=true)
	 */
	private $p49;
	
	/**
	 * @ORM\Column(type="string", length=50, nullable=true)
	 */
	private $p50;
	
	/**
	 * @ORM\Column(type="string", length=10, nullable=true)
	 */
	private $p51a;
	
	/**
	 * @ORM\Column(type="string", length=10, nullable=true)
	 */
	private $p51b;
	
	/**
	 * @ORM\Column(type="string", length=10, nullable=true)
	 */
	private $p51c;
	
	/**
	 * @ORM\Column(type="string", length=10, nullable=true)
	 */
	private $p51d;
	
	/**
	 * @ORM\Column(type="string", length=100, nullable=true)
	 */
	private $p52;
	
	/**
	 * @ORM\Column(type="string", length=60, nullable=true)
	 */
	private $p53;
	
	/**
	 * @ORM\Column(type="string", length=10, nullable=true)
	 */
	private $p54;
	
	/**
	 * @ORM\Column(type="string", length=10, nullable=true)
	 */
	private $p55;
	
	/**
	 * @ORM\Column(type="string", length=10, nullable=true)
	 */
	private $p56;
	
	/**
	 * @ORM\Column(type="string", length=80, nullable=true)
	 */
	private $p57;
	
	/**
	 * @ORM\Column(type="string", length=120, nullable=true)
	 */
	private $p58;
	
	/**
	 * @ORM\Column(type="string", length=10, nullable=true)
	 */
	private $p59;
	
	/**
	 * @ORM\Column(type="string", length=10, nullable=true)
	 */
	private $p60;
	
	/**
	 * @ORM\Column(type="string", length=80, nullable=true)
	 */
	private $p61;
	
	/**
	 * @ORM\Column(type="string", length=10, nullable=true)
	 */
	private $p62a;
	
	/**
	 * @ORM\Column(type="string", length=10, nullable=true)
	 */
	private $p62b;
	
	/**
	 * @ORM\Column(type="string", length=10, nullable=true)
	 */
	private $p62c;
	
	/**
	 * @ORM\Column(type="string", length=10, nullable=true)
	 */
	private $p62d;
	
	/**
	 * @ORM\Column(type="string", length=10, nullable=true)
	 */
	private $p62e;
	
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
	private $p65a;
	
	/**
	 * @ORM\Column(type="string", length=10, nullable=true)
	 */
	private $p65b;
	
	/**
	 * @ORM\Column(type="string", length=10, nullable=true)
	 */
	private $p65c;
	
	/**
	 * @ORM\Column(type="string", length=10, nullable=true)
	 */
	private $p65d;
	
	/**
	 * @ORM\Column(type="string", length=10, nullable=true)
	 */
	private $p65e;
	
	/**
	 * @ORM\Column(type="string", length=10, nullable=true)
	 */
	private $p65f;
	
	/**
	 * @ORM\Column(type="string", length=10, nullable=true)
	 */
	private $p65g;
	
	/**
	 * @ORM\Column(type="string", length=10, nullable=true)
	 */
	private $p65h;
	
	/**
	 * @ORM\Column(type="string", length=10, nullable=true)
	 */
	private $p65i;
	
	/**
	 * @ORM\Column(type="string", length=10, nullable=true)
	 */
	private $p65j;
	
	/**
	 * @ORM\Column(type="string", length=10, nullable=true)
	 */
	private $p65k;
	
	/**
	 * @ORM\Column(type="string", length=10, nullable=true)
	 */
	private $p65l;
	
	/**
	 * @ORM\Column(type="string", length=100, nullable=true)
	 */
	private $p66;
	
	/**
	 * @ORM\Column(type="string", length=100, nullable=true)
	 */
	private $p67;
	
	/**
	 * @ORM\Column(type="string", length=80, nullable=true)
	 */
	private $p68;
	
	/**
	 * @ORM\Column(type="string", length=100, nullable=true)
	 */
	private $p69;
	
	/**
	 * @ORM\Column(type="string", length=10, nullable=true)
	 */
	private $p70a;
	
	/**
	 * @ORM\Column(type="string", length=10, nullable=true)
	 */
	private $p70b;
	
	/**
	 * @ORM\Column(type="string", length=10, nullable=true)
	 */
	private $p70c;
	
	/**
	 * @ORM\Column(type="string", length=10, nullable=true)
	 */
	private $p70d;
	
	/**
	 * @ORM\Column(type="string", length=10, nullable=true)
	 */
	private $p70e;
	
	/**
	 * @ORM\Column(type="string", length=10, nullable=true)
	 */
	private $p70f;
	
	/**
	 * @ORM\Column(type="string", length=10, nullable=true)
	 */
	private $p70g;
	
	/**
	 * @ORM\Column(type="string", length=10, nullable=true)
	 */
	private $p71;
	
	/**
	 * @ORM\Column(type="string", length=10, nullable=true)
	 */
	private $p72;
	
	/**
	 * @ORM\Column(type="string", length=10, nullable=true)
	 */
	private $p73;
	
	/**
	 * @ORM\Column(type="string", length=10, nullable=true)
	 */
	private $p74;
	
	/**
	 * @ORM\Column(type="string", length=10, nullable=true)
	 */
	private $p75;
	
	/**
	 * @ORM\Column(type="string", length=10, nullable=true)
	 */
	private $p76;
	
	/**
	 * @ORM\Column(type="string", length=80, nullable=true)
	 */
	private $p77;
	
	/**
	 * @ORM\Column(type="string", length=10, nullable=true)
	 */
	private $p78;
	
	/**
	 * @ORM\Column(type="string", length=10, nullable=true)
	 */
	private $p79;
	
	/**
	 * @ORM\Column(type="string", length=10, nullable=true)
	 */
	private $p80;
	
	/**
	 * @ORM\Column(type="string", length=10, nullable=true)
	 */
	private $p81;
	
	/**
	 * @ORM\Column(type="string", length=30, nullable=true)
	 */
	private $p82;
	
	/**
	 * @ORM\Column(type="string", length=10, nullable=true)
	 */
	private $p83a;
	
	/**
	 * @ORM\Column(type="string", length=10, nullable=true)
	 */
	private $p83b;
	
	/**
	 * @ORM\Column(type="string", length=10, nullable=true)
	 */
	private $p83c;
	
	/**
	 * @ORM\Column(type="string", length=10, nullable=true)
	 */
	private $p83d;
	
	/**
	 * @ORM\Column(type="string", length=60, nullable=true)
	 */
	private $p84;
	

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

    /**
     * Set p0a
     *
     * @param string $p0a
     *
     * @return Cuestionario
     */
    public function setP0a($p0a)
    {
        $this->p0a = $p0a;

        return $this;
    }

    /**
     * Get p0a
     *
     * @return string
     */
    public function getP0a()
    {
        return $this->p0a;
    }

    /**
     * Set p0b
     *
     * @param integer $p0b
     *
     * @return Cuestionario
     */
    public function setP0b($p0b)
    {
        $this->p0b = $p0b;

        return $this;
    }

    /**
     * Get p0b
     *
     * @return integer
     */
    public function getP0b()
    {
        return $this->p0b;
    }

    /**
     * Set p0c
     *
     * @param integer $p0c
     *
     * @return Cuestionario
     */
    public function setP0c($p0c)
    {
        $this->p0c = $p0c;

        return $this;
    }

    /**
     * Get p0c
     *
     * @return integer
     */
    public function getP0c()
    {
        return $this->p0c;
    }

    /**
     * Set p0d
     *
     * @param string $p0d
     *
     * @return Cuestionario
     */
    public function setP0d($p0d)
    {
        $this->p0d = $p0d;

        return $this;
    }

    /**
     * Get p0d
     *
     * @return string
     */
    public function getP0d()
    {
        return $this->p0d;
    }

    /**
     * Set p0e
     *
     * @param integer $p0e
     *
     * @return Cuestionario
     */
    public function setP0e($p0e)
    {
        $this->p0e = $p0e;

        return $this;
    }

    /**
     * Get p0e
     *
     * @return integer
     */
    public function getP0e()
    {
        return $this->p0e;
    }

    /**
     * Set p1a
     *
     * @param string $p1a
     *
     * @return Cuestionario
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
     * @return Cuestionario
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
     * @return Cuestionario
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
     * @return Cuestionario
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
     * @return Cuestionario
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
     * @return Cuestionario
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
     * @return Cuestionario
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
     * @return Cuestionario
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
     * @return Cuestionario
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
     * @return Cuestionario
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
     * @return Cuestionario
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
     * @return Cuestionario
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
     * @return Cuestionario
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
     * @return Cuestionario
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
     * @return Cuestionario
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
     * @return Cuestionario
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
     * @return Cuestionario
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
     * @return Cuestionario
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
     * @return Cuestionario
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
     * @return Cuestionario
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
     * @return Cuestionario
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
     * Set p12a
     *
     * @param string $p12a
     *
     * @return Cuestionario
     */
    public function setP12a($p12a)
    {
        $this->p12a = $p12a;

        return $this;
    }

    /**
     * Get p12a
     *
     * @return string
     */
    public function getP12a()
    {
        return $this->p12a;
    }

    /**
     * Set p12b
     *
     * @param string $p12b
     *
     * @return Cuestionario
     */
    public function setP12b($p12b)
    {
        $this->p12b = $p12b;

        return $this;
    }

    /**
     * Get p12b
     *
     * @return string
     */
    public function getP12b()
    {
        return $this->p12b;
    }

    /**
     * Set p12c
     *
     * @param string $p12c
     *
     * @return Cuestionario
     */
    public function setP12c($p12c)
    {
        $this->p12c = $p12c;

        return $this;
    }

    /**
     * Get p12c
     *
     * @return string
     */
    public function getP12c()
    {
        return $this->p12c;
    }

    /**
     * Set p12d
     *
     * @param string $p12d
     *
     * @return Cuestionario
     */
    public function setP12d($p12d)
    {
        $this->p12d = $p12d;

        return $this;
    }

    /**
     * Get p12d
     *
     * @return string
     */
    public function getP12d()
    {
        return $this->p12d;
    }

    /**
     * Set p12e
     *
     * @param string $p12e
     *
     * @return Cuestionario
     */
    public function setP12e($p12e)
    {
        $this->p12e = $p12e;

        return $this;
    }

    /**
     * Get p12e
     *
     * @return string
     */
    public function getP12e()
    {
        return $this->p12e;
    }

    /**
     * Set p13
     *
     * @param string $p13
     *
     * @return Cuestionario
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
     * @return Cuestionario
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

    /**
     * Set p15
     *
     * @param string $p15
     *
     * @return Cuestionario
     */
    public function setP15($p15)
    {
        $this->p15 = $p15;

        return $this;
    }

    /**
     * Get p15
     *
     * @return string
     */
    public function getP15()
    {
        return $this->p15;
    }

    /**
     * Set p16
     *
     * @param string $p16
     *
     * @return Cuestionario
     */
    public function setP16($p16)
    {
        $this->p16 = $p16;

        return $this;
    }

    /**
     * Get p16
     *
     * @return string
     */
    public function getP16()
    {
        return $this->p16;
    }

    /**
     * Set p17
     *
     * @param string $p17
     *
     * @return Cuestionario
     */
    public function setP17($p17)
    {
        $this->p17 = $p17;

        return $this;
    }

    /**
     * Get p17
     *
     * @return string
     */
    public function getP17()
    {
        return $this->p17;
    }

    /**
     * Set p18
     *
     * @param string $p18
     *
     * @return Cuestionario
     */
    public function setP18($p18)
    {
        $this->p18 = $p18;

        return $this;
    }

    /**
     * Get p18
     *
     * @return string
     */
    public function getP18()
    {
        return $this->p18;
    }

    /**
     * Set p19
     *
     * @param string $p19
     *
     * @return Cuestionario
     */
    public function setP19($p19)
    {
        $this->p19 = $p19;

        return $this;
    }

    /**
     * Get p19
     *
     * @return string
     */
    public function getP19()
    {
        return $this->p19;
    }

    /**
     * Set p20
     *
     * @param string $p20
     *
     * @return Cuestionario
     */
    public function setP20($p20)
    {
        $this->p20 = $p20;

        return $this;
    }

    /**
     * Get p20
     *
     * @return string
     */
    public function getP20()
    {
        return $this->p20;
    }

    /**
     * Set p21
     *
     * @param string $p21
     *
     * @return Cuestionario
     */
    public function setP21($p21)
    {
        $this->p21 = $p21;

        return $this;
    }

    /**
     * Get p21
     *
     * @return string
     */
    public function getP21()
    {
        return $this->p21;
    }

    /**
     * Set p22a
     *
     * @param string $p22a
     *
     * @return Cuestionario
     */
    public function setP22a($p22a)
    {
        $this->p22a = $p22a;

        return $this;
    }

    /**
     * Get p22a
     *
     * @return string
     */
    public function getP22a()
    {
        return $this->p22a;
    }

    /**
     * Set p22b
     *
     * @param string $p22b
     *
     * @return Cuestionario
     */
    public function setP22b($p22b)
    {
        $this->p22b = $p22b;

        return $this;
    }

    /**
     * Get p22b
     *
     * @return string
     */
    public function getP22b()
    {
        return $this->p22b;
    }

    /**
     * Set p22c
     *
     * @param string $p22c
     *
     * @return Cuestionario
     */
    public function setP22c($p22c)
    {
        $this->p22c = $p22c;

        return $this;
    }

    /**
     * Get p22c
     *
     * @return string
     */
    public function getP22c()
    {
        return $this->p22c;
    }

    /**
     * Set p22d
     *
     * @param string $p22d
     *
     * @return Cuestionario
     */
    public function setP22d($p22d)
    {
        $this->p22d = $p22d;

        return $this;
    }

    /**
     * Get p22d
     *
     * @return string
     */
    public function getP22d()
    {
        return $this->p22d;
    }

    /**
     * Set p22e
     *
     * @param string $p22e
     *
     * @return Cuestionario
     */
    public function setP22e($p22e)
    {
        $this->p22e = $p22e;

        return $this;
    }

    /**
     * Get p22e
     *
     * @return string
     */
    public function getP22e()
    {
        return $this->p22e;
    }

    /**
     * Set p23
     *
     * @param string $p23
     *
     * @return Cuestionario
     */
    public function setP23($p23)
    {
        $this->p23 = $p23;

        return $this;
    }

    /**
     * Get p23
     *
     * @return string
     */
    public function getP23()
    {
        return $this->p23;
    }

    /**
     * Set p24
     *
     * @param array $p24
     *
     * @return Cuestionario
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
     * Set p24a
     *
     * @param string $p24a
     *
     * @return Cuestionario
     */
    public function setP24a($p24a)
    {
        $this->p24a = $p24a;

        return $this;
    }

    /**
     * Get p24a
     *
     * @return string
     */
    public function getP24a()
    {
        return $this->p24a;
    }

    /**
     * Set p24b
     *
     * @param string $p24b
     *
     * @return Cuestionario
     */
    public function setP24b($p24b)
    {
        $this->p24b = $p24b;

        return $this;
    }

    /**
     * Get p24b
     *
     * @return string
     */
    public function getP24b()
    {
        return $this->p24b;
    }

    /**
     * Set p24c
     *
     * @param string $p24c
     *
     * @return Cuestionario
     */
    public function setP24c($p24c)
    {
        $this->p24c = $p24c;

        return $this;
    }

    /**
     * Get p24c
     *
     * @return string
     */
    public function getP24c()
    {
        return $this->p24c;
    }

    /**
     * Set p24d
     *
     * @param string $p24d
     *
     * @return Cuestionario
     */
    public function setP24d($p24d)
    {
        $this->p24d = $p24d;

        return $this;
    }

    /**
     * Get p24d
     *
     * @return string
     */
    public function getP24d()
    {
        return $this->p24d;
    }

    /**
     * Set p24e
     *
     * @param string $p24e
     *
     * @return Cuestionario
     */
    public function setP24e($p24e)
    {
        $this->p24e = $p24e;

        return $this;
    }

    /**
     * Get p24e
     *
     * @return string
     */
    public function getP24e()
    {
        return $this->p24e;
    }

    /**
     * Set p24f
     *
     * @param string $p24f
     *
     * @return Cuestionario
     */
    public function setP24f($p24f)
    {
        $this->p24f = $p24f;

        return $this;
    }

    /**
     * Get p24f
     *
     * @return string
     */
    public function getP24f()
    {
        return $this->p24f;
    }

    /**
     * Set p24g
     *
     * @param string $p24g
     *
     * @return Cuestionario
     */
    public function setP24g($p24g)
    {
        $this->p24g = $p24g;

        return $this;
    }

    /**
     * Get p24g
     *
     * @return string
     */
    public function getP24g()
    {
        return $this->p24g;
    }

    /**
     * Set p24h
     *
     * @param string $p24h
     *
     * @return Cuestionario
     */
    public function setP24h($p24h)
    {
        $this->p24h = $p24h;

        return $this;
    }

    /**
     * Get p24h
     *
     * @return string
     */
    public function getP24h()
    {
        return $this->p24h;
    }

    /**
     * Set p25
     *
     * @param string $p25
     *
     * @return Cuestionario
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
     * @return Cuestionario
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
     * Set p27a
     *
     * @param string $p27a
     *
     * @return Cuestionario
     */
    public function setP27a($p27a)
    {
        $this->p27a = $p27a;

        return $this;
    }

    /**
     * Get p27a
     *
     * @return string
     */
    public function getP27a()
    {
        return $this->p27a;
    }

    /**
     * Set p27b
     *
     * @param string $p27b
     *
     * @return Cuestionario
     */
    public function setP27b($p27b)
    {
        $this->p27b = $p27b;

        return $this;
    }

    /**
     * Get p27b
     *
     * @return string
     */
    public function getP27b()
    {
        return $this->p27b;
    }

    /**
     * Set p27c
     *
     * @param string $p27c
     *
     * @return Cuestionario
     */
    public function setP27c($p27c)
    {
        $this->p27c = $p27c;

        return $this;
    }

    /**
     * Get p27c
     *
     * @return string
     */
    public function getP27c()
    {
        return $this->p27c;
    }

    /**
     * Set p27d
     *
     * @param string $p27d
     *
     * @return Cuestionario
     */
    public function setP27d($p27d)
    {
        $this->p27d = $p27d;

        return $this;
    }

    /**
     * Get p27d
     *
     * @return string
     */
    public function getP27d()
    {
        return $this->p27d;
    }

    /**
     * Set p27e
     *
     * @param string $p27e
     *
     * @return Cuestionario
     */
    public function setP27e($p27e)
    {
        $this->p27e = $p27e;

        return $this;
    }

    /**
     * Get p27e
     *
     * @return string
     */
    public function getP27e()
    {
        return $this->p27e;
    }

    /**
     * Set p27f
     *
     * @param string $p27f
     *
     * @return Cuestionario
     */
    public function setP27f($p27f)
    {
        $this->p27f = $p27f;

        return $this;
    }

    /**
     * Get p27f
     *
     * @return string
     */
    public function getP27f()
    {
        return $this->p27f;
    }

    /**
     * Set p28
     *
     * @param string $p28
     *
     * @return Cuestionario
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
     * @return Cuestionario
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
     * @return Cuestionario
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
     * @return Cuestionario
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
     * @param array $p32
     *
     * @return Cuestionario
     */
    public function setP32($p32)
    {
        $this->p32 = $p32;

        return $this;
    }

    /**
     * Get p32
     *
     * @return array
     */
    public function getP32()
    {
        return $this->p32;
    }

    /**
     * Set p33
     *
     * @param array $p33
     *
     * @return Cuestionario
     */
    public function setP33($p33)
    {
        $this->p33 = $p33;

        return $this;
    }

    /**
     * Get p33
     *
     * @return array
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
     * @return Cuestionario
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
     * @return Cuestionario
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
     * @return Cuestionario
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
     * Set p37
     *
     * @param string $p37
     *
     * @return Cuestionario
     */
    public function setP37($p37)
    {
        $this->p37 = $p37;

        return $this;
    }

    /**
     * Get p37
     *
     * @return string
     */
    public function getP37()
    {
        return $this->p37;
    }

    /**
     * Set p38
     *
     * @param string $p38
     *
     * @return Cuestionario
     */
    public function setP38($p38)
    {
        $this->p38 = $p38;

        return $this;
    }

    /**
     * Get p38
     *
     * @return string
     */
    public function getP38()
    {
        return $this->p38;
    }

    /**
     * Set p39
     *
     * @param string $p39
     *
     * @return Cuestionario
     */
    public function setP39($p39)
    {
        $this->p39 = $p39;

        return $this;
    }

    /**
     * Get p39
     *
     * @return string
     */
    public function getP39()
    {
        return $this->p39;
    }

    /**
     * Set p40
     *
     * @param string $p40
     *
     * @return Cuestionario
     */
    public function setP40($p40)
    {
        $this->p40 = $p40;

        return $this;
    }

    /**
     * Get p40
     *
     * @return string
     */
    public function getP40()
    {
        return $this->p40;
    }

    /**
     * Set p41
     *
     * @param string $p41
     *
     * @return Cuestionario
     */
    public function setP41($p41)
    {
        $this->p41 = $p41;

        return $this;
    }

    /**
     * Get p41
     *
     * @return string
     */
    public function getP41()
    {
        return $this->p41;
    }

    /**
     * Set p42
     *
     * @param array $p42
     *
     * @return Cuestionario
     */
    public function setP42($p42)
    {
        $this->p42 = $p42;

        return $this;
    }

    /**
     * Get p42
     *
     * @return array
     */
    public function getP42()
    {
        return $this->p42;
    }

    /**
     * Set p43a
     *
     * @param string $p43a
     *
     * @return Cuestionario
     */
    public function setP43a($p43a)
    {
        $this->p43a = $p43a;

        return $this;
    }

    /**
     * Get p43a
     *
     * @return string
     */
    public function getP43a()
    {
        return $this->p43a;
    }

    /**
     * Set p43b
     *
     * @param string $p43b
     *
     * @return Cuestionario
     */
    public function setP43b($p43b)
    {
        $this->p43b = $p43b;

        return $this;
    }

    /**
     * Get p43b
     *
     * @return string
     */
    public function getP43b()
    {
        return $this->p43b;
    }

    /**
     * Set p43c
     *
     * @param string $p43c
     *
     * @return Cuestionario
     */
    public function setP43c($p43c)
    {
        $this->p43c = $p43c;

        return $this;
    }

    /**
     * Get p43c
     *
     * @return string
     */
    public function getP43c()
    {
        return $this->p43c;
    }

    /**
     * Set p43d
     *
     * @param string $p43d
     *
     * @return Cuestionario
     */
    public function setP43d($p43d)
    {
        $this->p43d = $p43d;

        return $this;
    }

    /**
     * Get p43d
     *
     * @return string
     */
    public function getP43d()
    {
        return $this->p43d;
    }

    /**
     * Set p44a
     *
     * @param string $p44a
     *
     * @return Cuestionario
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
     * @return Cuestionario
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
     * @return Cuestionario
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
     * @return Cuestionario
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
     * Set p44e
     *
     * @param string $p44e
     *
     * @return Cuestionario
     */
    public function setP44e($p44e)
    {
        $this->p44e = $p44e;

        return $this;
    }

    /**
     * Get p44e
     *
     * @return string
     */
    public function getP44e()
    {
        return $this->p44e;
    }

    /**
     * Set p44f
     *
     * @param string $p44f
     *
     * @return Cuestionario
     */
    public function setP44f($p44f)
    {
        $this->p44f = $p44f;

        return $this;
    }

    /**
     * Get p44f
     *
     * @return string
     */
    public function getP44f()
    {
        return $this->p44f;
    }

    /**
     * Set p44g
     *
     * @param string $p44g
     *
     * @return Cuestionario
     */
    public function setP44g($p44g)
    {
        $this->p44g = $p44g;

        return $this;
    }

    /**
     * Get p44g
     *
     * @return string
     */
    public function getP44g()
    {
        return $this->p44g;
    }

    /**
     * Set p44h
     *
     * @param string $p44h
     *
     * @return Cuestionario
     */
    public function setP44h($p44h)
    {
        $this->p44h = $p44h;

        return $this;
    }

    /**
     * Get p44h
     *
     * @return string
     */
    public function getP44h()
    {
        return $this->p44h;
    }

    /**
     * Set p44i
     *
     * @param string $p44i
     *
     * @return Cuestionario
     */
    public function setP44i($p44i)
    {
        $this->p44i = $p44i;

        return $this;
    }

    /**
     * Get p44i
     *
     * @return string
     */
    public function getP44i()
    {
        return $this->p44i;
    }

    /**
     * Set p44j
     *
     * @param string $p44j
     *
     * @return Cuestionario
     */
    public function setP44j($p44j)
    {
        $this->p44j = $p44j;

        return $this;
    }

    /**
     * Get p44j
     *
     * @return string
     */
    public function getP44j()
    {
        return $this->p44j;
    }

    /**
     * Set p44k
     *
     * @param string $p44k
     *
     * @return Cuestionario
     */
    public function setP44k($p44k)
    {
        $this->p44k = $p44k;

        return $this;
    }

    /**
     * Get p44k
     *
     * @return string
     */
    public function getP44k()
    {
        return $this->p44k;
    }

    /**
     * Set p44l
     *
     * @param string $p44l
     *
     * @return Cuestionario
     */
    public function setP44l($p44l)
    {
        $this->p44l = $p44l;

        return $this;
    }

    /**
     * Get p44l
     *
     * @return string
     */
    public function getP44l()
    {
        return $this->p44l;
    }

    /**
     * Set p44m
     *
     * @param string $p44m
     *
     * @return Cuestionario
     */
    public function setP44m($p44m)
    {
        $this->p44m = $p44m;

        return $this;
    }

    /**
     * Get p44m
     *
     * @return string
     */
    public function getP44m()
    {
        return $this->p44m;
    }

    /**
     * Set p44n
     *
     * @param string $p44n
     *
     * @return Cuestionario
     */
    public function setP44n($p44n)
    {
        $this->p44n = $p44n;

        return $this;
    }

    /**
     * Get p44n
     *
     * @return string
     */
    public function getP44n()
    {
        return $this->p44n;
    }

    /**
     * Set p44o
     *
     * @param string $p44o
     *
     * @return Cuestionario
     */
    public function setP44o($p44o)
    {
        $this->p44o = $p44o;

        return $this;
    }

    /**
     * Get p44o
     *
     * @return string
     */
    public function getP44o()
    {
        return $this->p44o;
    }

    /**
     * Set p44p
     *
     * @param string $p44p
     *
     * @return Cuestionario
     */
    public function setP44p($p44p)
    {
        $this->p44p = $p44p;

        return $this;
    }

    /**
     * Get p44p
     *
     * @return string
     */
    public function getP44p()
    {
        return $this->p44p;
    }

    /**
     * Set p45a
     *
     * @param string $p45a
     *
     * @return Cuestionario
     */
    public function setP45a($p45a)
    {
        $this->p45a = $p45a;

        return $this;
    }

    /**
     * Get p45a
     *
     * @return string
     */
    public function getP45a()
    {
        return $this->p45a;
    }

    /**
     * Set p45b
     *
     * @param string $p45b
     *
     * @return Cuestionario
     */
    public function setP45b($p45b)
    {
        $this->p45b = $p45b;

        return $this;
    }

    /**
     * Get p45b
     *
     * @return string
     */
    public function getP45b()
    {
        return $this->p45b;
    }

    /**
     * Set p45c
     *
     * @param string $p45c
     *
     * @return Cuestionario
     */
    public function setP45c($p45c)
    {
        $this->p45c = $p45c;

        return $this;
    }

    /**
     * Get p45c
     *
     * @return string
     */
    public function getP45c()
    {
        return $this->p45c;
    }

    /**
     * Set p45d
     *
     * @param string $p45d
     *
     * @return Cuestionario
     */
    public function setP45d($p45d)
    {
        $this->p45d = $p45d;

        return $this;
    }

    /**
     * Get p45d
     *
     * @return string
     */
    public function getP45d()
    {
        return $this->p45d;
    }

    /**
     * Set p45e
     *
     * @param string $p45e
     *
     * @return Cuestionario
     */
    public function setP45e($p45e)
    {
        $this->p45e = $p45e;

        return $this;
    }

    /**
     * Get p45e
     *
     * @return string
     */
    public function getP45e()
    {
        return $this->p45e;
    }

    /**
     * Set p45f
     *
     * @param string $p45f
     *
     * @return Cuestionario
     */
    public function setP45f($p45f)
    {
        $this->p45f = $p45f;

        return $this;
    }

    /**
     * Get p45f
     *
     * @return string
     */
    public function getP45f()
    {
        return $this->p45f;
    }

    /**
     * Set p45g
     *
     * @param string $p45g
     *
     * @return Cuestionario
     */
    public function setP45g($p45g)
    {
        $this->p45g = $p45g;

        return $this;
    }

    /**
     * Get p45g
     *
     * @return string
     */
    public function getP45g()
    {
        return $this->p45g;
    }

    /**
     * Set p45h
     *
     * @param string $p45h
     *
     * @return Cuestionario
     */
    public function setP45h($p45h)
    {
        $this->p45h = $p45h;

        return $this;
    }

    /**
     * Get p45h
     *
     * @return string
     */
    public function getP45h()
    {
        return $this->p45h;
    }

    /**
     * Set p45i
     *
     * @param string $p45i
     *
     * @return Cuestionario
     */
    public function setP45i($p45i)
    {
        $this->p45i = $p45i;

        return $this;
    }

    /**
     * Get p45i
     *
     * @return string
     */
    public function getP45i()
    {
        return $this->p45i;
    }

    /**
     * Set p45j
     *
     * @param string $p45j
     *
     * @return Cuestionario
     */
    public function setP45j($p45j)
    {
        $this->p45j = $p45j;

        return $this;
    }

    /**
     * Get p45j
     *
     * @return string
     */
    public function getP45j()
    {
        return $this->p45j;
    }

    /**
     * Set p45k
     *
     * @param string $p45k
     *
     * @return Cuestionario
     */
    public function setP45k($p45k)
    {
        $this->p45k = $p45k;

        return $this;
    }

    /**
     * Get p45k
     *
     * @return string
     */
    public function getP45k()
    {
        return $this->p45k;
    }

    /**
     * Set p45l
     *
     * @param string $p45l
     *
     * @return Cuestionario
     */
    public function setP45l($p45l)
    {
        $this->p45l = $p45l;

        return $this;
    }

    /**
     * Get p45l
     *
     * @return string
     */
    public function getP45l()
    {
        return $this->p45l;
    }

    /**
     * Set p45m
     *
     * @param string $p45m
     *
     * @return Cuestionario
     */
    public function setP45m($p45m)
    {
        $this->p45m = $p45m;

        return $this;
    }

    /**
     * Get p45m
     *
     * @return string
     */
    public function getP45m()
    {
        return $this->p45m;
    }

    /**
     * Set p45n
     *
     * @param string $p45n
     *
     * @return Cuestionario
     */
    public function setP45n($p45n)
    {
        $this->p45n = $p45n;

        return $this;
    }

    /**
     * Get p45n
     *
     * @return string
     */
    public function getP45n()
    {
        return $this->p45n;
    }

    /**
     * Set p45o
     *
     * @param string $p45o
     *
     * @return Cuestionario
     */
    public function setP45o($p45o)
    {
        $this->p45o = $p45o;

        return $this;
    }

    /**
     * Get p45o
     *
     * @return string
     */
    public function getP45o()
    {
        return $this->p45o;
    }

    /**
     * Set p46a
     *
     * @param string $p46a
     *
     * @return Cuestionario
     */
    public function setP46a($p46a)
    {
        $this->p46a = $p46a;

        return $this;
    }

    /**
     * Get p46a
     *
     * @return string
     */
    public function getP46a()
    {
        return $this->p46a;
    }

    /**
     * Set p46b
     *
     * @param string $p46b
     *
     * @return Cuestionario
     */
    public function setP46b($p46b)
    {
        $this->p46b = $p46b;

        return $this;
    }

    /**
     * Get p46b
     *
     * @return string
     */
    public function getP46b()
    {
        return $this->p46b;
    }

    /**
     * Set p46c
     *
     * @param string $p46c
     *
     * @return Cuestionario
     */
    public function setP46c($p46c)
    {
        $this->p46c = $p46c;

        return $this;
    }

    /**
     * Get p46c
     *
     * @return string
     */
    public function getP46c()
    {
        return $this->p46c;
    }

    /**
     * Set p46d
     *
     * @param string $p46d
     *
     * @return Cuestionario
     */
    public function setP46d($p46d)
    {
        $this->p46d = $p46d;

        return $this;
    }

    /**
     * Get p46d
     *
     * @return string
     */
    public function getP46d()
    {
        return $this->p46d;
    }

    /**
     * Set p46e
     *
     * @param string $p46e
     *
     * @return Cuestionario
     */
    public function setP46e($p46e)
    {
        $this->p46e = $p46e;

        return $this;
    }

    /**
     * Get p46e
     *
     * @return string
     */
    public function getP46e()
    {
        return $this->p46e;
    }

    /**
     * Set p46f
     *
     * @param string $p46f
     *
     * @return Cuestionario
     */
    public function setP46f($p46f)
    {
        $this->p46f = $p46f;

        return $this;
    }

    /**
     * Get p46f
     *
     * @return string
     */
    public function getP46f()
    {
        return $this->p46f;
    }

    /**
     * Set p46g
     *
     * @param string $p46g
     *
     * @return Cuestionario
     */
    public function setP46g($p46g)
    {
        $this->p46g = $p46g;

        return $this;
    }

    /**
     * Get p46g
     *
     * @return string
     */
    public function getP46g()
    {
        return $this->p46g;
    }

    /**
     * Set p47
     *
     * @param string $p47
     *
     * @return Cuestionario
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
     * @return Cuestionario
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
     * @return Cuestionario
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
     * @return Cuestionario
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
     * Set p51a
     *
     * @param string $p51a
     *
     * @return Cuestionario
     */
    public function setP51a($p51a)
    {
        $this->p51a = $p51a;

        return $this;
    }

    /**
     * Get p51a
     *
     * @return string
     */
    public function getP51a()
    {
        return $this->p51a;
    }

    /**
     * Set p51b
     *
     * @param string $p51b
     *
     * @return Cuestionario
     */
    public function setP51b($p51b)
    {
        $this->p51b = $p51b;

        return $this;
    }

    /**
     * Get p51b
     *
     * @return string
     */
    public function getP51b()
    {
        return $this->p51b;
    }

    /**
     * Set p51c
     *
     * @param string $p51c
     *
     * @return Cuestionario
     */
    public function setP51c($p51c)
    {
        $this->p51c = $p51c;

        return $this;
    }

    /**
     * Get p51c
     *
     * @return string
     */
    public function getP51c()
    {
        return $this->p51c;
    }

    /**
     * Set p51d
     *
     * @param string $p51d
     *
     * @return Cuestionario
     */
    public function setP51d($p51d)
    {
        $this->p51d = $p51d;

        return $this;
    }

    /**
     * Get p51d
     *
     * @return string
     */
    public function getP51d()
    {
        return $this->p51d;
    }

    /**
     * Set p52
     *
     * @param string $p52
     *
     * @return Cuestionario
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
     * @return Cuestionario
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

    /**
     * Set p54
     *
     * @param string $p54
     *
     * @return Cuestionario
     */
    public function setP54($p54)
    {
        $this->p54 = $p54;

        return $this;
    }

    /**
     * Get p54
     *
     * @return string
     */
    public function getP54()
    {
        return $this->p54;
    }

    /**
     * Set p55
     *
     * @param string $p55
     *
     * @return Cuestionario
     */
    public function setP55($p55)
    {
        $this->p55 = $p55;

        return $this;
    }

    /**
     * Get p55
     *
     * @return string
     */
    public function getP55()
    {
        return $this->p55;
    }

    /**
     * Set p56
     *
     * @param string $p56
     *
     * @return Cuestionario
     */
    public function setP56($p56)
    {
        $this->p56 = $p56;

        return $this;
    }

    /**
     * Get p56
     *
     * @return string
     */
    public function getP56()
    {
        return $this->p56;
    }

    /**
     * Set p57
     *
     * @param string $p57
     *
     * @return Cuestionario
     */
    public function setP57($p57)
    {
        $this->p57 = $p57;

        return $this;
    }

    /**
     * Get p57
     *
     * @return string
     */
    public function getP57()
    {
        return $this->p57;
    }

    /**
     * Set p58
     *
     * @param string $p58
     *
     * @return Cuestionario
     */
    public function setP58($p58)
    {
        $this->p58 = $p58;

        return $this;
    }

    /**
     * Get p58
     *
     * @return string
     */
    public function getP58()
    {
        return $this->p58;
    }

    /**
     * Set p59
     *
     * @param string $p59
     *
     * @return Cuestionario
     */
    public function setP59($p59)
    {
        $this->p59 = $p59;

        return $this;
    }

    /**
     * Get p59
     *
     * @return string
     */
    public function getP59()
    {
        return $this->p59;
    }

    /**
     * Set p60
     *
     * @param string $p60
     *
     * @return Cuestionario
     */
    public function setP60($p60)
    {
        $this->p60 = $p60;

        return $this;
    }

    /**
     * Get p60
     *
     * @return string
     */
    public function getP60()
    {
        return $this->p60;
    }

    /**
     * Set p61
     *
     * @param string $p61
     *
     * @return Cuestionario
     */
    public function setP61($p61)
    {
        $this->p61 = $p61;

        return $this;
    }

    /**
     * Get p61
     *
     * @return string
     */
    public function getP61()
    {
        return $this->p61;
    }

    /**
     * Set p62a
     *
     * @param string $p62a
     *
     * @return Cuestionario
     */
    public function setP62a($p62a)
    {
        $this->p62a = $p62a;

        return $this;
    }

    /**
     * Get p62a
     *
     * @return string
     */
    public function getP62a()
    {
        return $this->p62a;
    }

    /**
     * Set p62b
     *
     * @param string $p62b
     *
     * @return Cuestionario
     */
    public function setP62b($p62b)
    {
        $this->p62b = $p62b;

        return $this;
    }

    /**
     * Get p62b
     *
     * @return string
     */
    public function getP62b()
    {
        return $this->p62b;
    }

    /**
     * Set p62c
     *
     * @param string $p62c
     *
     * @return Cuestionario
     */
    public function setP62c($p62c)
    {
        $this->p62c = $p62c;

        return $this;
    }

    /**
     * Get p62c
     *
     * @return string
     */
    public function getP62c()
    {
        return $this->p62c;
    }

    /**
     * Set p62d
     *
     * @param string $p62d
     *
     * @return Cuestionario
     */
    public function setP62d($p62d)
    {
        $this->p62d = $p62d;

        return $this;
    }

    /**
     * Get p62d
     *
     * @return string
     */
    public function getP62d()
    {
        return $this->p62d;
    }

    /**
     * Set p62e
     *
     * @param string $p62e
     *
     * @return Cuestionario
     */
    public function setP62e($p62e)
    {
        $this->p62e = $p62e;

        return $this;
    }

    /**
     * Get p62e
     *
     * @return string
     */
    public function getP62e()
    {
        return $this->p62e;
    }

    /**
     * Set p63
     *
     * @param string $p63
     *
     * @return Cuestionario
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
     * @return Cuestionario
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
     * Set p65a
     *
     * @param string $p65a
     *
     * @return Cuestionario
     */
    public function setP65a($p65a)
    {
        $this->p65a = $p65a;

        return $this;
    }

    /**
     * Get p65a
     *
     * @return string
     */
    public function getP65a()
    {
        return $this->p65a;
    }

    /**
     * Set p65b
     *
     * @param string $p65b
     *
     * @return Cuestionario
     */
    public function setP65b($p65b)
    {
        $this->p65b = $p65b;

        return $this;
    }

    /**
     * Get p65b
     *
     * @return string
     */
    public function getP65b()
    {
        return $this->p65b;
    }

    /**
     * Set p65c
     *
     * @param string $p65c
     *
     * @return Cuestionario
     */
    public function setP65c($p65c)
    {
        $this->p65c = $p65c;

        return $this;
    }

    /**
     * Get p65c
     *
     * @return string
     */
    public function getP65c()
    {
        return $this->p65c;
    }

    /**
     * Set p65d
     *
     * @param string $p65d
     *
     * @return Cuestionario
     */
    public function setP65d($p65d)
    {
        $this->p65d = $p65d;

        return $this;
    }

    /**
     * Get p65d
     *
     * @return string
     */
    public function getP65d()
    {
        return $this->p65d;
    }

    /**
     * Set p65e
     *
     * @param string $p65e
     *
     * @return Cuestionario
     */
    public function setP65e($p65e)
    {
        $this->p65e = $p65e;

        return $this;
    }

    /**
     * Get p65e
     *
     * @return string
     */
    public function getP65e()
    {
        return $this->p65e;
    }

    /**
     * Set p65f
     *
     * @param string $p65f
     *
     * @return Cuestionario
     */
    public function setP65f($p65f)
    {
        $this->p65f = $p65f;

        return $this;
    }

    /**
     * Get p65f
     *
     * @return string
     */
    public function getP65f()
    {
        return $this->p65f;
    }

    /**
     * Set p65g
     *
     * @param string $p65g
     *
     * @return Cuestionario
     */
    public function setP65g($p65g)
    {
        $this->p65g = $p65g;

        return $this;
    }

    /**
     * Get p65g
     *
     * @return string
     */
    public function getP65g()
    {
        return $this->p65g;
    }

    /**
     * Set p65h
     *
     * @param string $p65h
     *
     * @return Cuestionario
     */
    public function setP65h($p65h)
    {
        $this->p65h = $p65h;

        return $this;
    }

    /**
     * Get p65h
     *
     * @return string
     */
    public function getP65h()
    {
        return $this->p65h;
    }

    /**
     * Set p65i
     *
     * @param string $p65i
     *
     * @return Cuestionario
     */
    public function setP65i($p65i)
    {
        $this->p65i = $p65i;

        return $this;
    }

    /**
     * Get p65i
     *
     * @return string
     */
    public function getP65i()
    {
        return $this->p65i;
    }

    /**
     * Set p65j
     *
     * @param string $p65j
     *
     * @return Cuestionario
     */
    public function setP65j($p65j)
    {
        $this->p65j = $p65j;

        return $this;
    }

    /**
     * Get p65j
     *
     * @return string
     */
    public function getP65j()
    {
        return $this->p65j;
    }

    /**
     * Set p65k
     *
     * @param string $p65k
     *
     * @return Cuestionario
     */
    public function setP65k($p65k)
    {
        $this->p65k = $p65k;

        return $this;
    }

    /**
     * Get p65k
     *
     * @return string
     */
    public function getP65k()
    {
        return $this->p65k;
    }

    /**
     * Set p65l
     *
     * @param string $p65l
     *
     * @return Cuestionario
     */
    public function setP65l($p65l)
    {
        $this->p65l = $p65l;

        return $this;
    }

    /**
     * Get p65l
     *
     * @return string
     */
    public function getP65l()
    {
        return $this->p65l;
    }

    /**
     * Set p66
     *
     * @param string $p66
     *
     * @return Cuestionario
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
     * @return Cuestionario
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
     * @return Cuestionario
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
     * @return Cuestionario
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
     * Set p70a
     *
     * @param string $p70a
     *
     * @return Cuestionario
     */
    public function setP70a($p70a)
    {
        $this->p70a = $p70a;

        return $this;
    }

    /**
     * Get p70a
     *
     * @return string
     */
    public function getP70a()
    {
        return $this->p70a;
    }

    /**
     * Set p70b
     *
     * @param string $p70b
     *
     * @return Cuestionario
     */
    public function setP70b($p70b)
    {
        $this->p70b = $p70b;

        return $this;
    }

    /**
     * Get p70b
     *
     * @return string
     */
    public function getP70b()
    {
        return $this->p70b;
    }

    /**
     * Set p70c
     *
     * @param string $p70c
     *
     * @return Cuestionario
     */
    public function setP70c($p70c)
    {
        $this->p70c = $p70c;

        return $this;
    }

    /**
     * Get p70c
     *
     * @return string
     */
    public function getP70c()
    {
        return $this->p70c;
    }

    /**
     * Set p70d
     *
     * @param string $p70d
     *
     * @return Cuestionario
     */
    public function setP70d($p70d)
    {
        $this->p70d = $p70d;

        return $this;
    }

    /**
     * Get p70d
     *
     * @return string
     */
    public function getP70d()
    {
        return $this->p70d;
    }

    /**
     * Set p70e
     *
     * @param string $p70e
     *
     * @return Cuestionario
     */
    public function setP70e($p70e)
    {
        $this->p70e = $p70e;

        return $this;
    }

    /**
     * Get p70e
     *
     * @return string
     */
    public function getP70e()
    {
        return $this->p70e;
    }

    /**
     * Set p70f
     *
     * @param string $p70f
     *
     * @return Cuestionario
     */
    public function setP70f($p70f)
    {
        $this->p70f = $p70f;

        return $this;
    }

    /**
     * Get p70f
     *
     * @return string
     */
    public function getP70f()
    {
        return $this->p70f;
    }

    /**
     * Set p70g
     *
     * @param string $p70g
     *
     * @return Cuestionario
     */
    public function setP70g($p70g)
    {
        $this->p70g = $p70g;

        return $this;
    }

    /**
     * Get p70g
     *
     * @return string
     */
    public function getP70g()
    {
        return $this->p70g;
    }

    /**
     * Set p71
     *
     * @param string $p71
     *
     * @return Cuestionario
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
     * @return Cuestionario
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
     * @return Cuestionario
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
     * Set p74
     *
     * @param string $p74
     *
     * @return Cuestionario
     */
    public function setP74($p74)
    {
        $this->p74 = $p74;

        return $this;
    }

    /**
     * Get p74
     *
     * @return string
     */
    public function getP74()
    {
        return $this->p74;
    }

    /**
     * Set p75
     *
     * @param string $p75
     *
     * @return Cuestionario
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

    /**
     * Set p76
     *
     * @param string $p76
     *
     * @return Cuestionario
     */
    public function setP76($p76)
    {
        $this->p76 = $p76;

        return $this;
    }

    /**
     * Get p76
     *
     * @return string
     */
    public function getP76()
    {
        return $this->p76;
    }

    /**
     * Set p77
     *
     * @param string $p77
     *
     * @return Cuestionario
     */
    public function setP77($p77)
    {
        $this->p77 = $p77;

        return $this;
    }

    /**
     * Get p77
     *
     * @return string
     */
    public function getP77()
    {
        return $this->p77;
    }

    /**
     * Set p78
     *
     * @param string $p78
     *
     * @return Cuestionario
     */
    public function setP78($p78)
    {
        $this->p78 = $p78;

        return $this;
    }

    /**
     * Get p78
     *
     * @return string
     */
    public function getP78()
    {
        return $this->p78;
    }

    /**
     * Set p79
     *
     * @param string $p79
     *
     * @return Cuestionario
     */
    public function setP79($p79)
    {
        $this->p79 = $p79;

        return $this;
    }

    /**
     * Get p79
     *
     * @return string
     */
    public function getP79()
    {
        return $this->p79;
    }

    /**
     * Set p80
     *
     * @param string $p80
     *
     * @return Cuestionario
     */
    public function setP80($p80)
    {
        $this->p80 = $p80;

        return $this;
    }

    /**
     * Get p80
     *
     * @return string
     */
    public function getP80()
    {
        return $this->p80;
    }

    /**
     * Set p81
     *
     * @param string $p81
     *
     * @return Cuestionario
     */
    public function setP81($p81)
    {
        $this->p81 = $p81;

        return $this;
    }

    /**
     * Get p81
     *
     * @return string
     */
    public function getP81()
    {
        return $this->p81;
    }

    /**
     * Set p82
     *
     * @param string $p82
     *
     * @return Cuestionario
     */
    public function setP82($p82)
    {
        $this->p82 = $p82;

        return $this;
    }

    /**
     * Get p82
     *
     * @return string
     */
    public function getP82()
    {
        return $this->p82;
    }

    /**
     * Set p83a
     *
     * @param string $p83a
     *
     * @return Cuestionario
     */
    public function setP83a($p83a)
    {
        $this->p83a = $p83a;

        return $this;
    }

    /**
     * Get p83a
     *
     * @return string
     */
    public function getP83a()
    {
        return $this->p83a;
    }

    /**
     * Set p83b
     *
     * @param string $p83b
     *
     * @return Cuestionario
     */
    public function setP83b($p83b)
    {
        $this->p83b = $p83b;

        return $this;
    }

    /**
     * Get p83b
     *
     * @return string
     */
    public function getP83b()
    {
        return $this->p83b;
    }

    /**
     * Set p83c
     *
     * @param string $p83c
     *
     * @return Cuestionario
     */
    public function setP83c($p83c)
    {
        $this->p83c = $p83c;

        return $this;
    }

    /**
     * Get p83c
     *
     * @return string
     */
    public function getP83c()
    {
        return $this->p83c;
    }

    /**
     * Set p83d
     *
     * @param string $p83d
     *
     * @return Cuestionario
     */
    public function setP83d($p83d)
    {
        $this->p83d = $p83d;

        return $this;
    }

    /**
     * Get p83d
     *
     * @return string
     */
    public function getP83d()
    {
        return $this->p83d;
    }

    /**
     * Set p84
     *
     * @param string $p84
     *
     * @return Cuestionario
     */
    public function setP84($p84)
    {
        $this->p84 = $p84;

        return $this;
    }

    /**
     * Get p84
     *
     * @return string
     */
    public function getP84()
    {
        return $this->p84;
    }
    
    /**
     * Get array p24 as string
     *
     * @return string
     */
    public function getP24asString()
    {
    	return implode(', ', (array) $this->p24);
    }
    
    /**
     * Get array p26 as string
     *
     * @return string
     */
    public function getP26asString()
    {    	
    	return implode(', ', (array) $this->p26);
    }
    
    /**
     * Get array p30 as string
     *
     * @return string
     */
    public function getP30asString()
    {
    	return implode(', ', (array) $this->p30);
    }
    
    /**
     * Get array p32 as string
     *
     * @return string
     */
    public function getP32asString()
    {
    	return implode(', ', (array) $this->p32);
    }
    
    /**
     * Get array p33 as string
     *
     * @return string
     */
    public function getP33asString()
    {
    	return implode(', ', (array) $this->p33);
    }
    
    /**
     * Get array p36 as string
     *
     * @return string
     */
    public function getP36asString()
    {
    	return implode(', ', (array) $this->p36);
    }
    
    /**
     * Get array p42 as string
     *
     * @return string
     */
    public function getP42asString()
    {
    	return implode(', ', (array) $this->p42);
    }
    
}
