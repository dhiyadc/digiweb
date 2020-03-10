	<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Homepage extends CI_Controller {

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
		$this->load->model('homepage_database');
	}
	
	// Show login page
	public function index() {
		$data['blog'] = $this->homepage_database->getBlogs();
		$data['portofolio'] = $this->homepage_database->getPortofolios();
		$data['tentang'] = $this->homepage_database->getTentang();
		$this->load->view('home', $data);
	}
	

    
    
    
	
	
}
