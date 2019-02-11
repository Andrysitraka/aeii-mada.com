<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Objectifs extends CI_Controller {
	public function index()
	{
		$data['titre']= "Objectifs | aeii-mada";
		$this->load->view('header',$data);
		$this->load->view('objectifs');
		$this->load->view('footer');
	}
}
