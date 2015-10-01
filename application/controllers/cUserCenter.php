<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class cUserCenter extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		//检查是否用户是否登录
/*		$userName=$_SESSION('userName');
		if (exit($userName)) {
			$this->load->view('head',$userName);
		}
		else {
			$userName="登录 注册";
			$this->load->view('head',$userName);
		}*/
		$this->load->view('head');
		$this->load->view('user-center');
		$this->load->view('foot');
	}
	
	//拉取skill
	public function pullSkill()
	{
		
	}

	//添加技能片
	public function addSkill()
	{
		$this->load->model("mUsercenter","mu");

		$data=$this->input->raw_input_stream;
		$obj=json_decode($data);
		$tName=$obj->name;
		$tLvl=$obj->level;
		$tDes=$obj->descript;

		$res=$this->mu->addSkill($tName,$tLvl,$tDes);

		echo $res>0 ? "success" : "error";

	}

	//修改技能片
	public function modifySkill($value='')
	{
		 
	}

}

/* End of file cUserCenter.php */
/* Location: ./application/controllers/cUserCenter.php */
