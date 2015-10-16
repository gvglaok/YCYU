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
		$data['statusLog']=1;
		$this->load->view('login',$data);
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
			$row = $query->row();
			$loginID=$row->loginID;
			$this->session->set_userdata('loginID',$loginID);
			$this->session->set_userdata('userName',$Name);
			redirect("http://192.168.2.5/t6/");
		}
		else {
			echo "error 用户名或者密码 不正确";	
		}
	}

	public function regist()
	{
		$this->load->model('mLogin');

		$Name=$this->input->post('cname', TRUE);

		$Key=$this->input->post('ckey',TRUE);

		$Email=$this->input->post('cemail',TRUE);

		$res=$this->mLogin->addUser($Name,$Key,$Email);

		//$res>0 ? redirect("http://192.168.2.5/t6") : "Success";

		if( $res === -1 )
		{
			$data=array('statusReg'=>'1','mes'=>'用户名已存在！','css'=>'has-error');

			$this->load->view('login',$data);

		} else if($res>0) {
			$this->session->set_userdata('loginID',$res);

			$this->session->set_userdata('userName',$Name);
			
			redirect("http://192.168.2.5/t6/");
		}
	}

}

/* End of file cLogin.php */
/* Location: ./application/controllers/cLogin.php */
