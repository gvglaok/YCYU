<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class mUserCenter extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		
	}

	public function addSkill($name,$level,$descript)
	{
		$this->tName=$name;
		$this->tLevel=$level;
		$this->tDescription=$descript;
		$res=$this->db->insert("skill",$this);
		return $res;
	}

	public function skillGet($value='')
	{
		
	}
}

/* End of file mUserCenter.php */
/* Location: ./application/models/mUserCenter.php */