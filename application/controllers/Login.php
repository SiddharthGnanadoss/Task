<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	
	var $site_title;
	var $css;
	var $base_url;
	var $data = array();

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
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	 
	public function __construct()
	{

		parent::__construct();

		$this->load->library('my_session');
		$this->load->library('auth');

	} 
	 

	public function index()
	{
		
    	$username = $_REQUEST['username'];
		$password = $_REQUEST['password'];
		
		$qry ="Select * from  sidd_users where username ='$username' and password ='$password'";
		$arr['user'] = $this->db->query($qry)->result_array();
		
		//echo sizeof($arr['user']);
		

		$query = $this->db->query($qry);
		$num = $query->num_rows();  
		

		if($num>0) {
			$username = $arr['user'][0]['name'];
			$this->my_session->set("admin_id",$arr['user'][0]['user_id']);
			$this->my_session->set("userid",$arr['user'][0]['user_id']);
			$this->my_session->set("username",$username);
			$this->my_session->set("login",true);
			header('Location:'.$this->base_url.'/poll/dashboard');

		}else{
			
			$this->my_session->set("login",true);
			$arr['logn'] = false;
			header('Location:'.$this->base_url. '/poll/?action=failed');
			exit;
		}

	}

	public function logout()
	{
		$this->my_session->del('login');
		$this->my_session->del('admin_id');
		$this->my_session->del('name');
		$this->my_session->destroy();
		unset($_SESSION);
		session_destroy();
		header('Location:'.$this->base_url.'/transport_new',$arr);
	}
	
	
	
}
