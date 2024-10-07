<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kontrak extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->db2 = $this->load->database('dekontrak', TRUE);
	}

	public function search_paket_pekerjaan($query)
	{
		$this->db2->select('tb_paket.id, tb_paket.paket_pekerjaan'); // Ensure 'id' is selected
		$this->db2->from('tb_paket');
		$this->db2->join('tb_kontrak', 'tb_paket.id = tb_kontrak.id_paket');
		$this->db2->like('tb_paket.paket_pekerjaan', $query, 'both');  // Perform a LIKE search
		$query = $this->db2->get();

		return $query->result(); // Ensure the 'id' is included in the result set
	}


	function get_kontrak()
	{
		$query = $this->db2->query("SELECT * FROM tb_paket INNER JOIN tb_kontrak ON tb_paket.id = tb_kontrak.id_paket INNER JOIN tb_kecamatan ON tb_paket.id_kecamatan = tb_kecamatan.id_kecamatan");

		return $query;
	}

	function get_kontrak_by_id($id)
	{
		$query = $this->db2->query(" 
    SELECT 
        tb_paket.*, 
        tb_kontrak.*, 
        tb_kecamatan.*, 
        tb_data_penyedia.*, 
        tb_user.nip, 
        tb_user.nama_lengkap, 
        tb_user.gelar, 
        tb_user.alamat, 
        tb_user.email, 
        tb_user.nomor_telp, 
        tb_user.tanggal_lahir, 
        tb_user.pas_photo, 
        tb_user.id_jabatan, 
		tb_foto_dokumentasi.upload_file
    FROM 
        tb_paket 
    INNER JOIN 
        tb_kontrak ON tb_paket.id = tb_kontrak.id_paket 
    INNER JOIN 
        tb_kecamatan ON tb_paket.id_kecamatan = tb_kecamatan.id_kecamatan 
    INNER JOIN 
        tb_data_penyedia ON tb_kontrak.penyedia_jasa = tb_data_penyedia.id_data_penyedia 
    INNER JOIN 
        tb_user ON tb_paket.nama_ppk = tb_user.id
	LEFT JOIN 
        tb_foto_dokumentasi ON tb_kontrak.id_paket = tb_foto_dokumentasi.id_paket  
    WHERE 
        tb_paket.id = ?", array($id));

		return $query->row();
	}

	function get_dokumentasi_by_id($id)
	{
		$query = $this->db2->query(" 
    SELECT 
        tb_paket.*, 
        tb_kontrak.*, 
		tb_foto_dokumentasi.upload_file
    FROM 
        tb_paket 
    INNER JOIN 
        tb_kontrak ON tb_paket.id = tb_kontrak.id_paket 
	INNER JOIN 
        tb_foto_dokumentasi ON tb_kontrak.id_paket = tb_foto_dokumentasi.id_paket  
    WHERE 
        tb_paket.id = ?", array($id));

		return $query;
	}
	function get_dokumen_by_id($id)
	{
		$query = $this->db2->query(" 
    SELECT 
        tb_paket.*, 
        tb_kontrak.*, 
		tb_addendum.upload_file as addendum,
		tb_bast.upload_file as bast,
		tb_bast.upload_file_jaminan as jaminan,
		tb_fho.upload_file as fho,
		tb_mc.upload_file as mc
    FROM 
        tb_paket 
    LEFT JOIN 
        tb_kontrak ON tb_paket.id = tb_kontrak.id_paket 
	LEFT JOIN 
        tb_addendum ON tb_kontrak.id_paket = tb_addendum.id_paket
	LEFT JOIN 
        tb_bast ON tb_kontrak.id_paket = tb_bast.id_paket  
	LEFT JOIN 
        tb_fho ON tb_kontrak.id_paket = tb_fho.id_paket  
	LEFT JOIN 
        tb_mc ON tb_kontrak.id_paket = tb_mc.id_paket  
    WHERE 
        tb_paket.id = ?", array($id));

		return $query;
	}

	function get_kontrak_konsultan_pengawasan_list()
	{
		$query = $this->db2->query("SELECT * FROM tb_paket INNER JOIN tb_kontrak ON tb_paket.id = tb_kontrak.id_paket INNER JOIN tb_kecamatan ON tb_paket.id_kecamatan = tb_kecamatan.id_kecamatan WHERE tb_paket.jenis_pengadaan = 'Jasa Konsultansi Pengawasan'");

		return $query;
	}

	function get_kontrak_konsultan_perencanaan_list()
	{
		$query = $this->db2->query("SELECT * FROM tb_paket INNER JOIN tb_kontrak ON tb_paket.id = tb_kontrak.id_paket INNER JOIN tb_kecamatan ON tb_paket.id_kecamatan = tb_kecamatan.id_kecamatan WHERE tb_paket.jenis_pengadaan = 'Jasa Konsultansi Perencanaan'");

		return $query;
	}

	function get_pagu()
	{
		$query = $this->db2->query("SELECT sum(nilai_pagu) as nilai_pagu FROM tb_paket INNER JOIN tb_kontrak ON tb_paket.id = tb_kontrak.id_paket INNER JOIN tb_kecamatan ON tb_paket.id_kecamatan = tb_kecamatan.id_kecamatan");

		return $query;
	}

	function get_pagu_count()
	{
		$query = $this->db2->query("SELECT count(nilai_pagu) as count_nilai_pagu FROM tb_paket INNER JOIN tb_kontrak ON tb_paket.id = tb_kontrak.id_paket INNER JOIN tb_kecamatan ON tb_paket.id_kecamatan = tb_kecamatan.id_kecamatan");

		return $query;
	}


	function get_nilai_kontrak()
	{
		$query = $this->db2->query("SELECT sum(nilai_kontrak) as nilai_kontrak FROM tb_paket INNER JOIN tb_kontrak ON tb_paket.id = tb_kontrak.id_paket INNER JOIN tb_kecamatan ON tb_paket.id_kecamatan = tb_kecamatan.id_kecamatan");

		return $query;
	}

	function get_nilai_kontrak_count()
	{
		$query = $this->db2->query("SELECT count(nilai_kontrak) as count_nilai_kontrak FROM tb_paket INNER JOIN tb_kontrak ON tb_paket.id = tb_kontrak.id_paket INNER JOIN tb_kecamatan ON tb_paket.id_kecamatan = tb_kecamatan.id_kecamatan");

		return $query;
	}

	function get_fisik()
	{
		$query = $this->db2->query("SELECT * FROM tb_paket INNER JOIN tb_kontrak ON tb_paket.id = tb_kontrak.id_paket INNER JOIN tb_kecamatan ON tb_paket.id_kecamatan = tb_kecamatan.id_kecamatan INNER JOIN tb_data_penyedia ON tb_kontrak.penyedia_jasa = tb_data_penyedia.id_data_penyedia WHERE tb_paket.jenis_pengadaan = 'Pekerjaan Konstruksi'");

		return $query;
	}

	function get_pagu_fisik()
	{
		$query = $this->db2->query("SELECT sum(nilai_pagu) as nilai_pagu FROM tb_paket INNER JOIN tb_kontrak ON tb_paket.id = tb_kontrak.id_paket INNER JOIN tb_kecamatan ON tb_paket.id_kecamatan = tb_kecamatan.id_kecamatan WHERE tb_paket.jenis_pengadaan = 'Pekerjaan Konstruksi'");

		return $query;
	}

	function get_pagu_fisik_count()
	{
		$query = $this->db2->query("SELECT count(nilai_pagu) as count_nilai_pagu FROM tb_paket INNER JOIN tb_kontrak ON tb_paket.id = tb_kontrak.id_paket INNER JOIN tb_kecamatan ON tb_paket.id_kecamatan = tb_kecamatan.id_kecamatan WHERE tb_paket.jenis_pengadaan = 'Pekerjaan Konstruksi'");

		return $query;
	}

	function get_pagu_konsultan_pengawasan()
	{
		$query = $this->db2->query("SELECT sum(nilai_pagu) as nilai_pagu FROM tb_paket INNER JOIN tb_kontrak ON tb_paket.id = tb_kontrak.id_paket INNER JOIN tb_kecamatan ON tb_paket.id_kecamatan = tb_kecamatan.id_kecamatan WHERE tb_paket.jenis_pengadaan = 'Jasa Konsultansi Pengawasan'");

		return $query;
	}

	function get_pagu_konsultan_pengawasan_count()
	{
		$query = $this->db2->query("SELECT count(nilai_pagu) as count_nilai_pagu FROM tb_paket INNER JOIN tb_kontrak ON tb_paket.id = tb_kontrak.id_paket INNER JOIN tb_kecamatan ON tb_paket.id_kecamatan = tb_kecamatan.id_kecamatan WHERE tb_paket.jenis_pengadaan = 'Jasa Konsultansi Pengawasan'");

		return $query;
	}

	function get_pagu_konsultan_perencanaan()
	{
		$query = $this->db2->query("SELECT sum(nilai_pagu) as nilai_pagu FROM tb_paket INNER JOIN tb_kontrak ON tb_paket.id = tb_kontrak.id_paket INNER JOIN tb_kecamatan ON tb_paket.id_kecamatan = tb_kecamatan.id_kecamatan WHERE tb_paket.jenis_pengadaan = 'Jasa Konsultansi Perencanaan'");

		return $query;
	}
	function get_pagu_konsultan_perencanaan_count()
	{
		$query = $this->db2->query("SELECT count(nilai_pagu) as count_nilai_pagu FROM tb_paket INNER JOIN tb_kontrak ON tb_paket.id = tb_kontrak.id_paket INNER JOIN tb_kecamatan ON tb_paket.id_kecamatan = tb_kecamatan.id_kecamatan WHERE tb_paket.jenis_pengadaan = 'Jasa Konsultansi Perencanaan'");

		return $query;
	}


	function get_kontrak_fisik()
	{
		$query = $this->db2->query("SELECT sum(nilai_kontrak) as nilai_kontrak FROM tb_paket INNER JOIN tb_kontrak ON tb_paket.id = tb_kontrak.id_paket INNER JOIN tb_kecamatan ON tb_paket.id_kecamatan = tb_kecamatan.id_kecamatan WHERE tb_paket.jenis_pengadaan = 'Pekerjaan Konstruksi'");

		return $query;
	}

	function get_kontrak_konsultan_pengawasan()
	{
		$query = $this->db2->query("SELECT sum(nilai_kontrak) as nilai_kontrak FROM tb_paket INNER JOIN tb_kontrak ON tb_paket.id = tb_kontrak.id_paket INNER JOIN tb_kecamatan ON tb_paket.id_kecamatan = tb_kecamatan.id_kecamatan WHERE tb_paket.jenis_pengadaan = 'Jasa Konsultansi Pengawasan'");

		return $query;
	}

	function get_kontrak_konsultan_perencanaan()
	{
		$query = $this->db2->query("SELECT sum(nilai_kontrak) as nilai_kontrak FROM tb_paket INNER JOIN tb_kontrak ON tb_paket.id = tb_kontrak.id_paket INNER JOIN tb_kecamatan ON tb_paket.id_kecamatan = tb_kecamatan.id_kecamatan WHERE tb_paket.jenis_pengadaan = 'Jasa Konsultansi Perencanaan'");

		return $query;
	}


	function get_data_paket()
	{
		$id_paket = $this->uri->segment('3');
		$query = $this->db2->query("SELECT *,tb_user.alamat as alamat_ppk FROM `tb_paket` 
		INNER JOIN tb_program ON tb_paket.id_program = tb_program.id_program
		INNER JOIN tb_kegiatan ON tb_paket.id_kegiatan = tb_kegiatan.id_kegiatan
		INNER JOIN tb_sub_kegiatan ON tb_paket.id_sub_kegiatan = tb_sub_kegiatan.id_sub
		INNER JOIN tb_user ON tb_paket.nama_ppk = tb_user.id
		INNER JOIN tb_sumber_dana ON tb_paket.sumber_dana = tb_sumber_dana.id_sumber_dana
		INNER JOIN tb_kecamatan ON tb_paket.id_kecamatan = tb_kecamatan.id_kecamatan
		LEFT JOIN tb_kontrak ON tb_paket.id = tb_kontrak.id_paket
		INNER JOIN tb_data_penyedia ON tb_kontrak.penyedia_jasa = tb_data_penyedia.id_data_penyedia
		WHERE tb_paket.id = '$id_paket'
		");

		return $query;
	}


	//Ini Surat Perintah Mulai Kerja (sppbj)
	public function cek_sppbj($id_paket)
	{
		$this->db->where('id_paket', $id_paket);
		$query = $this->db->get('sppbj');
		if ($query->num_rows() > 0) {
			return TRUE;
		} else {
			return FALSE;
		}
	}


	public function insert_sppbj($data)
	{
		// Start the transaction for both databases
		$this->db->trans_start(); // Start transaction for the primary DB (dekontrak)
		$this->db2->trans_start(); // Start transaction for the second DB (new_jantan)

		// Insert into the first database (dekontrak)
		$this->db->insert('sppbj', $data);

		// Insert into the second database (new_jantan)
		$this->db2->where('id_paket', $data['id_paket']);
		$this->db2->update('tb_kontrak', ['sppbj' => '1']);

		// Complete the transactions
		$this->db->trans_complete(); // Commit or rollback for the primary DB
		$this->db2->trans_complete(); // Commit or rollback for the second DB

		// Check the transaction status for both databases
		if ($this->db->trans_status() === FALSE || $this->db2->trans_status() === FALSE) {
			// If something went wrong in any of the DB inserts
			return false;
		} else {
			// Both inserts were successful
			return true;
		}
	}


	public function update_sppbj($data)
	{
		// Start the transaction
		$this->db->trans_start(); // This will start a transaction for the primary DB
		$this->db2->trans_start(); // This will start a transaction for the second DB (new_jantan)

		// Update on the first database (dekontrak)
		$this->db->where('id_paket', $data['id_paket']);
		$this->db->update('sppbj', $data);

		// Update on the second database (new_jantan)
		$this->db2->where('id_paket', $data['id_paket']);
		$this->db2->update('tb_kontrak', ['sppbj' => '1']);

		// Complete the transactions
		$this->db->trans_complete(); // Commit or rollback for primary DB
		$this->db2->trans_complete(); // Commit or rollback for second DB (new_jantan)

		// Check the transaction status for both databases
		if ($this->db->trans_status() === FALSE || $this->db2->trans_status() === FALSE) {
			// If something went wrong in any of the DB updates
			return false;
		} else {
			// All updates were successful
			return true;
		}
	}


	public function cek_surat_perjanjian($id_paket)
	{
		$this->db->where('id_paket', $id_paket);
		$query = $this->db->get('surat_perjanjian');
		if ($query->num_rows() > 0) {
			return TRUE;
		} else {
			return FALSE;
		}
	}

	public function insert_surat_perjanjian($data)
	{
		// Start the transaction for both databases
		$this->db->trans_start(); // Start transaction for the primary DB (dekontrak)
		$this->db2->trans_start(); // Start transaction for the second DB (new_jantan)

		// Insert into the first database (dekontrak)
		$this->db->insert('surat_perjanjian', $data);

		// Insert into the second database (new_jantan)
		$this->db2->where('id_paket', $data['id_paket']);
		$this->db2->update('tb_kontrak', ['surat_perjanjian' => '1']);

		// Complete the transactions
		$this->db->trans_complete(); // Commit or rollback for the primary DB
		$this->db2->trans_complete(); // Commit or rollback for the second DB

		// Check the transaction status for both databases
		if ($this->db->trans_status() === FALSE || $this->db2->trans_status() === FALSE) {
			// If something went wrong in any of the DB inserts
			return false;
		} else {
			// Both inserts were successful
			return true;
		}
	}


	public function update_surat_perjanjian($data)
	{
		// Start the transaction
		$this->db->trans_start(); // This will start a transaction for the primary DB
		$this->db2->trans_start(); // This will start a transaction for the second DB (new_jantan)

		// Update on the first database (dekontrak)
		$this->db->where('id_paket', $data['id_paket']);
		$this->db->update('surat_perjanjian', $data);

		// Update on the second database (new_jantan)
		$this->db2->where('id_paket', $data['id_paket']);
		$this->db2->update('tb_kontrak', ['surat_perjanjian' => '1']);

		// Complete the transactions
		$this->db->trans_complete(); // Commit or rollback for primary DB
		$this->db2->trans_complete(); // Commit or rollback for second DB (new_jantan)

		// Check the transaction status for both databases
		if ($this->db->trans_status() === FALSE || $this->db2->trans_status() === FALSE) {
			// If something went wrong in any of the DB updates
			return false;
		} else {
			// All updates were successful
			return true;
		}
	}

	//Ini Surat Perintah Mulai Kerja (SPMK)
	public function cek_spmk($id_paket)
	{
		$this->db->where('id_paket', $id_paket);
		$query = $this->db->get('spmk');
		if ($query->num_rows() > 0) {
			return TRUE;
		} else {
			return FALSE;
		}
	}


	public function insert_spmk($data)
	{
		// Start the transaction for both databases
		$this->db->trans_start(); // Start transaction for the primary DB (dekontrak)
		$this->db2->trans_start(); // Start transaction for the second DB (new_jantan)

		// Insert into the first database (dekontrak)
		$this->db->insert('spmk', $data);

		// Insert into the second database (new_jantan)
		$this->db2->where('id_paket', $data['id_paket']);
		$this->db2->update('tb_kontrak', ['spmk' => '1']);

		// Complete the transactions
		$this->db->trans_complete(); // Commit or rollback for the primary DB
		$this->db2->trans_complete(); // Commit or rollback for the second DB

		// Check the transaction status for both databases
		if ($this->db->trans_status() === FALSE || $this->db2->trans_status() === FALSE) {
			// If something went wrong in any of the DB inserts
			return false;
		} else {
			// Both inserts were successful
			return true;
		}
	}


	public function update_spmk($data)
	{
		// Start the transaction
		$this->db->trans_start(); // This will start a transaction for the primary DB
		$this->db2->trans_start(); // This will start a transaction for the second DB (new_jantan)

		// Update on the first database (dekontrak)
		$this->db->where('id_paket', $data['id_paket']);
		$this->db->update('spmk', $data);

		// Update on the second database (new_jantan)
		$this->db2->where('id_paket', $data['id_paket']);
		$this->db2->update('tb_kontrak', ['spmk' => '1']);

		// Complete the transactions
		$this->db->trans_complete(); // Commit or rollback for primary DB
		$this->db2->trans_complete(); // Commit or rollback for second DB (new_jantan)

		// Check the transaction status for both databases
		if ($this->db->trans_status() === FALSE || $this->db2->trans_status() === FALSE) {
			// If something went wrong in any of the DB updates
			return false;
		} else {
			// All updates were successful
			return true;
		}
	}


	function get_data_pekerjaan_konstruksi()
	{
		$query = $this->db2
			->select('*')
			->from('tb_paket')
			->where('jenis_pengadaan', 'Pekerjaan Konstruksi')
			->join('tb_kontrak', 'tb_kontrak.id_paket = tb_paket.id', 'inner')
			->where('nilai_pagu >=', 200000000)
			->get();

		return $query;
	}

	function get_data_paket_pekerjaan_all_tender()
	{
		$this->db2
			->select('*')
			->from('tb_paket')
			->join('tb_kontrak', 'tb_kontrak.id_paket = tb_paket.id', 'inner')
			->group_start()
			->where('tb_paket.jenis_pengadaan', 'Pekerjaan Konstruksi')
			->where('tb_paket.nilai_pagu >=', 200000000)
			->group_end()
			->or_group_start()
			->where('tb_paket.jenis_pengadaan !=', 'Pekerjaan Konstruksi')
			->where('tb_paket.nilai_pagu >=', 100000000)
			->group_end();

		$query = $this->db2->get();
		return $query;
	}

	function get_data_paket_pekerjaan_all_non_tender()
	{
		$this->db2
			->select('*')
			->from('tb_paket')
			->join('tb_kontrak', 'tb_kontrak.id_paket = tb_paket.id', 'inner')
			->group_start()
			->where('tb_paket.jenis_pengadaan', 'Pekerjaan Konstruksi')
			->where('tb_paket.nilai_pagu <', 200000000)
			->group_end()
			->or_group_start()
			->where('tb_paket.jenis_pengadaan !=', 'Pekerjaan Konstruksi')
			->where('tb_paket.nilai_pagu <', 100000000)
			->group_end();

		$query = $this->db2->get();
		return $query;
	}



	function get_data_konsultan_pengawasan()
	{
		$query = $this->db2
			->select('*')
			->from('tb_paket')
			->where('jenis_pengadaan', 'Jasa Konsultansi Pengawasan')
			->join('tb_kontrak', 'tb_kontrak.id_paket = tb_paket.id', 'inner')
			->where('nilai_pagu >=', 100000000) // add this line			
			->get();

		return $query;
	}

	function get_data_konsultan_perencanaan()
	{
		$query = $this->db2
			->select('*')
			->from('tb_paket')
			->where('jenis_pengadaan', 'Jasa Konsultansi Perencanaan')
			->join('tb_kontrak', 'tb_kontrak.id_paket = tb_paket.id', 'inner')
			->where('nilai_pagu >=', 100000000)
			->get();

		return $query;
	}

	function get_data_pekerjaan_nonkonstruksi()
	{
		$query = $this->db2
			->select('*')
			->from('tb_paket')
			->where('jenis_pengadaan', 'Pekerjaan Konstruksi')
			->join('tb_kontrak', 'tb_kontrak.id_paket = tb_paket.id', 'inner')
			->where('nilai_pagu <', 200000000)
			->get();

		return $query;
	}


	function get_data_konsultan_nonpengawasan()
	{
		$query = $this->db2
			->select('*')
			->from('tb_paket')
			->where('jenis_pengadaan', 'Jasa Konsultansi Pengawasan')
			->join('tb_kontrak', 'tb_kontrak.id_paket = tb_paket.id', 'inner')
			->where('nilai_pagu <', 100000000) // add this line			
			->get();

		return $query;
	}

	function get_data_konsultan_nonperencanaan()
	{
		$query = $this->db2
			->select('*')
			->from('tb_paket')
			->where('jenis_pengadaan', 'Jasa Konsultansi Perencanaan')
			->join('tb_kontrak', 'tb_kontrak.id_paket = tb_paket.id', 'inner')
			->where('nilai_pagu <', 100000000)
			->get();

		return $query;
	}
}