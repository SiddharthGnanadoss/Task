<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	
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
		$this->load->view('welcome_message');
	}
	
	public function login()
	{
		
    	$username = $_POST['username'];
		$password = $_POST['password'];
		
		$qry ="Select * from  register where username ='$username' and password ='$password'";
		$arr['user'] = $this->db->query($qry)->result_array();
		
		if($arr['user'][0]['id']){
			$this->my_session->set("admin_id",$arr['user'][0]['id']);
			$this->my_session->set("name",$arr['user'][0]['username']);
			$this->my_session->set("login",true);
			header('Location:'.$this->base_url. '/dashboard/?action=error');
			
		}else{
			
			$this->my_session->set("login",true);
			$arr['login'] = false;
			header('Location:'.$this->base_url. '/sports/?action=error');
			exit;
		}
		 
		
	
		//$this->load->view('/users/view_account', $data);
		if($this->my_session->get('return_page'))
		{
			$url = $this->my_session->get('return_page');
			$this->my_session->set('return_page','');
			header('Location:'.$this->base_url. $url);
			exit;
		}
		header('Location:'.$this->base_url.'/sports/Dashboard');
		
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
