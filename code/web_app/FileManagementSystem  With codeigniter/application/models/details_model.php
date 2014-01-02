<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Details_model extends CI_Model {

	public function __construct()
	{
		//$this->load->database();
	}
public function get_alll()
	{
		$query = $this->db->get('files');
		return $query->result_array();
	}
	
public function get_second()
	{
		$query = $this->db->get('files');
		return $query->result_array();
	}
	public function get_third()
	{
		$query = $this->db->get('files');
		return $query->result_array();
	}
public function get_fourth()
	{
		$query = $this->db->get('files');
		return $query->result_array();
	}
public function get_fifth()
	{
		$query = $this->db->get('files');
		return $query->result_array();
	}
public function get_sixth()
	{
		$query = $this->db->get('files');
		return $query->result_array();
	}


}