<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kamar extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	function __construct(){
		parent::__construct();
		$this->load->model('Model_kamar');
	}
	public function index()
	{
		$data['kamar']=$this->Model_kamar->tampil_data()->result();
		$this->load->view('kamar',$data);
	}
  public function tambahkamar()
  {
    $this->load->view('tambahkamar');
  }
	public function addkamar()
	{
		$nama = $this->input->post('nama_kamar');
		$status = $this->input->post('status');
		$data = array(
			'nama_kamar' => $nama,
			'status' =>$status
		);
		$this->Model_kamar->input_data($data,'kamar');
		redirect('Kamar');
	}
	public function hapus_kamar($id)
	{
		$this->Model_kamar->hapus_kamar($id);
 		redirect('Kamar');
	}
	public function edit_kamar($id)
	{
		$where = array('id_kamar' => $id);
		$data['kamar'] = $this->Model_kamar->edit_kamar($where,'kamar')->result();
		$this->load->view('edit_kamar',$data);
	}
	function update_kamar(){
		$id = $this->input->post('id_kamar');
		$nama = $this->input->post('nama_kamar');
		$status = $this->input->post('status');
		$data = array(
			'nama_kamar' => $nama,
			'status' =>$status
		);

	$where = array(
		'id_kamar' => $id
	);

	$this->Model_kamar->update_data($where,$data,'kamar');
	redirect('Kamar');
	}
	public function tambahpenghuni(){
		 $this->load->view('add_penghuni');

	}
	function detail(){
		$data['kamar']=$this->Model_kamar->detail_penghuni()->result();
		$this->load->view('detail_penghuni',$data);
	}
	function detailkamar($id){
		$data['dp'] = $this->Model_kamar->detailkamar($id);
		$this->load->view('detailkamar',$data);  
	}
	function keluar(){
		echo$id_kamar = $this->input->post('kamar');
		echo$penghuni = $this->input->post('penghuni');
		echo$status_kamar = $this->input->post('status_kamar');
		echo$tagihan = $this->input->post('tagihan');
		//update kamar
		$condition['id_kamar']= $id_kamar;
		$status = "Tersedia";
        $data = array(
			'status' => $status
			);

        //update kamar
        $condition3['id_penghuni']= $penghuni;
		$status = "tidak aktif";
        $data2 = array(
			'status' => $status
			);


		$condition2=$status_kamar;
		$this->Model_kamar->keluarpenghuni($data,$data2,$condition,$condition2,$condition3); 

	}
}
