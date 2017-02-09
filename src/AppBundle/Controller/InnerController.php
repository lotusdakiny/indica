<?php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\Cuestionario;
use AppBundle\Entity\Datas;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;

class InnerController extends Controller
{
	/**
	 * @Route("/report")
	 */
	public function reportAction()
	{
		$em = $this->getDoctrine()->getManager();
		
		//get all records from DB
		$records = $this->getDoctrine()
		->getRepository('AppBundle:Cuestionario')
		->findAll();
		
		if($records) {
			
			$csvPath = 'csv/report.csv';
		
			$csvh = fopen($csvPath, 'w');
			fprintf($csvh, chr(0xEF).chr(0xBB).chr(0xBF));
			$d = ';'; // this is the default but i like to be explicit
			$e = '"'; // this is the default but i like to be explicit
			
			$datas = new Datas(); 
			fputcsv($csvh, $datas->getHeaders_cuestionario(), $d, $e);
		
			foreach($records as $record) {		
				//convert all array items to string
				$record
					->setP24($record->getP24asString())
					->setP26($record->getP26asString())
					->setP30($record->getP30asString())
					->setP32($record->getP32asString())
					->setP33($record->getP33asString())
					->setP36($record->getP36asString())
					->setP42($record->getP42asString());
				
				$serializer = new Serializer([new ObjectNormalizer()], [new JsonEncoder()]);
				$data = json_decode($serializer->serialize($record, 'json'), true);
				
				fputcsv($csvh, $data, $d, $e);
			}
		
			fclose($csvh);
		
			// do something with the file
		}

		return new Response(var_dump($data));
	}

}