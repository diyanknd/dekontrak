<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Page extends CI_Controller
{

	public function __construct()
    {
        parent::__construct();
        $this->db2 = $this->load->database('dekontrak', TRUE);
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


	function list(){
		$this->template->load('template','page/list');
	}

	function fisik(){
		$this->template->load('template','page/fisik');
	}

	function konsultan_perencanaan(){
		$this->template->load('template','page/konsultan_perencanaan');
	}

	function konsultan_pengawasan(){
		$this->template->load('template','page/konsultan_pengawasan');
	}

	public function logout() {
        // Destroy the session to log out the user
		$this->session->sess_destroy();

        // Redirect to the login page or any other page
		redirect('welcome');
	}
}
