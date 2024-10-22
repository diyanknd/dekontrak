<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Surat extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->db2 = $this->load->database('dekontrak', TRUE);
		$this->load->model('Kontrak');
		$this->tahun = $this->session->userdata('tahun');
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

		// ambil id_penyedia
		$penyedia = $this->db->where('id_paket', $id_paket)->get('surat_perjanjian')->row();

		// ambil id_penyedia_jasa
		$data['penyedia_jasa'] = $this->db2->where('id_data_penyedia', $penyedia->penyedia_jasa)->get('tb_data_penyedia')->row();


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

		// ambil id_penyedia
		$penyedia = $this->db->where('id_paket', $id_paket)->get('surat_perjanjian')->row();

		// ambil id_penyedia_jasa
		$data['penyedia_jasa'] = $this->db2->where('id_data_penyedia', $penyedia->penyedia_jasa)->get('tb_data_penyedia')->row();

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
		// ambil id_penyedia
		$penyedia = $this->db->where('id_paket', $id_paket)->get('surat_perjanjian')->row();

		// ambil id_penyedia_jasa
		$data['penyedia_jasa'] = $this->db2->where('id_data_penyedia', $penyedia->penyedia_jasa)->get('tb_data_penyedia')->row();


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
		$penyedia = $this->db->where('id_paket', $id_paket)->get('surat_perjanjian')->row();

		// ambil id_penyedia_jasa
		$data['penyedia_jasa'] = $this->db2->where('id_data_penyedia', $penyedia->penyedia_jasa)->get('tb_data_penyedia')->row();
		$this->load->view('surat/spmk_konsultan_non_tender', $data);
	}

	function kop_surat_tender()
	{
		$id_paket = $this->input->post('id_paket');
		$tanggal_dpa = $this->input->post('tanggal_dpa');

		// Data yang akan dimasukkan atau diupdate
		$data = array(
			'id_paket' => $id_paket,
			'tanggal_dpa' => $tanggal_dpa
		);

		// Cek apakah $id_paket sudah ada di database
		$this->db->where('id_paket', $id_paket);
		$query = $this->db->get('cover');

		// Jika $id_paket sudah ada, lakukan update
		if ($query->num_rows() > 0) {
			// Update data yang sudah ada
			$this->db->where('id_paket', $id_paket);
			$this->db->update('cover', $data);
		} else {
			// Jika $id_paket belum ada, insert data baru
			$this->db->insert('cover', $data);
		}

		$data['jumlah_rangkap'] = $this->input->post('jumlah_rangkap');
		$data['row1'] = $this->db->select('*')
			->from('spmk')
			->join('surat_perjanjian', 'surat_perjanjian.id_paket = spmk.id_paket', 'left')
			->where('spmk.id_paket', $id_paket)
			->get()
			->row();
		$data['row2'] = $this->Kontrak->get_data_paket()->row();
		$data['cover'] = $this->db->where('id_paket', $id_paket)->get('cover')->row();
		// ambil id_penyedia
		$penyedia = $this->db->where('id_paket', $id_paket)->get('surat_perjanjian')->row();

		// ambil id_penyedia_jasa
		$data['penyedia_jasa'] = $this->db2->where('id_data_penyedia', $penyedia->penyedia_jasa)->get('tb_data_penyedia')->row();


		$this->load->view('surat/kop_tender', $data);

	}

	function kop_surat_non_tender()
	{
		$id_paket = $this->input->post('id_paket');
		$tanggal_dpa = $this->input->post('tanggal_dpa');

		// Data yang akan dimasukkan atau diupdate
		$data = array(
			'id_paket' => $id_paket,
			'tanggal_dpa' => $tanggal_dpa
		);

		// Cek apakah $id_paket sudah ada di database
		$this->db->where('id_paket', $id_paket);
		$query = $this->db->get('cover');

		// Jika $id_paket sudah ada, lakukan update
		if ($query->num_rows() > 0) {
			// Update data yang sudah ada
			$this->db->where('id_paket', $id_paket);
			$this->db->update('cover', $data);
		} else {
			// Jika $id_paket belum ada, insert data baru
			$this->db->insert('cover', $data);
		}

		$data['jumlah_rangkap'] = $this->input->post('jumlah_rangkap');
		$data['row1'] = $this->db->select('*')
			->from('spmk')
			->join('surat_perjanjian', 'surat_perjanjian.id_paket = spmk.id_paket', 'left')
			->where('spmk.id_paket', $id_paket)
			->get()
			->row();
		$data['row2'] = $this->Kontrak->get_data_paket()->row();
		$data['cover'] = $this->db->where('id_paket', $id_paket)->get('cover')->row();
		// ambil id_penyedia
		$penyedia = $this->db->where('id_paket', $id_paket)->get('surat_perjanjian')->row();

		// ambil id_penyedia_jasa
		$data['penyedia_jasa'] = $this->db2->where('id_data_penyedia', $penyedia->penyedia_jasa)->get('tb_data_penyedia')->row();

		$this->load->view('surat/kop_non_tender', $data);

	}

	function surat_perjanjian_non_tender()
	{
		$id_paket = $this->uri->segment('3');

		$data['row1'] = $this->db->select('*')
			->from('sppbj')
			->join('surat_perjanjian', 'sppbj.id_paket = surat_perjanjian.id_paket')
			->where('surat_perjanjian.id_paket', $id_paket)
			->get()
			->row();
		$data['row2'] = $this->Kontrak->get_data_paket()->row();
		$data['skppk'] = $this->db2->where('tahun', $this->tahun)->get('nomor_skppk')->row();
		$data['bast'] = $this->db2->where('id_paket', $id_paket)->get('tb_bast')->row();

		// ambil id_penyedia
		$penyedia = $this->db->where('id_paket', $id_paket)->get('surat_perjanjian')->row();

		// ambil id_penyedia_jasa
		$data['penyedia_jasa'] = $this->db2->where('id_data_penyedia', $penyedia->penyedia_jasa)->get('tb_data_penyedia')->row();


		$this->load->view('surat/surat_perjanjian_non_tender', $data);
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

		// ambil id_penyedia
		$penyedia = $this->db->where('id_paket', $id_paket)->get('surat_perjanjian')->row();

		// ambil id_penyedia_jasa
		$data['penyedia_jasa'] = $this->db2->where('id_data_penyedia', $penyedia->penyedia_jasa)->get('tb_data_penyedia')->row();



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

		// ambil id_penyedia
		$penyedia = $this->db->where('id_paket', $id_paket)->get('surat_perjanjian')->row();

		// ambil id_penyedia_jasa
		$data['penyedia_jasa'] = $this->db2->where('id_data_penyedia', $penyedia->penyedia_jasa)->get('tb_data_penyedia')->row();


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

		// ambil id_penyedia
		$penyedia = $this->db->where('id_paket', $id_paket)->get('surat_perjanjian')->row();

		// ambil id_penyedia_jasa
		$data['penyedia_jasa'] = $this->db2->where('id_data_penyedia', $penyedia->penyedia_jasa)->get('tb_data_penyedia')->row();

		$this->load->view('surat/spmk_konsultan_tender', $data);
	}




}