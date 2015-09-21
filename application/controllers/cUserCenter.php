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

	//添加技能片
	public function addSkill()
	{
		return "ok";
	}

	//修改技能片
	public function modifySkill($value='')
	{
		 
	}

}

/* End of file cUserCenter.php */
/* Location: ./application/controllers/cUserCenter.php */
