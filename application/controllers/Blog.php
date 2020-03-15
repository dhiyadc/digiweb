<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->model('Blog_user_model');
    }

    public function index(){
        //Controller Home
        $this->load->view('layout/header');
        if($this->input->post('submit')){
            $data['keyword'] = $this->input->post('keyword');
        }
        else {
            $data['keyword'] = "";
        }
        $ublog = $this->Blog_user_model->getAllBlog($data['keyword']);
        $this->load->view('blog_user/blog' , ['blog' => $ublog] );
        $this->load->view('layout/footer');
    }

    public function blogdetail($id){
        $this->load->view('layout/header');
        $data['blog'] = $this->Blog_user_model->getDetailBlog($id);
        $data['comment'] =  $this->Blog_user_model->getCommentbyBlogId($id);
        $this->load->view('blog_user/singleblog', $data);
        $this->load->view('layout/footer');
    }



    public function read_blog(){
        $ublog = $this->Blog_user_model->getAllBlog();
        $this->load->view('blog_user/blog' , ['blog' => $ublog]);
    }

    public function createComment($id){
        $name = $this->input->post('nama_komen');
        if(($this->input->post('nama_komen')) == null){
            $name = "Anonim";
        }
        else {
            $name = $this->input->post('nama_komen');
        }

        $this->Blog_user_model->create_comment($id, $name);
        redirect(('Blog/detailAndComment/') . $id);
    }

    public function detailAndComment($id){

        $data['blog'] = $this->Blog_user_model->getDetailBlog($id);
        $data['comment'] =  $this->Blog_user_model->getCommentbyBlogId($id);

        $this->load->view('blog_user/singleblog' , $data);
    }

    public function save_ratingli($id){

        if(isset($_COOKIE[$id])){
            $this->session->set_flashdata('message', 'Anda Telah Memberikan Rating ');
            redirect(('Blog/detailAndComment/') . $id);
        }
        else{
            set_cookie($id, 'liked', time() + 3153600000);
            $data =  $this->Blog_user_model->getRatingBlogli($id);
            $plus = implode($data)+1;
            $this->Blog_user_model->updateRatingli($id, $plus);
            $this->session->set_flashdata('Berhasil', 'Terima Kasih Atas Penilaian Anda');
            redirect(('Blog/detailAndComment/') . $id);
        }

    }
    public function save_ratinglo($id){

        if(isset($_COOKIE[$id])){
            $this->session->set_flashdata('message', 'Anda Telah Memberikan Rating');
            redirect(('Blog/detailAndComment/') . $id);
        }
        else{
            set_cookie($id, 'liked', time() + 3153600000);
            $data =  $this->Blog_user_model->getRatingBloglo($id);
            $plus = implode($data)+1;
            $this->Blog_user_model->updateRatinglo($id, $plus);
            $this->session->set_flashdata('Berhasil', 'Terima Kasih Atas Penilaian Anda');
            redirect(('Blog/detailAndComment/') . $id);
        }
    }
    public function save_ratingh($id){

        if(isset($_COOKIE[$id])){
            $this->session->set_flashdata('message', 'Anda Telah Memberikan Rating');
            redirect(('Blog/detailAndComment/') . $id);
        }
        else{
            set_cookie($id, 'liked', time() + 3153600000);
            $data =  $this->Blog_user_model->getRatingBlogh($id);
            $plus = implode($data)+1;
            $this->Blog_user_model->updateRatingh($id, $plus);
            $this->session->set_flashdata('Berhasil', 'Terima Kasih Atas Penilaian Anda');
            redirect(('Blog/detailAndComment/') . $id);
        }
    }
    public function save_ratingw($id){

        if(isset($_COOKIE[$id])){
            $this->session->set_flashdata('message', 'Anda Telah Memberikan Rating');
            redirect(('Blog/detailAndComment/') . $id);
        }
        else{
            set_cookie($id, 'liked', time() + 3153600000);
            $data =  $this->Blog_user_model->getRatingBlogw($id);
            $plus = implode($data)+1;
            $this->Blog_user_model->updateRatingw($id, $plus);
            $this->session->set_flashdata('Berhasil', 'Terima Kasih Atas Penilaian Anda');
            redirect(('Blog/detailAndComment/') . $id);
        }
    }

    public function save_ratings($id){

        if(isset($_COOKIE[$id])){
            $this->session->set_flashdata('message', 'Anda Telah Memberikan Rating');
            redirect(('Blog/detailAndComment/') . $id);
        }
        else{
            set_cookie($id, 'liked', time() + 3153600000);
            $data =  $this->Blog_user_model->getRatingBlogs($id);
            $plus = implode($data)+1;
            $this->Blog_user_model->updateRatings($id, $plus);
            $this->session->set_flashdata('Berhasil', 'Terima Kasih Atas Penilaian Anda');
            redirect(('Blog/detailAndComment/') . $id);
        }
    }

    public function save_ratinga($id){

        if(isset($_COOKIE[$id])){
            $this->session->set_flashdata('message', 'Anda Telah Memberikan Rating');
            redirect(('Blog/detailAndComment/') . $id);
        }
        else{
            set_cookie($id, 'liked', time() + 3153600000);
            $data =  $this->Blog_user_model->getRatingBloga($id);
            $plus = implode($data)+1;
            $this->Blog_user_model->updateRatinga($id, $plus);
            $this->session->set_flashdata('Berhasil', 'Terima Kasih Atas Penilaian Anda');
            redirect(('Blog/detailAndComment/') . $id);
        }
    }

    
  
    
}