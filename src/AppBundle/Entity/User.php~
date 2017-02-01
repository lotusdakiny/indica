<?php
// src/AppBundle/Entity/User.php

namespace AppBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
class User extends BaseUser
{
	/**
	 * @ORM\Id
	 * @ORM\Column(type="integer")
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	protected $id;

	public function __construct()
	{
		parent::__construct();
		// your own logic
	}
	
	/**
	 * @ORM\Column(type="string", length=255)
	 *
	 * @Assert\NotBlank(message="Please enter your name.", groups={"Registration", "Profile"})
	 * @Assert\Length(
	 *     min=3,
	 *     max=255,
	 *     minMessage="The name is too short.",
	 *     maxMessage="The name is too long.",
	 *     groups={"Registration", "Profile"}
	 * )
	 */
	private $name;
	
	/**
     * @ORM\Column(type="string", length=255)
     *
     * @Assert\NotBlank(message="Please enter your name.", groups={"Registration", "Profile"})
     * @Assert\Length(
     *     min=3,
     *     max=255,
     *     minMessage="The name is too short.",
     *     maxMessage="The name is too long.",
     *     groups={"Registration", "Profile"}
     * )
     */
	private $apellido;
	
	/**
	 * @ORM\Column(type="string", length=255)
	 *
	 * @Assert\NotBlank(message="Please enter your name.", groups={"Registration", "Profile"})
	 * @Assert\Length(
	 *     min=3,
	 *     max=255,
	 *     minMessage="The name is too short.",
	 *     maxMessage="The name is too long.",
	 *     groups={"Registration", "Profile"}
	 * )
	 */
	private $zona;

	/**
	 * @ORM\Column(type="string", length=255)
	 *
	 * @Assert\NotBlank(message="Please enter your name.", groups={"Registration", "Profile"})
	 * @Assert\Length(
	 *     min=3,
	 *     max=255,
	 *     minMessage="The name is too short.",
	 *     maxMessage="The name is too long.",
	 *     groups={"Registration", "Profile"}
	 * )
	 */
	private $hospital;
	
	/**
	 * @ORM\Column(type="string", length=255)
	 *
	 * @Assert\NotBlank(message="Please enter your name.", groups={"Registration", "Profile"})
	 * @Assert\Length(
	 *     min=3,
	 *     max=255,
	 *     minMessage="The name is too short.",
	 *     maxMessage="The name is too long.",
	 *     groups={"Registration", "Profile"}
	 * )
	 */
	private $codigo;

    /**
     * Set apellido
     *
     * @param string $apellido
     *
     * @return User
     */
    public function setApellido($apellido)
    {
        $this->apellido = $apellido;

        return $this;
    }

    /**
     * Get apellido
     *
     * @return string
     */
    public function getApellido()
    {
        return $this->apellido;
    }

    /**
     * Set codigo
     *
     * @param string $codigo
     *
     * @return User
     */
    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;

        return $this;
    }

    /**
     * Get codigo
     *
     * @return string
     */
    public function getCodigo()
    {
        return $this->codigo;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return User
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set zona
     *
     * @param string $zona
     *
     * @return User
     */
    public function setZona($zona)
    {
        $this->zona = $zona;

        return $this;
    }

    /**
     * Get zona
     *
     * @return string
     */
    public function getZona()
    {
        return $this->zona;
    }

    /**
     * Set hospital
     *
     * @param string $hospital
     *
     * @return User
     */
    public function setHospital($hospital)
    {
        $this->hospital = $hospital;

        return $this;
    }

    /**
     * Get hospital
     *
     * @return string
     */
    public function getHospital()
    {
        return $this->hospital;
    }
}
