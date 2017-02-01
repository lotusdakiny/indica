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
				utf8_encode('Sí') => utf8_encode('Sí'),
				'No' => 'No',
		), 'multiple'=>false, 'expanded'=>true
		);

		return $choices_si_no;
	}
	
	public function getChoices_si_nosigo()
	{
		$choices = array('choices' => array(
				utf8_encode('Sí') => utf8_encode('Sí'),
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
				'A' => utf8_encode('40-50 años'),
				'B' => utf8_encode('50-60 años'),
				'C' => utf8_encode('60-70 años'),
				'D' => utf8_encode('>70 años'),
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
				'B' => utf8_encode('Transgresión dietética'),
				'C' => utf8_encode('Inercia terapéutica'),
				'D' => utf8_encode('Infección intercurrente'),
				'E' => utf8_encode('Otra patología concomitante (anemia, tirotoxicosis…)'),
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
				'A' => utf8_encode('Guía Europea (ESC)'),
				'B' => utf8_encode('Guía Americana (AHA)'),
				'C' => utf8_encode('Guías autonómicas o protocolos hospitalarios'),
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
				'B' => utf8_encode('Péptidos natriuréticos'),
				'C' => utf8_encode('ECG'),
				'D' => utf8_encode('Rx de tórax'),
				'E' => utf8_encode('Analítica general'),
		), 'multiple'=>false, 'expanded'=>true );
		return $choices;
	}
	
	public function getChoices_p21()
	{
		$choices = array('choices' => array(
				'A' => utf8_encode('No, utilizo los mismos'),
				'B' => utf8_encode('Sí, varían algunos de ellos'),
				'C' => utf8_encode('Sí, varían todos'),
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
				'E' => utf8_encode('Parámetros de función hepática'),
				'F' => utf8_encode('Péptidos natriuréticos'),
				'G' => utf8_encode('Sodio, potasio, urea, creatinina'),
				'H' => utf8_encode('Perfil lipídico'),
				'I' => utf8_encode('Otros'),
		), 'multiple'=>false, 'expanded'=>true );
		return $choices;
	}
	
	public function getChoices_p26()
	{
		$choices = array('choices' => array(
				'A' => utf8_encode('Para confirmar la existencia de una miocardiopatía.'),
				'B' => utf8_encode('Para determinar la FEVI con más fiabilidad.'),
				'C' => utf8_encode('Ante la sospecha de anomalías estructurales cuando el ecocardiograma transtorácico no es definitivo.'),
				'D' => utf8_encode('No solicito RMN cardiaca en pacientes con ICC.'),
		), 'multiple'=>true, 'expanded'=>true );
		return $choices;
	}
	
	public function getChoices_p29()
	{
		$choices = array('choices' => array(
				'A' => utf8_encode('Sí, a la mayoría'),
				'B' => utf8_encode('Sí, a un número aceptable'),
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
				'D' => utf8_encode('Sacubitrilo/valsartán'),
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
				'E' => utf8_encode('Sacubitrilo/Valsartán'),
		), 'multiple'=>false, 'expanded'=>true );
		return $choices;
	}
	
	public function getChoices_precio()
	{
		$choices = array('choices' => array(
				'A' => utf8_encode('Mejora de los síntomas'),
				'B' => utf8_encode('Reducción de la tasa de mortalidad/morbilidad'),
				'C' => utf8_encode('Reducción del número de hospitalizaciones'),
				'D' => utf8_encode('Facilidad de uso'),
				'E' => utf8_encode('Adherencia terapéutica'),
				'F' => utf8_encode('Perfil de seguridad'),
				'G' => utf8_encode('Precio'),
		), 'multiple'=>true, 'expanded'=>true );
		return $choices;
	}
	
	public function getChoices_p33()
	{
		$choices = array('choices' => array(
				'A' => utf8_encode('Falta de consecución de objetivos'),
				'B' => utf8_encode('Titulación de dosis'),
				'C' => utf8_encode('Riesgo elevado de agudización'),
				'D' => utf8_encode('Intolerancia al tratamiento'),
				'E' => utf8_encode('Efectos secundarios'),
				'F' => utf8_encode('Interacciones farmacológicas'),
				'G' => utf8_encode('Petición del paciente'),
				'H' => utf8_encode('Precio elevado del tratamiento'),
		), 'multiple'=>true, 'expanded'=>true );
		return $choices;
	}
	
	public function getChoices_p34()
	{
		$choices = array('choices' => array(
				'A' => utf8_encode('No administrar los fármacos que han demostrado reducir la morbimortalidad.'),
				'B' => utf8_encode('La falta de adherencia al tratamiento por una inadecuada concienciación del paciente.'),
				'C' => utf8_encode('La insuficiente titulación de los fármacos.'),
				'D' => utf8_encode('La necesidad de retirar fármacos por efectos secundarios.'),
		), 'multiple'=>false, 'expanded'=>true );
		return $choices;
	}
	
	public function getChoices_p35()
	{
		$choices = array('choices' => array(
				'A' => utf8_encode('El cardiólogo en la consulta externa.'),
				'B' => utf8_encode('El cardiólogo en la unidad de insuficiencia cardiaca.'),
				'C' => utf8_encode('El médico de familia.'),
				'D' => utf8_encode('La enfermera en la unidad de insuficiencia cardiaca.'),
				'E' => utf8_encode('Cualquier especialista en consulta externa'),
		), 'multiple'=>false, 'expanded'=>true );
		return $choices;
	}
	
	public function getChoices_p36()
	{
		$choices = array('choices' => array(
				'A' => utf8_encode('Falta de efecto sobre los síntomas'),
				'B' => utf8_encode('Falta de efecto sobre la tasa de mortalidad/morbilidad'),
				'C' => utf8_encode('Falta de efecto sobre el número de hospitalizaciones'),
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
				'A' => utf8_encode('Sí, cuanto antes'),
				'B' => utf8_encode('Dependiendo de la gravedad de los síntomas'),
				'C' => utf8_encode('No, con ajustar su medicación actual es suficiente'),
		), 'multiple'=>false, 'expanded'=>true );
		return $choices;
	}
	
	public function getChoices_p40()
	{
		$choices = array('choices' => array(
				'A' => utf8_encode('Sustituyo uno por otro, de un día para otro'),
				'B' => utf8_encode('Lo retiro 48 horas antes de comenzar'),
				'C' => utf8_encode('Lo retiro al menos 36 horas antes de comenzar'),
				'D' => utf8_encode('Dejo una semana de intervalo entre un tratamiento y otro'),
		), 'multiple'=>false, 'expanded'=>true );
		return $choices;
	}
	
	public function getChoices_p41()
	{
		$choices = array('choices' => array(
				'A' => utf8_encode('Paciente con IC de origen isquémico (Post IAM, revascularizado), sintomático a pesar del tratamiento estándar para ICC'),
				'B' => utf8_encode('Paciente con miocardiopatía dilatada, sintomático a pesar del tratamiento estándar para ICC'),
				'C' => utf8_encode('Paciente con IC de origen valvular, sintomático a pesar del tratamiento estándar para ICC'),
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
				'A' => utf8_encode('Sí, pero más en Atención Especializada'),
				'B' => utf8_encode('Sí, tanto en AP como en Atención Especializada'),
				'C' => utf8_encode('No, en términos generales'),
		), 'multiple'=>false, 'expanded'=>true );
		return $choices;
	}
	
	public function getChoices_p51()
	{
		$choices = array('choices' => array(
				'A' => utf8_encode('Organismos de gestión sanitaria'),
				'B' => utf8_encode('Protocolos de actuación de su centro o área de salud'),
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
				'C' => utf8_encode('Recomendación de páginas web'),
		), 'multiple'=>false, 'expanded'=>true );
		return $choices;
	}
	
	public function getChoices_patologias()
	{
		$choices = array('choices' => array(
				'A' => utf8_encode('Sí, en igual medida que en otras patologías'),
				'B' => utf8_encode('Sí, en mayor medida que en otras patologías'),
				'C' => utf8_encode('No'),
		), 'multiple'=>false, 'expanded'=>true );
		return $choices;
	}
	
	public function getChoices_p58()
	{
		$choices = array('choices' => array(
				'A' => utf8_encode('El temor a efectos secundarios de los fármacos.'),
				'B' => utf8_encode('Falta de conocimientos sobre la enfermedad y la influencia de los fármacos en la misma.'),
				'C' => utf8_encode('Creer que con la prescripción del fármaco ya se mejora algo el pronóstico, aunque la titulación no sea correcta.'),
				'D' => utf8_encode('El precio de los fármacos y la presión de la administración.'),
				'E' => utf8_encode('La polimedicación a la que se ven sometidos estos pacientes.'),
		), 'multiple'=>false, 'expanded'=>true );
		return $choices;
	}
	
	public function getChoices_meses()
	{
		$choices = array('choices' => array(
				utf8_encode('1 mes') => utf8_encode('1 mes'),
				utf8_encode('3 meses') => utf8_encode('3 meses'),
				utf8_encode('6 meses') => utf8_encode('6 meses'),
				utf8_encode('1 año') => utf8_encode('1 año'),
				utf8_encode('>1 año') => utf8_encode('>1 año'),
		), 'multiple'=>false, 'expanded'=>true );
		return $choices;
	}
	
	public function getChoices_p68()
	{
		$choices = array('choices' => array(
				'A' => utf8_encode('Interrogación directa al paciente'),
				'B' => utf8_encode('Detección indirecta (cuestionario, recuento)'),
		), 'multiple'=>false, 'expanded'=>true );
		return $choices;
	}
	
	public function getChoices_p69()
	{
		$choices = array('choices' => array(
				'A' => utf8_encode('La polimedicación.'),
				'B' => utf8_encode('Los efectos secundarios de los fármacos.'),
				'C' => utf8_encode('La falta de información/concienciación del paciente.'),
				'D' => utf8_encode('El elevado precio de los fármacos'),
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
				'B' => utf8_encode('Formación especializada'),
				'C' => utf8_encode('Unidad de IC / consulta monográfica'),
				'D' => utf8_encode('Consulta de Enfermería especializada'),
				'E' => utf8_encode('Educación del paciente'),
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
				'titulo1'=>utf8_encode('1. EPIDEMIOLOGÍA Y ESTRATIFICACIÓN DE LA INSUFICIENCIA CARDÍACA (IC)'),
				'p1'=>utf8_encode('¿En qué situación recibe a sus pacientes nuevos con IC? Indique el porcentaje'),
				'p1a'=>utf8_encode('Como sospecha diagnóstica desde Atención Primaria'),
				'p1b'=>utf8_encode('Como sospecha diagnóstica desde otra especialidad'),
				'p1c'=>utf8_encode('Ya diagnosticados'),
				'p1d'=>utf8_encode('La sospecha se genera en la consulta, tras la anamnesis y los hallazgos físicos'),
				'p2'=>utf8_encode('¿Cuál suele ser la etiología principal de la IC en sus pacientes? Señale un porcentaje aproximado de cada causa'),
				'p2a'=>utf8_encode('C. isquémica'),
				'p2b'=>utf8_encode('Valvulopatías'),
				'p2c'=>utf8_encode('Miocardiopatías'),
				'p2d'=>utf8_encode('C. hipertensiva'),
				'p2e'=>utf8_encode('Otras patologías cardiacas'),				
				'p3'=>utf8_encode('De sus pacientes con IC, ¿qué porcentaje son mujeres?'),
				'p4'=>utf8_encode('¿Cuál considera que es la edad media de sus pacientes con IC?'),
				'p5'=>utf8_encode('¿Cómo se distribuyen por edades sus pacientes con IC? Indique el porcentaje'),
				'p6'=>utf8_encode('¿Qué porcentaje de sus pacientes con IC y FEVI reducida tienen ICC estable, entendida como ICC sin síntomas/cambios en el último mes?/ ¿Qué porcentaje de sus pacientes con IC tienen FEVI reducida en tratamiento actual?'),
				'p7'=>utf8_encode('¿En qué porcentaje de sus pacientes con IC y FEVI reducida, ésta muestra empeoramiento o agudización?'),
				'p8'=>utf8_encode('¿Cuál es, en su opinión, la causa más frecuente de agudización de la IC en pacientes con FEVI reducida?'),
				'p9'=>utf8_encode('A su juicio, la mortalidad por cualquier causa asociada a la HFrEF: '),
				'p10'=>utf8_encode('¿Cuántos pacientes ve al año con diagnóstico de insuficiencia cardíaca (IC)?'),
				'p11'=>utf8_encode('¿Qué porcentaje de sus pacientes con IC se encuentran en cada una de las siguientes clases funcionales?'),
				'p11a'=>utf8_encode('I'),
				'p11b'=>utf8_encode('II'),
				'p11c'=>utf8_encode('III'),				
				'p11d'=>utf8_encode('IV'),
				'p12'=>utf8_encode('¿Qué importancia otorga a las siguientes afirmaciones sobre la situación actual de la IC? Valore por favor del 1 al 9 (siendo 9 el valor máximo)'),
				'p12a'=>utf8_encode('Alta tasa de mortalidad'),
				'p12b'=>utf8_encode('Alta tasa de morbilidad'),				
				'p12c'=>utf8_encode('Elevado coste económico'),
				'p12d'=>utf8_encode('Escaso arsenal terapéutico'),
				'p12e'=>utf8_encode('Falta de unidades especializadas'),
				'p13'=>utf8_encode('¿Ha visto usted alguna vez un paciente con IC con angioedema?'),				
				'p14'=>utf8_encode('De sus pacientes con IC con FEVI <30% con cardiopatía isquémica, ¿qué porcentaje  tienen un DAI?'),
				'p15'=>utf8_encode('¿En sus pacientes ancianos con IC hace usted algún tipo de valoración geriátrica integral? '),
				'p15texto'=>utf8_encode('En caso afirmativo ¿Qué escalas utiliza?'),
				'titulo2'=>utf8_encode('2. DIAGNÓSTICO DEL PACIENTE CON IC'),
				'p16'=>utf8_encode('Con las pruebas diagnósticas de las que dispone, ¿le es posible diagnosticar correctamente a la mayoría de los pacientes con IC?:'),
				'p17'=>utf8_encode('A la hora de realizar un diagnóstico, ¿se suele basar en alguna Guía de Práctica Clínica, Protocolo de Actuación/Algoritmo de Decisión (PA)?'),
				'p18'=>utf8_encode('En caso afirmativo, ¿cuál es su preferida?'),
				'p19'=>utf8_encode('¿Qué considera una FEVI reducida?'),
				'p20'=>utf8_encode('¿Cuáles son en su opinión las pruebas diagnósticas que deberían realizarse de rutina en todo pacientes con IC?'),
				'p21'=>utf8_encode('En cuanto a los péptidos natriuréticos, ¿considera distintos límites superiores de normalidad en la IC aguda y en la crónica?'),
				'p22'=>utf8_encode('Con respecto a los péptidos natriuréticos, señale su acuerdo o disconformidad con las siguientes afirmaciones. (Valore por favor del 1 al 9, siendo 9 el valor máximo):'),
				'p22a'=>utf8_encode('Deberían determinarse ante todo paciente con disnea.'),
				'p22b'=>utf8_encode('Sólo deberían solicitarlo cardiólogos o personal dedicado al manejo de la insuficiencia cardiaca, para evitar errores en su interpretación.'),
				'p22c'=>utf8_encode('Deberían solicitarse a todos los pacientes con edemas en EEII.'),
				'p22d'=>utf8_encode('Ante un valor intermedio debe considerarse igualmente la IC como principal sospecha diagnóstica.'),
				'p22e'=>utf8_encode('Son útiles para valorar la eficacia del tratamiento.'),
				'p23'=>utf8_encode('Respecto a la utilidad del electrocardiograma (ECG) o del ecocardiograma en el diagnóstico de la IC, ¿de cuál piensa que deriva fundamentalmente el tratamiento?:'),
				'p24'=>utf8_encode('¿Cómo valoraría del 1 al 9 (9= máxima puntuación) las distintas pruebas de imagen cardíaca en IC?'),
				'p24a'=>utf8_encode('Radiografía de tórax'),
				'p24b'=>utf8_encode('Ecocardiograma transtorácico'),
				'p24c'=>utf8_encode('Ecocardiograma transesofágico'),
				'p24d'=>utf8_encode('Resonancia magnética cardíaca'),
				'p24e'=>utf8_encode('SPECT'),
				'p24f'=>utf8_encode('Tomografía por emisión de positrones (PET)'),
				'p24g'=>utf8_encode('Angiografía coronaria'),
				'p24h'=>utf8_encode('Tomografía cardíaca computerizada'),
				'p24titulo1'=>utf8_encode('Utilidad'),
				'p24titulo2'=>utf8_encode('Disponibilidad en mi centro'),
				'p25'=>utf8_encode('¿Qué parámetros de laboratorio solicita Vd. En la valoración inicial de un paciente con IC?:'),
				'p26'=>utf8_encode('¿A qué pacientes con ICC solicita usted una resonancia magnética cardiaca? (señale todas las que considere adecuadas):'),
				'p27'=>utf8_encode('¿En qué porcentaje de sus pacientes con IC evalúa usted…?'),
				'p27a'=>utf8_encode('Los niveles de ferritina'),
				'p27b'=>utf8_encode('El grado de depresión'),
				'p27c'=>utf8_encode('La situación cognitiva'),
				'p27d'=>utf8_encode('Parámetros nutricionales'),
				'p27e'=>utf8_encode('Fragilidad'),
				'p27f'=>utf8_encode('Grado de dependencia'),
				'p28'=>utf8_encode('En cuanto a las pruebas diagnósticas rutinarias en pacientes con IC, ¿recomienda realizar consejo genético en algunos casos?'),
				'titulo3'=>utf8_encode('3. TRATAMIENTO FARMACOLÓGICO DE LA IC'),
				'p29'=>utf8_encode('¿Considera que, con los fármacos de los que dispone, le es posible tratar correctamente a sus pacientes con IC?:'),
				'p30'=>utf8_encode('En pacientes con ICC y FEVI reducida, ¿con qué fármaco/s suele comenzar el tratamiento? (marque todas las que considere)'),
				'p31'=>utf8_encode('Ante un paciente con PA baja, en el que deba elegir uno de los fármacos anteriores, ¿cuál cree que tiene mayor impacto en la morbimortalidad y es el que elegiría en primer lugar?'),
				'p32'=>utf8_encode('¿Por qué utiliza IECA en sus pacientes con ICC y FEVI reducida? (marque las opciones que considere)'),
				'p33'=>utf8_encode('En pacientes con ICC y FEVI reducida, ¿cuáles cree que son los motivos más frecuentes a la hora de modificar el tratamiento? (marque todas las que considere)'),
				'p34'=>utf8_encode('¿Cuál cree que es la principal dificultad en el tratamiento de la ICC con FEVI reducida para conseguir los objetivos terapéuticos?'),
				'p35'=>utf8_encode('¿Quién es, a su juicio, la persona que debería responsabilizarse de la correcta titulación de los fármacos empleados en el tratamiento de la ICC con FEVI reducida?'),
				'p36'=>utf8_encode('¿Qué le haría cambiar el tratamiento con IECAs en un paciente con HFrEF? (marque todas las que considere)'),
				'p37'=>utf8_encode('Conoce el estudio PARADIGM-HF, en el que se demuestra la superioridad de sacubitrilo/valsartán frente a enalapril en la reducción del riesgo de hospitalizaciones y mortalidad de la ICC con fracción de eyección reducida (HFrEF)?'),
				'p38'=>utf8_encode('¿Qué porcentaje de sus pacientes con HFrEF sintomática están recibiendo sacubitrilo/valsartán?'),
				'p39'=>utf8_encode('¿Considera necesario, en un paciente HFrEF con síntomas a pesar del tratamiento actual con el estándar, un cambio en el tratamiento?'),
				'p40'=>utf8_encode('Ante el cambio de un IECA por sacubitrilo/valsartán, ¿cómo retiraría el IECA?'),
				'p41'=>utf8_encode('¿En cuáles de los siguientes pacientes normotensos/hipertensos consideraría la administración de sacubitrilo/valsartán?'),
				'p42'=>utf8_encode('¿Por qué elegiría sacubitrilo/valsartan? (marque las opciones que considere)'),
				'p43'=>utf8_encode('Respecto a sacubitrilo/valsartán, valore de 1 a 9 el conocimiento  del producto (siendo 9 el valor máximo)'),
				'p43a'=>utf8_encode('Mecanismo de acción'),
				'p43b'=>utf8_encode('Características diferenciales'),
				'p43c'=>utf8_encode('Beneficios'),
				'p43d'=>utf8_encode('Seguridad'),
				'titulo4'=>utf8_encode('4. MANEJO DE COMORBILIDADES EN PACIENTE CON IC'),
				'p44'=>utf8_encode('¿Qué porcentaje de sus pacientes presentan las siguientes comorbilidades?'),
				'p44a'=>utf8_encode('Angina de pecho y arteriopatía'),
				'p44b'=>utf8_encode('Caquexia y sarcopenia'),
				'p44c'=>utf8_encode('Cáncer'),
				'p44d'=>utf8_encode('Alteraciones del SNC (depresión, ictus, disfunción del SNA)'),
				'p44e'=>utf8_encode('Diabetes'),
				'p44f'=>utf8_encode('Disfunción eréctil'),
				'p44g'=>utf8_encode('Gota, artritis'),
				'p44h'=>utf8_encode('Hipo o hipercalemia'),				
				'p44i'=>utf8_encode('Hiperlipidemia'),
				'p44j'=>utf8_encode('HTA'),
				'p44k'=>utf8_encode('Anemia'),
				'p44l'=>utf8_encode('Enfermedad renal crónica (ERC)'),
				'p44m'=>utf8_encode('Enfermedades pulmonares'),
				'p44n'=>utf8_encode('Alteración del sueño'),
				'p44o'=>utf8_encode('Enfermedades de la válvula aórtica'),
				'p44p'=>utf8_encode('Otras'),
				'p45'=>utf8_encode('¿En qué medida afecta la comorbilidad al manejo de ese paciente con IC? (valore del 1 al  9, siendo 9 el valor máximo)'),
				'p45a'=>utf8_encode('Angina de pecho y arteriopatía'),
				'p45b'=>utf8_encode('Caquexia y sarcopenia'),
				'p45c'=>utf8_encode('Cáncer'),
				'p45d'=>utf8_encode('Alteraciones del SNC (depresión, ictus, disfunción del SNA)'),
				'p45e'=>utf8_encode('Diabetes'),
				'p45f'=>utf8_encode('Disfunción eréctil'),
				'p45g'=>utf8_encode('Gota, artritis'),
				'p45h'=>utf8_encode('Hipo o hipercalemia'),
				'p45i'=>utf8_encode('Hiperlipidemia'),
				'p45j'=>utf8_encode('HTA'),
				'p45k'=>utf8_encode('Anemia'),
				'p45l'=>utf8_encode('Enfermedad renal crónica (ERC)'),
				'p45m'=>utf8_encode('Enfermedades pulmonares'),
				'p45n'=>utf8_encode('Alteración del sueño'),
				'p45o'=>utf8_encode('Enfermedades de la válvula aórtica'),
				'p46'=>utf8_encode('¿Qué importancia otorga a los distintos efectos de las comorbilidades en el paciente con IC? (valore por favor del 1 al 9, siendo 9 el valor máximo)'),
				'p46a'=>utf8_encode('Interferencia en el diagnóstico diferencial'),
				'p46b'=>utf8_encode('Agravamiento de los síntomas y de la calidad de vida'),
				'p46c'=>utf8_encode('Impacto sobre las hospitalizaciones y la mortalidad'),
				'p46d'=>utf8_encode('Contraindicación de determinados tratamientos de la IC'),
				'p46e'=>utf8_encode('Carencia de datos de seguridad al quedar excluidos estos pacientes de los ensayos clínicos'),
				'p46f'=>utf8_encode('Efectos secundarios de determinados tratamientos de estas comorbilidades'),
				'p46g'=>utf8_encode('Interacciones medicamentosas con el tratamiento de la IC'),
				'p47'=>utf8_encode('Del total de sus pacientes con IC, ¿en qué porcentaje ha actuado sobre factores de riesgo de mortalidad?'),
				'p48'=>utf8_encode('¿Considera que existe en la comunidad médica conciencia sobre la relevancia de las comorbilidades de la IC en España?'),
				'titulo5'=>utf8_encode('5. VALORACIÓN DE LA INERCIA CLÍNICA'),
				'p49'=>utf8_encode('A la hora de iniciar o cambiar un tratamiento, ¿se suele basar en alguna Guía de Práctica Clínica, Protocolo de Actuación/Algoritmo de Decisión (PA)?'),
				'p50'=>utf8_encode('En caso afirmativo, ¿cuál es su preferida?'),
				'p51'=>utf8_encode('¿Cómo valoraría el grado de influencia en su práctica clínica por parte de…? (califique de 1 a 9, siendo 9 el valor máximo)'),
				'p51a'=>utf8_encode('Organismos de gestión sanitaria'),
				'p51b'=>utf8_encode('Protocolos de actuación de su centro o área de salud'),
				'p51c'=>utf8_encode('Exigencias de tratamiento de los pacientes'),
				'p51d'=>utf8_encode('Experiencia de otros colegas'),
				'p52'=>utf8_encode('Habitualmente, ¿cuánto tiempo de consulta dedica a un “paciente tipo” con ICC? '),
				'p53'=>utf8_encode('¿De qué tipo es la información que da al paciente acerca de la enfermedad  y su alcance?'),
				'p54'=>utf8_encode('A la hora de tratar a su paciente, ¿en qué medida tiene en cuenta el grado de conocimiento de la enfermedad y del tratamiento por parte del paciente? Valorar del 1  al  9 (siendo 9 el valor más elevado)'),
				'p55'=>utf8_encode('A la hora de tratar a su paciente, ¿en qué medida tiene en cuenta el estilo de vida del paciente? Valorar del 1  al  9 (siendo 9 el valor más elevado)'),
				'p56'=>utf8_encode('A la hora de tratar a su paciente, ¿en qué medida tiene en cuenta el entorno familiar del paciente? Valorar del 1  al  9 (siendo 9 el valor más elevado)'),
				'p57'=>utf8_encode('¿Piensa que existe inercia clínica en el ámbito de la IC?'),
				'p58'=>utf8_encode('¿Cuál cree usted que es la causa principal de inercia terapéutica en el ámbito de la ICC?'),
				'p59'=>utf8_encode('¿En qué medida considera que mejoraría la inercia si el especialista dispusiera de más tiempo de consulta?'),
				'p60'=>utf8_encode('¿En qué medida considera que mejoraría la inercia si el especialista dispusiera de más formación actualizada sobre opciones terapéuticas en IC?'),
				'titulo6'=>utf8_encode('6. VALORACIÓN DE LA ADHERENCIA TERAPÉUTICA'),
				'p61'=>utf8_encode('¿Piensa que la adherencia terapéutica afecta de forma significativa a la eficacia de los tratamientos frente a la IC?'),
				'p62'=>utf8_encode('Valore de 1 a 9 el grado de adherencia al tratamiento del paciente con IC (siendo 9 el valor máximo)'),
				'p62a'=>utf8_encode('Adherencia general'),
				'p62b'=>utf8_encode('IECAs'),
				'p62c'=>utf8_encode('Antagonistas de la aldosterona'),
				'p62d'=>utf8_encode('Betabloqueantes'),
				'p62e'=>utf8_encode('Sacubitrilo/valsartán'),
				'p63'=>utf8_encode('¿Revisa la adherencia terapéutica de sus pacientes con IC?'),
				'p64'=>utf8_encode('En caso afirmativo, ¿cada cuánto tiempo?'),
				'p65'=>utf8_encode('¿En qué medida considera que la falta de adherencia viene causada por los siguientes factores? Valore cada uno de los puntos del 1 (nada) al 9 (completamente):'),
				'p65a'=>utf8_encode('Número de tomas al día'),
				'p65b'=>utf8_encode('Edad del paciente'),
				'p65c'=>utf8_encode('Interferencia de la vida del paciente con las diferentes tomas'),
				'p65d'=>utf8_encode('Efectos secundarios'),
				'p65e'=>utf8_encode('Interacciones farmacológicas'),
				'p65f'=>utf8_encode('Olvido de las tomas'),
				'p65g'=>utf8_encode('Abandono voluntario del tratamiento por falta de mejoría clínica'),
				'p65h'=>utf8_encode('Abandono voluntario del tratamiento por percepción de mejoría clínica'),
				'p65i'=>utf8_encode('Mala comprensión de las instrucciones '),
				'p65j'=>utf8_encode('Deficiente comprensión de la enfermedad y de su alcance'),
				'p65k'=>utf8_encode('Falta de apoyo familiar'),
				'p65l'=>utf8_encode('Nivel socioeconómico bajo'),
				'p66'=>utf8_encode('¿Podría estimar cuántos fármacos en total están tomando como media sus pacientes con IC?: (indicar número medio)'),
				'p67'=>utf8_encode('¿Podría estimar cuántos comprimidos en total están tomando sus pacientes con IC (de media)?'),
				'p68'=>utf8_encode('Ante la sospecha de que el paciente no está tomando la medicación,  ¿qué medios utiliza para detectarlo?'),
				'p69'=>utf8_encode('¿Cuál es, en su opinión, el principal factor que determina la falta de adherencia al tratamiento en pacientes con ICC?'),
				'p70'=>utf8_encode('¿Sobre qué factores hay que incidir, en su opinión, para mejorar la falta de adherencia? Valore cada uno de los puntos del 1 (nada) al 9 (completamente):'),
				'p70a'=>utf8_encode('Número de tomas al día'),
				'p70b'=>utf8_encode('Vía de administración'),
				'p70c'=>utf8_encode('Comunicación con el paciente'),
				'p70d'=>utf8_encode('Reducción de efectos secundarios y complicaciones asociadas'),
				'p70e'=>utf8_encode('Coordinación con otros profesionales sanitarios'),
				'p70f'=>utf8_encode('Métodos de recuerdo de las tomas'),
				'p70g'=>utf8_encode('Apoyo familiar del paciente'),
				'titulo7'=>utf8_encode('7. CALIDAD ASISTENCIAL HOSPITALARIA Y AMBULATORIA DEL PACIENTE CON IC'),
				'p71'=>utf8_encode('¿Cómo valoraría del 1 al 9 (9= máxima puntuación) la calidad asistencial hospitalaria del paciente con IC?'),
				'p72'=>utf8_encode('¿Cómo valoraría del 1 al 9 (9= máxima puntuación) la calidad asistencial ambulatoria del paciente con IC?'),
				'p73'=>utf8_encode('¿Cómo valoraría del 1 al 9 (9= máxima puntuación) la coordinación entre Atención Primaria y Atención Especializada del paciente con IC?'),
				'p74'=>utf8_encode('¿Cómo valoraría del 1 al 9 (9= máxima puntuación) el tiempo transcurrido hasta el diagnóstico del paciente con IC?'),
				'p75'=>utf8_encode('¿Cómo valoraría del 1 al 9 (9= máxima puntuación) las herramientas disponibles para el diagnóstico del paciente con IC?'),
				'p76'=>utf8_encode('¿Cómo valoraría del 1 al 9 (9= máxima puntuación) el uso de estrategias preventivas frente a la IC?'),
				'p77'=>utf8_encode('¿Considera que existe en la comunidad médica conciencia sobre la carga de la IC en España?'),
				'p78'=>utf8_encode('¿Tiene la enfermera en su consulta de IC algún papel en el ajuste de tratamiento de sus pacientes?'),
				'p79'=>utf8_encode('¿Dispone su centro de servicio de Cirugía Cardíaca?'),
				'p80'=>utf8_encode('¿Dispone su centro de servicio de programa de trasplante cardíaco?'),
				'p81'=>utf8_encode('En su unidad/programa de Insuficiencia cardíaca, ¿trabaja algún médico no Cardiólogo?'),
				'p82'=>utf8_encode('La mayor parte de su tiempo de trabajo la dedica a …'),
				'p83'=>utf8_encode('¿Qué tipo de formación adicional sobre IC consideraría adecuada? (valore de 1 a 9, siendo 9 el valor máximo)'),
				'p83a'=>utf8_encode('Cursos de formación sobre uso y manejo de tratamientos'),
				'p83b'=>utf8_encode('Formación sobre seguridad y efectos adversos de tratamientos'),
				'p83c'=>utf8_encode('Talleres prácticos con situaciones y casos clínicos'),
				'p83d'=>utf8_encode('Otros'),
				'p84'=>utf8_encode('¿Qué iniciativas considera adecuadas para optimizar el conocimiento sobre la IC y su tratamiento en España?'),
				'webinar'=>utf8_encode('Elige tu webinar'),
		);
		return $titulos_cuestionario;
	}
}