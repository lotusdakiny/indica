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
use Symfony\Component\Form\Extension\Core\Type\IntegerType;

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
		
		return $this->render('default/index.html.twig', array(
				'user' => $user,
		));
	}
	
	/**
	 * @Route("/cu")
	 */
	public function cuAction(Request $request)
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
			//datos privados
			->add('p0a', ChoiceType::class, $datas->getChoices_sexo())
			->add('p0b', IntegerType::class)
			->add('p0c', IntegerType::class)
			->add('p0d', ChoiceType::class, $datas->getChoices_centro())
			->add('p0e', IntegerType::class)
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
			->add('p10', IntegerType::class)
			//pregunta11
			->add('p11a', ChoiceType::class, $datas->getChoices_porcentaje())
			->add('p11b', ChoiceType::class, $datas->getChoices_porcentaje())
			->add('p11c', ChoiceType::class, $datas->getChoices_porcentaje())
			->add('p11d', ChoiceType::class, $datas->getChoices_porcentaje())
			//pregunta12
			->add('p12', ChoiceType::class, $datas->getChoices_si_no())
			->add('p13', ChoiceType::class, $datas->getChoices_porcentaje())
			->add('p14', ChoiceType::class, $datas->getChoices_si_no())
			->add('p15', ChoiceType::class, $datas->getChoices_si_nosigo())
			->add('p16', ChoiceType::class, $datas->getChoices_guia())
			->add('p17', ChoiceType::class, $datas->getChoices_p17())
			->add('p18', ChoiceType::class, $datas->getChoices_p18())
			->add('p19a', ChoiceType::class, $datas->getChoices_1_9())
			->add('p19b', ChoiceType::class, $datas->getChoices_1_9())
			->add('p19c', ChoiceType::class, $datas->getChoices_1_9())
			->add('p19d', ChoiceType::class, $datas->getChoices_1_9())
			->add('p19e', ChoiceType::class, $datas->getChoices_1_9())
			->add('p20a', ChoiceType::class, $datas->getChoices_1_9())
			->add('p20b', ChoiceType::class, $datas->getChoices_1_9())
			->add('p20c', ChoiceType::class, $datas->getChoices_1_9())
			->add('p20d', ChoiceType::class, $datas->getChoices_1_9())
			->add('p20e', ChoiceType::class, $datas->getChoices_1_9())
			->add('p20f', ChoiceType::class, $datas->getChoices_1_9())
			->add('p20g', ChoiceType::class, $datas->getChoices_1_9())
			->add('p20h', ChoiceType::class, $datas->getChoices_1_9())
			->add('p20', ChoiceType::class, $datas->getChoices_p20())
			->add('p21', ChoiceType::class, $datas->getChoices_p21())
			->add('p22a', ChoiceType::class, $datas->getChoices_porcentaje())
			->add('p22b', ChoiceType::class, $datas->getChoices_porcentaje())
			->add('p22c', ChoiceType::class, $datas->getChoices_porcentaje())
			->add('p22d', ChoiceType::class, $datas->getChoices_porcentaje())
			->add('p22e', ChoiceType::class, $datas->getChoices_porcentaje())
			->add('p22f', ChoiceType::class, $datas->getChoices_porcentaje())
			->add('p23', ChoiceType::class, $datas->getChoices_si_no())
			->add('p24', ChoiceType::class, $datas->getChoices_p24())
			->add('p25', ChoiceType::class, $datas->getChoices_p25())
			->add('p26', ChoiceType::class, $datas->getChoices_precio())
			->add('p27', ChoiceType::class, $datas->getChoices_p27())
			->add('p28', ChoiceType::class, $datas->getChoices_p28())
			->add('p29', ChoiceType::class, $datas->getChoices_p29())
			->add('p30', ChoiceType::class, $datas->getChoices_p30())
			->add('p31', ChoiceType::class, $datas->getChoices_si_no())
			->add('p32', ChoiceType::class, $datas->getChoices_porcentaje())
			->add('p33', ChoiceType::class, $datas->getChoices_p33())
			->add('p34', ChoiceType::class, $datas->getChoices_p34())
			->add('p35', ChoiceType::class, $datas->getChoices_p35())
			->add('p36', ChoiceType::class, $datas->getChoices_precio())
			->add('p37a', ChoiceType::class, $datas->getChoices_1_9())
			->add('p37b', ChoiceType::class, $datas->getChoices_1_9())
			->add('p37c', ChoiceType::class, $datas->getChoices_1_9())
			->add('p37d', ChoiceType::class, $datas->getChoices_1_9())
			->add('p38a', ChoiceType::class, $datas->getChoices_porcentaje())
			->add('p38b', ChoiceType::class, $datas->getChoices_porcentaje())
			->add('p38c', ChoiceType::class, $datas->getChoices_porcentaje())
			->add('p38d', ChoiceType::class, $datas->getChoices_porcentaje())
			->add('p38e', ChoiceType::class, $datas->getChoices_porcentaje())
			->add('p38f', ChoiceType::class, $datas->getChoices_porcentaje())
			->add('p38g', ChoiceType::class, $datas->getChoices_porcentaje())
			->add('p38h', ChoiceType::class, $datas->getChoices_porcentaje())
			->add('p38i', ChoiceType::class, $datas->getChoices_porcentaje())
			->add('p38j', ChoiceType::class, $datas->getChoices_porcentaje())
			->add('p38k', ChoiceType::class, $datas->getChoices_porcentaje())
			->add('p38l', ChoiceType::class, $datas->getChoices_porcentaje())
			->add('p38m', ChoiceType::class, $datas->getChoices_porcentaje())
			->add('p38n', ChoiceType::class, $datas->getChoices_porcentaje())
			->add('p38o', ChoiceType::class, $datas->getChoices_porcentaje())
			->add('p38p', ChoiceType::class, $datas->getChoices_porcentaje())
			->add('p39a', ChoiceType::class, $datas->getChoices_1_9())
			->add('p39b', ChoiceType::class, $datas->getChoices_1_9())
			->add('p39c', ChoiceType::class, $datas->getChoices_1_9())
			->add('p39d', ChoiceType::class, $datas->getChoices_1_9())
			->add('p39e', ChoiceType::class, $datas->getChoices_1_9())
			->add('p39f', ChoiceType::class, $datas->getChoices_1_9())
			->add('p39g', ChoiceType::class, $datas->getChoices_1_9())
			->add('p39h', ChoiceType::class, $datas->getChoices_1_9())
			->add('p39i', ChoiceType::class, $datas->getChoices_1_9())
			->add('p39j', ChoiceType::class, $datas->getChoices_1_9())
			->add('p39k', ChoiceType::class, $datas->getChoices_1_9())
			->add('p39l', ChoiceType::class, $datas->getChoices_1_9())
			->add('p39m', ChoiceType::class, $datas->getChoices_1_9())
			->add('p39n', ChoiceType::class, $datas->getChoices_1_9())
			->add('p39o', ChoiceType::class, $datas->getChoices_1_9())
			->add('p40a', ChoiceType::class, $datas->getChoices_1_9())
			->add('p40b', ChoiceType::class, $datas->getChoices_1_9())
			->add('p40c', ChoiceType::class, $datas->getChoices_1_9())
			->add('p40d', ChoiceType::class, $datas->getChoices_1_9())
			->add('p40e', ChoiceType::class, $datas->getChoices_1_9())
			->add('p40f', ChoiceType::class, $datas->getChoices_1_9())
			->add('p40g', ChoiceType::class, $datas->getChoices_1_9())
			->add('p41', ChoiceType::class, $datas->getChoices_p41())
			->add('p42', ChoiceType::class, $datas->getChoices_si_nosigo())
			->add('p43', ChoiceType::class, $datas->getChoices_guia())
			->add('p44a', ChoiceType::class, $datas->getChoices_1_9())
			->add('p44b', ChoiceType::class, $datas->getChoices_1_9())
			->add('p44c', ChoiceType::class, $datas->getChoices_1_9())
			->add('p44d', ChoiceType::class, $datas->getChoices_1_9())
			->add('p45', TextType::class)
			->add('p46', ChoiceType::class, $datas->getChoices_p46())
			->add('p47', ChoiceType::class, $datas->getChoices_1_9())
			->add('p48', ChoiceType::class, $datas->getChoices_1_9())
			->add('p49', ChoiceType::class, $datas->getChoices_1_9())
			->add('p50', ChoiceType::class, $datas->getChoices_patologias())
			->add('p51', ChoiceType::class, $datas->getChoices_p51())
			->add('p52', ChoiceType::class, $datas->getChoices_nada())
			->add('p53', ChoiceType::class, $datas->getChoices_nada())
			->add('p54', ChoiceType::class, $datas->getChoices_patologias())
			->add('p55a', ChoiceType::class, $datas->getChoices_1_9())
			->add('p55b', ChoiceType::class, $datas->getChoices_1_9())
			->add('p55c', ChoiceType::class, $datas->getChoices_1_9())
			->add('p55d', ChoiceType::class, $datas->getChoices_1_9())
			->add('p55e', ChoiceType::class, $datas->getChoices_1_9())
			->add('p56', ChoiceType::class, $datas->getChoices_si_no())
			->add('p57a', ChoiceType::class, $datas->getChoices_1_9())
			->add('p57b', ChoiceType::class, $datas->getChoices_1_9())
			->add('p57c', ChoiceType::class, $datas->getChoices_1_9())
			->add('p57d', ChoiceType::class, $datas->getChoices_1_9())
			->add('p57e', ChoiceType::class, $datas->getChoices_1_9())
			->add('p57f', ChoiceType::class, $datas->getChoices_1_9())
			->add('p57g', ChoiceType::class, $datas->getChoices_1_9())
			->add('p57h', ChoiceType::class, $datas->getChoices_1_9())
			->add('p57i', ChoiceType::class, $datas->getChoices_1_9())
			->add('p57j', ChoiceType::class, $datas->getChoices_1_9())
			->add('p57k', ChoiceType::class, $datas->getChoices_1_9())
			->add('p57l', ChoiceType::class, $datas->getChoices_1_9())
			->add('p58', TextType::class)
			->add('p59', TextType::class)
			->add('p60', ChoiceType::class, $datas->getChoices_p60())
			->add('p61a', ChoiceType::class, $datas->getChoices_1_9())
			->add('p61b', ChoiceType::class, $datas->getChoices_1_9())
			->add('p61c', ChoiceType::class, $datas->getChoices_1_9())
			->add('p61d', ChoiceType::class, $datas->getChoices_1_9())
			->add('p61e', ChoiceType::class, $datas->getChoices_1_9())
			->add('p61f', ChoiceType::class, $datas->getChoices_1_9())
			->add('p61g', ChoiceType::class, $datas->getChoices_1_9())
			->add('p62', ChoiceType::class, $datas->getChoices_1_9())
			->add('p63', ChoiceType::class, $datas->getChoices_1_9())
			->add('p64', ChoiceType::class, $datas->getChoices_1_9())
			->add('p65', ChoiceType::class, $datas->getChoices_1_9())
			->add('p66', ChoiceType::class, $datas->getChoices_1_9())
			->add('p67', ChoiceType::class, $datas->getChoices_1_9())
			->add('p68', ChoiceType::class, $datas->getChoices_p41())
			->add('p69', ChoiceType::class, $datas->getChoices_si_no())
			->add('p70', ChoiceType::class, $datas->getChoices_si_no())
			->add('p71', ChoiceType::class, $datas->getChoices_si_no())
			->add('p72', ChoiceType::class, $datas->getChoices_si_no())
			->add('p73', ChoiceType::class, $datas->getChoices_p73())
			->add('p74a', ChoiceType::class, $datas->getChoices_1_9())
			->add('p74b', ChoiceType::class, $datas->getChoices_1_9())
			->add('p74c', ChoiceType::class, $datas->getChoices_1_9())
			->add('p74d', ChoiceType::class, $datas->getChoices_1_9())
			->add('p75', ChoiceType::class, $datas->getChoices_p75())
		 	->getForm();
		
		$cuestForm->handleRequest($request);
		
		//if we are getting datas with our form
		if ($cuestForm->isSubmitted() && $cuestForm->isValid()) {
			
			$cuestionario = $cuestForm->getData();
			
			//dealing with input field
			if ($request->request->get('p14texto')) $cuestionario->setP14($request->request->get('p14texto'));
		
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


