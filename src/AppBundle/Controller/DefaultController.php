<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use AppBundle\Entity\Cuestionario;
use AppBundle\Entity\Datas;
use AppBundle\Entity\Webinar;
use Symfony\Component\DomCrawler\Form;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class DefaultController extends Controller
{
	/**
	 * @Route("/", name="homepage")
	 */
	public function indexAction(Request $request)
	{
		//check if user is logged
		if (!$this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_FULLY')) {
			throw $this->createAccessDeniedException();
		}
			
		// if user is logged, $user get user's object
		$user = $this->get('security.token_storage')->getToken()->getUser();
		
		// create an object of arrays of choices
		$datas = new Datas();
		
		// create an object of class of each DBtable with questions
		$cuestionario = new Cuestionario();
		//$webinar = new Webinar();
		
		// create a cuestionario form
		$cuestForm = $this->createFormBuilder($cuestionario)
			//pregunta1
		 	->add('p1a', ChoiceType::class, $datas->getChoices_porcentaje())
		 	->add('p1b', ChoiceType::class, $datas->getChoices_porcentaje())
		 	->add('p1c', ChoiceType::class, $datas->getChoices_porcentaje())
		 	->add('p1d', ChoiceType::class, $datas->getChoices_porcentaje())
		 	//pregunta2
		 	->add('p2a', ChoiceType::class, $datas->getChoices_porcentaje())
		 	->add('p2b', ChoiceType::class, $datas->getChoices_porcentaje())
		 	->add('p2c', ChoiceType::class, $datas->getChoices_porcentaje())
		 	->add('p2d', ChoiceType::class, $datas->getChoices_porcentaje())
		 	->add('p2e', ChoiceType::class, $datas->getChoices_porcentaje())
		 	//pregunta3
			->add('p3', ChoiceType::class, $datas->getChoices_p3())
			->add('p4', TextType::class, array('required' => false,))
			->add('p5', ChoiceType::class, $datas->getChoices_p5())
			->add('p6', ChoiceType::class, $datas->getChoices_p6())
			->add('p7', ChoiceType::class, $datas->getChoices_p6())
			->add('p8', ChoiceType::class, $datas->getChoices_p8())
			->add('p9', ChoiceType::class, $datas->getChoices_p9())
			->add('p10', ChoiceType::class, $datas->getChoices_p10())
			//pregunta11
			->add('p11a', ChoiceType::class, $datas->getChoices_porcentaje())
			->add('p11b', ChoiceType::class, $datas->getChoices_porcentaje())
			->add('p11c', ChoiceType::class, $datas->getChoices_porcentaje())
			->add('p11d', ChoiceType::class, $datas->getChoices_porcentaje())
			//pregunta12
			->add('p12a', ChoiceType::class, $datas->getChoices_1_9())
			->add('p12b', ChoiceType::class, $datas->getChoices_1_9())
			->add('p12c', ChoiceType::class, $datas->getChoices_1_9())
			->add('p12d', ChoiceType::class, $datas->getChoices_1_9())
			->add('p12e', ChoiceType::class, $datas->getChoices_1_9())
			//pregunta13
			->add('p13', ChoiceType::class, $datas->getChoices_si_no())
			->add('p14', ChoiceType::class, $datas->getChoices_porcentaje())
			->add('p15', ChoiceType::class, $datas->getChoices_si_no())
			->add('p16', ChoiceType::class, $datas->getChoices_si_no())
			->add('p17', ChoiceType::class, $datas->getChoices_si_nosigo())
			->add('p18', ChoiceType::class, $datas->getChoices_guia())
			->add('p19', ChoiceType::class, $datas->getChoices_p19())
			->add('p20', ChoiceType::class, $datas->getChoices_p20())
			->add('p21', ChoiceType::class, $datas->getChoices_p21())
			->add('p22a', ChoiceType::class, $datas->getChoices_1_9())
			->add('p22b', ChoiceType::class, $datas->getChoices_1_9())
			->add('p22c', ChoiceType::class, $datas->getChoices_1_9())
			->add('p22d', ChoiceType::class, $datas->getChoices_1_9())
			->add('p22e', ChoiceType::class, $datas->getChoices_1_9())
			->add('p23', ChoiceType::class, $datas->getChoices_p23())
			->add('p24a', ChoiceType::class, $datas->getChoices_1_9())
			->add('p24b', ChoiceType::class, $datas->getChoices_1_9())
			->add('p24c', ChoiceType::class, $datas->getChoices_1_9())
			->add('p24d', ChoiceType::class, $datas->getChoices_1_9())
			->add('p24e', ChoiceType::class, $datas->getChoices_1_9())
			->add('p24f', ChoiceType::class, $datas->getChoices_1_9())
			->add('p24g', ChoiceType::class, $datas->getChoices_1_9())
			->add('p24h', ChoiceType::class, $datas->getChoices_1_9())
			->add('p24', ChoiceType::class, $datas->getChoices_p24())
			->add('p25', ChoiceType::class, $datas->getChoices_p25())
			->add('p26', ChoiceType::class, $datas->getChoices_p26())
			->add('p27a', ChoiceType::class, $datas->getChoices_porcentaje())
			->add('p27b', ChoiceType::class, $datas->getChoices_porcentaje())
			->add('p27c', ChoiceType::class, $datas->getChoices_porcentaje())
			->add('p27d', ChoiceType::class, $datas->getChoices_porcentaje())
			->add('p27e', ChoiceType::class, $datas->getChoices_porcentaje())
			->add('p27f', ChoiceType::class, $datas->getChoices_porcentaje())
			->add('p28', ChoiceType::class, $datas->getChoices_si_no())
			->add('p29', ChoiceType::class, $datas->getChoices_p29())
			->add('p30', ChoiceType::class, $datas->getChoices_p30())
			->add('p31', ChoiceType::class, $datas->getChoices_p31())
			->add('p32', ChoiceType::class, $datas->getChoices_precio())
			->add('p33', ChoiceType::class, $datas->getChoices_p33())
			->add('p34', ChoiceType::class, $datas->getChoices_p34())
			->add('p35', ChoiceType::class, $datas->getChoices_p35())
			->add('p36', ChoiceType::class, $datas->getChoices_p36())
			->add('p37', ChoiceType::class, $datas->getChoices_si_no())
			->add('p38', ChoiceType::class, $datas->getChoices_p38())
			->add('p39', ChoiceType::class, $datas->getChoices_p39())
			->add('p40', ChoiceType::class, $datas->getChoices_p40())
			->add('p41', ChoiceType::class, $datas->getChoices_p41())
			->add('p42', ChoiceType::class, $datas->getChoices_precio())
			->add('p43a', ChoiceType::class, $datas->getChoices_1_9())
			->add('p43b', ChoiceType::class, $datas->getChoices_1_9())
			->add('p43c', ChoiceType::class, $datas->getChoices_1_9())
			->add('p43d', ChoiceType::class, $datas->getChoices_1_9())
			->add('p44a', ChoiceType::class, $datas->getChoices_porcentaje())
			->add('p44b', ChoiceType::class, $datas->getChoices_porcentaje())
			->add('p44c', ChoiceType::class, $datas->getChoices_porcentaje())
			->add('p44d', ChoiceType::class, $datas->getChoices_porcentaje())
			->add('p44e', ChoiceType::class, $datas->getChoices_porcentaje())
			->add('p44f', ChoiceType::class, $datas->getChoices_porcentaje())
			->add('p44g', ChoiceType::class, $datas->getChoices_porcentaje())
			->add('p44h', ChoiceType::class, $datas->getChoices_porcentaje())
			->add('p44i', ChoiceType::class, $datas->getChoices_porcentaje())
			->add('p44j', ChoiceType::class, $datas->getChoices_porcentaje())
			->add('p44k', ChoiceType::class, $datas->getChoices_porcentaje())
			->add('p44l', ChoiceType::class, $datas->getChoices_porcentaje())
			->add('p44m', ChoiceType::class, $datas->getChoices_porcentaje())
			->add('p44n', ChoiceType::class, $datas->getChoices_porcentaje())
			->add('p44o', ChoiceType::class, $datas->getChoices_porcentaje())
			->add('p44p', ChoiceType::class, $datas->getChoices_porcentaje())
			->add('p45a', ChoiceType::class, $datas->getChoices_1_9())
			->add('p45b', ChoiceType::class, $datas->getChoices_1_9())
			->add('p45c', ChoiceType::class, $datas->getChoices_1_9())
			->add('p45d', ChoiceType::class, $datas->getChoices_1_9())
			->add('p45e', ChoiceType::class, $datas->getChoices_1_9())
			->add('p45f', ChoiceType::class, $datas->getChoices_1_9())
			->add('p45g', ChoiceType::class, $datas->getChoices_1_9())
			->add('p45h', ChoiceType::class, $datas->getChoices_1_9())
			->add('p45i', ChoiceType::class, $datas->getChoices_1_9())
			->add('p45j', ChoiceType::class, $datas->getChoices_1_9())
			->add('p45k', ChoiceType::class, $datas->getChoices_1_9())
			->add('p45l', ChoiceType::class, $datas->getChoices_1_9())
			->add('p45m', ChoiceType::class, $datas->getChoices_1_9())
			->add('p45n', ChoiceType::class, $datas->getChoices_1_9())
			->add('p45o', ChoiceType::class, $datas->getChoices_1_9())
			->add('p46a', ChoiceType::class, $datas->getChoices_1_9())
			->add('p46b', ChoiceType::class, $datas->getChoices_1_9())
			->add('p46c', ChoiceType::class, $datas->getChoices_1_9())
			->add('p46d', ChoiceType::class, $datas->getChoices_1_9())
			->add('p46e', ChoiceType::class, $datas->getChoices_1_9())
			->add('p46f', ChoiceType::class, $datas->getChoices_1_9())
			->add('p46g', ChoiceType::class, $datas->getChoices_1_9())
			->add('p47', ChoiceType::class, $datas->getChoices_p47())
			->add('p48', ChoiceType::class, $datas->getChoices_p48())
			->add('p49', ChoiceType::class, $datas->getChoices_si_nosigo())
			->add('p50', ChoiceType::class, $datas->getChoices_guia())
			->add('p51a', ChoiceType::class, $datas->getChoices_1_9())
			->add('p51b', ChoiceType::class, $datas->getChoices_1_9())
			->add('p51c', ChoiceType::class, $datas->getChoices_1_9())
			->add('p51d', ChoiceType::class, $datas->getChoices_1_9())
			->add('p52', TextType::class)
			->add('p53', ChoiceType::class, $datas->getChoices_p53())
			->add('p54', ChoiceType::class, $datas->getChoices_1_9())
			->add('p55', ChoiceType::class, $datas->getChoices_1_9())
			->add('p56', ChoiceType::class, $datas->getChoices_1_9())
			->add('p57', ChoiceType::class, $datas->getChoices_patologias())
			->add('p58', ChoiceType::class, $datas->getChoices_p58())
			->add('p59', ChoiceType::class, $datas->getChoices_nada())
			->add('p60', ChoiceType::class, $datas->getChoices_nada())
			->add('p61', ChoiceType::class, $datas->getChoices_patologias())
			->add('p62a', ChoiceType::class, $datas->getChoices_1_9())
			->add('p62b', ChoiceType::class, $datas->getChoices_1_9())
			->add('p62c', ChoiceType::class, $datas->getChoices_1_9())
			->add('p62d', ChoiceType::class, $datas->getChoices_1_9())
			->add('p62e', ChoiceType::class, $datas->getChoices_1_9())
			->add('p63', ChoiceType::class, $datas->getChoices_si_no())
			->add('p64', ChoiceType::class, $datas->getChoices_meses())
			->add('p65a', ChoiceType::class, $datas->getChoices_1_9())
			->add('p65b', ChoiceType::class, $datas->getChoices_1_9())
			->add('p65c', ChoiceType::class, $datas->getChoices_1_9())
			->add('p65d', ChoiceType::class, $datas->getChoices_1_9())
			->add('p65e', ChoiceType::class, $datas->getChoices_1_9())
			->add('p65f', ChoiceType::class, $datas->getChoices_1_9())
			->add('p65g', ChoiceType::class, $datas->getChoices_1_9())
			->add('p65h', ChoiceType::class, $datas->getChoices_1_9())
			->add('p65i', ChoiceType::class, $datas->getChoices_1_9())
			->add('p65j', ChoiceType::class, $datas->getChoices_1_9())
			->add('p65k', ChoiceType::class, $datas->getChoices_1_9())
			->add('p65l', ChoiceType::class, $datas->getChoices_1_9())
			->add('p66', TextType::class)
			->add('p67', TextType::class)
			->add('p68', ChoiceType::class, $datas->getChoices_p68())
			->add('p69', ChoiceType::class, $datas->getChoices_p69())
			->add('p70a', ChoiceType::class, $datas->getChoices_1_9())
			->add('p70b', ChoiceType::class, $datas->getChoices_1_9())
			->add('p70c', ChoiceType::class, $datas->getChoices_1_9())
			->add('p70d', ChoiceType::class, $datas->getChoices_1_9())
			->add('p70e', ChoiceType::class, $datas->getChoices_1_9())
			->add('p70f', ChoiceType::class, $datas->getChoices_1_9())
			->add('p70g', ChoiceType::class, $datas->getChoices_1_9())
			->add('p71', ChoiceType::class, $datas->getChoices_1_9())
			->add('p72', ChoiceType::class, $datas->getChoices_1_9())
			->add('p73', ChoiceType::class, $datas->getChoices_1_9())
			->add('p74', ChoiceType::class, $datas->getChoices_1_9())
			->add('p75', ChoiceType::class, $datas->getChoices_1_9())
			->add('p76', ChoiceType::class, $datas->getChoices_1_9())
			->add('p77', ChoiceType::class, $datas->getChoices_p48())
			->add('p78', ChoiceType::class, $datas->getChoices_si_no())
			->add('p79', ChoiceType::class, $datas->getChoices_si_no())
			->add('p80', ChoiceType::class, $datas->getChoices_si_no())
			->add('p81', ChoiceType::class, $datas->getChoices_si_no())
			->add('p82', ChoiceType::class, $datas->getChoices_p82())
			->add('p83a', ChoiceType::class, $datas->getChoices_1_9())
			->add('p83b', ChoiceType::class, $datas->getChoices_1_9())
			->add('p83c', ChoiceType::class, $datas->getChoices_1_9())
			->add('p83d', ChoiceType::class, $datas->getChoices_1_9())
			->add('p84', ChoiceType::class, $datas->getChoices_p84())
		 	->getForm();
		
		$cuestForm->handleRequest($request);
		
		//if we are getting datas with our form
		if ($cuestForm->isSubmitted() && $cuestForm->isValid()) {
			
			$cuestionario = $cuestForm->getData();
			
			//$form4texto = $request->request->get('p15texto');
			if ($request->request->get('p15texto')) $cuestionario->setP15($request->request->get('p15texto'));
		
			//working with DB
			$cuestionario->setUserid($user->getId());
			$em = $this->getDoctrine()->getManager();
		
			//If user already has record in Form table,
			$isUserInDB = $this->getDoctrine()
			->getRepository('AppBundle:Cuestionario')
			->findOneBy(array('userid' => $user->getId()));
		
			//then we want to delete it for further refreshing
			if ($isUserInDB) {
				$formField = $this->getDoctrine()
				->getRepository('AppBundle:Cuestionario')
				->findOneBy(array('userid' => $user->getId()));
				 
				$em->remove($formField);
				$em->flush();
			}
		
			//persist data in DB
			$em = $this->getDoctrine()->getManager();
			$em->persist($cuestionario);
			$em->flush();
			 
			//return new Response(var_dump($cuestionario));
			return $this->render('default/index.html.twig', array(					
					'webinar' => $datas->getChoices_webinar(),
					'user' => $user,
					'titulos' => $datas->getTitulos_cuestionario(),
			));
			
		}
		
		if (($request->isMethod('POST'))&&($request->request->get('webFormRadio'))){
			$webinar = $request->request->get('webFormRadio');	
			
			//return new Response(var_dump($webinar));
			return $this->render('default/index.html.twig', array(
					'form' => $cuestForm->createView(),
					'webRes' => $webinar,
					'user' => $user,
					'titulos' => $datas->getTitulos_cuestionario(),
			));
		}
	
		return $this->render('default/index.html.twig', array(
				'form' => $cuestForm->createView(),
				//'webinar' => $datas->getChoices_webinar(),
				'webinar' => $this->webinarCount(),
				'user' => $user,
				'titulos' => $datas->getTitulos_cuestionario(),
		));		
	}
	
	public function webinarCount()
	{
		
		$choicesWebinar = array();
		
		$datas = new Datas();
		
		$em = $this->getDoctrine()->getManager();
		
		for ($i = 0; $i < count($datas->getChoices_webinar()); $i++) {
			//Get all users, registered on webinar i
			$personasRegistradas = $this->getDoctrine()
			->getRepository('AppBundle:Webinar')
			->findBy(array('name' => $datas->getChoices_webinar()[$i]));
				
			$result = count($personasRegistradas);
			
			if ($result <= $datas->getNumbers_webinar()[$i]) {
				$choicesWebinar[] = $datas->getChoices_webinar()[$i];
			}
		}
		
		return $choicesWebinar;
	}
}


