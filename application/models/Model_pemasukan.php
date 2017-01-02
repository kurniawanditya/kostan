<?php

class Model_pemasukan extends CI_Model{
	function tampilpemasukan(){
		$query = $this->db->query('SELECT * FROM status_pembayaran, status_kamar, kamar,penghuni WHERE status_pembayaran.id_penghuni=status_kamar.id_penghuni AND kamar.id_kamar=status_pembayaran.id_kamar AND kamar.id_kamar=status_kamar.id_kamar AND penghuni.id_penghuni=status_pembayaran.id_penghuni AND penghuni.id_penghuni=status_kamar.id_penghuni GROUP BY status_kamar.id_kamar');
  		return $query->result_array();
	}
}
