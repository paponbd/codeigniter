<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
* 
*/
class Blog extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->helper('url');
		$this->load->helper('text');
		$this->load->model('blog_model');
		$this->load->model('user_model');
		$this->load->library('session');
		$this->load->library('encrypt');
		session_start();
	}

	public function index(){
		$data['post'] = $this->blog_model->get_all_posts();
		$data['cat'] = $this->blog_model->get_all_categories();
		$data['page_title'] = 'This is home page';
		$data['content'] = 'blog_home';
		$this->load->view('template_home', $data);
	}

	public function single($id){
		$data['post'] = $this->blog_model->get_single_post($id);
		$data['comments'] = $this->blog_model->get_all_comments($id);
		$data['cat'] = $this->blog_model->get_all_categories();
		$data['page_title'] = 'This is single post page';
		$data['content'] = 'blog_single';
		$this->load->view('template_single', $data);
	}

	public function same($id){
		$data['post'] = $this->blog_model->get_all_same_posts($id);
		$data['cat'] = $this->blog_model->get_all_categories();
		$data['page_title'] = 'This is same posts page';
		$data['content'] = 'blog_home';
		$this->load->view('template_home', $data);
	}

	public function verify(){
		$usr = $this->input->post('user');
		$psw = $this->input->post('pswd');
		$psws = $this->encrypt->sha1($psw);
		$row = $this->user_model->user_verify($usr, $psws);
		//print_r($row);
		if(isset($row->id)){
		$_SESSION['id'] = $row->id;
		$_SESSION['user'] = $row->username;
		$_SESSION['image'] = $row->user_image;
		redirect('admin/dashboard', 'refresh');
		}
		else{
			redirect('blog', 'refresh');
		}

	}


}