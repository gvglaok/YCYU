<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class mUserCenter extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		
	}

	public function addSkill($name,$level,$descript)
	{
		$loginID=$_SESSION['loginID'];
		$data=array('name'=>$name,'level'=>$level,'description'=>$descript);
		$res=$this->db->insert("skill",$data);
		if($res)
		{
			$sql="select @@IDENTITY as la";
			$query=$this->db->query($sql);
			$row=$query->row();
			$lastID=$row->la;
			//查询出 act中skillID 插入skillID
			$sqla1="select skillID from act where loginID= ? ";
			$query=$this->db->query($sqla1,array($loginID));
			$row=$query->row();
			$skillID=$row->skillID;
			if(empty($skillID))
			{
				$sqla2="insert into act(skillID) values (?)";
				$query=$this->db->query($sqla2,array($lastID));
				
			}
			else
			{
				$idData=','.$lastID;
				$sqla2="insert into act(skillID) values (?)";
				$query=$this->db->query($sqla2,array($idData));
			}
		}

		return $res;
	}

	public function skillGet($value='')
	{
		
	}
}

/* End of file mUserCenter.php */
/* Location: ./application/models/mUserCenter.php */