<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class cLogin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		/*
		$this->load->model('mLogin');
		$data=$this->mLogin->getUser();
		if ($data->num_rows() > 0)
		{
		    foreach ($data->result_array() as $row)
			{
			    echo $row['id']."	";
			    echo $row['cName']."	";
			    echo $row['cKey']."	";
			    echo $row['cTime'];
			    echo "<br>";
			}
		}
		*/
		$this->load->view('login');
	}
	public function userLogin()
	{
		//载入Model
		$this->load->model('mLogin');
		//获取 post 数据
		$Name=$this->input->post('cname', TRUE);
		$Key=$this->input->post('ckey',TRUE);

		$query=$this->mLogin->userCheck($Name,$Key);
		if ($query->num_rows() > 0) {
			echo "OK";
			redirect("http://192.168.2.5/t6");
		}
		else {
			echo "error";
		}

	}

}

/* End of file cLogin.php */
/* Location: ./application/controllers/cLogin.php */