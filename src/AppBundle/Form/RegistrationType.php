<?php
// src/AppBundle/Form/RegistrationType.php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class RegistrationType extends AbstractType
{
	public function buildForm(FormBuilderInterface $builder, array $options)
	{
		parent::buildForm($builder, $options);
		$builder->remove('username');  // we use email as the username
		
		$builder->add('name');
		$builder->add('apellido');
		$builder->add('zona');
		$builder->add('hospital');
		$builder->add('codigo');		
	}

	public function getParent()
	{
		return 'FOS\UserBundle\Form\Type\RegistrationFormType';

		// Or for Symfony < 2.8
		// return 'fos_user_registration';
	}

	public function getBlockPrefix()
	{
		return 'app_user_registration';
	}

	public function getName()
	{
		return $this->getBlockPrefix();
	}
	
	public function getApellido()
	{
		return $this->getBlockPrefix();
	}
	
	public function getZona()
	{
		return $this->getBlockPrefix();
	}
	
	public function getHospital()
	{
		return $this->getBlockPrefix();
	}
	
	public function getCodigo()
	{
		return $this->getBlockPrefix();
	}
}