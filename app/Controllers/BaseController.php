<?php
namespace App\Controllers;

/**
 * Class BaseController
 *
 * BaseController provides a convenient place for loading components
 * and performing functions that are needed by all your controllers.
 * Extend this class in any new controllers:
 *     class Home extends BaseController
 *
 * For security be sure to declare any new methods as protected or private.
 *
 * @package CodeIgniter
 */

use CodeIgniter\Controller;
<<<<<<< HEAD
use CodeIgniter\I18n\Time;
=======

>>>>>>> 2206b45ffdcaecf8ef3b62fba789559199669c20
class BaseController extends Controller
{

	/**
	 * An array of helpers to be loaded automatically upon
	 * class instantiation. These helpers will be available
	 * to all other controllers that extend BaseController.
	 *
	 * @var array
	 */
	protected $helpers = [];

	/**
	 * Constructor.
	 */
	public function initController(\CodeIgniter\HTTP\RequestInterface $request, \CodeIgniter\HTTP\ResponseInterface $response, \Psr\Log\LoggerInterface $logger)
	{
		// Do Not Edit This Line
		parent::initController($request, $response, $logger);
		
		// load model
<<<<<<< HEAD
		$this->Bahan = new \App\Models\contohClass();
		$this->Dashboard = new \App\Models\Dashboard_model();
		$this->session = session();
=======
		$this->User = new \App\Models\contohClass();
>>>>>>> 2206b45ffdcaecf8ef3b62fba789559199669c20
	}

	public function sendEmail($fromEmail, $from, $to, $subject=null, $message=null){
		session();
		$this->email->setFrom($fromEmail, $from);
		$this->email->setTo($to);

		$this->email->setSubject($subject);
		$this->email->setMessage($message);
    
 		return $this->email->send();
	}
}
