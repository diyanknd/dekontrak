<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Surat extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->db2 = $this->load->database('dekontrak', TRUE);
		$this->load->model('Kontrak');
	}
	function sppbj_tender()
	{
		$id_paket = $this->uri->segment('3');

		$data['row1'] = $this->db->where('id_paket', $id_paket)->get('sppbj')->row();
		$data['row2'] = $this->Kontrak->get_data_paket()->row();
		$this->load->view('surat/sppbj_tender', $data);
	}

	function sppbj_non_tender()
	{
		$id_paket = $this->uri->segment('3');

		$data['row1'] = $this->db->where('id_paket', $id_paket)->get('sppbj')->row();
		$data['row2'] = $this->Kontrak->get_data_paket()->row();
		$this->load->view('surat/sppbj_non_tender', $data);
	}

	function sppbj_konsultansi_non_tender()
	{
		$id_paket = $this->uri->segment('3');

		$data['row1'] = $this->db->where('id_paket', $id_paket)->get('sppbj')->row();
		$data['row2'] = $this->Kontrak->get_data_paket()->row();
		$this->load->view('surat/sppbj_konsultansi_non_tender', $data);
	}

	function surat_perjanjian_tender()
	{
		$id_paket = $this->uri->segment('3');

		$data['row1'] = $this->db->select('*')
			->from('sppbj')
			->join('surat_perjanjian', 'sppbj.id_paket = surat_perjanjian.id_paket')
			->where('surat_perjanjian.id_paket', $id_paket)
			->get()
			->row();
		$data['row2'] = $this->Kontrak->get_data_paket()->row();
		$this->load->view('surat/surat_perjanjian_tender', $data);
	}

	function spmk_tender()
	{
		$id_paket = $this->uri->segment('3');

		$data['row1'] = $this->db->select('*')
			->from('spmk')
			->join('surat_perjanjian', 'surat_perjanjian.id_paket = spmk.id_paket', 'left')
			->where('spmk.id_paket', $id_paket)
			->get()
			->row();
		$data['row2'] = $this->Kontrak->get_data_paket()->row();
		$this->load->view('surat/spmk_tender', $data);
	}

	function spmk_non_tender()
	{
		$id_paket = $this->uri->segment('3');

		$data['row1'] = $this->db->select('*')
			->from('spmk')
			->join('surat_perjanjian', 'surat_perjanjian.id_paket = spmk.id_paket', 'left')
			->where('spmk.id_paket', $id_paket)
			->get()
			->row();
		$data['row2'] = $this->Kontrak->get_data_paket()->row();
		$data['jumlah_rangkap'] = $this->input->post('jumlah_rangkap');
		$this->load->view('surat/spmk_non_tender', $data);
	}

	function spmk_konsultansi_non_tender()
	{
		$id_paket = $this->uri->segment('3');

		$data['row1'] = $this->db->select('*')
			->from('spmk')
			->join('surat_perjanjian', 'surat_perjanjian.id_paket = spmk.id_paket', 'left')
			->where('spmk.id_paket', $id_paket)
			->get()
			->row();
		$data['row2'] = $this->Kontrak->get_data_paket()->row();
		$data['jumlah_rangkap'] = $this->input->post('jumlah_rangkap');
		$this->load->view('surat/spmk_konsultansi_non_tender', $data);
	}

	function kop_surat_tender()
	{
		$data['jumlah_rangkap'] = $this->input->post('jumlah_rangkap');
		$this->load->view('surat/kop_tender', $data);

	}

	function kop_surat_non_tender()
	{
		$this->load->view('surat/kop_non_tender');

	}

	function surat_perjanjian_non_tender()
	{
		$this->load->view('surat/surat_perjanjian_non_tender');
	}

	function surat_perjanjian_konsultansi_non_tender()
	{
		$id_paket = $this->uri->segment('3');

		$data['row1'] = $this->db->select('*')
			->from('sppbj')
			->join('surat_perjanjian', 'sppbj.id_paket = surat_perjanjian.id_paket')
			->where('surat_perjanjian.id_paket', $id_paket)
			->get()
			->row();
		$data['row2'] = $this->Kontrak->get_data_paket()->row();
		$data['skppk'] = $this->db2->get('nomor_skppk')->row();
		$query = $this->db2->where('id_paket', $id_paket)->get('tb_bast')->num_rows();
		if ($query == 1) {
			$data['bast'] = $this->db2->where('id_paket', $id_paket)->get('tb_bast')->row();
		} else {
			$this->session->set_flashdata('error', 'BAST belum di Input !');
			$this->session->set_flashdata('alert', 'error');

			redirect('page/detail_fisik');
		}



		$this->load->view('surat/surat_perjanjian_konsultansi_non_tender', $data);
	}




	function sppbj_konsultansi_tender()
	{

		$id_paket = $this->uri->segment('3');

		$data['row1'] = $this->db->where('id_paket', $id_paket)->get('sppbj')->row();
		$data['row2'] = $this->Kontrak->get_data_paket()->row();
		$this->load->view('surat/sppbj_konsultan_tender', $data);
	}

	function surat_perjanjian_konsultansi_tender()
	{
		$id_paket = $this->uri->segment('3');

		$data['row1'] = $this->db->select('*')
			->from('sppbj')
			->join('surat_perjanjian', 'sppbj.id_paket = surat_perjanjian.id_paket')
			->where('surat_perjanjian.id_paket', $id_paket)
			->get()
			->row();
		$data['row2'] = $this->Kontrak->get_data_paket()->row();
		$data['skppk'] = $this->db2->get('nomor_skppk')->row();
		$this->load->view('surat/surat_konsultan_perjanjian_tender', $data);
	}

	function spmk_konsultansi_tender()
	{
		$id_paket = $this->uri->segment('3');

		$data['row1'] = $this->db->select('*')
			->from('spmk')
			->join('surat_perjanjian', 'surat_perjanjian.id_paket = spmk.id_paket', 'left')
			->where('spmk.id_paket', $id_paket)
			->get()
			->row();
		$data['row2'] = $this->Kontrak->get_data_paket()->row();
		$this->load->view('surat/spmk_konsultan_tender', $data);
	}




}