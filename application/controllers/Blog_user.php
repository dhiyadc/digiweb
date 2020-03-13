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
        $data['ratesp'] = $this->Blog_user_model->getRatingBlogSP($id);
        $data['ratep'] = $this->Blog_user_model->getRatingBlogP($id);
        $data['ratec'] = $this->Blog_user_model->getRatingBlogC($id);
        $data['ratekp'] = $this->Blog_user_model->getRatingBlogKP($id);
        $data['ratetp'] = $this->Blog_user_model->getRatingBlogTP($id);

        $this->load->view('blog_user/detail_blog' , $data);
    }

    public function save_ratingsp($id){

        $data =  $this->input->post('point');

        if($this->Blog_user_model->getRatingBlogSP($id) == null){
            $this->Blog_user_model->insertRatingsp($id, $data);
            redirect(('Blog_user/detailAndComment/') . $id);
        }
        else {
            $this->Blog_user_model->updateRatingsp($id, $data);
            redirect(('Blog_user/detailAndComment/') . $id);
        }
    }
    public function save_ratingp($id){

        $data =  $this->input->post('point');

        if($this->Blog_user_model->getRatingBlogP($id) == null){
            $this->Blog_user_model->insertRatingp($id, $data);
            redirect(('Blog_user/detailAndComment/') . $id);
        }
        else {
            $this->Blog_user_model->updateRatingp($id, $data);
            redirect(('Blog_user/detailAndComment/') . $id);
        }
    }
    public function save_ratingc($id){

        $data =  $this->input->post('point');

        if($this->Blog_user_model->getRatingBlogC($id) == null){
            $this->Blog_user_model->insertRatingc($id, $data);
            redirect(('Blog_user/detailAndComment/') . $id);
        }
        else {
            $this->Blog_user_model->updateRatingc($id, $data);
            redirect(('Blog_user/detailAndComment/') . $id);
        }
    }
    public function save_ratingkp($id){

        $data =  $this->input->post('point');

        if($this->Blog_user_model->getRatingBlogKP($id) == null){
            $this->Blog_user_model->insertRatingkp($id, $data);
            redirect(('Blog_user/detailAndComment/') . $id);
        }
        else {
            $this->Blog_user_model->updateRatingkp($id, $data);
            redirect(('Blog_user/detailAndComment/') . $id);
        }
    }
    public function save_ratingtp($id){

        $data =  $this->input->post('point');

        if($this->Blog_user_model->getRatingBlogTP($id) == null){
            $this->Blog_user_model->insertRatingtp($id, $data);
            redirect(('Blog_user/detailAndComment/') . $id);
        }
        else {
            $this->Blog_user_model->updateRatingtp($id, $data);
            redirect(('Blog_user/detailAndComment/') . $id);
        }
    }
  

}

?>