<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Blog_model extends CI_Model{
	function __construct(){
		parent::__construct();
	}
	public function get_all_posts(){
		$this->db->order_by('id', 'DESC');
		return $this->db->get('admin_post');
	}

	public function get_single_post($id){
		$this->db->where('id', $id);
		return $this->db->get('admin_post');
	}

	public function get_all_categories(){
		return $this->db->get('ci_categories');
	}

	public function get_all_same_posts($id){
		$this->db->order_by('id', 'DESC');
		$this->db->where('category_id', $id);
		return $this->db->get('ci_posts');
	}

	public function get_all_comments($id){
		$this->db->where('post_id', $id);
		return $this->db->get('ci_comments');
	}

	public function post_delete_by_id($id){
		$this->db->where('id', $id);
		return $this->db->delete('ci_posts');

	}

	public function get_all_users(){
		return $this->db->get('ci_users');
	}

	public function add_post($data){
		return $this->db->insert('ci_posts',$data);
	}

	public function update_post($id, $data){
		$this->db->where('id', $id);
		return $this->db->update('ci_posts', $data);
	}

}