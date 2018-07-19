<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Post_Manage extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->database();
		$this->load->helper('url');
		$this->load->helper('text');
		$this->load->model('blog_model');
		$this->load->library('session');
		$this->load->library('encrypt');
		session_start();
		if(!isset($_SESSION['id'])){
			redirect(base_url(), 'refresh');
		}
	}

	public function index(){
		$data['post'] = $this->blog_model->get_all_posts();
		$data['cat'] = $this->blog_model->get_all_categories();
		$data['page_title'] = 'This is home page';
		$data['content'] = 'all_posts';
		$this->load->view('template_admin', $data);
	}

	public function post_delete($id){
		$result = $this->blog_model->post_delete_by_id($id);
		$this->session->set_flashdata('message', 'Post has been deleted');
		redirect('admin/post_manage', 'refresh');
	}

	public function create_post(){
		if($this->input->post('title')){
			$title = $this->input->post('title');
			$tags = $this->input->post('tags');
			$body = $this->input->post('body');
			$status = $this->input->post('status');
			$cat = $this->input->post('category');
			$time = date('Y-m-d H:i:s', time());
			$user = $_SESSION['id'];
			$config = array(
				'upload_path' => 'post_images',
				'allowed_types' => 'jpg|jpeg|png|pdf|',
			);
			$this->load->library('upload', $config);
			$this->upload->do_upload('post_image');
			$upload = $this->upload->data();
			$data = array(
				'title' => $title,
				'tags' => $tags,
				'status' => $status,
				'body' => $body,
				'category_id' => $cat,
				'user_id' => $user,
				'pubdate' => $time,
				'post_image' => base_url().'post_images/'.$upload['file_name'],
			);
			$this->blog_model->add_post($data);
			$this->session->set_flashdata('message', 'Post has been added');
			redirect('admin/post_manage', 'refresh');
		}
		else{
			$data['user'] = $this->blog_model->get_all_users();
			$data['cat'] = $this->blog_model->get_all_categories();
			$data['page_title'] = 'This is add post page';
			$data['content'] = 'add_post';
			$this->load->view('template_admin', $data);
		}
	}

	public function post_edit($id){

		if($this->input->post('title')){
			$title = $this->input->post('title');
			$tags = $this->input->post('tags');
			$body = $this->input->post('body');
			$status = $this->input->post('status');
			$cat = $this->input->post('category');
			$time = date('Y-m-d H:i:s', time());
			$user = $_SESSION['id'];
			$config = array(
				'upload_path' => 'post_images',
				'allowed_types' => 'jpg|jpeg|png|pdf|',
			);
			$this->load->library('upload', $config);
			$this->upload->do_upload('post_image');
			$upload = $this->upload->data();
			$data = array(
				'title' => $title,
				'tags' => $tags,
				'status' => $status,
				'body' => $body,
				'category_id' => $cat,
				'user_id' => $user,
				'pubdate' => $time,
				'post_image' => base_url().'post_images/'.$upload['file_name'],
			);
			$this->blog_model->update_post($id, $data);
			$this->session->set_flashdata('message', 'Post has been updated');
			redirect('admin/post_manage', 'refresh');
		}


		else{
			$data['page_title'] = 'This is edit post page';
			$data['content'] = 'edit_post';
			$data['post'] = $this->blog_model->get_single_post($id);
			$data['cat'] = $this->blog_model->get_all_categories();
			$this->load->view('template_admin', $data);
		}
		
	}


	public function view_users(){
		$data['post'] = $this->blog_model->get_all_users();
		$data['page_title'] = 'This is users page';
		$data['content'] = 'all_users';
		$this->load->view('template_admin', $data);
	}
		

}