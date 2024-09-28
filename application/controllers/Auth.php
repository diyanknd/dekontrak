<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

   

	public function __construct()
    {
        parent::__construct();
        $this->db2 = $this->load->database('dekontrak', TRUE);
    }

	public function index()
	{
	$username = $this->input->post('username');
    $password = md5($this->input->post('password'));
    $tahun = $this->input->post('tahun');

    // get db
    $query = $this->db2->query("SELECT * FROM tb_user WHERE username = ? AND password = ?", array($username, $password));

    // check row
    if ($query->num_rows() == 1) {
        $user = $query->row();

        // Set session data
        $this->session->set_userdata(array(
            'id' => $user->id,
            'username' => $user->username,
            'nip' => $user->nip,
            'jenis_user' => $user->jenis_user,
            'nama_lengkap' => $user->nama_lengkap,
            'gelar' => $user->gelar,
            'alamat' => $user->alamat,
            'email' => $user->email,
            'nomor_telp' => $user->nomor_telp,
            'tanggal_lahir' => $user->tanggal_lahir,
            'pas_photo' => $user->pas_photo,
            'hak_akses' => $user->hak_akses,
            'id_jabatan' => $user->id_jabatan,
            'created_at' => $user->created_at,
            'updated_at' => $user->updated_at,
            'tahun' => $tahun,
            'login' => TRUE
        ));

        $this->session->set_flashdata('success', 'Login Berhasil !');
        $this->session->set_flashdata('alert', 'success');
        redirect('page');
    } else {
        $this->session->set_flashdata('error', 'Username dan Password Salah');
        $this->session->set_flashdata('alert', 'error');
        redirect('welcome');
    }
	}
}
