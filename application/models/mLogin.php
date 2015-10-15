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
		$this->db->where('name',$name);
		$this->db->where('key',$key);
		$query=$this->db->get('login');
		return $query;
	}

	//注册新用户
	public function addUser($name,$key,$email)
	{
		$data= array('name'=>$name,'key'=>$key,'email'=>$email);
		$userData=array('name'=>$name);
		$res=$this->db->insert('login',$data);
		if ( $res ) 
		{	
			$userRes=$this->db->insert('userInfo',$userData);
		}
		$query = $this->db->query('SELECT "name" FROM login LIMIT 1');

		$row = $query->row();

		$lid = $row->loginID;

		$query = $this->db->query('SELECT "name" FROM userinfo LIMIT 1');

		$row = $query->row();

		$userid = $row->userID;

		$actData=array('loginID'=>$lid,'userID'=>$userid);

		$actRes=$this->db->insert('act',$actData);

		return $actRes;
	}



}

/* End of file mLogin.php */
/* Location: ./application/models/mLogin.php */