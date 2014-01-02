<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Details extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		
		$this->load->model('Details_model');
	}

	public function index()
	{	
		$this->data['title'] = 'Details';
		$this->data['title'] = 'files';
		$this->data['files'] = $this->Details_model->get_alll();
	    $this->data['second'] = $this->Details_model->get_second();
		$this->data['third'] = $this->Details_model->get_third();
		$this->data['fourth'] = $this->Details_model->get_fourth();
		$this->data['fifth'] = $this->Details_model->get_fifth();
		$this->data['sixth'] = $this->Details_model->get_sixth();
		$this->load->view('details', $this->data);
	}	
	
	public function remove($id) {
		$this->db->delete('files', array('id' => $id));
		
		redirect('details');
	}
	
}