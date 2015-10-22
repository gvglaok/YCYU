<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class mUserCenter extends CI_Model {
	public function __construct()
	{
		parent::__construct();
		
	}
	public function addSkill($name,$level,$descript)
	{
		$loginID=$this->session->userdata('loginID');
		$data=array('name'=>$name,'level'=>$level,'description'=>$descript);
		$res=$this->db->insert("skill",$data);
		if($res)
		{
			$sql="select @@IDENTITY as la";
			$query=$this->db->query($sql);
			$row=$query->row();
			$lastID=$row->la;
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

	public function skillGet()
	{
		$loginID=$this->session->userdata('loginID');
		$sql="select skillID from act where loginID=? ";
		$query=$this->db->query($sql,array($loginID));
		$row=$query->row();
		$skillID=$row->skillID;
		$sqlSkill=array();
		if(is_null($skillID))
		{
			return false;
		}
		$arraySkillID=explode(',',$skillID);
		if (count($arraySkillID)>1) 
		{
			for ($i=0; $i <count($arraySkillID); $i++) 
			{ 
				$sqlSkill[$i]=" skillID=".$arraySkillID[$i];
			}
			$sqlWhere=implode(" OR ",$sqlSkill);
			$sqlS="select * from skill where".$sqlWhere;
			$query=$this->db->query($sqlS);
			return $query;
		}
		else
		{
			$sql="select * from skill where skillID=$skillID ";
			$query=$this -> db -> query($sql);
			return $query;
		}
		
	}

	public function oneSkillGet($value="")
	{
		$sql="select * from skill where skillID= ? ";
		$query = $this -> db -> query($sql,array($value));
		$row = $query -> row();
		return $row; 
	}

	public function skillUpdata($value='')
	{
		# code...
	}

	public function skillDelete($value='')
	{
		# code...
	}
}
/* End of file mUserCenter.php */
/* Location: ./application/models/mUserCenter.php */