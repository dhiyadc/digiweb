<?php 

class Blog_user extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('Blog_user_model');
    }

    public function index(){
        redirect('Blog_user/read_blog');
    }

    public function read_blog(){
        $ublog = $this->Blog_user_model->getAllBlog();
        $this->load->view('blog_user/read_list' , ['blog' => $ublog]);
    }


    public function back(){
        $this->load->view('blog/option');
    }

    public function createComment($id){
        $this->Blog_user_model->create_comment($id);
        redirect(('Blog_user/detailAndComment/') . $id);
    }

    public function detailAndComment($id){
        $data['blog'] = $this->Blog_user_model->getDetailBlog($id);
        $data['comment'] =  $this->Blog_user_model->getCommentbyBlogId($id);
        $this->load->view('blog_user/detail_blog' , $data);
    }

}

?>