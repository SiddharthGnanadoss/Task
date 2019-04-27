<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Settings extends CI_Controller {

	var $site_title;
	var $css;
	var $base_url;
	var $data = array();
	
	public function __construct()
	{
		
         	parent::__construct();

$this->load->library('my_session');
$this->load->library('auth');
		
	}

		public function index()
	{
		$data['logged'] = false;
		
		$arr['userid'] = $this->my_session->get("user_id");
		$arr['username'] = $this->my_session->get("username");
		$arr['user_role'] = $this->my_session->get("user_role");
		
		if($arr['userid'])
		{
			$this->load->view('./settings/settings-home', $arr);
		}
		else
		{
			$this->load->view('welcome_message', $arr);
		}
	}
	

	public function changepassword()
	{	
		
		$data['logged'] = false;
		
		$arr['admin_id'] = $this->my_session->get("admin_id");
		$arr['username'] = $this->my_session->get("username");
		
	    $id = $arr['admin_id'];
		$qry2 ="Select * from sidd_users where user_id='$id'"; // select data from db
        $arr['content'] = $this->db->query($qry2)->result_array();
		
		if($arr['admin_id'])
		{
			$this->load->view('./settings/changepassword', $arr);
		}
		else
		{
			$this->load->view('welcome_message', $arr);
		}
		
		
	}
	
	public function changepw()
	{	
		
		$data['logged'] = false;
		
		$arr['admin_id'] = $this->my_session->get("admin_id");
		$arr['username'] = $this->my_session->get("username");
		$user_id = $this->my_session->get("userid");  
		
		//$user_id = $arr['admin_id'];
		$oldpassword = $_REQUEST['oldpassword'];
		$newpassword = $_REQUEST['newpassword'];
		
		$qry ="select * from sidd_users where password='$oldpassword' and user_id=$user_id"; 
		$query = $this->db->query($qry);
		$rowcount = $query->num_rows();
		if($rowcount>0)
		{
			$qry = "update sidd_users set password='$newpassword' where user_id=$user_id";
			$this->db->query($qry);
			header('Location: '.BEGIN_PATH.'/settings/changepassword?action=success');
		}
		else
		{
			header('Location: '.BEGIN_PATH.'/settings/changepassword?action=failed');
		}
		
		
		
	}

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	
	
}//End class Welcome

/* End of file welcome.php */
/* Location: ./application/controllers/about.php */
