<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Qui_sommes_nous extends CI_Controller {
	public function index()
	{
		$data['titre']= "Qui sommes nous | aeii-mada";
		$this->load->view('header',$data);
		$this->load->view('qui-sommes-nous');
		$this->load->view('footer');
	}
}
