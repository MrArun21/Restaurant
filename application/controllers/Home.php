<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		echo'Welcome PHP Framework';
	}

	public function contact(){
		$this->load->view('contact');
	}
}