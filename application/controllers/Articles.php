<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Articles extends CI_Controller {
	public function index()
	{
		$data['titre']= "Articles | aeii-mada";
		$this->load->view('header', $data);
		$this->load->view('articles');
		$this->load->view('footer');
	}
}
