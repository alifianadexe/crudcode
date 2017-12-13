<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		if($this->session->has_userdata('username')){
			$this->home();
		}else{
			$this->loginPage();
		}
		

	}

	public function create()
	{
		
		$this->load->view('create');
	}

	public function save(){
		//set rules
		$this->form_validation->set_rules('title','Title Post','required');
		$this->form_validation->set_rules('description','Description','required');

		//form validation
		if ($this->form_validation->run() == FALSE){

			$this->load->view('create');
		
		}else{
		
			//input data
		
			$data = $this->input->post();
			$this->load->model('query');
			
			unset($data['submit']);
			$data['date_created'] = date("Y-m-d h:i:sa");
			if($this->query->insertPost($data)){
				$this->session->set_flashdata('msg', 'Insert Post Success!');		
			}else{
				$this->session->set_flashdata('msg', 'Failed, this is a point!');
			}
			
			return redirect('welcome/home');
		}
	}

	public function loginPage(){
		$this->load->view('login');
	}

	public function view($id)
	{
		$this->load->model('query');
		$post = $this->query->getOnePost($id);
		$this->load->view('view',['post' => $post]);
	}

	public function home(){
		$this->load->model('query');
		$post = $this->query->getPost();
		$this->load->view('welcome_message',['post' => $post]);
	}

	public function edit($id)
	{
		$this->load->model('query');
		$post = $this->query->getOnePost($id);
		$this->load->view('update',['post' => $post]);
	}

	public function updatePost($id){
		//set rules
		$this->form_validation->set_rules('title','Title Post','required');
		$this->form_validation->set_rules('description','Description','required');

		//form validation
		if ($this->form_validation->run() == FALSE){

			$this->load->view('create');
		
		}else{
		
			//input data
		
			$data = $this->input->post();
			$this->load->model('query');
			
			unset($data['submit']);
					
			if($this->query->updatePost($data,$id)){
				$this->session->set_flashdata('msg', 'Update Post Success!');		
			}else{
				$this->session->set_flashdata('msg', 'Failed, this is a point!');
			}
			
			return redirect('welcome/home');
		}
	}

	public function delete($id){
		$this->load->model('query');

		if($this->query->deletePost($id)){
			$this->session->set_flashdata('msg', 'Delete Post Success!');		
		}else{
			$this->session->set_flashdata('msg', 'Failed, this is a point!');
		}

			redirect('welcome');
	}


	public function loginCheck(){
		$this->load->model('query');
		$data = $this->input->post();
		unset($data['submit']);

		if($result = $this->query->loginCheck($data['username'])){
			$this->session->set_userdata('user', $result);
			$this->home();
		}else{
			$this->session->set_flashdata('msg', 'Login Failed!');
			$this->load->view('login');
		}	
	}

}
