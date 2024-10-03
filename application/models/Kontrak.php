<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kontrak extends CI_Model
{

	function get_kontrak()
	{
		$query = $this->db2->query("SELECT * FROM tb_paket INNER JOIN tb_kontrak ON tb_paket.id = tb_kontrak.id_paket INNER JOIN tb_kecamatan ON tb_paket.id_kecamatan = tb_kecamatan.id_kecamatan");

		return $query;
	}

	function get_kontrak_by_id($id)
	{
		$query = $this->db2->query("SELECT * FROM tb_paket INNER JOIN tb_kontrak ON tb_paket.id = tb_kontrak.id_paket INNER JOIN tb_kecamatan ON tb_paket.id_kecamatan = tb_kecamatan.id_kecamatan INNER JOIN tb_data_penyedia ON tb_kontrak.penyedia_jasa = tb_data_penyedia.id_data_penyedia WHERE tb_paket.id = ?", array($id));

		return $query->row();
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
		$query = $this->db2->query("SELECT * FROM `tb_paket` 
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
		$this->db->insert('surat_perjanjian', $data);
	}

	public function update_surat_perjanjian($data)
	{
		$this->db->where('id_paket', $data['id_paket']);
		$this->db->update('surat_perjanjian', $data);
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
		$this->db->insert('spmk', $data);
	}

	public function update_spmk($data)
	{
		$this->db->where('id_paket', $data['id_paket']);
		$this->db->update('spmk', $data);
	}

	function get_data_pekerjaan_konstruksi()
	{
		$query = $this->db2
			->select('*')
			->from('tb_paket')
			->where('jenis_pengadaan', 'Pekerjaan Konstruksi')
			->join('tb_kontrak', 'tb_kontrak.id_paket = tb_paket.id', 'inner')
			->get();

		return $query;
	}

}