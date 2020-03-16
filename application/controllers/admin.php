<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        // Load form helper library
		$this->load->helper('form');

		// Load form validation library
		$this->load->library('form_validation');

		// Load session library
		$this->load->library('session');

		// Load database
		$this->load->model('admin_login_database');

		$this->load->helper('security');
	}
	
	// Show login page
	public function index() {

		if(isset($this->session->userdata['logged_in'])){
			redirect('home_admin');
		}else{
			$this->load->view('admin/login_admin');
		}
	}
	
	// Check for user login process
	public function user_login_process() {
	
	$this->form_validation->set_rules('username', 'Username', 'trim|xss_clean');
	$this->form_validation->set_rules('password', 'Password', 'trim|xss_clean');
	
	if ($this->form_validation->run() == FALSE) {
		if(isset($this->session->userdata['logged_in'])){
			redirect('home_admin');
		}else{
			$this->load->view('admin/login_admin');
		}
	} else {
		$data = array(
		'username' => $this->input->post('username'),
		'password' => $this->input->post('password')
		);
		$result = $this->admin_login_database->login($data);
		if ($result == TRUE) {
		
			$username = $this->input->post('username');
			//$result = $this->admin_login_database->read_user_information($username);
				//if ($result != false) {
					$session_data = array(
					'username' => $username, 
					//$result[0]->username,
					);
					// Add user data in session
					$this->session->set_userdata('logged_in', $session_data);
					redirect('admin');
				//}
			} else {
			$data = array(
			'error_message' => 'Invalid Username or Password'
			);
			$this->load->view('admin/login_admin', $data);
			}
	}
}
	
	// Logout from admin page
	public function logout() {
	
		// Removing session data
		$sess_array = array(
		'username' => ''
		);
		$this->session->unset_userdata('logged_in', $sess_array);
		redirect('admin');
	}
	
}
