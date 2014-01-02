<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Signup_model extends CI_Model {

	public function __construct()
	{
		//$this->load->database();
	}
	public function insert_user($data)
	{
		$this->db->insert('register', $data);

		$id = $this->db->insert_id();
		
		return (isset($id)) ? $id : FALSE;		
	}
	
	
}