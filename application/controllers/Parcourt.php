<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Parcourt extends CI_Controller {
	public function index()
	{
		$data['titre']= "Parcourt | aeii-mada";
		$this->load->view('header',$data);
		$this->load->view('parcour-detail');
		$this->load->view('footer');
	}
}
