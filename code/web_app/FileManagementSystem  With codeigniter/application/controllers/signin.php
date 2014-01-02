<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Signin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Signin_model');
	}

	public function index()
	{	
		//$this->data['title'] = 'signin';
		$this->data['register'] = $this->Signin_model->get_alll();
		$this->load->view('signin');
	

	}
	
	public function login() {
	
	      $username= $this->input->post('user_name');
		  $password= $this->input->post('password');
        //create query to connect user login database
        $this->db->select('id, user_name, password, hints');
        $this->db->from('register');
        $this->db->where('user_name', $username);
        $this->db->where('password', $password);
        $this->db->limit(1);
         
        //get query and processing
        $query = $this->db->get();
		$s=$query->num_rows();
        if($s== 1) { 
		   redirect('details');
            //return $query->result(); //if data is true
        } else {
		     		  
		     redirect('signin');
			 
            //return false; //if data is wrong
        }
    }
	

		
}