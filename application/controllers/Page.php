<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Page extends CI_Controller
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


	function list(){
		$data['kontrak'] = $this->Kontrak->get_kontrak();
		$data['nilai_pagu'] = $this->Kontrak->get_pagu()->row()->nilai_pagu;
		$data['nilai_kontrak'] = $this->Kontrak->get_nilai_kontrak()->row()->nilai_kontrak;
		$data['get_pagu_fisik'] = $this->Kontrak->get_pagu_fisik()->row()->nilai_pagu;
		$data['get_pagu_konsultan_pengawasan'] = $this->Kontrak->get_pagu_konsultan_pengawasan()->row()->nilai_pagu;
		$data['get_pagu_konsultan_perencanaan'] = $this->Kontrak->get_pagu_konsultan_perencanaan()->row()->nilai_pagu;
		$data['get_kontrak_fisik'] = $this->Kontrak->get_kontrak_fisik()->row()->nilai_kontrak;
		$data['get_kontrak_konsultan_pengawasan'] = $this->Kontrak->get_kontrak_konsultan_pengawasan()->row()->nilai_kontrak;
		$data['get_kontrak_konsultan_perencanaan'] = $this->Kontrak->get_kontrak_konsultan_perencanaan()->row()->nilai_kontrak;
		$data['get_pagu_count'] = $this->Kontrak->get_pagu_count()->row()->count_nilai_pagu;
		$data['get_nilai_kontrak_count'] = $this->Kontrak->get_nilai_kontrak_count()->row()->count_nilai_kontrak;
		$data['get_pagu_fisik_count'] = $this->Kontrak->get_pagu_fisik_count()->row()->count_nilai_pagu;
		$data['get_pagu_konsultan_pengawasan_count'] = $this->Kontrak->get_pagu_konsultan_pengawasan_count()->row()->count_nilai_pagu;
		$data['get_pagu_konsultan_perencanaan_count'] = $this->Kontrak->get_pagu_konsultan_perencanaan_count()->row()->count_nilai_pagu;
		$this->template->load('template','page/list',$data);
	}

	function fisik(){
		$this->template->load('template','page/fisik');
	}

	function konsultan_perencanaan(){
		$data['kontrak'] = $this->Kontrak->get_kontrak_konsultan_perencanaan_list();
		$data['nilai_pagu'] = $this->Kontrak->get_pagu()->row()->nilai_pagu;
		$data['nilai_kontrak'] = $this->Kontrak->get_nilai_kontrak()->row()->nilai_kontrak;
		$data['get_pagu_fisik'] = $this->Kontrak->get_pagu_fisik()->row()->nilai_pagu;
		$data['get_pagu_konsultan_pengawasan'] = $this->Kontrak->get_pagu_konsultan_pengawasan()->row()->nilai_pagu;
		$data['get_pagu_konsultan_perencanaan'] = $this->Kontrak->get_pagu_konsultan_perencanaan()->row()->nilai_pagu;
		$data['get_kontrak_fisik'] = $this->Kontrak->get_kontrak_fisik()->row()->nilai_kontrak;
		$data['get_kontrak_konsultan_pengawasan'] = $this->Kontrak->get_kontrak_konsultan_pengawasan()->row()->nilai_kontrak;
		$data['get_kontrak_konsultan_perencanaan'] = $this->Kontrak->get_kontrak_konsultan_perencanaan()->row()->nilai_kontrak;
		$data['get_pagu_count'] = $this->Kontrak->get_pagu_count()->row()->count_nilai_pagu;
		$data['get_nilai_kontrak_count'] = $this->Kontrak->get_nilai_kontrak_count()->row()->count_nilai_kontrak;
		$data['get_pagu_fisik_count'] = $this->Kontrak->get_pagu_fisik_count()->row()->count_nilai_pagu;
		$data['get_pagu_konsultan_pengawasan_count'] = $this->Kontrak->get_pagu_konsultan_pengawasan_count()->row()->count_nilai_pagu;
		$data['get_pagu_konsultan_perencanaan_count'] = $this->Kontrak->get_pagu_konsultan_perencanaan_count()->row()->count_nilai_pagu;
		$this->template->load('template','page/konsultan_perencanaan',$data);
	}

	function konsultan_pengawasan(){
		$data['kontrak'] = $this->Kontrak->get_kontrak_konsultan_pengawasan_list();
		$data['nilai_pagu'] = $this->Kontrak->get_pagu()->row()->nilai_pagu;
		$data['nilai_kontrak'] = $this->Kontrak->get_nilai_kontrak()->row()->nilai_kontrak;
		$data['get_pagu_fisik'] = $this->Kontrak->get_pagu_fisik()->row()->nilai_pagu;
		$data['get_pagu_konsultan_pengawasan'] = $this->Kontrak->get_pagu_konsultan_pengawasan()->row()->nilai_pagu;
		$data['get_pagu_konsultan_perencanaan'] = $this->Kontrak->get_pagu_konsultan_perencanaan()->row()->nilai_pagu;
		$data['get_kontrak_fisik'] = $this->Kontrak->get_kontrak_fisik()->row()->nilai_kontrak;
		$data['get_kontrak_konsultan_pengawasan'] = $this->Kontrak->get_kontrak_konsultan_pengawasan()->row()->nilai_kontrak;
		$data['get_kontrak_konsultan_perencanaan'] = $this->Kontrak->get_kontrak_konsultan_perencanaan()->row()->nilai_kontrak;
		$data['get_pagu_count'] = $this->Kontrak->get_pagu_count()->row()->count_nilai_pagu;
		$data['get_nilai_kontrak_count'] = $this->Kontrak->get_nilai_kontrak_count()->row()->count_nilai_kontrak;
		$data['get_pagu_fisik_count'] = $this->Kontrak->get_pagu_fisik_count()->row()->count_nilai_pagu;
		$data['get_pagu_konsultan_pengawasan_count'] = $this->Kontrak->get_pagu_konsultan_pengawasan_count()->row()->count_nilai_pagu;
		$data['get_pagu_konsultan_perencanaan_count'] = $this->Kontrak->get_pagu_konsultan_perencanaan_count()->row()->count_nilai_pagu;
		$this->template->load('template','page/konsultan_pengawasan',$data);
	}

	public function logout() {
        // Destroy the session to log out the user
		$this->session->sess_destroy();

        // Redirect to the login page or any other page
		redirect('welcome');
	}
}
