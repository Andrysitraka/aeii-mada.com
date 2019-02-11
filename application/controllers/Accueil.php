<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Accueil extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->model('Statique_model');
	}
	public function index()
	{
		$data['titre']= "Accueil | aeii-mada";
		$data['get_intro']=$this->Statique_model->introduction();
		$this->load->view('header', $data);
		$this->load->view('index',$data);
		$this->load->view('footer');
	}
}
