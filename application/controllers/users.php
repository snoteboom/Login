<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users extends CI_Controller{
	public function __construct()
	{
		parent::__construct();
		// $this->output->enable_profiler(TRUE);
		$this->load->model('user');
	}
	public function index()
	{

		$this->load->view('login_view');
	}
	public function home()
	{
		$this->load->view('userInfo_view');
	}
	public function register()
	{
		$this->load->library("form_validation");
		$this->form_validation->set_rules("first_name", "First Name", "required|trim");
		$this->form_validation->set_rules("last_name", "Last Name", "required|trim");
		$this->form_validation->set_rules("email", "Email", "required|valid_email|trim|is_unique[users.email]");
		$this->form_validation->set_rules("password", "Password", "trim|min_length[8]|required|matches[confirm]");
		$this->form_validation->set_rules("confirm", "Confirm Password", "trim|min_length[8]|required");
		if ($this->form_validation->run() == FALSE)
		{
			$this->session->set_flashdata("errors", validation_errors());
			redirect(base_url('/'));
		}
		else
		{
			$this->user->add_user($this->input->post());
			$this->session->set_flashdata("success", "you made a new user!");
			redirect(base_url("/"));
		}
	}
	public function login()
	{	
		$user = $this->user->get_user($this->input->post());
		if ($user)
		{
			$this->session->set_userdata($user);
			redirect(base_url("/users/home"));
		}
		else
		{
			redirect(base_url("/"));
		}
	}
	public function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url('/'));
	}
}