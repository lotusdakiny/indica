<?php

namespace AppBundle\Entity;

class Datas
{
	private $choices_1_5 = array();

	private $choices_si_no = array();
	
	private $choices_webinar = array();

	private $titulos_cuestionario = array();

	public function getChoices_1_5()
	{
		$choices_1_5 = array(
				'choices'  => array(
						'1' => 1,
						'2' => 2,
						'3' => 3,
						'4' => 4,
						'5' => 5,
				),
				'multiple'=>false,
				'expanded'=>true,
		);

		return $choices_1_5;
	}

	public function getChoices_si_no()
	{
		$choices_si_no = array('choices' => array(
				utf8_encode('Sí') => utf8_encode('Sí'),
				'No' => 'No',
		), 'multiple'=>false, 'expanded'=>true
		);

		return $choices_si_no;
	}
	
	public function getNumbers_webinar()
	{
		$numbers_webinar = array(
				2,
				0,
				10,
				15,
				25,
		);
		return $numbers_webinar;
	}
	
	public function getChoices_webinar()
	{
		$choices_webinar = array(
				'uno',
				'dos',
				'tres',
				'cuatro',
				'cinco',
		);
		return $choices_webinar;
	}

	public function getTitulos_cuestionario()
	{
		$titulos_cuestionario = array(
				'p1'=>utf8_encode('En su experiencia clínica, valore la influencia de los siguientes factores en la <strong>adherencia al tratamiento</strong> con los actuales antivirales de acción directa (AADs). (Siendo: 1.Nada influyente; 2.Poco influyente; 3.Moderadamente influyente; 4. Bastante influyente y 5. Muy influyente)'),
				'p2'=>utf8_encode('Efectos adversos del tratamiento.'),
				'webinar'=>utf8_encode('Elige tu webinar'),
		);
		return $titulos_cuestionario;
	}
}