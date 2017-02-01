<?php

namespace AppBundle\Entity;

class Datas
{
	private $choices_1_5 = array();
	private $choices_1_9 = array();

	private $choices_si_no = array();
	private $choices_si_nosigo = array();
	
	private $choices_porcentaje = array();
	
	private $choices_p3 = array();
	private $choices_p5 = array();
	private $choices_p6 = array();
	private $choices_p8 = array();
	
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
	
	public function getChoices_1_9()
	{
		$choices = array(
				'choices'  => array(
						'1' => 1,
						'2' => 2,
						'3' => 3,
						'4' => 4,
						'5' => 5,
						'6' => 6,
						'7' => 7,
						'8' => 8,
						'9' => 9,
				),
				'multiple'=>false,
				'expanded'=>true,
		);
	
		return $choices;
	}
	
	public function getChoices_porcentaje()
	{
		$choices_porcentaje = array(
				'choices'  => array(
						'5' => 5,
						'10' => 10,
						'15' => 15,
						'20' => 20,
						'25' => 25,
						'30' => 30,
						'35' => 35,
						'40' => 40,
						'45' => 45,
						'50' => 50,
						'55' => 55,
						'60' => 60,
						'65' => 65,
						'70' => 70,
						'75' => 75,
						'80' => 80,
						'85' => 85,
						'90' => 90,
						'95' => 95,
						'100' => 100,
				),
				'multiple'=>false,
				'expanded'=>false,
		);
	
		return $choices_porcentaje;
	}

	public function getChoices_si_no()
	{
		$choices_si_no = array('choices' => array(
				utf8_encode('S�') => utf8_encode('S�'),
				'No' => 'No',
		), 'multiple'=>false, 'expanded'=>true
		);

		return $choices_si_no;
	}
	
	public function getChoices_si_nosigo()
	{
		$choices = array('choices' => array(
				utf8_encode('S�') => utf8_encode('S�'),
				utf8_encode('No, sigo mis propios criterios') => utf8_encode('No, sigo mis propios criterios'),
		), 'multiple'=>false, 'expanded'=>true
		);
	
		return $choices;
	}
	
	public function getChoices_p3()
	{
		$choices_p3 = array('choices' => array(
				'A' => '0-20%',
				'B' => '20-40%',
				'C' => '40-60%',
				'D' => '60-80%',
				'E' => '80-100%',
		),  
			'multiple'=>false, 
			'expanded'=>true
		);
	
		return $choices_p3;
	}
	
	public function getChoices_p5()
	{
		$choices_p5 = array('choices' => array(
				'A' => utf8_encode('40-50 a�os'),
				'B' => utf8_encode('50-60 a�os'),
				'C' => utf8_encode('60-70 a�os'),
				'D' => utf8_encode('>70 a�os'),
		),
				'multiple'=>false,
				'expanded'=>true
		);
	
		return $choices_p5;
	}
	
	public function getChoices_p6()
	{
		$choices_p6 = array('choices' => array(
				'A' => '<10%',
				'B' => '10-20%',
				'C' => '20-40%',
				'D' => '40-60%',
				'E' => '>60%',
		),
				'multiple'=>false,
				'expanded'=>true
		);
	
		return $choices_p6;
	}
	
	public function getChoices_p8()
	{
		$choices_p8 = array('choices' => array(
				'A' => utf8_encode('Falta de adherencia al tratamiento'),
				'B' => utf8_encode('Transgresi�n diet�tica'),
				'C' => utf8_encode('Inercia terap�utica'),
				'D' => utf8_encode('Infecci�n intercurrente'),
				'E' => utf8_encode('Otra patolog�a concomitante (anemia, tirotoxicosis�)'),
		),
				'multiple'=>false,
				'expanded'=>true
		);
	
		return $choices_p8;
	}
	
	public function getChoices_p9()
	{
		$choices = array('choices' => array(
				'A' => utf8_encode('Es menor que en HFpEF'),
				'B' => utf8_encode('Es mayor que en HFpEF'),
				'C' => utf8_encode('Es similar en HFrEF y en HFpEF'),
		), 'multiple'=>false, 'expanded'=>true );	
		return $choices;
	}
	
	public function getChoices_p10()
	{
		$choices = array('choices' => array(
				'A' => '0-20',
				'B' => '20-40',
				'C' => '40-60',
				'D' => '>60',
		), 'multiple'=>false, 'expanded'=>true );
		return $choices;
	}
	
	public function getChoices_guia()
	{
		$choices = array('choices' => array(
				'A' => utf8_encode('Gu�a Europea (ESC)'),
				'B' => utf8_encode('Gu�a Americana (AHA)'),
				'C' => utf8_encode('Gu�as auton�micas o protocolos hospitalarios'),
			), 'multiple'=>false, 'expanded'=>true );
		return $choices;
	}
	
	public function getChoices_p19()
	{
		$choices = array('choices' => array(
				'A' => utf8_encode('Una FE del VI < 50%.'),
				'B' => utf8_encode('Una FE del VI < 40%.'),
				'C' => utf8_encode('Una FE del VI < 35%.'),
				'D' => utf8_encode('Una FE del VI < 45%.'),
		), 'multiple'=>false, 'expanded'=>true );
		return $choices;
	}
	
	public function getChoices_p20()
	{
		$choices = array('choices' => array(
				'A' => utf8_encode('Ecocardiograma'),
				'B' => utf8_encode('P�ptidos natriur�ticos'),
				'C' => utf8_encode('ECG'),
				'D' => utf8_encode('Rx de t�rax'),
				'E' => utf8_encode('Anal�tica general'),
		), 'multiple'=>false, 'expanded'=>true );
		return $choices;
	}
	
	public function getChoices_p21()
	{
		$choices = array('choices' => array(
				'A' => utf8_encode('No, utilizo los mismos'),
				'B' => utf8_encode('S�, var�an algunos de ellos'),
				'C' => utf8_encode('S�, var�an todos'),
		), 'multiple'=>false, 'expanded'=>true );
		return $choices;
	}
	
	public function getChoices_p23()
	{
		$choices = array('choices' => array(
				'A' => utf8_encode('Del ECG'),
				'B' => utf8_encode('Del ECG y del ecocardiograma en igual medida'),
				'C' => utf8_encode('Del ecocardiograma'),
		), 'multiple'=>false, 'expanded'=>true );
		return $choices;
	}
	
	public function getChoices_p24()
	{
		$choices_porcentaje = array(
				'choices'  => array(
						'a' => 'a',
						'b' => 'b',
						'c' => 'c',
						'd' => 'd',
						'e' => 'e',
						'f' => 'f',
						'g' => 'g',
						'h' => 'h',
				),
				'multiple'=>true,
				'expanded'=>true,
				'required' => false,
		);
	
		return $choices_porcentaje;
	}
	
	public function getChoices_p25()
	{
		$choices = array('choices' => array(
				'A' => utf8_encode('TSH'),
				'B' => utf8_encode('Glucosa y HbA1c'),
				'C' => utf8_encode('Ferritina'),
				'D' => utf8_encode('Hemoglobina y RCB'),
				'E' => utf8_encode('Par�metros de funci�n hep�tica'),
				'F' => utf8_encode('P�ptidos natriur�ticos'),
				'G' => utf8_encode('Sodio, potasio, urea, creatinina'),
				'H' => utf8_encode('Perfil lip�dico'),
				'I' => utf8_encode('Otros'),
		), 'multiple'=>false, 'expanded'=>true );
		return $choices;
	}
	
	public function getChoices_p26()
	{
		$choices = array('choices' => array(
				'A' => utf8_encode('Para confirmar la existencia de una miocardiopat�a.'),
				'B' => utf8_encode('Para determinar la FEVI con m�s fiabilidad.'),
				'C' => utf8_encode('Ante la sospecha de anomal�as estructurales cuando el ecocardiograma transtor�cico no es definitivo.'),
				'D' => utf8_encode('No solicito RMN cardiaca en pacientes con ICC.'),
		), 'multiple'=>true, 'expanded'=>true );
		return $choices;
	}
	
	public function getChoices_p29()
	{
		$choices = array('choices' => array(
				'A' => utf8_encode('S�, a la mayor�a'),
				'B' => utf8_encode('S�, a un n�mero aceptable'),
				'C' => utf8_encode('No'),
		), 'multiple'=>false, 'expanded'=>true );
		return $choices;
	}
	
	public function getChoices_p30()
	{
		$choices = array('choices' => array(
				'A' => utf8_encode('IECAs/ARA II'),
				'B' => utf8_encode('Antagonistas de la aldosterona'),
				'C' => utf8_encode('Betabloqueantes'),
				'D' => utf8_encode('Sacubitrilo/valsart�n'),
				'E' => utf8_encode('Otros'),
		), 'multiple'=>true, 'expanded'=>true );
		return $choices;
	}

	public function getChoices_p31()
	{
		$choices = array('choices' => array(
				'A' => utf8_encode('IECA'),
				'B' => utf8_encode('ARAII'),
				'C' => utf8_encode('Antagonistas de la aldosterona'),
				'D' => utf8_encode('Betabloqueantes'),
				'E' => utf8_encode('Sacubitrilo/Valsart�n'),
		), 'multiple'=>false, 'expanded'=>true );
		return $choices;
	}
	
	public function getChoices_precio()
	{
		$choices = array('choices' => array(
				'A' => utf8_encode('Mejora de los s�ntomas'),
				'B' => utf8_encode('Reducci�n de la tasa de mortalidad/morbilidad'),
				'C' => utf8_encode('Reducci�n del n�mero de hospitalizaciones'),
				'D' => utf8_encode('Facilidad de uso'),
				'E' => utf8_encode('Adherencia terap�utica'),
				'F' => utf8_encode('Perfil de seguridad'),
				'G' => utf8_encode('Precio'),
		), 'multiple'=>true, 'expanded'=>true );
		return $choices;
	}
	
	public function getChoices_p33()
	{
		$choices = array('choices' => array(
				'A' => utf8_encode('Falta de consecuci�n de objetivos'),
				'B' => utf8_encode('Titulaci�n de dosis'),
				'C' => utf8_encode('Riesgo elevado de agudizaci�n'),
				'D' => utf8_encode('Intolerancia al tratamiento'),
				'E' => utf8_encode('Efectos secundarios'),
				'F' => utf8_encode('Interacciones farmacol�gicas'),
				'G' => utf8_encode('Petici�n del paciente'),
				'H' => utf8_encode('Precio elevado del tratamiento'),
		), 'multiple'=>true, 'expanded'=>true );
		return $choices;
	}
	
	public function getChoices_p34()
	{
		$choices = array('choices' => array(
				'A' => utf8_encode('No administrar los f�rmacos que han demostrado reducir la morbimortalidad.'),
				'B' => utf8_encode('La falta de adherencia al tratamiento por una inadecuada concienciaci�n del paciente.'),
				'C' => utf8_encode('La insuficiente titulaci�n de los f�rmacos.'),
				'D' => utf8_encode('La necesidad de retirar f�rmacos por efectos secundarios.'),
		), 'multiple'=>false, 'expanded'=>true );
		return $choices;
	}
	
	public function getChoices_p35()
	{
		$choices = array('choices' => array(
				'A' => utf8_encode('El cardi�logo en la consulta externa.'),
				'B' => utf8_encode('El cardi�logo en la unidad de insuficiencia cardiaca.'),
				'C' => utf8_encode('El m�dico de familia.'),
				'D' => utf8_encode('La enfermera en la unidad de insuficiencia cardiaca.'),
				'E' => utf8_encode('Cualquier especialista en consulta externa'),
		), 'multiple'=>false, 'expanded'=>true );
		return $choices;
	}
	
	public function getChoices_p36()
	{
		$choices = array('choices' => array(
				'A' => utf8_encode('Falta de efecto sobre los s�ntomas'),
				'B' => utf8_encode('Falta de efecto sobre la tasa de mortalidad/morbilidad'),
				'C' => utf8_encode('Falta de efecto sobre el n�mero de hospitalizaciones'),
				'D' => utf8_encode('Efectos adversos'),
				'E' => utf8_encode('Falta de adherencia del paciente'),
				'F' => utf8_encode('Costes asociados'),
		), 'multiple'=>true, 'expanded'=>true );
		return $choices;
	}
	
	public function getChoices_p38()
	{
		$choices = array('choices' => array(
				'A' => '<10%',
				'B' => '10-30%',
				'C' => '30-50%',
				'D' => '>50',
		), 'multiple'=>false, 'expanded'=>true );
		return $choices;
	}
	
	public function getChoices_p39()
	{
		$choices = array('choices' => array(
				'A' => utf8_encode('S�, cuanto antes'),
				'B' => utf8_encode('Dependiendo de la gravedad de los s�ntomas'),
				'C' => utf8_encode('No, con ajustar su medicaci�n actual es suficiente'),
		), 'multiple'=>false, 'expanded'=>true );
		return $choices;
	}
	
	public function getChoices_p40()
	{
		$choices = array('choices' => array(
				'A' => utf8_encode('Sustituyo uno por otro, de un d�a para otro'),
				'B' => utf8_encode('Lo retiro 48 horas antes de comenzar'),
				'C' => utf8_encode('Lo retiro al menos 36 horas antes de comenzar'),
				'D' => utf8_encode('Dejo una semana de intervalo entre un tratamiento y otro'),
		), 'multiple'=>false, 'expanded'=>true );
		return $choices;
	}
	
	public function getChoices_p41()
	{
		$choices = array('choices' => array(
				'A' => utf8_encode('Paciente con IC de origen isqu�mico (Post IAM, revascularizado), sintom�tico a pesar del tratamiento est�ndar para ICC'),
				'B' => utf8_encode('Paciente con miocardiopat�a dilatada, sintom�tico a pesar del tratamiento est�ndar para ICC'),
				'C' => utf8_encode('Paciente con IC de origen valvular, sintom�tico a pesar del tratamiento est�ndar para ICC'),
		), 'multiple'=>false, 'expanded'=>true );
		return $choices;
	}
	
	public function getChoices_p47()
	{
		$choices = array('choices' => array(
				'A' => '<10%',
				'B' => '10-20%',
				'C' => '20-40%',
				'D' => '40-60%',
				'E' => '60-80%',
				'F' => '>80%',
		), 'multiple'=>false, 'expanded'=>true );
		return $choices;
	}
	public function getChoices_p48()
	{
		$choices = array('choices' => array(
				'A' => utf8_encode('S�, pero m�s en Atenci�n Especializada'),
				'B' => utf8_encode('S�, tanto en AP como en Atenci�n Especializada'),
				'C' => utf8_encode('No, en t�rminos generales'),
		), 'multiple'=>false, 'expanded'=>true );
		return $choices;
	}
	
	public function getChoices_p51()
	{
		$choices = array('choices' => array(
				'A' => utf8_encode('Organismos de gesti�n sanitaria'),
				'B' => utf8_encode('Protocolos de actuaci�n de su centro o �rea de salud'),
				'C' => utf8_encode('Exigencias de tratamiento de los pacientes'),
				'D' => utf8_encode('Experiencia de otros colegas'),
		), 'multiple'=>false, 'expanded'=>true );
		return $choices;
	}
	
	public function getChoices_p53()
	{
		$choices = array('choices' => array(
				'A' => utf8_encode('Verbal en el momento de la consulta'),
				'B' => utf8_encode('Materiales informativos (folletos, hojas, etc.)'),
				'C' => utf8_encode('Recomendaci�n de p�ginas web'),
		), 'multiple'=>false, 'expanded'=>true );
		return $choices;
	}
	
	public function getChoices_patologias()
	{
		$choices = array('choices' => array(
				'A' => utf8_encode('S�, en igual medida que en otras patolog�as'),
				'B' => utf8_encode('S�, en mayor medida que en otras patolog�as'),
				'C' => utf8_encode('No'),
		), 'multiple'=>false, 'expanded'=>true );
		return $choices;
	}
	
	public function getChoices_p58()
	{
		$choices = array('choices' => array(
				'A' => utf8_encode('El temor a efectos secundarios de los f�rmacos.'),
				'B' => utf8_encode('Falta de conocimientos sobre la enfermedad y la influencia de los f�rmacos en la misma.'),
				'C' => utf8_encode('Creer que con la prescripci�n del f�rmaco ya se mejora algo el pron�stico, aunque la titulaci�n no sea correcta.'),
				'D' => utf8_encode('El precio de los f�rmacos y la presi�n de la administraci�n.'),
				'E' => utf8_encode('La polimedicaci�n a la que se ven sometidos estos pacientes.'),
		), 'multiple'=>false, 'expanded'=>true );
		return $choices;
	}
	
	public function getChoices_meses()
	{
		$choices = array('choices' => array(
				utf8_encode('1 mes') => utf8_encode('1 mes'),
				utf8_encode('3 meses') => utf8_encode('3 meses'),
				utf8_encode('6 meses') => utf8_encode('6 meses'),
				utf8_encode('1 a�o') => utf8_encode('1 a�o'),
				utf8_encode('>1 a�o') => utf8_encode('>1 a�o'),
		), 'multiple'=>false, 'expanded'=>true );
		return $choices;
	}
	
	public function getChoices_p68()
	{
		$choices = array('choices' => array(
				'A' => utf8_encode('Interrogaci�n directa al paciente'),
				'B' => utf8_encode('Detecci�n indirecta (cuestionario, recuento)'),
		), 'multiple'=>false, 'expanded'=>true );
		return $choices;
	}
	
	public function getChoices_p69()
	{
		$choices = array('choices' => array(
				'A' => utf8_encode('La polimedicaci�n.'),
				'B' => utf8_encode('Los efectos secundarios de los f�rmacos.'),
				'C' => utf8_encode('La falta de informaci�n/concienciaci�n del paciente.'),
				'D' => utf8_encode('El elevado precio de los f�rmacos'),
		), 'multiple'=>false, 'expanded'=>true );
		return $choices;
	}
	
	public function getChoices_p82()
	{
		$choices = array('choices' => array(
				'A' => utf8_encode('Pacientes ambulatorios'),
				'B' => utf8_encode('Pacientes ingresados'),
		), 'multiple'=>false, 'expanded'=>true );
		return $choices;
	}
	
	public function getChoices_p84()
	{
		$choices = array('choices' => array(
				'A' => utf8_encode('Docencia universitaria'),
				'B' => utf8_encode('Formaci�n especializada'),
				'C' => utf8_encode('Unidad de IC / consulta monogr�fica'),
				'D' => utf8_encode('Consulta de Enfermer�a especializada'),
				'E' => utf8_encode('Educaci�n del paciente'),
				'F' => utf8_encode('Otras'),
		), 'multiple'=>false, 'expanded'=>true );
		return $choices;
	}
	
	public function getChoices_nada()
	{
		$choices = array('choices' => array(
				utf8_encode('Nada')=>utf8_encode('Nada'),
				utf8_encode('Poco')=>utf8_encode('Poco'),
				utf8_encode('Regular')=>utf8_encode('Regular'),
				utf8_encode('Bastante')=>utf8_encode('Bastante'),
				utf8_encode('Mucho')=>utf8_encode('Mucho'),
		), 'multiple'=>false, 'expanded'=>true );
		return $choices;
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
				'titulo1'=>utf8_encode('1. EPIDEMIOLOG�A Y ESTRATIFICACI�N DE LA INSUFICIENCIA CARD�ACA (IC)'),
				'p1'=>utf8_encode('�En qu� situaci�n recibe a sus pacientes nuevos con IC? Indique el porcentaje'),
				'p1a'=>utf8_encode('Como sospecha diagn�stica desde Atenci�n Primaria'),
				'p1b'=>utf8_encode('Como sospecha diagn�stica desde otra especialidad'),
				'p1c'=>utf8_encode('Ya diagnosticados'),
				'p1d'=>utf8_encode('La sospecha se genera en la consulta, tras la anamnesis y los hallazgos f�sicos'),
				'p2'=>utf8_encode('�Cu�l suele ser la etiolog�a principal de la IC en sus pacientes? Se�ale un porcentaje aproximado de cada causa'),
				'p2a'=>utf8_encode('C. isqu�mica'),
				'p2b'=>utf8_encode('Valvulopat�as'),
				'p2c'=>utf8_encode('Miocardiopat�as'),
				'p2d'=>utf8_encode('C. hipertensiva'),
				'p2e'=>utf8_encode('Otras patolog�as cardiacas'),				
				'p3'=>utf8_encode('De sus pacientes con IC, �qu� porcentaje son mujeres?'),
				'p4'=>utf8_encode('�Cu�l considera que es la edad media de sus pacientes con IC?'),
				'p5'=>utf8_encode('�C�mo se distribuyen por edades sus pacientes con IC? Indique el porcentaje'),
				'p6'=>utf8_encode('�Qu� porcentaje de sus pacientes con IC y FEVI reducida tienen ICC estable, entendida como ICC sin s�ntomas/cambios en el �ltimo mes?/ �Qu� porcentaje de sus pacientes con IC tienen FEVI reducida en tratamiento actual?'),
				'p7'=>utf8_encode('�En qu� porcentaje de sus pacientes con IC y FEVI reducida, �sta muestra empeoramiento o agudizaci�n?'),
				'p8'=>utf8_encode('�Cu�l es, en su opini�n, la causa m�s frecuente de agudizaci�n de la IC en pacientes con FEVI reducida?'),
				'p9'=>utf8_encode('A su juicio, la mortalidad por cualquier causa asociada a la HFrEF: '),
				'p10'=>utf8_encode('�Cu�ntos pacientes ve al a�o con diagn�stico de insuficiencia card�aca (IC)?'),
				'p11'=>utf8_encode('�Qu� porcentaje de sus pacientes con IC se encuentran en cada una de las siguientes clases funcionales?'),
				'p11a'=>utf8_encode('I'),
				'p11b'=>utf8_encode('II'),
				'p11c'=>utf8_encode('III'),				
				'p11d'=>utf8_encode('IV'),
				'p12'=>utf8_encode('�Qu� importancia otorga a las siguientes afirmaciones sobre la situaci�n actual de la IC? Valore por favor del 1 al 9 (siendo 9 el valor m�ximo)'),
				'p12a'=>utf8_encode('Alta tasa de mortalidad'),
				'p12b'=>utf8_encode('Alta tasa de morbilidad'),				
				'p12c'=>utf8_encode('Elevado coste econ�mico'),
				'p12d'=>utf8_encode('Escaso arsenal terap�utico'),
				'p12e'=>utf8_encode('Falta de unidades especializadas'),
				'p13'=>utf8_encode('�Ha visto usted alguna vez un paciente con IC con angioedema?'),				
				'p14'=>utf8_encode('De sus pacientes con IC con FEVI <30% con cardiopat�a isqu�mica, �qu� porcentaje  tienen un DAI?'),
				'p15'=>utf8_encode('�En sus pacientes ancianos con IC hace usted alg�n tipo de valoraci�n geri�trica integral? '),
				'p15texto'=>utf8_encode('En caso afirmativo �Qu� escalas utiliza?'),
				'titulo2'=>utf8_encode('2. DIAGN�STICO DEL PACIENTE CON IC'),
				'p16'=>utf8_encode('Con las pruebas diagn�sticas de las que dispone, �le es posible diagnosticar correctamente a la mayor�a de los pacientes con IC?:'),
				'p17'=>utf8_encode('A la hora de realizar un diagn�stico, �se suele basar en alguna Gu�a de Pr�ctica Cl�nica, Protocolo de Actuaci�n/Algoritmo de Decisi�n (PA)?'),
				'p18'=>utf8_encode('En caso afirmativo, �cu�l es su preferida?'),
				'p19'=>utf8_encode('�Qu� considera una FEVI reducida?'),
				'p20'=>utf8_encode('�Cu�les son en su opini�n las pruebas diagn�sticas que deber�an realizarse de rutina en todo pacientes con IC?'),
				'p21'=>utf8_encode('En cuanto a los p�ptidos natriur�ticos, �considera distintos l�mites superiores de normalidad en la IC aguda y en la cr�nica?'),
				'p22'=>utf8_encode('Con respecto a los p�ptidos natriur�ticos, se�ale su acuerdo o disconformidad con las siguientes afirmaciones. (Valore por favor del 1 al 9, siendo 9 el valor m�ximo):'),
				'p22a'=>utf8_encode('Deber�an determinarse ante todo paciente con disnea.'),
				'p22b'=>utf8_encode('S�lo deber�an solicitarlo cardi�logos o personal dedicado al manejo de la insuficiencia cardiaca, para evitar errores en su interpretaci�n.'),
				'p22c'=>utf8_encode('Deber�an solicitarse a todos los pacientes con edemas en EEII.'),
				'p22d'=>utf8_encode('Ante un valor intermedio debe considerarse igualmente la IC como principal sospecha diagn�stica.'),
				'p22e'=>utf8_encode('Son �tiles para valorar la eficacia del tratamiento.'),
				'p23'=>utf8_encode('Respecto a la utilidad del electrocardiograma (ECG) o del ecocardiograma en el diagn�stico de la IC, �de cu�l piensa que deriva fundamentalmente el tratamiento?:'),
				'p24'=>utf8_encode('�C�mo valorar�a del 1 al 9 (9= m�xima puntuaci�n) las distintas pruebas de imagen card�aca en IC?'),
				'p24a'=>utf8_encode('Radiograf�a de t�rax'),
				'p24b'=>utf8_encode('Ecocardiograma transtor�cico'),
				'p24c'=>utf8_encode('Ecocardiograma transesof�gico'),
				'p24d'=>utf8_encode('Resonancia magn�tica card�aca'),
				'p24e'=>utf8_encode('SPECT'),
				'p24f'=>utf8_encode('Tomograf�a por emisi�n de positrones (PET)'),
				'p24g'=>utf8_encode('Angiograf�a coronaria'),
				'p24h'=>utf8_encode('Tomograf�a card�aca computerizada'),
				'p24titulo1'=>utf8_encode('Utilidad'),
				'p24titulo2'=>utf8_encode('Disponibilidad en mi centro'),
				'p25'=>utf8_encode('�Qu� par�metros de laboratorio solicita Vd. En la valoraci�n inicial de un paciente con IC?:'),
				'p26'=>utf8_encode('�A qu� pacientes con ICC solicita usted una resonancia magn�tica cardiaca? (se�ale todas las que considere adecuadas):'),
				'p27'=>utf8_encode('�En qu� porcentaje de sus pacientes con IC eval�a usted�?'),
				'p27a'=>utf8_encode('Los niveles de ferritina'),
				'p27b'=>utf8_encode('El grado de depresi�n'),
				'p27c'=>utf8_encode('La situaci�n cognitiva'),
				'p27d'=>utf8_encode('Par�metros nutricionales'),
				'p27e'=>utf8_encode('Fragilidad'),
				'p27f'=>utf8_encode('Grado de dependencia'),
				'p28'=>utf8_encode('En cuanto a las pruebas diagn�sticas rutinarias en pacientes con IC, �recomienda realizar consejo gen�tico en algunos casos?'),
				'titulo3'=>utf8_encode('3. TRATAMIENTO FARMACOL�GICO DE LA IC'),
				'p29'=>utf8_encode('�Considera que, con los f�rmacos de los que dispone, le es posible tratar correctamente a sus pacientes con IC?:'),
				'p30'=>utf8_encode('En pacientes con ICC y FEVI reducida, �con qu� f�rmaco/s suele comenzar el tratamiento? (marque todas las que considere)'),
				'p31'=>utf8_encode('Ante un paciente con PA baja, en el que deba elegir uno de los f�rmacos anteriores, �cu�l cree que tiene mayor impacto en la morbimortalidad y es el que elegir�a en primer lugar?'),
				'p32'=>utf8_encode('�Por qu� utiliza IECA en sus pacientes con ICC y FEVI reducida? (marque las opciones que considere)'),
				'p33'=>utf8_encode('En pacientes con ICC y FEVI reducida, �cu�les cree que son los motivos m�s frecuentes a la hora de modificar el tratamiento? (marque todas las que considere)'),
				'p34'=>utf8_encode('�Cu�l cree que es la principal dificultad en el tratamiento de la ICC con FEVI reducida para conseguir los objetivos terap�uticos?'),
				'p35'=>utf8_encode('�Qui�n es, a su juicio, la persona que deber�a responsabilizarse de la correcta titulaci�n de los f�rmacos empleados en el tratamiento de la ICC con FEVI reducida?'),
				'p36'=>utf8_encode('�Qu� le har�a cambiar el tratamiento con IECAs en un paciente con HFrEF? (marque todas las que considere)'),
				'p37'=>utf8_encode('Conoce el estudio PARADIGM-HF, en el que se demuestra la superioridad de sacubitrilo/valsart�n frente a enalapril en la reducci�n del riesgo de hospitalizaciones y mortalidad de la ICC con fracci�n de eyecci�n reducida (HFrEF)?'),
				'p38'=>utf8_encode('�Qu� porcentaje de sus pacientes con HFrEF sintom�tica est�n recibiendo sacubitrilo/valsart�n?'),
				'p39'=>utf8_encode('�Considera necesario, en un paciente HFrEF con s�ntomas a pesar del tratamiento actual con el est�ndar, un cambio en el tratamiento?'),
				'p40'=>utf8_encode('Ante el cambio de un IECA por sacubitrilo/valsart�n, �c�mo retirar�a el IECA?'),
				'p41'=>utf8_encode('�En cu�les de los siguientes pacientes normotensos/hipertensos considerar�a la administraci�n de sacubitrilo/valsart�n?'),
				'p42'=>utf8_encode('�Por qu� elegir�a sacubitrilo/valsartan? (marque las opciones que considere)'),
				'p43'=>utf8_encode('Respecto a sacubitrilo/valsart�n, valore de 1 a 9 el conocimiento  del producto (siendo 9 el valor m�ximo)'),
				'p43a'=>utf8_encode('Mecanismo de acci�n'),
				'p43b'=>utf8_encode('Caracter�sticas diferenciales'),
				'p43c'=>utf8_encode('Beneficios'),
				'p43d'=>utf8_encode('Seguridad'),
				'titulo4'=>utf8_encode('4. MANEJO DE COMORBILIDADES EN PACIENTE CON IC'),
				'p44'=>utf8_encode('�Qu� porcentaje de sus pacientes presentan las siguientes comorbilidades?'),
				'p44a'=>utf8_encode('Angina de pecho y arteriopat�a'),
				'p44b'=>utf8_encode('Caquexia y sarcopenia'),
				'p44c'=>utf8_encode('C�ncer'),
				'p44d'=>utf8_encode('Alteraciones del SNC (depresi�n, ictus, disfunci�n del SNA)'),
				'p44e'=>utf8_encode('Diabetes'),
				'p44f'=>utf8_encode('Disfunci�n er�ctil'),
				'p44g'=>utf8_encode('Gota, artritis'),
				'p44h'=>utf8_encode('Hipo o hipercalemia'),				
				'p44i'=>utf8_encode('Hiperlipidemia'),
				'p44j'=>utf8_encode('HTA'),
				'p44k'=>utf8_encode('Anemia'),
				'p44l'=>utf8_encode('Enfermedad renal cr�nica (ERC)'),
				'p44m'=>utf8_encode('Enfermedades pulmonares'),
				'p44n'=>utf8_encode('Alteraci�n del sue�o'),
				'p44o'=>utf8_encode('Enfermedades de la v�lvula a�rtica'),
				'p44p'=>utf8_encode('Otras'),
				'p45'=>utf8_encode('�En qu� medida afecta la comorbilidad al manejo de ese paciente con IC? (valore del 1 al  9, siendo 9 el valor m�ximo)'),
				'p45a'=>utf8_encode('Angina de pecho y arteriopat�a'),
				'p45b'=>utf8_encode('Caquexia y sarcopenia'),
				'p45c'=>utf8_encode('C�ncer'),
				'p45d'=>utf8_encode('Alteraciones del SNC (depresi�n, ictus, disfunci�n del SNA)'),
				'p45e'=>utf8_encode('Diabetes'),
				'p45f'=>utf8_encode('Disfunci�n er�ctil'),
				'p45g'=>utf8_encode('Gota, artritis'),
				'p45h'=>utf8_encode('Hipo o hipercalemia'),
				'p45i'=>utf8_encode('Hiperlipidemia'),
				'p45j'=>utf8_encode('HTA'),
				'p45k'=>utf8_encode('Anemia'),
				'p45l'=>utf8_encode('Enfermedad renal cr�nica (ERC)'),
				'p45m'=>utf8_encode('Enfermedades pulmonares'),
				'p45n'=>utf8_encode('Alteraci�n del sue�o'),
				'p45o'=>utf8_encode('Enfermedades de la v�lvula a�rtica'),
				'p46'=>utf8_encode('�Qu� importancia otorga a los distintos efectos de las comorbilidades en el paciente con IC? (valore por favor del 1 al 9, siendo 9 el valor m�ximo)'),
				'p46a'=>utf8_encode('Interferencia en el diagn�stico diferencial'),
				'p46b'=>utf8_encode('Agravamiento de los s�ntomas y de la calidad de vida'),
				'p46c'=>utf8_encode('Impacto sobre las hospitalizaciones y la mortalidad'),
				'p46d'=>utf8_encode('Contraindicaci�n de determinados tratamientos de la IC'),
				'p46e'=>utf8_encode('Carencia de datos de seguridad al quedar excluidos estos pacientes de los ensayos cl�nicos'),
				'p46f'=>utf8_encode('Efectos secundarios de determinados tratamientos de estas comorbilidades'),
				'p46g'=>utf8_encode('Interacciones medicamentosas con el tratamiento de la IC'),
				'p47'=>utf8_encode('Del total de sus pacientes con IC, �en qu� porcentaje ha actuado sobre factores de riesgo de mortalidad?'),
				'p48'=>utf8_encode('�Considera que existe en la comunidad m�dica conciencia sobre la relevancia de las comorbilidades de la IC en Espa�a?'),
				'titulo5'=>utf8_encode('5. VALORACI�N DE LA INERCIA CL�NICA'),
				'p49'=>utf8_encode('A la hora de iniciar o cambiar un tratamiento, �se suele basar en alguna Gu�a de Pr�ctica Cl�nica, Protocolo de Actuaci�n/Algoritmo de Decisi�n (PA)?'),
				'p50'=>utf8_encode('En caso afirmativo, �cu�l es su preferida?'),
				'p51'=>utf8_encode('�C�mo valorar�a el grado de influencia en su pr�ctica cl�nica por parte de�? (califique de 1 a 9, siendo 9 el valor m�ximo)'),
				'p51a'=>utf8_encode('Organismos de gesti�n sanitaria'),
				'p51b'=>utf8_encode('Protocolos de actuaci�n de su centro o �rea de salud'),
				'p51c'=>utf8_encode('Exigencias de tratamiento de los pacientes'),
				'p51d'=>utf8_encode('Experiencia de otros colegas'),
				'p52'=>utf8_encode('Habitualmente, �cu�nto tiempo de consulta dedica a un �paciente tipo� con ICC? '),
				'p53'=>utf8_encode('�De qu� tipo es la informaci�n que da al paciente acerca de la enfermedad  y su alcance?'),
				'p54'=>utf8_encode('A la hora de tratar a su paciente, �en qu� medida tiene en cuenta el grado de conocimiento de la enfermedad y del tratamiento por parte del paciente? Valorar del 1  al  9 (siendo 9 el valor m�s elevado)'),
				'p55'=>utf8_encode('A la hora de tratar a su paciente, �en qu� medida tiene en cuenta el estilo de vida del paciente? Valorar del 1  al  9 (siendo 9 el valor m�s elevado)'),
				'p56'=>utf8_encode('A la hora de tratar a su paciente, �en qu� medida tiene en cuenta el entorno familiar del paciente? Valorar del 1  al  9 (siendo 9 el valor m�s elevado)'),
				'p57'=>utf8_encode('�Piensa que existe inercia cl�nica en el �mbito de la IC?'),
				'p58'=>utf8_encode('�Cu�l cree usted que es la causa principal de inercia terap�utica en el �mbito de la ICC?'),
				'p59'=>utf8_encode('�En qu� medida considera que mejorar�a la inercia si el especialista dispusiera de m�s tiempo de consulta?'),
				'p60'=>utf8_encode('�En qu� medida considera que mejorar�a la inercia si el especialista dispusiera de m�s formaci�n actualizada sobre opciones terap�uticas en IC?'),
				'titulo6'=>utf8_encode('6. VALORACI�N DE LA ADHERENCIA TERAP�UTICA'),
				'p61'=>utf8_encode('�Piensa que la adherencia terap�utica afecta de forma significativa a la eficacia de los tratamientos frente a la IC?'),
				'p62'=>utf8_encode('Valore de 1 a 9 el grado de adherencia al tratamiento del paciente con IC (siendo 9 el valor m�ximo)'),
				'p62a'=>utf8_encode('Adherencia general'),
				'p62b'=>utf8_encode('IECAs'),
				'p62c'=>utf8_encode('Antagonistas de la aldosterona'),
				'p62d'=>utf8_encode('Betabloqueantes'),
				'p62e'=>utf8_encode('Sacubitrilo/valsart�n'),
				'p63'=>utf8_encode('�Revisa la adherencia terap�utica de sus pacientes con IC?'),
				'p64'=>utf8_encode('En caso afirmativo, �cada cu�nto tiempo?'),
				'p65'=>utf8_encode('�En qu� medida considera que la falta de adherencia viene causada por los siguientes factores? Valore cada uno de los puntos del 1 (nada) al 9 (completamente):'),
				'p65a'=>utf8_encode('N�mero de tomas al d�a'),
				'p65b'=>utf8_encode('Edad del paciente'),
				'p65c'=>utf8_encode('Interferencia de la vida del paciente con las diferentes tomas'),
				'p65d'=>utf8_encode('Efectos secundarios'),
				'p65e'=>utf8_encode('Interacciones farmacol�gicas'),
				'p65f'=>utf8_encode('Olvido de las tomas'),
				'p65g'=>utf8_encode('Abandono voluntario del tratamiento por falta de mejor�a cl�nica'),
				'p65h'=>utf8_encode('Abandono voluntario del tratamiento por percepci�n de mejor�a cl�nica'),
				'p65i'=>utf8_encode('Mala comprensi�n de las instrucciones '),
				'p65j'=>utf8_encode('Deficiente comprensi�n de la enfermedad y de su alcance'),
				'p65k'=>utf8_encode('Falta de apoyo familiar'),
				'p65l'=>utf8_encode('Nivel socioecon�mico bajo'),
				'p66'=>utf8_encode('�Podr�a estimar cu�ntos f�rmacos en total est�n tomando como media sus pacientes con IC?: (indicar n�mero medio)'),
				'p67'=>utf8_encode('�Podr�a estimar cu�ntos comprimidos en total est�n tomando sus pacientes con IC (de media)?'),
				'p68'=>utf8_encode('Ante la sospecha de que el paciente no est� tomando la medicaci�n,  �qu� medios utiliza para detectarlo?'),
				'p69'=>utf8_encode('�Cu�l es, en su opini�n, el principal factor que determina la falta de adherencia al tratamiento en pacientes con ICC?'),
				'p70'=>utf8_encode('�Sobre qu� factores hay que incidir, en su opini�n, para mejorar la falta de adherencia? Valore cada uno de los puntos del 1 (nada) al 9 (completamente):'),
				'p70a'=>utf8_encode('N�mero de tomas al d�a'),
				'p70b'=>utf8_encode('V�a de administraci�n'),
				'p70c'=>utf8_encode('Comunicaci�n con el paciente'),
				'p70d'=>utf8_encode('Reducci�n de efectos secundarios y complicaciones asociadas'),
				'p70e'=>utf8_encode('Coordinaci�n con otros profesionales sanitarios'),
				'p70f'=>utf8_encode('M�todos de recuerdo de las tomas'),
				'p70g'=>utf8_encode('Apoyo familiar del paciente'),
				'titulo7'=>utf8_encode('7. CALIDAD ASISTENCIAL HOSPITALARIA Y AMBULATORIA DEL PACIENTE CON IC'),
				'p71'=>utf8_encode('�C�mo valorar�a del 1 al 9 (9= m�xima puntuaci�n) la calidad asistencial hospitalaria del paciente con IC?'),
				'p72'=>utf8_encode('�C�mo valorar�a del 1 al 9 (9= m�xima puntuaci�n) la calidad asistencial ambulatoria del paciente con IC?'),
				'p73'=>utf8_encode('�C�mo valorar�a del 1 al 9 (9= m�xima puntuaci�n) la coordinaci�n entre Atenci�n Primaria y Atenci�n Especializada del paciente con IC?'),
				'p74'=>utf8_encode('�C�mo valorar�a del 1 al 9 (9= m�xima puntuaci�n) el tiempo transcurrido hasta el diagn�stico del paciente con IC?'),
				'p75'=>utf8_encode('�C�mo valorar�a del 1 al 9 (9= m�xima puntuaci�n) las herramientas disponibles para el diagn�stico del paciente con IC?'),
				'p76'=>utf8_encode('�C�mo valorar�a del 1 al 9 (9= m�xima puntuaci�n) el uso de estrategias preventivas frente a la IC?'),
				'p77'=>utf8_encode('�Considera que existe en la comunidad m�dica conciencia sobre la carga de la IC en Espa�a?'),
				'p78'=>utf8_encode('�Tiene la enfermera en su consulta de IC alg�n papel en el ajuste de tratamiento de sus pacientes?'),
				'p79'=>utf8_encode('�Dispone su centro de servicio de Cirug�a Card�aca?'),
				'p80'=>utf8_encode('�Dispone su centro de servicio de programa de trasplante card�aco?'),
				'p81'=>utf8_encode('En su unidad/programa de Insuficiencia card�aca, �trabaja alg�n m�dico no Cardi�logo?'),
				'p82'=>utf8_encode('La mayor parte de su tiempo de trabajo la dedica a �'),
				'p83'=>utf8_encode('�Qu� tipo de formaci�n adicional sobre IC considerar�a adecuada? (valore de 1 a 9, siendo 9 el valor m�ximo)'),
				'p83a'=>utf8_encode('Cursos de formaci�n sobre uso y manejo de tratamientos'),
				'p83b'=>utf8_encode('Formaci�n sobre seguridad y efectos adversos de tratamientos'),
				'p83c'=>utf8_encode('Talleres pr�cticos con situaciones y casos cl�nicos'),
				'p83d'=>utf8_encode('Otros'),
				'p84'=>utf8_encode('�Qu� iniciativas considera adecuadas para optimizar el conocimiento sobre la IC y su tratamiento en Espa�a?'),
				'webinar'=>utf8_encode('Elige tu webinar'),
		);
		return $titulos_cuestionario;
	}
}