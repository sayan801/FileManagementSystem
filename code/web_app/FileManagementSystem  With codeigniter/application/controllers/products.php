<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Products extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Products_model');
	}

	public function index()
	{	
		$this->data['title'] = 'Products';
		$this->data['products'] = $this->Products_model->get_all();
		
	$this->data['title'] = 'time';
		$this->data['time'] = $this->Products_model->get_alll();
		$this->load->view('products', $this->data);
		
	
	}
}