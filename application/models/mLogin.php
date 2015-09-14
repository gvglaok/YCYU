<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class mLogin extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		
	}

	//获取用户数据
	public function getUser()
	{
		$query=$this->db->get('user');

		return $query;

	}

	//用户登录检查
	public function userCheck($name,$key)
	{
		$this->db->where('cName',$name);
		$this->db->where('cKey',$key);
		$query=$this->db->get('user');
		return $query;

	}

	//注册新用户
	public function addUser($name,$key,$email)
	{
		$this->cName=$name;
		$this->cKey=$key;
		$this->cEmail=$email;
		$this->cTime=date("Y-m-d H:i:s",time());
		$res=$this->db->insert('user',$this);
		return $res;
	}


}

/* End of file mLogin.php */
/* Location: ./application/models/mLogin.php */