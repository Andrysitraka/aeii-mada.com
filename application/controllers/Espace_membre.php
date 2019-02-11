<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Espace_membre extends CI_Controller {
	public function index()
	{
		$this->load->view('header');
		$this->load->view('espace_membre');
		$this->load->view('footer');
	}
}
