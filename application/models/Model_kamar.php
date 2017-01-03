<?php

class Model_kamar extends CI_Model{
	function tampil_data(){
		return $this->db->get('kamar');
	}
	function detail_penghuni(){
		return $this->db->get('status_kamar');
	}
	function detailkamar($id){
		$query = $this->db->query("SELECT * FROM 
			kamar as A, 
			penghuni as B, 
			status_pembayaran as C, 
			status_kamar as D 
			WHERE C.id_penghuni=D.id_penghuni 
			AND A.id_kamar=C.id_kamar 
			AND A.id_kamar=D.id_kamar 
			AND B.id_penghuni=C.id_penghuni 
			AND B.id_penghuni=D.id_penghuni 
			AND A.id_kamar='$id' limit 1");
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
	function keluarpenghuni($data,$data2,$condition,$condition2,$condition3)
	{
        $this->db->where($condition); 
        $query = $this->db->update('kamar', $data); 
         if($query){
         	$this->db->where('id_status_kamar',$condition2); 
         	$query2 = $this->db->delete('status_kamar');
         	if($query2){
         		$this->db->where($condition3); 
        		$query = $this->db->update('penghuni', $data2); 
         		redirect('Kamar');
         	} 
        }
        
	}

}
