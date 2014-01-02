<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Signup extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		
		$this->load->model('Signup_model');
	}

	public function index()
	{	
		//$this->data['title'] = 'Billing';
		//$this->data['title'] = 'time';
		//$this->data['time'] = $this->Billing_model->get_alll();
	
		$this->load->view('signup');
	}
    public function save_order()
	{   
		$customer = array(
			'user_name' 		=> $this->input->post('user_name'),
			'password' 	=> $this->input->post('password'),
			'hints' 	=> $this->input->post('hints')
		);		

		$cust_id = $this->Signup_model->insert_user($customer);

			
		echo "<html><body bgcolor='#ffffff'>";
		echo "<h1> you are registered<h1><br />";
		echo "<a href=".base_url()."index.php?/signin><h3>Sign in<h3></a>";
                                 echo"</body></html>";
	}
}