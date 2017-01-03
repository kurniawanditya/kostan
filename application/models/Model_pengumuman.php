<?php

class Model_pengumuman extends CI_Model{
	function tampil_data(){
		return $this->db->get('pengumuman');
	}
	function hitung_pengumuman(){
	    $query = $this->db->get('pengumuman');
	    return $query->num_rows();
	}

	function input_data($data,$table)
	{
		$this->db->insert($table,$data);
	}
	function hapus_pengumuman($id)
	{
		$this->db->where('id_pengumuman', $id);
		return $this->db->delete('pengumuman');
	}
	function edit_pengumuman($where,$table)
	{
		return $this->db->get_where($table,$where);
	}
	function update_data($where,$data,$table)
	{
		$this->db->where($where);
		$this->db->update($table,$data);
	}

}
