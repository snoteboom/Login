<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ajax extends CI_Controller{
	public function index()
	{
		$this->load->view('ajax_index_view');
	}
	public function process()
	{
		// we can do whatever and the page doesnt refresh
		echo json_encode($this->input->post());
	}
}