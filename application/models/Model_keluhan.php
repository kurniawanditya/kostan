<?php

class Model_keluhan extends CI_Model{
	function tampil_data(){
		return $this->db->get('keluhan');
	}
	function hitung_keluhan(){
	    $query = $this->db->get('keluhan');
	    return $query->num_rows();
	}

	function input_data($data,$table)
	{
		$this->db->insert($table,$data);
	}
	function hapus_keluhan($id)
	{
		$this->db->where('id_keluhan', $id);
		return $this->db->delete('keluhan');
	}
	function edit_keluhan($where,$table)
	{
		return $this->db->get_where($table,$where);
	}
	function update_data($where,$data,$table)
	{
		$this->db->where($where);
		$this->db->update($table,$data);
	}

}
