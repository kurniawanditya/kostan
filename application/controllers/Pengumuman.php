<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengumuman extends CI_Controller {

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
		$this->load->model('Model_pengumuman');
	}
	public function index()
	{
		$data['pengumuman']=$this->Model_pengumuman->tampil_data();
		$this->load->view('pengumuman',$data);
	}
	 public function tambahpengumuman()
  	{
    	$this->load->view('tambahpengumuman');
 	 }
	public function addpengumuman()
	{
		$isi = $this->input->post('isi');
		$status = $this->input->post('status');
		$data = array(
			'isi' => $isi,
			'status' =>$status
		);
		$this->Model_pengumuman->input_data($data,'pengumuman');
		redirect('Pengumuman');
	}
	public function hapus_pengumuman($id)
	{
		$this->Model_pengumuman->hapus_pengumuman($id);
 		redirect('Pengumuman');
	}
	public function edit_pengumuman($id)
	{
		$where = array('id_pengumuman' => $id);
		$data['pengumuman'] = $this->Model_pengumuman->edit_pengumuman($where,'pengumuman')->result();
		$this->load->view('edit_pengumuman',$data);
	}
	function update_pengumuman(){
		$id = $this->input->post('id_pengumuman');
		$nama = $this->input->post('nama_pengumuman');
		$status = $this->input->post('status');
		$data = array(
			'nama_pengumuman' => $nama,
			'status' =>$status
		);

	$where = array(
		'id_pengumuman' => $id
	);

	$this->Model_pengumuman->update_data($where,$data,'pengumuman');
	redirect('pengumuman');
	}
	public function tambahpenghuni(){
		 $this->load->view('add_penghuni');

	}
}
