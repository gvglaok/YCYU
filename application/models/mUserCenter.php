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
			$sqla1="select skillID from act where loginID= ".$loginID." ";
			$query1=$this->db->query($sqla1);
			$row=$query1->row();
			$skillID=$row->skillID;
			if(is_null($skillID))
			{
				$sqla2="UPDATE `act` SET `skillID`=? WHERE (`loginID`=?) ";
				$query2=$this->db->query($sqla2,array($lastID,$loginID));
			}
			else
			{
				$idData=$skillID.','.$lastID;
				$sqla2="UPDATE `act` SET `skillID`=? WHERE (`loginID`=?) ";
				$query2=$this->db->query($sqla2,array($idData,$loginID));
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