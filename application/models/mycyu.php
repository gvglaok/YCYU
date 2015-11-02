<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class mycyu extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}

	public function readCard($value='')
	{
		$sql="SELECT * FROM skill LIMIT 0, 100";
		$query=$this->db->query($sql);
		//$row=$query->row();
		return $query;
	}

}

/* End of file mycyu.php */
/* Location: ./application/models/mycyu.php */