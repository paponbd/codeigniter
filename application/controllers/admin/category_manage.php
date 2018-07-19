<?php defined('BASEPATH') or exit('No direct script aaccess allowed');

class Category_Manage extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('blog_model');
		$this->load->model('user_model');
		$this->load->library('session');
		$this->load->helper('url');
		$this->load->database();
		session_start();
		if(!isset($_SESSION['id'])){
			redirect(base_url(), 'refresh');
		}
	}

	public function index(){
		$data['post'] = $this->blog_model->get_all_categories();
		$data['page_title'] = 'This is all category page';
		$data['content'] = 'all_categories';
		$this->load->view('template_admin', $data);

	}


	public function create_category(){
		if($this->input->post('name')){
			$name = $this->input->post('name');
			$shtdesc = $this->input->post('shtdesc');
			$lngdesc = $this->input->post('lngdesc');
			$status = $this->input->post('status');

			$data = array(
				'name' => $name,
				'shortdesc' => $shtdesc,
				'longdesc' => $lngdesc,
				'status' => $status,
			);

			$this->user_model->create_category($data);
			$this->session->set_flashdata('message', 'Catgegory has been created successfully');
			redirect('admin/category_manage');
		}

		else{
			$data['page_title'] = 'This is add category page';
			$data['content'] = 'add_category';
			$this->load->view('template_admin', $data);
		}
	}

	public function delete_category($id){
		$this->user_model->delete_category($id);
		redirect('admin/category_manage');
	}


	public function edit_category($id){

		if($this->input->post('name')){
			$name = $this->input->post('name');
			$shtdesc = $this->input->post('shtdesc');
			$lngdesc = $this->input->post('lngdesc');
			$status = $this->input->post('status');

			$data = array(
				'name' => $name,
				'shortdesc' => $shtdesc,
				'longdesc' => $lngdesc,
				'status' => $status,
			);

			$this->user_model->edit_category($id, $data);
			$this->session->set_flashdata('message', 'Catgegory has been updated successfully');
			redirect('admin/category_manage');
		}


		else{
			$data['page_title'] = 'This is add edit category page';
			$data['content'] = 'edit_category';
			$data['post'] = $this->user_model->get_single_category($id);
			$this->load->view('template_admin', $data);
		}
		
	}
}