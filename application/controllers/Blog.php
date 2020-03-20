<?php

defined('BASEPATH') OR exit('No direct script access allowed');


class Blog extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Blog_model');
    }

    public function index(){
        if(isset($this->session->userdata['logged_in'])){
            $this->readblog();
        }
        else{
            redirect('admin');
        }	
    }

    public function createview() {
        if(isset($this->session->userdata['logged_in'])){
            $kategori = $this->Blog_model->getAllKategori();
            $this->load->view('_partials/header_admin');
            $this->load->view('blog/create_blog', ['kategori' => $kategori]);
            $this->load->view('_partials/footer_admin');
        }
        else{
            redirect('admin');
        }
          
    }

    public function createblog() {
        if(isset($this->session->userdata['logged_in'])){
            $id = $this->Blog_model->createblog();
            $idr = $this->Blog_model->getLastId();
            $this->Blog_model->createRating($idr);
            $kategori = $this->input->post('kategori');
            foreach ($kategori as $value) {
                $this->Blog_model->createKategori($id, $value);
            }
            redirect('blog/readblog');
        }
        else{
            redirect('admin');
        }
    }

    
    public function getRate($id){
        if(isset($this->session->userdata['logged_in'])){
            $like = $this->Blog_model->getRatingBlogli($id);
            $love = $this->Blog_model->getRatingBloglo($id);
            $haha = $this->Blog_model->getRatingBlogh($id);
            $wow = $this->Blog_model->getRatingBlogw($id);
            $sad = $this->Blog_model->getRatingBlogs($id);
            $angry = $this->Blog_model->getRatingBloga($id);
    
            // $sum = $like + $love + $haha + $wow + $sad + $angry;
    
            $temp = (($like * 5) + ($love * 4) + ($haha * 3) + ($wow * 2) + ($sad * 1) + ($angry * 0))/5;
            $this->Blog_user->updateRate($id, $temp);
            redirect(('Blog_user/detailAndComment/') . $id);
        }
        else{
            redirect('admin');
        }
    }


    public function readblog() {
        if(isset($this->session->userdata['logged_in'])){
            $blogg = $this->Blog_model->getAllBlog();
            $this->load->view('_partials/header_admin');
            $this->load->view('blog/read_blog', ['blog' => $blogg]);
            $this->load->view('_partials/footer_admin');
        }
        else{
            redirect('admin');
        }
    }

    public function update($id) {
        if(isset($this->session->userdata['logged_in'])){
            $data['ublog'] = $this->Blog_model->GetBlogById($id);
            $data['kategori'] = $this->Blog_model->getAllKategori();
            $data['kat_pilih'] = $this->Blog_model->getKategori($id);
            $this->load->view('_partials/header_admin');
            $this->load->view('blog/update_blog', $data);
            $this->load->view('_partials/footer_admin');
        }
        else{
            redirect('admin');
        }
    }

    public function fullDetail($id) {
        if(isset($this->session->userdata['logged_in'])){
        
            $data = $this->Blog_model->getDetailBlog($id);
            $comment = $this->Blog_model->getCommentById($id);
            $rating = $this->Blog_model->getRatingBlog($id);
    
            $data = [
                'id_blog' => $id,
                'judul' => $data[0]['judul'],
                'path_gambar' => $data[0]['path_gambar'],
                'author' => $data[0]['author'],
                'text' => $data[0]['text'],
                'tanggal_publish' => $data[0]['tanggal_publish'],
                'kategori' => array_map(function ($data) {return $data['kategori'];}, $data),
                'comment' => $comment,
                'rating' => $rating,
            ];
    
            $like = $this->Blog_model->getRatingBlogli($id);
            $love = $this->Blog_model->getRatingBloglo($id);
            $haha = $this->Blog_model->getRatingBlogh($id);
            $wow = $this->Blog_model->getRatingBlogw($id);
            $sad = $this->Blog_model->getRatingBlogs($id);
            $angry = $this->Blog_model->getRatingBloga($id);
            // $sum = "$like" + "$love" + "$haha" + "$wow" + "$sad" + "$angry";
        
            $temp = ((implode($like) * 5) + (implode($love) * 4) + (implode($haha) * 3) + (implode($wow) * 2) + (implode($sad) * 1) + (implode($angry) * 0))/5;
          
            $this->Blog_model->updateRate($id, $temp);
    
            $this->load->view('_partials/header_admin');
            $this->load->view('blog/detail_view', $data);
            $this->load->view('_partials/footer_admin');
        }
        else{
            redirect('admin');
        }

    }

    public function updateblog($id) {
        if(isset($this->session->userdata['logged_in'])){
            $this->Blog_model->updateeBlog($id);
            $kategori = $this->input->post('kategori');
            $this->Blog_model->deleteBeforeKategori($id);
            foreach ($kategori as $value) {
                $this->Blog_model->createKategori($id, $value);
            }
            redirect(base_url('blog/fullDetail/' . $id));
        }
        else{
            redirect('admin');
        }
    }

    public function deleteblog($id) {
        if(isset($this->session->userdata['logged_in'])){
            $this->Blog_model->deleteblogg($id);
            $this->session->set_flashdata('message', 'Blog Terhapus !');
            redirect(base_url('blog/readblog'));
        }
        else{
            redirect('admin');
        }
    }

    public function deleteComment($id, $id_blog) {
        if(isset($this->session->userdata['logged_in'])){
            $this->Blog_model->delete_comment($id);
            $this->session->set_flashdata('message', 'Komentar terhapus!');
            redirect('Blog/fullDetail/' . $id_blog);
        }
        else{
            redirect('admin');
        }
    }


}


