<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class Create extends CI_Controller 
{

    // Function to fetch SPPBJ data
    public function get_sppbj_data() {
        // Example query to fetch SPPBJ data from the database
        $query = $this->db->query("SELECT id_sppbj, id_paket, tanggal_sppbj, nomor_sppbj, no_surat_penawaran, tanggal_surat_penawaran, hasil_negoisasi, kode_paket, tanggal_kode_paket, tentang_kode_paket FROM sppbj WHERE id_paket = ?", array($this->input->post('id_paket')));

        // Return the result as JSON
        echo json_encode($query->row());
    }

    // Function to handle form submission
    public function index() {
        $id_paket = $this->input->post('id_paket');
    $data = array(
        'nomor_sppbj' => $this->input->post('nomor_sppbj'),
        'id_paket' => $this->input->post('id_paket'),
        'tanggal_sppbj' => $this->input->post('tanggal_sppbj'),
        'no_surat_penawaran' => $this->input->post('no_surat_penawaran'),
        'tanggal_surat_penawaran' => $this->input->post('tanggal_surat_penawaran'),
        'hasil_negoisasi' => $this->input->post('hasil_negoisasi'),
        'kode_paket' => $this->input->post('kode_paket'),
        'tanggal_kode_paket' => $this->input->post('tanggal_kode_paket'),
        'tentang_kode_paket' => $this->input->post('tentang_kode_paket'),
    );

    // Insert the data into the 'sppbj' table
    $this->db->insert('sppbj', $data);

    // simpan id_paket ke sesi
    $this->session->set_userdata('id_paket', $id_paket);

    // Redirect or display success message
    $this->session->set_flashdata('success', 'SPPBJ Berhasil di Input !');
    $this->session->set_flashdata('alert', 'success');
    redirect('page/detail_fisik');
}

}

