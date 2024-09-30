<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kontrak extends CI_Model {

function get_kontrak(){
	$query = $this->db2->query("SELECT * FROM tb_paket INNER JOIN tb_kontrak ON tb_paket.id = tb_kontrak.id_paket INNER JOIN tb_kecamatan ON tb_paket.id_kecamatan = tb_kecamatan.id_kecamatan");

	return $query;
}

function get_pagu(){
	$query = $this->db2->query("SELECT sum(nilai_pagu) as nilai_pagu FROM tb_paket INNER JOIN tb_kontrak ON tb_paket.id = tb_kontrak.id_paket INNER JOIN tb_kecamatan ON tb_paket.id_kecamatan = tb_kecamatan.id_kecamatan");

	return $query;
}

function get_pagu_count(){
	$query = $this->db2->query("SELECT count(nilai_pagu) as count_nilai_pagu FROM tb_paket INNER JOIN tb_kontrak ON tb_paket.id = tb_kontrak.id_paket INNER JOIN tb_kecamatan ON tb_paket.id_kecamatan = tb_kecamatan.id_kecamatan");

	return $query;
}


function get_nilai_kontrak(){
	$query = $this->db2->query("SELECT sum(nilai_kontrak) as nilai_kontrak FROM tb_paket INNER JOIN tb_kontrak ON tb_paket.id = tb_kontrak.id_paket INNER JOIN tb_kecamatan ON tb_paket.id_kecamatan = tb_kecamatan.id_kecamatan");

	return $query;
}

function get_nilai_kontrak_count(){
	$query = $this->db2->query("SELECT count(nilai_kontrak) as count_nilai_kontrak FROM tb_paket INNER JOIN tb_kontrak ON tb_paket.id = tb_kontrak.id_paket INNER JOIN tb_kecamatan ON tb_paket.id_kecamatan = tb_kecamatan.id_kecamatan");

	return $query;
}


function get_pagu_fisik(){
	$query = $this->db2->query("SELECT sum(nilai_pagu) as nilai_pagu FROM tb_paket INNER JOIN tb_kontrak ON tb_paket.id = tb_kontrak.id_paket INNER JOIN tb_kecamatan ON tb_paket.id_kecamatan = tb_kecamatan.id_kecamatan WHERE tb_paket.jenis_pengadaan = 'Pekerjaan Konstruksi'");

	return $query;
}

function get_pagu_fisik_count(){
	$query = $this->db2->query("SELECT count(nilai_pagu) as count_nilai_pagu FROM tb_paket INNER JOIN tb_kontrak ON tb_paket.id = tb_kontrak.id_paket INNER JOIN tb_kecamatan ON tb_paket.id_kecamatan = tb_kecamatan.id_kecamatan WHERE tb_paket.jenis_pengadaan = 'Pekerjaan Konstruksi'");

	return $query;
}

function get_pagu_konsultan_pengawasan(){
	$query = $this->db2->query("SELECT sum(nilai_pagu) as nilai_pagu FROM tb_paket INNER JOIN tb_kontrak ON tb_paket.id = tb_kontrak.id_paket INNER JOIN tb_kecamatan ON tb_paket.id_kecamatan = tb_kecamatan.id_kecamatan WHERE tb_paket.jenis_pengadaan = 'Jasa Konsultansi Pengawasan'");

	return $query;
}

function get_pagu_konsultan_pengawasan_count(){
	$query = $this->db2->query("SELECT count(nilai_pagu) as count_nilai_pagu FROM tb_paket INNER JOIN tb_kontrak ON tb_paket.id = tb_kontrak.id_paket INNER JOIN tb_kecamatan ON tb_paket.id_kecamatan = tb_kecamatan.id_kecamatan WHERE tb_paket.jenis_pengadaan = 'Jasa Konsultansi Pengawasan'");

	return $query;
}

function get_pagu_konsultan_perencanaan(){
	$query = $this->db2->query("SELECT sum(nilai_pagu) as nilai_pagu FROM tb_paket INNER JOIN tb_kontrak ON tb_paket.id = tb_kontrak.id_paket INNER JOIN tb_kecamatan ON tb_paket.id_kecamatan = tb_kecamatan.id_kecamatan WHERE tb_paket.jenis_pengadaan = 'Jasa Konsultansi Perencanaan'");

	return $query;
}
function get_pagu_konsultan_perencanaan_count(){
	$query = $this->db2->query("SELECT count(nilai_pagu) as count_nilai_pagu FROM tb_paket INNER JOIN tb_kontrak ON tb_paket.id = tb_kontrak.id_paket INNER JOIN tb_kecamatan ON tb_paket.id_kecamatan = tb_kecamatan.id_kecamatan WHERE tb_paket.jenis_pengadaan = 'Jasa Konsultansi Perencanaan'");

	return $query;
}


function get_kontrak_fisik(){
	$query = $this->db2->query("SELECT sum(nilai_kontrak) as nilai_kontrak FROM tb_paket INNER JOIN tb_kontrak ON tb_paket.id = tb_kontrak.id_paket INNER JOIN tb_kecamatan ON tb_paket.id_kecamatan = tb_kecamatan.id_kecamatan WHERE tb_paket.jenis_pengadaan = 'Pekerjaan Konstruksi'");

	return $query;
}

function get_kontrak_konsultan_pengawasan(){
	$query = $this->db2->query("SELECT sum(nilai_kontrak) as nilai_kontrak FROM tb_paket INNER JOIN tb_kontrak ON tb_paket.id = tb_kontrak.id_paket INNER JOIN tb_kecamatan ON tb_paket.id_kecamatan = tb_kecamatan.id_kecamatan WHERE tb_paket.jenis_pengadaan = 'Jasa Konsultansi Pengawasan'");

	return $query;
}

function get_kontrak_konsultan_perencanaan(){
	$query = $this->db2->query("SELECT sum(nilai_kontrak) as nilai_kontrak FROM tb_paket INNER JOIN tb_kontrak ON tb_paket.id = tb_kontrak.id_paket INNER JOIN tb_kecamatan ON tb_paket.id_kecamatan = tb_kecamatan.id_kecamatan WHERE tb_paket.jenis_pengadaan = 'Jasa Konsultansi Perencanaan'");

	return $query;
}


}