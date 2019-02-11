<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Divers_activites extends CI_Controller {
	public function index()
	{
		$data['titre']= "Divers Activités | aeii-mada";
		$this->load->view('header',$data);
		$this->load->view('divers-activites');
		$this->load->view('footer');
	}
}
