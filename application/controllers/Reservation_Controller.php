<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reservation_Controller extends CI_Controller {

	/**
	 * Class Reservation Controller : 
	 * Function : Afficher le model qui contient le calandrier à charger 
	 * Function : Verif modification dans le model 
	 * Function : 
	 **/

	public function index()
	{
		$this->load->view('resa');
	}
}
