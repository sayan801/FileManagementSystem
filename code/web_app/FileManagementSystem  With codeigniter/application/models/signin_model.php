<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Signin_model extends CI_Model {

	public function __construct()
	{
		//$this->load->database();
	}
public function get_alll()
	{
		$query = $this->db->get('register');
		
		if($query->num_rows() == 1) { 
            return $query->result(); //if data is true
        } else {
            return false; //if data is wrong
        }
		
		
		//return $query->result_array();
	}
	
}