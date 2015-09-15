<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class cUserCenter extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('head');
		$this->load->view('user-center');
		$this->load->view('foot');
	}

}

/* End of file cUserCenter.php */
/* Location: ./application/controllers/cUserCenter.php */