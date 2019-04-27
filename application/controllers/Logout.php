<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Logout extends CI_Controller {

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

$user_id = $this->my_session->get("userid");  
	
		$this->my_session->del('login');
		$this->my_session->del('user_id');
		$this->my_session->del('username');
		$this->my_session->del('user_role');
		
		$this->my_session->destroy();
		unset($_SESSION);
		//session_destroy();
		header('Location:'.$this->base_url.'/poll');
		
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
