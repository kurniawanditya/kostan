<?php

class Model_pemasukan extends CI_Model{
	function tampilpemasukan(){
		$query = $this->db->query('SELECT * FROM 
			kamar as A, 
			penghuni as B, 
			status_pembayaran as C, 
			status_kamar as D 
			WHERE C.id_penghuni=D.id_penghuni 
			AND A.id_kamar=C.id_kamar 
			AND A.id_kamar=D.id_kamar 
			AND B.id_penghuni=C.id_penghuni 
			AND B.id_penghuni=D.id_penghuni
			AND B.status="aktif" ');
  		return $query->result_array();
	}
}
