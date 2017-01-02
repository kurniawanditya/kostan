<?php

class Model_kamar extends CI_Model{
	function tampil_data(){
		return $this->db->get('kamar');
	}
	function detail_penghuni(){
		return $this->db->get('status_kamar');
	}
	function detailkamar($id){
		$query = $this->db->query('SELECT * FROM penghuni WHERE id_penghuni = ' . $id);
  		return $query->result_array();
	}
    function hitung_kamar(){
    $query = $this->db->get('kamar');
    return $query->num_rows();
    }

	function input_data($data,$table)
	{
		$this->db->insert($table,$data);
	}
	function hapus_kamar($id)
	{
		$this->db->where('id_kamar', $id);
		return $this->db->delete('kamar');
	}
	function edit_kamar($where,$table)
	{
		return $this->db->get_where($table,$where);
	}
	function update_data($where,$data,$table)
	{
		$this->db->where($where);
		$this->db->update($table,$data);
	}

}
