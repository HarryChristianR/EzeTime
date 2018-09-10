<?php

class Welcome extends CI_Controller {
	public function index()
	{
		$this->load->view('eztime');
	}
	public function announcement(){
		$this->load->view("annnouncement");
	}
}
