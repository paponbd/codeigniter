<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_Manage extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->database();
		$this->load->helper('url');
		$this->load->helper('text');
		$this->load->model('blog_model');
		$this->load->model('user_model');
		$this->load->library('session');
		$this->load->library('encrypt');
		session_start();
		if(!isset($_SESSION['id'])){
			redirect(base_url(), 'refresh');
		}
	}

	public function index(){
		$data['post'] = $this->blog_model->get_all_users();
		$data['page_title'] = 'This is users page';
		$data['content'] = 'all_users';
		$this->load->view('template_admin', $data);
	}



	public function create_user(){
		if($this->input->post('name')){
			$name = $this->input->post('name');
			$email = $this->input->post('email');
			$password = $this->encrypt->sha1($this->input->post('password'));
			$status = $this->input->post('status');
			$config = array(
				'upload_path' => "user_images",
				'allowed_types' => "gif|jpg|png|jpeg|pdf",
				'overwrite' => TRUE,
				'max_size' => "204888845000", // Can be set to particular file size , here it is 2 MB(2048 Kb)
				'max_height' => "1024",
				'max_width' => "1024"
				);
			$this->load->library('upload', $config);
			$this->upload->do_upload('user_image');
			$upload_data = $this->upload->data();
			
			$data = array(
				'username' => $name,
				'email' => $email,
				'password' => $password,
				'status' => $status,
				'user_image' => base_url().'user_images/'.$upload_data['file_name'],
			);
			$this->user_model->new_user($data);
			$this->session->set_flashdata('message', 'User has been created successfully');
			redirect('admin/user_manage');
		}

		else{
			$data['page_title'] = 'This is add add_user page';
			$data['content'] = 'add_user';
			$this->load->view('template_admin', $data);
		}
	}


	public function edit_user($id){

		if($this->input->post('name')){
			$name = $this->input->post('name');
			$email = $this->input->post('email');
			$password = $this->input->post('password');
			$status = $this->input->post('status');

			$data = array(
				'username' => $name,
				'email' => $email,
				'password' => $password,
				'status' => $status,
			);
			$this->user_model->edit_user($id, $data);
			$this->session->set_flashdata('message', 'User has been created successfully');
			redirect('admin/user_manage');
		}


		else{
			$data['page_title'] = 'This is add edit_user page';
			$data['content'] = 'edit_user';
			$data['post'] = $this->user_model->get_single_user($id);
			$this->load->view('template_admin', $data);
		}
		
	}

	public function delete_user($id){
		$this->user_model->delete_user($id);
		redirect('admin/user_manage', 'refresh');
	}

	public function edit_category($id, $data){
		$this->db->where('id', $id);
		return $this->db->update('ci_categories', $data);
	}	
		

}