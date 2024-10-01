<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Surat extends CI_Controller
{
	function sppbj_tender(){
		$this->load->view('surat/sppbj_tender');
	}

	function surat_perjanjian_tender(){
		$this->load->view('surat/surat_perjanjian_tender');
	}

	function spmk_tender(){
		$this->load->view('surat/spmk_tender');
	}

	function spmk_non_tender(){
		$this->load->view('surat/spmk_non_tender');
	}

	function kop_surat_tender(){
		$this->load->view('surat/kop_tender');

	}

	function kop_surat_non_tender(){
		$this->load->view('surat/kop_non_tender');

	}

	function surat_perjanjian_non_tender(){
		$this->load->view('surat/surat_perjanjian_non_tender');
	}

	


}