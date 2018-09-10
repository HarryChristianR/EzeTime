<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ezetime extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('ezetime_model');
	}

	
	public function announcement(){
		$this->load->view("annnouncement");
	}
}
