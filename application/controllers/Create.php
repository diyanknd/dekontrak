<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Create extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Kontrak');
    }
    // Function to fetch SPPBJ data
    public function get_sppbj_data()
    {
        // Example query to fetch SPPBJ data from the database
        $query = $this->db->query("SELECT id_sppbj, id_paket, tanggal_sppbj, nomor_sppbj, no_surat_penawaran, tanggal_surat_penawaran, hasil_negoisasi, kode_paket, tanggal_kode_paket, tentang_kode_paket FROM sppbj WHERE id_paket = ?", array($this->input->post('id_paket')));

        // Return the result as JSON
        echo json_encode($query->row());
    }
    public function get_surat_perjanjian_data()
    {
        // Example query to fetch SPPBJ data from the database
        $query = $this->db->query("SELECT id_surat_perjanjian, id_paket, jenis_kontrak, nomor_surat_perjanjian, tanggal_surat_perjanjian, no_bahp, tanggal_bahp, no_skpad, tanggal_skapd, ruang_lingkup, harga_penawaran, no_supl, tanggal_supl, dokumen_penunjang, uang_muka FROM surat_perjanjian WHERE id_paket = ?", array($this->input->post('id_paket')));

        // Return the result as JSON
        echo json_encode($query->row());
    }

    public function get_spmk_data()
    {
        // Example query to fetch SPPBJ data from the database
        $query = $this->db->query("SELECT id_spmk, id_paket, no_spmk, tanggal_spmk FROM spmk WHERE id_paket = ?", array($this->input->post('id_paket')));

        // Return the result as JSON
        echo json_encode($query->row());
    }

    // Function to handle form submission
    public function index()
    {
        $id_paket = $this->input->post('id_paket');
        $data = array(
            'nomor_sppbj' => $this->input->post('nomor_sppbj'),
            'id_paket' => $this->input->post('id_paket'),
            'tanggal_sppbj' => $this->input->post('tanggal_sppbj'),
            'no_surat_penawaran' => $this->input->post('no_surat_penawaran'),
            'lima_persen' => $this->input->post('lima_persen'),
            'tanggal_surat_penawaran' => $this->input->post('tanggal_surat_penawaran'),
            'hasil_negoisasi' => $this->input->post('hasil_negoisasi'),
            'kode_paket' => $this->input->post('kode_paket'),
            'tanggal_kode_paket' => $this->input->post('tanggal_kode_paket'),
            'tentang_kode_paket' => $this->input->post('tentang_kode_paket'),
        );

        // Check if a record with the same id_paket already exists
        $cek_data = $this->Kontrak->cek_sppbj($data['id_paket']);
        if ($cek_data) {
            // Record already exists, update it
            $this->Kontrak->update_sppbj($data);
            $this->session->set_flashdata('success', 'SPPBJ Berhasil di Update !');
            $this->session->set_flashdata('alert', 'success');
        } else {
            // Record doesn't exist, insert a new one
            $this->Kontrak->insert_sppbj($data);
            $this->session->set_flashdata('success', 'SPPBJ Berhasil di Input !');
            $this->session->set_flashdata('alert', 'success');
        }

        // Simpan id_paket ke sesi
        $this->session->set_userdata('id_paket', $id_paket);

        redirect('page/detail_fisik');
    }


    public function surat_perjanjian()
    {
        // Simpan data ke database
        $data = array(
            'id_paket' => $this->input->post('id_paket'),
            'jenis_kontrak' => $this->input->post('jenis_kontrak'),
            'nomor_surat_perjanjian' => $this->input->post('nomor_suratperjanjian'),
            'tanggal_surat_perjanjian' => $this->input->post('tanggal_suratperjanjian'),
            'nomor_bahp' => $this->input->post('no_bahp'),
            'tanggal_bahp' => $this->input->post('tanggal_bahp'),
            'no_skpd' => $this->input->post('no_skpd'),
            'tanggal_skpd' => $this->input->post('tanggal_skpd'),
            'ruang_lingkup' => $this->input->post('ruang_lingkup'),
            'harga_penawaran' => $this->input->post('harga_penawaran'),
            'no_supl' => $this->input->post('no_supl'),
            'tanggal_supl' => $this->input->post('tanggal_supl'),
            'dokumen_penunjang' => $this->input->post('dokumen_penunjang'),
            'uang_muka' => $this->input->post('uang_muka')
        );

        // Cek apakah data sudah ada di database
        $cek_data = $this->Kontrak->cek_surat_perjanjian($data['id_paket']);

        if ($cek_data) {
            // Jika data sudah ada, update data
            $this->Kontrak->update_surat_perjanjian($data);
            $this->session->set_flashdata('success', 'Surat Perjanjian Berhasil di Update !');
            $this->session->set_flashdata('alert', 'success');
        } else {
            // Jika data tidak ada, insert data
            $this->Kontrak->insert_surat_perjanjian($data);
            $this->session->set_flashdata('success', 'Surat Perjanjian Berhasil di Input !');
            $this->session->set_flashdata('alert', 'success');
        }
        $this->session->set_userdata('id_paket', $data['id_paket']);

        // Redirect ke halaman lain
        redirect('page/detail_fisik');
    }

    
    public function spmk()
    {
        // Simpan data ke database
        $data = array(
            'id_paket' => $this->input->post('id_paket'),
            'nomor_spmk' => $this->input->post('nomor_spmk'),
            'tanggal_spmk' => $this->input->post('tanggal_spmk')
        );

        // Cek apakah data sudah ada di database
        $cek_data = $this->Kontrak->cek_spmk($data['id_paket']);

        if ($cek_data) {
            // Jika data sudah ada, update data
            $this->Kontrak->update_spmk($data);
            $this->session->set_flashdata('success', 'Surat Perintah Mulai Kerja Berhasil di Update !');
            $this->session->set_flashdata('alert', 'success');
        } else {
            // Jika data tidak ada, insert data
            $this->Kontrak->insert_spmk($data);
            $this->session->set_flashdata('success', 'Surat Perintah Mulai Kerja Berhasil di Input !');
            $this->session->set_flashdata('alert', 'success');
        }
        $this->session->set_userdata('id_paket', $data['id_paket']);

        // Redirect ke halaman lain
        redirect('page/detail_fisik');
    }

}

