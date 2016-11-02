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
}
