<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Detail_Page extends CI_Controller
{

	public function __construct()
    {
        parent::__construct();
        $this->db2 = $this->load->database('dekontrak', TRUE);
        $this->load->model('Kontrak');
        $this->check_login();
    }

    
    public function index()
	{
		$this->template->load('template','page/home');
	}

	function check_login(){
		$login = $this->session->userdata('login');
		if ($login != TRUE) {
			redirect('welcome');
		}
	}

	function home(){
		$this->template->load('template','page/home');
	}
    
	function detail_fisik($id){
         // Ambil data invoice berdasarkan nomor
         $data['kontrak'] = $this->Kontrak->get_kontrak_by_id($id);

		$this->template->load('template','detail/fisik_detail',$data);
	}

    

}
