<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class cLogin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		/*$this->load->model('mLogin');
		$data=$this->mLogin->getUser();
		if ($data->num_rows() > 0)
		{
		    foreach ($data->result_array() as $row)
			{
			    echo $row['id']."	";
			    echo $row['cName']."	";
			    echo $row['cKey']."	";
			    echo $row['cTime'];
			    echo "<br>";
			}
		}*/
		$this->load->view('login');
	}
	public function userLogin()
	{
		$Name=$this->input->post('name', TRUE);
		
	}

}

/* End of file cLogin.php */
/* Location: ./application/controllers/cLogin.php */