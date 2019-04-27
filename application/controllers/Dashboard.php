<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller {

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
	public function index()
	{	
		
		$data['logged'] = false;
		
		$arr['user_id'] = $this->my_session->get("user_id");
		$arr['username'] = $this->my_session->get("username");
		$arr['admin_id'] = $this->my_session->get("admin_id");

                 $qry3 ="Select * from sidd_poll";
		$query3 = $this->db->query($qry3);
		 $total_poll = $query3->num_rows();

		$qry_1 ="Select * from sidd_poll where ans_id=1";
		$query_1 = $this->db->query($qry_1);
		$count1 = $query_1->num_rows();
		
		$arr['jquery'] = ($count1/$total_poll)*100; 

		$qry_2 ="Select * from sidd_poll where ans_id=2";
		$query_2 = $this->db->query($qry_2);
		$count2 = $query_2->num_rows();
		
		  $arr['moo'] = ($count2/$total_poll)*100;
		
		$qry_3 ="Select * from sidd_poll where ans_id=3";
		$query_3 = $this->db->query($qry_3);
		$count3 = $query_3->num_rows();
		
		 $arr['yui'] = ($count3/$total_poll)*100;
		
		$qry_4 ="Select * from sidd_poll where ans_id=4";
		$query_4 = $this->db->query($qry_4);
		$count4 = $query_4->num_rows(); 
		
		 $arr['glow'] = ($count4/$total_poll)*100;
        
       

		if($arr['admin_id'])
		{
			$this->load->view('./dashboard', $arr);
		}
		else
		{
			$this->load->view('welcome_message', $arr);
		}
		
		
	}
	
public function poll()
	{	
		
		$data['logged'] = false;
		
		$arr['user_id'] = $this->my_session->get("user_id");
		$arr['username'] = $this->my_session->get("username");
		$arr['admin_id'] = $this->my_session->get("admin_id");
		$user_id = $arr['admin_id'];
		
		$ans_id = $this->input->post('fav'); 
		
		$sql = "insert into sidd_poll (user_id, ans_id)
        values ('$user_id',$ans_id)";
        $this->db->query($sql);

         $qry3 ="Select * from sidd_poll";
		$query3 = $this->db->query($qry3);
		 $total_poll = $query3->num_rows();

		$qry_1 ="Select * from sidd_poll where ans_id=1";
		$query_1 = $this->db->query($qry_1);
		$count1 = $query_1->num_rows();
		
		$arr['jquery'] = ($count1/$total_poll)*100; 

		$qry_2 ="Select * from sidd_poll where ans_id=2";
		$query_2 = $this->db->query($qry_2);
		$count2 = $query_2->num_rows();
		
		  $arr['moo'] = ($count2/$total_poll)*100;
		
		$qry_3 ="Select * from sidd_poll where ans_id=3";
		$query_3 = $this->db->query($qry_3);
		$count3 = $query_3->num_rows();
		
		 $arr['yui'] = ($count3/$total_poll)*100;
		
		$qry_4 ="Select * from sidd_poll where ans_id=4";
		$query_4 = $this->db->query($qry_4);
		$count4 = $query_4->num_rows(); 
		
		 $arr['glow'] = ($count4/$total_poll)*100;

    
		if($arr['admin_id'])
		{
			$this->load->view('./dashboard', $arr);
		}
		else
		{
			$this->load->view('welcome_message', $arr);
		}
		
		
	}
	
	
}//End class Welcome

/* End of file welcome.php */
/* Location: ./application/controllers/about.php */
