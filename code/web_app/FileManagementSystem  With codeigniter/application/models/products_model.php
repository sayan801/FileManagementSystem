<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Products_model extends CI_Model {

	public function __construct()
	{
		//$this->load->database();
	}

	public function get_all()
	{
		$query = $this->db->get('products');
		return $query->result_array();
		}
	public function get_alll()
	{
		$query = $this->db->get('time');
		return $query->result_array();
	}

}