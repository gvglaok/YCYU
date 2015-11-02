<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ycyu extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$un=$this->session->userdata('userName');
		$data['user']=$un;

		$this->load->model('mycyu','myy');
		$data['sc']=$this -> myy -> readCard();


		if (isset($un)) {
			$this->load->view('head',$data);
		} else {
			$this->load->view('head');
		}
		
		$this->load->view('ycyu',$data);
		
		$this->load->view('foot');
	}
}

/* End of file ycyu.php */
/* Location: ./application/controllers/ycyu.php */