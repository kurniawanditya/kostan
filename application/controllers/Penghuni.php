<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penghuni extends CI_Controller {

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
		 $this->load->model('Model_penghuni');
	 }
	public function index(){
		$data['penghuni']=$this->Model_penghuni->tampil_data()->result();
		$this->load->view('penghuni',$data);
	}
	public function tambahpenghuni(){
		$nmfile = "ktp".time();
		$config['upload_path']          = './assets/ktp/';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['max_size']             = 10000;
		// $config['max_width']            = 1024;
		// $config['max_height']           = 768;
		$config['file_name'] 			= $nmfile;
		
		$this->load->library('upload', $config);
		if($_FILES['ktp']['name']){
			if($this->upload->do_upload('ktp')){
				$ktp = $this->upload->data();
				$nama_penghuni = $this->input->post('nama_penghuni');
				$data=array(
						'nama_penghuni'=> $nama_penghuni,
						'ktp' =>$nmfile,
						'status'=>'aktif',
					);
				$this->Model_penghuni->input_data($data,'penghuni');
					//redirect('Kamar');
				}	
			}
	}
}
