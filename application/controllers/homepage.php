<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admin extends CI_Controller {

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
		$this->load->view('konten');
    }
    
    
    
	
	
}
