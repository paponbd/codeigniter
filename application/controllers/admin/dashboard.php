<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('session');
		$this->load->model('blog_model');
		$this->load->database();
		session_start();
		if(!isset($_SESSION['id'])){
			redirect(base_url(), 'refresh');
		}
	}

	public function index(){
		$data['page_title'] = 'Welcome to Dashboard';
		$data['content'] = 'admin_welcome';
		
		$this->load->view('template_admin', $data);
	}

	public function logout(){
		//unset($_SESSION['user']);
		//unset($_SESSION['id']);
		session_destroy();
		redirect(base_url(), 'refresh');
	}



}