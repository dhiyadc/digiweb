<?php 

class Blog_user extends CI_Controller {
    public function index(){
        $this->load->view('blog_user/read_list');
    }


}

?>