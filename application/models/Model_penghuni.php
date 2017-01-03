<?php

class Model_penghuni extends CI_Model{
	function tampil_data(){
		return $this->db->get('penghuni');
	}
 	function input_data($data,$table)
	{
		$insert_query = $this->db->insert($table,$data);
		if ($insert_query){
			$last_insert_id = $this->db->insert_id();
			$id_kamar = $this->input->post('nokamar');
			$id_penghuni = $last_insert_id;
			
			$data2 = array(
				'id_kamar'=> $id_kamar,
				'id_penghuni' =>$id_penghuni,
				'status'=>'aktif'
				);
			$this->db->insert('status_kamar',$data2);
			$data3= array(
				 'status' => 'Tidak Tersedia'
				 );
			$this->db->where('id_kamar', $id_kamar);
			$this->db->update('kamar', $data3);
			$id_kamar = $this->input->post('nokamar');
			$id_penghuni = $last_insert_id;
			$tagihan = 600000;
			$bayar=$this->input->post('pembayaran');
			$kurang=$this->input->post('kurang');

			if($bayar==$tagihan){
				$status='Lunas';
			}
			else{
				$status="Belum Lunas";
			}
			$tgl=date("Y-m-d");
			$data4=array(
				'id_kamar'=> $id_kamar,
				'id_penghuni' =>$id_penghuni,
				'tagihan' =>$tagihan,
				'dibayar' =>$bayar,
				'kurang'=>$kurang,
				'status'=>$status,
				'tgl_tagihan' =>$tgl
				);
			$this->db->insert('status_pembayaran',$data4);
			redirect('Kamar');
		}
	}
}
