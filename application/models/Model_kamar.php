<?php

class Model_kamar extends CI_Model{
	function tampil_data(){
		return $this->db->get('kamar');
	}
  function hitung_kamar(){
    $query = $this->db->get('kamar');
    return $query->num_rows();
  }

	function input_data($data,$table){
		$this->db->insert($table,$data);
	}
}
