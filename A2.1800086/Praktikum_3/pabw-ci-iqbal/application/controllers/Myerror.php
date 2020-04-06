<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Myerror extends CI_Controller {

	public function index()
	{
		$this->load->view('myerror_v');
	}
	
}
