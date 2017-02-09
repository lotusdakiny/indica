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
				'0-20%' => '0-20%',
				'20-40%' => '20-40%',
				'40-60%' => '40-60%',
				'60-80%' => '60-80%',
				'80-100%' => '80-100%',
		),  
			'multiple'=>false, 
			'expanded'=>false
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
				'<10%' => '<10%',
				'10-20%' => '10-20%',
				'20-40%' => '20-40%',
				'40-60%' => '40-60%',
				'>60%' => '>60%',
		),
				'multiple'=>false,
				'expanded'=>false
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
				'E' => utf8_encode('Otra patología concomitante (anemia, tirotoxicosis...)'),
		),
				'multiple'=>false,
				'expanded'=>true
		);
	
		return $choices_p8;
	}
	
	public function getChoices_p9()
	{
		$choices = array('choices' => array(
				'A' => utf8_encode('HFpEF'),
				'B' => utf8_encode('HFrEF'),
				'C' => utf8_encode('HFmEF'),
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
		), 'multiple'=>false, 'expanded'=>false );
		return $choices;
	}
	
	public function getChoices_guia()
	{
		$choices = array('choices' => array(
				'A' => utf8_encode('Guía Europea (ESC)'),
				'B' => utf8_encode('Guía Americana (AHA)'),
				//'C' => utf8_encode('Guías autonómicas o protocolos hospitalarios'),
			), 'multiple'=>false, 'expanded'=>true );
		return $choices;
	}
	
	public function getChoices_p17()
	{
		$choices = array('choices' => array(
				'A' => utf8_encode('Una FE del VI < 50%.'),
				'B' => utf8_encode('Una FE del VI < 40%.'),
				'C' => utf8_encode('Una FE del VI < 35%.'),
				'D' => utf8_encode('Una FE del VI < 45%.'),
		), 'multiple'=>false, 'expanded'=>true );
		return $choices;
	}
	
	public function getChoices_p18()
	{
		$choices = array('choices' => array(
				'A' => utf8_encode('Ecocardiograma'),
				'B' => utf8_encode('Péptidos natriuréticos'),
				'C' => utf8_encode('Pro-BNP'),
				'D' => utf8_encode('ECG'),
				'E' => utf8_encode('Rx de tórax'),
				'F' => utf8_encode('Analítica general'),
		), 'multiple'=>false, 'expanded'=>true );
		return $choices;
	}
	
	public function getChoices_p20()
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
	
/*	public function getChoices_p21()
	{
		$choices = array('choices' => array(
				utf8_encode('Para confirmar la existencia de una miocardiopatía.') => utf8_encode('Para confirmar la existencia de una miocardiopatía.'),
				utf8_encode('Para determinar la FEVI con más fiabilidad.') => utf8_encode('Para determinar la FEVI con más fiabilidad.'),
				utf8_encode('Ante la sospecha de anomalías estructurales cuando el ecocardiograma transtorácico no es definitivo.') => utf8_encode('Ante la sospecha de anomalías estructurales cuando el ecocardiograma transtorácico no es definitivo.'),
				utf8_encode('No solicito RMN cardiaca en pacientes con ICC.') => utf8_encode('No solicito RMN cardiaca en pacientes con ICC.'),
				utf8_encode('Para confirmar la existencia de una miocardiopatía.')	=> utf8_encode('Para confirmar la existencia de una miocardiopatía.'),
		), 'multiple'=>true, 'expanded'=>true );
		return $choices;
	}*/
	
	public function getChoices_p21()
	{
		$choices = array('choices' => array(
				'A' => utf8_encode('Para confirmar la existencia de una miocardiopatía.'),
				'B' => utf8_encode('Para determinar la FEVI con más fiabilidad.'),
				'C' => utf8_encode('Ante la sospecha de anomalías estructurales cuando el ecocardiograma transtorácico no es definitivo.'),
				'D' => utf8_encode('No solicito RMN cardiaca en pacientes con ICC.'),
		), 'multiple'=>true, 'expanded'=>true );
		return $choices;
	}
	
	public function getChoices_p24()
	{
		$choices = array('choices' => array(
				'A' => utf8_encode('IECAs/ARA II'),
				'B' => utf8_encode('Antagonistas de la aldosterona'),
				'C' => utf8_encode('Betabloqueantes'),
				'D' => utf8_encode('Sacubitrilo/valsartán'),
				'E' => utf8_encode('Diuréticos'), 
				'F' => utf8_encode('Otros'),
		), 'multiple'=>true, 'expanded'=>true );
		return $choices;
	}

	public function getChoices_p25()
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
	
	public function getChoices_p27()
	{
		$choices = array('choices' => array(
				'A' => utf8_encode('Titulación de dosis'),
				'B' => utf8_encode('Riesgo elevado de agudización'),
				'C' => utf8_encode('Intolerancia al tratamiento'),
				'D' => utf8_encode('Efectos secundarios'),
				'E' => utf8_encode('Interacciones farmacológicas'),
				'F' => utf8_encode('Petición del paciente'),
				'G' => utf8_encode('Precio elevado del tratamiento'),
		), 'multiple'=>true, 'expanded'=>true );
		return $choices;
	}
	
	public function getChoices_p28()
	{
		$choices = array('choices' => array(
				'A' => utf8_encode('No administrar los fármacos que han demostrado reducir la morbimortalidad.'),
				'B' => utf8_encode('La falta de adherencia al tratamiento por una inadecuada concienciación del paciente.'),
				'C' => utf8_encode('La insuficiente titulación de los fármacos.'),
				'D' => utf8_encode('La necesidad de retirar fármacos por efectos secundarios.'),
		), 'multiple'=>false, 'expanded'=>true );
		return $choices;
	}
	
	public function getChoices_p29()
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
	
	public function getChoices_p30()
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
	
	public function getChoices_p32()
	{
		$choices = array('choices' => array(
				'<10%' => '<10%',
				'10-30%' => '10-30%',
				'30-50%' => '30-50%',
				'>50' => '>50',
		), 'multiple'=>false, 'expanded'=>false );
		return $choices;
	}
	
	public function getChoices_p33()
	{
		$choices = array('choices' => array(
				'A' => utf8_encode('Sí, cuanto antes'),
				'B' => utf8_encode('Dependiendo de la gravedad de los síntomas'),
				'C' => utf8_encode('No, con ajustar su medicación actual es suficiente'),
		), 'multiple'=>false, 'expanded'=>true );
		return $choices;
	}
	
	public function getChoices_p34()
	{
		$choices = array('choices' => array(
				'A' => utf8_encode('Sustituyo uno por otro, de un día para otro'),
				'B' => utf8_encode('Lo retiro 48 horas antes de comenzar'),
				'C' => utf8_encode('Lo retiro al menos 36 horas antes de comenzar'),
				'D' => utf8_encode('Dejo una semana de intervalo entre un tratamiento y otro'),
		), 'multiple'=>false, 'expanded'=>true );
		return $choices;
	}
	
	public function getChoices_p35()
	{
		$choices = array('choices' => array(
				'A' => utf8_encode('Paciente con IC de origen isquémico (Post IAM, revascularizado), sintomático a pesar del tratamiento estándar para ICC'),
				'B' => utf8_encode('Paciente con miocardiopatía dilatada, sintomático a pesar del tratamiento estándar para ICC'),
				'C' => utf8_encode('Paciente con IC de origen valvular, sintomático a pesar del tratamiento estándar para ICC'),
		), 'multiple'=>false, 'expanded'=>true );
		return $choices;
	}
	
	public function getChoices_p41()
	{
		$choices = array('choices' => array(
				'A' => utf8_encode('Sí, pero más en Atención Especializada'),
				'B' => utf8_encode('Sí, tanto en AP como en Atención Especializada'),
				'C' => utf8_encode('No, en términos generales'),
		), 'multiple'=>false, 'expanded'=>true );
		return $choices;
	}
	
	public function getChoices_p46()
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
	
	public function getChoices_p51()
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
	
	public function getChoices_p60()
	{
		$choices = array('choices' => array(
				'A' => utf8_encode('La polimedicación.'),
				'B' => utf8_encode('Los efectos secundarios de los fármacos.'),
				'C' => utf8_encode('La falta de información/concienciación del paciente.'),
				'D' => utf8_encode('El elevado precio de los fármacos'),
		), 'multiple'=>false, 'expanded'=>true );
		return $choices;
	}
	
	public function getChoices_p73()
	{
		$choices = array('choices' => array(
				'A' => utf8_encode('Pacientes ambulatorios'),
				'B' => utf8_encode('Pacientes ingresados'),
		), 'multiple'=>false, 'expanded'=>true );
		return $choices;
	}
	
	public function getChoices_p75()
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
	
	public function getChoices_sexo()
	{
		$choices = array('choices' => array(
				'V' => 'V',
				'M' => 'M',
		), 'multiple'=>false, 'expanded'=>true );
		return $choices;
	}
	
	public function getChoices_centro()
	{
		$choices = array('choices' => array(
				utf8_encode('Hospital de referencia')=>utf8_encode('Hospital de referencia'),
				utf8_encode('Hospital regional')=>utf8_encode('Hospital regional'),
				utf8_encode('Hospital comarcal')=>utf8_encode('Hospital comarcal'),
				utf8_encode('Centro privado')=>utf8_encode('Centro privado'),
		), 'multiple'=>false, 'expanded'=>false );
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
				'titulo0'=>utf8_encode('0. DATOS PROFESIONALES'),
				'p0a'=>utf8_encode('Sexo:'),
				'p0b'=>utf8_encode('Edad:'),
				'p0c'=>utf8_encode('Años de ejercicio profesional:'),
				'p0d'=>utf8_encode('Tipo de centro en el que trabaja:'),
				'p0e'=>utf8_encode('Número de pacientes atendidos en su consulta un día normal:'),
				'titulo1'=>utf8_encode('EPIDEMIOLOGÍA Y ESTRATIFICACIÓN DE LA INSUFICIENCIA CARDÍACA (IC)'),
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
				'p6'=>utf8_encode('¿Qué porcentaje de sus pacientes con IC y FEVI reducida tienen ICC estable, entendida como ICC sin cambios en el último mes?'),
				'p7'=>utf8_encode('¿Qué porcentaje de sus pacientes con IC tienen FEVI reducida en tratamiento actual?'),
				'p8'=>utf8_encode('¿Cuál es, en su opinión, la causa más frecuente de agudización de la IC en pacientes con FEVI reducida?'),
				'p9'=>utf8_encode('Según su juicio y su práctica clínica, ¿qué tipo de IC tiene mayor mortalidad/peor pronóstico? : '),
				'p10'=>utf8_encode('¿Cuántos pacientes ve al año con diagnóstico de insuficiencia cardíaca (IC)?'),
				'p11'=>utf8_encode('¿Qué porcentaje de sus pacientes con IC se encuentran en cada una de las siguientes clases funcionales?'),
				'p11a'=>utf8_encode('I'),
				'p11b'=>utf8_encode('II'),
				'p11c'=>utf8_encode('III'),				
				'p11d'=>utf8_encode('IV'),
				'p12'=>utf8_encode('¿Ha visto usted alguna vez un paciente con IC con angioedema?'),				
				'p13'=>utf8_encode('De sus pacientes con IC con FEVI <30% con cardiopatía isquémica, ¿qué porcentaje  tienen un DAI?'),
				'p14'=>utf8_encode('¿En sus pacientes ancianos con IC hace usted algún tipo de valoración geriátrica integral? '),
				'p14texto'=>utf8_encode('En caso afirmativo ¿Qué escalas utiliza?'),
				'titulo2'=>utf8_encode('1. DIAGNÓSTICO DEL PACIENTE CON IC'),
				'p15'=>utf8_encode('A la hora de realizar un diagnóstico, ¿se suele basar en alguna Guía de Práctica Clínica, Protocolo de Actuación/Algoritmo de Decisión (PA)?'),
				'p16'=>utf8_encode('En caso afirmativo, ¿cuál es su preferida?'),
				'p17'=>utf8_encode('¿Qué considera una FEVI reducida?'),
				'p18'=>utf8_encode('¿Cuáles son en su opinión las pruebas diagnósticas que deberían realizarse de rutina en todo pacientes con IC?'),
				'p19'=>utf8_encode('Con respecto a los péptidos natriuréticos, señale su acuerdo o disconformidad con las siguientes afirmaciones. (Valore por favor del 1 al 9, siendo 9 el valor máximo):'),
				'p19a'=>utf8_encode('Deberían determinarse ante todo paciente con disnea.'),
				'p19b'=>utf8_encode('Sólo deberían solicitarlo cardiólogos o personal dedicado al manejo de la insuficiencia cardiaca, para evitar errores en su interpretación.'),
				'p19c'=>utf8_encode('Deberían solicitarse a todos los pacientes con edemas en EEII.'),
				'p19d'=>utf8_encode('Ante un valor intermedio debe considerarse igualmente la IC como principal sospecha diagnóstica.'),
				'p19e'=>utf8_encode('Son útiles para valorar la eficacia del tratamiento.'),				
				'p20'=>utf8_encode('¿Cómo valoraría del 1 al 9 (9= máxima puntuación) las disponibilidad de las distintas pruebas de imagen cardíaca en IC?'),
				'p20a'=>utf8_encode('Radiografía de tórax'),
				'p20b'=>utf8_encode('Ecocardiograma transtorácico'),
				'p20c'=>utf8_encode('Ecocardiograma transesofágico'),
				'p20d'=>utf8_encode('Resonancia magnética cardíaca'),
				'p20e'=>utf8_encode('SPECT'),
				'p20f'=>utf8_encode('Tomografía por emisión de positrones (PET)'),
				'p20g'=>utf8_encode('Angiografía coronaria'),
				'p20h'=>utf8_encode('Tomografía cardíaca computerizada'),
				'p20titulo1'=>utf8_encode('Utilidad'),
				'p20titulo2'=>utf8_encode('Disponibilidad en mi centro'),
				'p21'=>utf8_encode('¿A qué pacientes con ICC solicita usted una resonancia magnética cardiaca? (señale todas las que considere adecuadas):'),
				'p22'=>utf8_encode('¿En qué porcentaje de sus pacientes con IC evalúa usted?...'),
				'p22a'=>utf8_encode('Los niveles de ferritina'),
				'p22b'=>utf8_encode('El grado de depresión'),
				'p22c'=>utf8_encode('La situación cognitiva'),
				'p22d'=>utf8_encode('Parámetros nutricionales'),
				'p22e'=>utf8_encode('Fragilidad'),
				'p22f'=>utf8_encode('Grado de dependencia'),
				'p23'=>utf8_encode('En cuanto a las pruebas diagnósticas rutinarias en pacientes con IC, ¿recomienda realizar consejo genético en algunos casos?'),
				'titulo3'=>utf8_encode('2. TRATAMIENTO FARMACOLÓGICO DE LA IC'),
				'p24'=>utf8_encode('En pacientes con ICC sintomática y FEVI reducida, ¿con qué fármaco/s suele comenzar el tratamiento? (marque todas las que considere)'),
				'p25'=>utf8_encode('Ante un paciente con PA baja, en el que deba elegir uno de los fármacos anteriores, ¿cuál cree que tiene mayor impacto en la morbimortalidad y es el que elegiría en primer lugar?'),
				'p26'=>utf8_encode('¿Por qué utiliza IECA en sus pacientes con ICC y FEVI reducida? (marque las opciones que considere)'),
				'p27'=>utf8_encode('En pacientes con ICC y FEVI reducida, ¿cuáles cree que son los motivos más frecuentes a la hora de modificar el tratamiento? (marque todas las que considere)'),
				'p28'=>utf8_encode('¿Cuál cree que es la principal dificultad en el tratamiento de la ICC con FEVI reducida para conseguir los objetivos terapéuticos?'),
				'p29'=>utf8_encode('¿Quién es, a su juicio, la persona que debería responsabilizarse de la correcta titulación de los fármacos empleados en el tratamiento de la ICC con FEVI reducida?'),
				'p30'=>utf8_encode('¿Qué le haría cambiar el tratamiento con IECAs en un paciente con HFrEF? (marque todas las que considere)'),
				'p31'=>utf8_encode('Conoce el estudio PARADIGM-HF, en el que se demuestra la superioridad de sacubitrilo/valsartán frente a enalapril en la reducción del riesgo de hospitalizaciones y mortalidad de la ICC con fracción de eyección reducida (HFrEF)?'),
				'p32'=>utf8_encode('¿Qué porcentaje de sus pacientes con HFrEF sintomática están recibiendo sacubitrilo/valsartán?'),
				'p33'=>utf8_encode('¿Considera necesario, en un paciente HFrEF con síntomas a pesar del tratamiento actual con el estándar, un cambio en el tratamiento?'),
				'p34'=>utf8_encode('Ante el cambio de un IECA por sacubitrilo/valsartán, ¿cómo retiraría el IECA?'),
				'p35'=>utf8_encode('¿En cuáles de los siguientes pacientes normotensos/hipertensos consideraría la administración de sacubitrilo/valsartán?'),
				'p36'=>utf8_encode('¿Por qué elegiría sacubitrilo/valsartan? (marque las opciones que considere)'),
				'p37'=>utf8_encode('Respecto a sacubitrilo/valsartán, valore de 1 a 9 el conocimiento  del producto (siendo 9 el valor máximo)'),
				'p37a'=>utf8_encode('Mecanismo de acción'),
				'p37b'=>utf8_encode('Características diferenciales'),
				'p37c'=>utf8_encode('Beneficios'),
				'p37d'=>utf8_encode('Seguridad'),
				'titulo4'=>utf8_encode('4. MANEJO DE COMORBILIDADES EN PACIENTE CON IC'),
				'p38'=>utf8_encode('¿Qué porcentaje de sus pacientes presentan las siguientes comorbilidades?'),
				'p38a'=>utf8_encode('Angina de pecho y arteriopatía'),
				'p38b'=>utf8_encode('Caquexia y sarcopenia'),
				'p38c'=>utf8_encode('Cáncer'),
				'p38d'=>utf8_encode('Alteraciones del SNC (depresión, ictus, disfunción del SNA)'),
				'p38e'=>utf8_encode('Diabetes'),
				'p38f'=>utf8_encode('Disfunción eréctil'),
				'p38g'=>utf8_encode('Gota, artritis'),
				'p38h'=>utf8_encode('Hipo o hipercalemia'),				
				'p38i'=>utf8_encode('Hiperlipidemia'),
				'p38j'=>utf8_encode('HTA'),
				'p38k'=>utf8_encode('Anemia'),
				'p38l'=>utf8_encode('Enfermedad renal crónica (ERC)'),
				'p38m'=>utf8_encode('Enfermedades pulmonares'),
				'p38n'=>utf8_encode('Alteración del sueño'),
				'p38o'=>utf8_encode('Enfermedades de la válvula aórtica'),
				'p38p'=>utf8_encode('Otras'),
				'p39'=>utf8_encode('¿En qué medida afecta la comorbilidad al manejo de ese paciente con IC? (valore del 1 al  9, siendo 9 el valor máximo)'),
				'p39a'=>utf8_encode('Angina de pecho y arteriopatía'),
				'p39b'=>utf8_encode('Caquexia y sarcopenia'),
				'p39c'=>utf8_encode('Cáncer'),
				'p39d'=>utf8_encode('Alteraciones del SNC (depresión, ictus, disfunción del SNA)'),
				'p39e'=>utf8_encode('Diabetes'),
				'p39f'=>utf8_encode('Disfunción eréctil'),
				'p39g'=>utf8_encode('Gota, artritis'),
				'p39h'=>utf8_encode('Hipo o hipercalemia'),
				'p39i'=>utf8_encode('Hiperlipidemia'),
				'p39j'=>utf8_encode('HTA'),
				'p39k'=>utf8_encode('Anemia'),
				'p39l'=>utf8_encode('Enfermedad renal crónica (ERC)'),
				'p39m'=>utf8_encode('Enfermedades pulmonares'),
				'p39n'=>utf8_encode('Alteración del sueño'),
				'p39o'=>utf8_encode('Enfermedades de la válvula aórtica'),
				'p40'=>utf8_encode('¿Qué importancia otorga a los distintos efectos de las comorbilidades en el paciente con IC? (valore por favor del 1 al 9, siendo 9 el valor máximo)'),
				'p40a'=>utf8_encode('Interferencia en el diagnóstico diferencial'),
				'p40b'=>utf8_encode('Agravamiento de los síntomas y de la calidad de vida'),
				'p40c'=>utf8_encode('Impacto sobre las hospitalizaciones y la mortalidad'),
				'p40d'=>utf8_encode('Contraindicación de determinados tratamientos de la IC'),
				'p40e'=>utf8_encode('Carencia de datos de seguridad al quedar excluidos estos pacientes de los ensayos clínicos'),
				'p40f'=>utf8_encode('Efectos secundarios de determinados tratamientos de estas comorbilidades'),
				'p40g'=>utf8_encode('Interacciones medicamentosas con el tratamiento de la IC'),
				'p41'=>utf8_encode('¿Considera que existe en la comunidad médica conciencia sobre la relevancia de las comorbilidades de la IC en España?'),
				'titulo5'=>utf8_encode('5. VALORACIÓN DE LA INERCIA CLÍNICA'),
				'p42'=>utf8_encode('A la hora de iniciar o cambiar un tratamiento, ¿se suele basar en alguna Guía de Práctica Clínica, Protocolo de Actuación/Algoritmo de Decisión (PA)?'),
				'p43'=>utf8_encode('En caso afirmativo, ¿cuál es su preferida?'),
				'p44'=>utf8_encode('¿Cómo valoraría el grado de influencia en su práctica clínica por parte de...? (califique de 1 a 9, siendo 9 el valor máximo)'),
				'p44a'=>utf8_encode('Organismos de gestión sanitaria'),
				'p44b'=>utf8_encode('Protocolos de actuación de su centro o área de salud'),
				'p44c'=>utf8_encode('Exigencias de tratamiento de los pacientes'),
				'p44d'=>utf8_encode('Experiencia de otros colegas'),
				'p45'=>utf8_encode('Habitualmente, ¿cuánto tiempo de consulta dedica a un "paciente tipo" con ICC? (indicar en minutos)'),
				'p46'=>utf8_encode('¿De qué tipo es la información que da al paciente acerca de la enfermedad  y su alcance?'),
				'p47'=>utf8_encode('A la hora de tratar a su paciente, ¿en qué medida tiene en cuenta el grado de conocimiento de la enfermedad y del tratamiento por parte del paciente? Valorar del 1  al  9 (siendo 9 el valor más elevado)'),
				'p48'=>utf8_encode('A la hora de tratar a su paciente, ¿en qué medida tiene en cuenta el estilo de vida del paciente? Valorar del 1  al  9 (siendo 9 el valor más elevado)'),
				'p49'=>utf8_encode('A la hora de tratar a su paciente, ¿en qué medida tiene en cuenta el entorno familiar del paciente? Valorar del 1  al  9 (siendo 9 el valor más elevado)'),
				'p50'=>utf8_encode('¿Piensa que existe inercia clínica en el ámbito de la IC?'),
				'p51'=>utf8_encode('¿Cuál cree usted que es la causa principal de inercia terapéutica en el ámbito de la ICC?'),
				'p52'=>utf8_encode('¿En qué medida considera que mejoraría la inercia si el especialista dispusiera de más tiempo de consulta?'),
				'p53'=>utf8_encode('¿En qué medida considera que mejoraría la inercia si el especialista dispusiera de más formación actualizada sobre opciones terapéuticas en IC?'),
				'titulo6'=>utf8_encode('6. VALORACIÓN DE LA ADHERENCIA TERAPÉUTICA'),
				'p54'=>utf8_encode('¿Piensa que la adherencia terapéutica afecta de forma significativa a la eficacia de los tratamientos frente a la IC?'),
				'p55'=>utf8_encode('Valore de 1 a 9 el grado de adherencia al tratamiento del paciente con IC (siendo 9 el valor máximo)'),
				'p55a'=>utf8_encode('Adherencia general'),
				'p55b'=>utf8_encode('IECAs'),
				'p55c'=>utf8_encode('Antagonistas de la aldosterona'),
				'p55d'=>utf8_encode('Betabloqueantes'),
				'p55e'=>utf8_encode('Sacubitrilo/valsartán'),
				'p56'=>utf8_encode('56.	¿Tiene algún modo de revisar la adherencia?'),
				'p57'=>utf8_encode('¿En qué medida considera que la falta de adherencia viene causada por los siguientes factores? Valore cada uno de los puntos del 1 (nada) al 9 (completamente):'),
				'p57a'=>utf8_encode('Número de tomas al día'),
				'p57b'=>utf8_encode('Edad del paciente'),
				'p57c'=>utf8_encode('Interferencia de la vida del paciente con las diferentes tomas'),
				'p57d'=>utf8_encode('Efectos secundarios'),
				'p57e'=>utf8_encode('Interacciones farmacológicas'),
				'p57f'=>utf8_encode('Olvido de las tomas'),
				'p57g'=>utf8_encode('Abandono voluntario del tratamiento por falta de mejoría clínica'),
				'p57h'=>utf8_encode('Abandono voluntario del tratamiento por percepción de mejoría clínica'),
				'p57i'=>utf8_encode('Mala comprensión de las instrucciones '),
				'p57j'=>utf8_encode('Deficiente comprensión de la enfermedad y de su alcance'),
				'p57k'=>utf8_encode('Falta de apoyo familiar'),
				'p57l'=>utf8_encode('Nivel socioeconómico bajo'),
				'p58'=>utf8_encode('¿Podría estimar cuántos fármacos en total están tomando como media sus pacientes con IC?: (indicar número medio)'),
				'p59'=>utf8_encode('¿Podría estimar cuántos comprimidos en total están tomando sus pacientes con IC (de media)?'),
				'p60'=>utf8_encode('¿Cuál es, en su opinión, el principal factor que determina la falta de adherencia al tratamiento en pacientes con ICC?'),
				'p61'=>utf8_encode('¿Sobre qué factores hay que incidir, en su opinión, para mejorar la falta de adherencia? Valore cada uno de los puntos del 1 (nada) al 9 (completamente):'),
				'p61a'=>utf8_encode('Número de tomas al día'),
				'p61b'=>utf8_encode('Vía de administración'),
				'p61c'=>utf8_encode('Comunicación con el paciente'),
				'p61d'=>utf8_encode('Reducción de efectos secundarios y complicaciones asociadas'),
				'p61e'=>utf8_encode('Coordinación con otros profesionales sanitarios'),
				'p61f'=>utf8_encode('Métodos de recuerdo de las tomas'),
				'p61g'=>utf8_encode('Apoyo familiar del paciente'),
				'titulo7'=>utf8_encode('7. CALIDAD ASISTENCIAL HOSPITALARIA Y AMBULATORIA DEL PACIENTE CON IC'),
				'p62'=>utf8_encode('¿Cómo valoraría del 1 al 9 (9= máxima puntuación) la calidad asistencial hospitalaria del paciente con IC?'),
				'p63'=>utf8_encode('¿Cómo valoraría del 1 al 9 (9= máxima puntuación) la calidad asistencial ambulatoria del paciente con IC?'),
				'p64'=>utf8_encode('¿Cómo valoraría del 1 al 9 (9= máxima puntuación) la coordinación entre Atención Primaria y Atención Especializada del paciente con IC?'),
				'p65'=>utf8_encode('¿Cómo valoraría del 1 al 9 (9= máxima puntuación) el tiempo transcurrido hasta el diagnóstico del paciente con IC?'),
				'p66'=>utf8_encode('¿Cómo valoraría del 1 al 9 (9= máxima puntuación) las herramientas disponibles para el diagnóstico del paciente con IC?'),
				'p67'=>utf8_encode('¿Cómo valoraría del 1 al 9 (9= máxima puntuación) el uso de estrategias preventivas frente a la IC?'),
				'p68'=>utf8_encode('¿Considera que existe en la comunidad médica conciencia sobre la carga de la IC en España?'),
				'p69'=>utf8_encode('¿Tiene la enfermera en su consulta de IC algún papel en el ajuste de tratamiento de sus pacientes?'),
				'p70'=>utf8_encode('¿Dispone su centro de servicio de Cirugía Cardíaca?'),
				'p71'=>utf8_encode('¿Dispone su centro de servicio de programa de trasplante cardíaco?'),
				'p72'=>utf8_encode('En su unidad/programa de Insuficiencia cardíaca, ¿trabaja algún médico no Cardiólogo?'),
				'p73'=>utf8_encode('La mayor parte de su tiempo de trabajo la dedica a ...'),
				'p74'=>utf8_encode('¿Qué tipo de formación adicional sobre IC consideraría adecuada? (valore de 1 a 9, siendo 9 el valor máximo)'),
				'p74a'=>utf8_encode('Cursos de formación sobre uso y manejo de tratamientos'),
				'p74b'=>utf8_encode('Formación sobre seguridad y efectos adversos de tratamientos'),
				'p74c'=>utf8_encode('Talleres prácticos con situaciones y casos clínicos'),
				'p74d'=>utf8_encode('Otros'),
				'p75'=>utf8_encode('¿Qué iniciativas considera adecuadas para optimizar el conocimiento sobre la IC y su tratamiento en España?'),
				'webinar'=>utf8_encode('Elige tu webinar'),
		);
		return $titulos_cuestionario;
	}
	
	public function getHeaders_cuestionario()
	{
		return array(
				'', '', 
				'0.a','0.b','0.c','0.d','0.e',
				'1.a','1.b','1.c','1.d',
				'2.a','2.b','2.c','2.d','2.e',
				'3', '4', '5', '6', '7', '8', '9', '10',
				'11.a','11.b','11.c','11.d',
				'12.a','12.b','12.c','12.d','12.e',
				'13', '14', '15', '16', '17', '18', '19', '20', '21', 
				'22.a','22.b','22.c','22.d','22.e',
				'23',
				'24 disponibilidad', '24.a','24.b','24.c','24.d','24.e','24.f','24.g','24.h',
				'25', '26', 
				'27.a','27.b','27.c','27.d','27.e','27.f',
				'28', '29', '30', '31', '32', '33', '34', '35', '36', '37', '38', '39', '40', '41', '42',
				'43.a','43.b','43.c','43.d',
				'44.a','44.b','44.c','44.d','44.e','44.f','44.g','44.h','44.i','44.j','44.k','44.l','44.m','44.n','44.o','44.p',
				'45.a','45.b','45.c','45.d','45.e','45.f','45.g','45.h','45.i','45.j','45.k','45.l','45.m','45.n','45.o',
				'46.a','46.b','46.c','46.d','46.e','46.f','46.g',
				'47', '48', '49', '50', 
				'51.a','51.b','51.c','51.d',
				'52', '53', '54', '55', '56', '57', '58', '59', '60', '61', 
				'62.a','62.b','62.c','62.d','62.e',
				'63', '64', 
				'65.a','65.b','65.c','65.d','65.e','65.f','65.g','65.h','65.i','65.j','65.k','65.l',
				'66', '67', '68', '69', 
				'70.a','70.b','70.c','70.d','70.e','70.f','70.g',
				'71', '72', '73', '74', '75', '76', '77', '78', '79', '80', '81', '82', 
				'83.a','83.b','83.c','83.d',
				'84', 
		);
	}
}