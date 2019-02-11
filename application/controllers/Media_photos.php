<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Media_photos extends CI_Controller {
	public function index()
	{
		$this->load->view('header');
		$this->load->view('index');
		$this->load->view('footer');
	}
}
