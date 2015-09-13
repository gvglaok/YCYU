<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class mLogin extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		
	}

	public function getUser()
	{
		$query=$this->db->get('user');

		return $query;

	}

}

/* End of file mLogin.php */
/* Location: ./application/models/mLogin.php */