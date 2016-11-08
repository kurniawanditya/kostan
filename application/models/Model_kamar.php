<?php

class Model_kamar extends CI_Model{
	function tampil_data(){
		return $this->db->get('kamar');
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
