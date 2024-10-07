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
		$data['pekerjaan_konstruksi_tender'] = $this->Kontrak->get_data_pekerjaan_konstruksi();
		$data['konsultan_pengawasan_tender'] = $this->Kontrak->get_data_konsultan_pengawasan();
		$data['konsultan_perencanaan_tender'] = $this->Kontrak->get_data_konsultan_perencanaan();

		$data['pekerjaan_konstruksi_nontender'] = $this->Kontrak->get_data_pekerjaan_nonkonstruksi();
		$data['konsultan_pengawasan_nontender'] = $this->Kontrak->get_data_konsultan_nonpengawasan();
		$data['konsultan_perencanaan_nontender'] = $this->Kontrak->get_data_konsultan_nonperencanaan();
		$data['paket_pekerjaan_all_tender'] = $this->Kontrak->get_data_paket_pekerjaan_all_tender();
		$data['paket_pekerjaan_all_non_tender'] = $this->Kontrak->get_data_paket_pekerjaan_all_non_tender();
		$this->template->load('template', 'page/home', $data);
	}

	public function search_paket_pekerjaan()
	{
		$this->load->model('Kontrak');
		$input = json_decode(file_get_contents('php://input'), true);

		$query = $input['query'] ?? '';

		if (!empty($query)) {
			$results = $this->Kontrak->search_paket_pekerjaan($query);
			header('Content-Type: application/json');
			echo json_encode($results); // Ensure it's returning the correct structure
		} else {
			echo json_encode([]); // Return empty array if query is empty
		}
	}


	function check_login()
	{
		$login = $this->session->userdata('login');
		if ($login != TRUE) {
			redirect('welcome');
		}
	}

	function home()
	{
		$data['pekerjaan_konstruksi_tender'] = $this->Kontrak->get_data_pekerjaan_konstruksi();
		$data['konsultan_pengawasan_tender'] = $this->Kontrak->get_data_konsultan_pengawasan();
		$data['konsultan_perencanaan_tender'] = $this->Kontrak->get_data_konsultan_perencanaan();


		$data['pekerjaan_konstruksi_nontender'] = $this->Kontrak->get_data_pekerjaan_nonkonstruksi();
		$data['konsultan_pengawasan_nontender'] = $this->Kontrak->get_data_konsultan_nonpengawasan();
		$data['konsultan_perencanaan_nontender'] = $this->Kontrak->get_data_konsultan_nonperencanaan();
		$data['paket_pekerjaan_all_tender'] = $this->Kontrak->get_data_paket_pekerjaan_all_tender();
		$data['paket_pekerjaan_all_non_tender'] = $this->Kontrak->get_data_paket_pekerjaan_all_non_tender();
		$this->template->load('template', 'page/home', $data);
	}


	function list()
	{
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
		$this->template->load('template', 'page/list', $data);
	}

	function fisik()
	{

		$data['kontrak'] = $this->Kontrak->get_fisik();
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
		$this->template->load('template', 'page/fisik', $data);
	}

	function konsultan_perencanaan()
	{
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
		$this->template->load('template', 'page/konsultan_perencanaan', $data);
	}

	function konsultan_pengawasan()
	{
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
		$this->template->load('template', 'page/konsultan_pengawasan', $data);
	}


	function detail_fisik()
	{

		// $this->session->unset_userdata('id_paket');
		// $id = $this->input->post('id');
		//  check if the session data exists
		if ($this->input->post('id')) {
			// Retrieve id_paket from session
			$id = $this->input->post('id');
			$this->session->unset_userdata('id_paket');
		} else {
			// If session data doesn't exist, fallback to POST data
			$id = $this->session->userdata('id_paket');

		}
		// Ambil data invoice berdasarkan nomor
		$data['kontrak'] = $this->Kontrak->get_kontrak_by_id($id);
		$data['dokumentasi'] = $this->Kontrak->get_dokumentasi_by_id($id);
		$data['dokumen'] = $this->Kontrak->get_dokumen_by_id($id);
		$data['skppk'] = $this->db2->query("SELECT * FROM nomor_skppk")->row();
		$data['get_sppbj'] = $this->db->query("SELECT * FROM sppbj WHERE id_paket = '$id'")->num_rows();
		$data['get_surat_perjanjian'] = $this->db->query("SELECT * FROM surat_perjanjian WHERE id_paket = '$id'")->num_rows();
		$data['get_spmk'] = $this->db->query("SELECT * FROM spmk WHERE id_paket = '$id'")->num_rows();
		$data['nilai_pagu'] = $this->db2->query("SELECT nilai_pagu FROM tb_paket WHERE id = '$id'")->row();
		$data['id_paket'] = $id;
		$data['get_data_sppbj'] = $this->db->select('*')->from('sppbj')->where('id_paket', $id)->get()->row();
		$data['get_data_surat_perjanjian'] = $this->db->query("SELECT * FROM surat_perjanjian WHERE id_paket = '$id'")->row();
		$data['get_data_spmk'] = $this->db->query("SELECT * FROM spmk WHERE id_paket = '$id'")->row();


		$this->template->load('template', 'detail/fisik_detail', $data);
	}


	function check_data($data, $id)
	{
		$this->session->set_userdata('id_paket', $id);
		$this->session->set_flashdata('error', $data . ' Berhasil di Input !');
		$this->session->set_flashdata('alert', 'error');

		$this->detail_fisik();
	}

	public function logout()
	{
		// Destroy the session to log out the user
		$this->session->sess_destroy();

		// Redirect to the login page or any other page
		redirect('welcome');
	}
}
