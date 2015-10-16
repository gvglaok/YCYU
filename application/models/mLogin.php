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
	/*
	检查注册名是否重名

	*/
	public function addUser($name,$key,$email)
	{
		

		$sql='SELECT loginID FROM login where name = ? LIMIT 1';

		$query1= $this->db->query($sql,array($name));

		if( $query1->num_rows()>0 )
		{
			return -1;
		}

		$data= array('name'=>$name,'key'=>$key,'email'=>$email);

		$userData=array('realName'=>$name);

		$res=$this->db->insert('login',$data);

		if ( $res ) 
		{	
			$userRes=$this->db->insert('userinfo',$userData);
		}

		$query = $this->db->query('SELECT loginID FROM login where name="'.$name.'" LIMIT 1');

		$row = $query->row();

		$lid = $row->loginID;

		$query = $this->db->query('SELECT userID FROM userinfo where realName="'.$name.'" LIMIT 1');

		$row = $query->row();

		$userid = $row->userID;

		$actData=array('loginID'=>$lid,'userID'=>$userid);

		$actRes=$this->db->insert('act',$actData);

		return $lid;
	}



}

/* End of file mLogin.php */
/* Location: ./application/models/mLogin.php */