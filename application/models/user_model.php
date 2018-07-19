<?php defined('BASEPATH') or exit('No direct script access allowed');

class User_Model extends CI_Model{
	function __construct(){
		parent::__construct();
	}

	public function user_verify($usr, $psw){
		$this->db->where('username', $usr);
		$this->db->where('password', $psw);
		$this->db->limit(1);
		$row = $this->db->get('ci_users');
		if($row->num_rows() > 0){
			return $row->row();
			
		}

	}

	public function new_user($data){
		return $this->db->insert('ci_users', $data);
	}

	public function get_single_user($id){
		$this->db->where('id', $id);
		return $this->db->get('ci_users');

	}

	public function edit_user($id, $data){
		$this->db->where('id', $id);
		return $this->db->update('ci_users', $data);
	}

	public function delete_user($id){
		$this->db->where('id', $id);
		return $this->db->delete('ci_users');
	}

	public function create_category($data){
		return $this->db->insert('ci_categories', $data);
	}

	public function delete_category($id){
		$this->db->where('id', $id);
		return $this->db->delete('ci_categories');
	}

	public function get_single_category($id){
		$this->db->where('id', $id);
		return $this->db->get('ci_categories');
	}

	public function edit_category($id, $data){
		$this->db->where('id', $id);
		return $this->db->update('ci_categories', $data);
	}


}