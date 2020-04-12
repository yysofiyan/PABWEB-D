<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Program_studi extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Prodi_model');
    }

	public function index()
	{
		$data['prodi'] = $this->Prodi_model->lihat_data();
		$this->load->view('prodi_v', $data);
	}
	
}
