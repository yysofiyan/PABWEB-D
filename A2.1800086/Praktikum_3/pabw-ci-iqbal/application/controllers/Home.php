<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->helper('Login');
        cek_session();
    }

	public function index()
	{
		$this->load->view('home/home_view');
	}
	
}
