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

    public function save_ratingsp($id){

        if(isset($_COOKIE[$id])){
            $this->session->set_flashdata('message', 'Sudah di like');
            redirect(('Blog_user/detailAndComment/') . $id);
        }
        else{
            set_cookie($id, 'liked', time() + 3153600000);
            $data =  $this->Blog_user_model->getRatingBlogSP($id);
            $plus = implode($data)+1;
            $this->Blog_user_model->updateRatingsp($id, $plus);
            redirect(('Blog_user/detailAndComment/') . $id);
        }

    }
    public function save_ratingp($id){

        if(isset($_COOKIE[$id])){
            $this->session->set_flashdata('message', 'sudah di like');
            redirect(('Blog_user/detailAndComment/') . $id);
        }
        else{
            set_cookie($id, 'liked', time() + 3153600000);
            $data =  $this->Blog_user_model->getRatingBlogP($id);
            $plus = implode($data)+1;
            $this->Blog_user_model->updateRatingp($id, $plus);
            redirect(('Blog_user/detailAndComment/') . $id);
        }
    }
    public function save_ratingc($id){

        if(isset($_COOKIE[$id])){
            $this->session->set_flashdata('message', 'sudah di like');
            redirect(('Blog_user/detailAndComment/') . $id);
        }
        else{
            set_cookie($id, 'liked', time() + 3153600000);
            $data =  $this->Blog_user_model->getRatingBlogC($id);
            $plus = implode($data)+1;
            $this->Blog_user_model->updateRatingc($id, $plus);
            redirect(('Blog_user/detailAndComment/') . $id);
        }
    }
    public function save_ratingkp($id){

        if(isset($_COOKIE[$id])){
            $this->session->set_flashdata('message', 'sudah di like');
            redirect(('Blog_user/detailAndComment/') . $id);
        }
        else{
            set_cookie($id, 'liked', time() + 3153600000);
            $data =  $this->Blog_user_model->getRatingBlogKP($id);
            $plus = implode($data)+1;
            $this->Blog_user_model->updateRatingkp($id, $plus);
            redirect(('Blog_user/detailAndComment/') . $id);
        }
    }

    public function save_ratingtp($id){

        if(isset($_COOKIE[$id])){
            $this->session->set_flashdata('message', 'sudah di like');
            redirect(('Blog_user/detailAndComment/') . $id);
        }
        else{
            set_cookie($id, 'liked', time() + 3153600000);
            $data =  $this->Blog_user_model->getRatingBlogTP($id);
            $plus = implode($data)+1;
            $this->Blog_user_model->updateRatingtp($id, $plus);
            redirect(('Blog_user/detailAndComment/') . $id);
        }
    }
  

}

?>