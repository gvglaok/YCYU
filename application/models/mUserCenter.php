<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class mUserCenter extends CI_Model {
	public function __construct()
	{
		parent::__construct();
		
	}

	//检查 数据 有效性（数据是否在可 操作权限内）
	//验证 数据是否在 act 中 相对应的数据
	function checkEdge()
	{
		# code...
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
			if(is_null($skillID) OR $skillID=="")
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
		$sql="select skillID from act where loginID=?";
		$query=$this->db->query($sql,array($loginID));
		$row=$query->row();
		$skillID=$row->skillID;
		$sqlSkill=array();
		
		if(is_null($skillID) OR $skillID =="")
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

	public function oneSkillGet()
	{
		$sql="select * from skill where skillID= ? ";
		$query = $this -> db -> query($sql,array($value));
		$row = $query -> row();
		return $row; 
	}

	//检查skillID Number
	public function skillDelete($sid="")
	{
		//$sql="DELETE FROM project WHERE (skillID=?)";
		
		$lid=$this->session->userdata('loginID');
		$sqlAct="select skillID from act where loginID=?";
		$query=$this->db->query($sqlAct,array($lid));
		$row=$query->row();
		$strSid=$row->skillID;
		$arrSid=explode(',',$strSid);

		$asKey=array_search($sid,$arrSid);

		//数据不再可操作范围内
		if(is_null($asKey))
		{
			die();
		}

		unset($arrSid[$asKey]);
		if(count($arrSid)>0)
		{
			$strSid=implode(',',$arrSid);
		} else {
			$strSid="";
		}

		$sqlActUpdata="UPDATE act SET skillID=? WHERE loginID=? ";
		$queryau=$this->db->query($sqlActUpdata,array($strSid,$lid));

		$sqlSK="DELETE FROM skill WHERE (skillID=?)";
		$querysk=$this->db->query($sqlSK,array($sid));

		return $querysk;
	}

	public function skillUpdata($sid='',$sname='',$slevel='',$sdes='')
	{
		
		$sql="UPDATE skill SET name=?,level=?,description=? WHERE (skillID=?)";
		$query = $this -> db -> query($sql,array($sname,$slevel,$sdes,$sid));
		return $query;

	}
}
/* End of file mUserCenter.php */
/* Location: ./application/models/mUserCenter.php */