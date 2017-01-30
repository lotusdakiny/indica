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
		 ->add('p1', ChoiceType::class, $datas->getChoices_1_5())
		 ->add('p2', ChoiceType::class, $datas->getChoices_si_no())
		 ->getForm();
		
		$cuestForm->handleRequest($request);
		
		//if we are getting datas with our form
		if ($cuestForm->isSubmitted() && $cuestForm->isValid()) {
			
			$cuestionario = $cuestForm->getData();
		
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
					'cuestForm' => $cuestForm->createView(),
					'webRes' => $webinar,
					'user' => $user,
					'titulos' => $datas->getTitulos_cuestionario(),
			));
		}
	
		return $this->render('default/index.html.twig', array(
				'cuestForm' => $cuestForm->createView(),
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


