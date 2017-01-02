<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Keluhan extends CI_Controller {

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
		$this->load->model('Model_keluhan');
	}
	public function index()
	{
		$data['keluhan']=$this->Model_keluhan->tampil_data();
		$this->load->view('keluhan',$data);
	}
	 public function tambahkeluhan()
  	{
    	$this->load->view('tambahkeluhan');
 	 }
	public function addkeluhan()
	{
		$isi = $this->input->post('isi');
		$status = $this->input->post('status');
		$data = array(
			'isi' => $isi,
			'status' =>$status
		);
		$this->Model_keluhan->input_data($data,'keluhan');
		redirect('keluhan');
	}
	public function hapus_keluhan($id)
	{
		$this->Model_keluhan->hapus_keluhan($id);
 		redirect('keluhan');
	}
	public function edit_keluhan($id)
	{
		$where = array('id_keluhan' => $id);
		$data['keluhan'] = $this->Model_keluhan->edit_keluhan($where,'keluhan')->result();
		$this->load->view('edit_keluhan',$data);
	}
	function update_keluhan(){
		$id = $this->input->post('id_keluhan');
		$nama = $this->input->post('nama_keluhan');
		$status = $this->input->post('status');
		$data = array(
			'nama_keluhan' => $nama,
			'status' =>$status
		);

	$where = array(
		'id_keluhan' => $id
	);

	$this->Model_keluhan->update_data($where,$data,'keluhan');
	redirect('keluhan');
	}
	public function tambahpenghuni(){
		 $this->load->view('add_penghuni');

	}
}
