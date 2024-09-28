<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Page extends CI_Controller
{

	
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

	public function logout() {
        // Destroy the session to log out the user
		$this->session->sess_destroy();

        // Redirect to the login page or any other page
		redirect('welcome');
	}
}
