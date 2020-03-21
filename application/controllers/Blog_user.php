<?php

class Blog_user extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Blog_user_model');
    }

    public function index() {

          $this->load->view('layout/header');
          if($this->input->post('submit')){
              $data['keyword'] = $this->input->post('keyword');
          }
          else {
              $data['keyword'] = "";
          }

          $data['blog'] = $this->Blog_user_model->getAllBlog($data['keyword']);
          $data['blogKategori'] = $this->Blog_user_model->getBlogKategori();
          $data['kategori'] = $this->Blog_user_model->getKategori();
          $data['popular'] = $this->Blog_user_model->popularBlog();
        
        $this->load->view('blog_user/blog' , $data );
        $this->load->view('layout/footer');
    }

    public function blogByKategori($kategori){

        $this->load->view('layout/header');
          if($this->input->post('submit')){
              $data['keyword'] = $this->input->post('keyword');
          }
          else {
              $data['keyword'] = "";
          }
        $data['blog'] = $this->Blog_user_model->getBlogbykategori($data['keyword'], $kategori);
        $data['blogKategori'] = $this->Blog_user_model->getBlogKategori();
        $data['kategori'] = $this->Blog_user_model->getKategori();
        $data['popular'] = $this->Blog_user_model->popularBlog();
      
        $this->load->view('blog_user/blog_kategori' , $data );
        $this->load->view('layout/footer');
    }

    public function detailAndComment($id) {

        $data = $this->Blog_user_model->getDetailBlog($id);
        $comment = $this->Blog_user_model->getCommentByBlogId($id);

        $data = [
            'id_blog' => $id,
            'judul' => $data[0]['judul'],
            'path_gambar' => $data[0]['path_gambar'],
            'author' => $data[0]['author'],
            'text' => $data[0]['text'],
            'tanggal_publish' => $data[0]['tanggal_publish'],
            'kategori' => array_map(function ($data) {return $data['kategori'];}, $data),
            'comment' => $comment,

        ];

        $like = $this->Blog_user_model->getRatingBlogli($id);
        $love = $this->Blog_user_model->getRatingBloglo($id);
        $haha = $this->Blog_user_model->getRatingBlogh($id);
        $wow = $this->Blog_user_model->getRatingBlogw($id);
        $sad = $this->Blog_user_model->getRatingBlogs($id);
        $angry = $this->Blog_user_model->getRatingBloga($id);
    
        $temp = ((implode($like) * 5) + (implode($love) * 4) + (implode($haha) * 3) + (implode($wow) * 2) + (implode($sad) * 1) + (implode($angry) * 0))/5;
      
        $this->Blog_user_model->updateRate($id, $temp);

        $data['popular'] = $this->Blog_user_model->popularBlog();

        $this->load->view('blog_user/singleblog', $data);
    }


    public function createComment($id) {
        $name = $this->input->post('nama_komen');
        if (($this->input->post('nama_komen')) == null) {
            $name = "Anonim";
        } else {
            $name = $this->input->post('nama_komen');
        }

        $this->Blog_user_model->create_comment($id, $name);
        redirect(('Blog_user/detailAndComment/') . $id);
    }

    public function save_ratingli($id) {

        if (isset($_COOKIE[$id])) {
            $this->session->set_flashdata('message', 'Anda Telah Memberikan Penilaian');
            redirect(('Blog_user/detailAndComment/') . $id);
        } else {
            set_cookie($id, 'liked', time() + 3153600000);
            $data = $this->Blog_user_model->getRatingBlogli($id);
            $plus = implode($data) + 1;
            $this->Blog_user_model->updateRatingli($id, $plus);
            $this->session->set_flashdata('berhasil', 'Terima Kasih Telah Memberikan Penilaian');
            redirect(('Blog_user/detailAndComment/') . $id);
        }

    }
    public function save_ratinglo($id) {

        if (isset($_COOKIE[$id])) {
            $this->session->set_flashdata('message', 'Anda Telah Memberikan Penilaian');
            redirect(('Blog_user/detailAndComment/') . $id);
        } else {
            set_cookie($id, 'liked', time() + 3153600000);
            $data = $this->Blog_user_model->getRatingBloglo($id);
            $plus = implode($data) + 1;
            $this->Blog_user_model->updateRatinglo($id, $plus);
            $this->session->set_flashdata('berhasil', 'Terima Kasih Telah Memberikan Penilaian');
            redirect(('Blog_user/detailAndComment/') . $id);
        }
    }
    public function save_ratingh($id) {

        if (isset($_COOKIE[$id])) {
            $this->session->set_flashdata('message', 'Anda Telah Memberikan Penilaian');
            redirect(('Blog_user/detailAndComment/') . $id);
        } else {
            set_cookie($id, 'liked', time() + 3153600000);
            $data = $this->Blog_user_model->getRatingBlogh($id);
            $plus = implode($data) + 1;
            $this->Blog_user_model->updateRatingh($id, $plus);
            $this->session->set_flashdata('berhasil', 'Terima Kasih Telah Memberikan Penilaian');
            redirect(('Blog_user/detailAndComment/') . $id);
        }
    }
    public function save_ratingw($id) {

        if (isset($_COOKIE[$id])) {
            $this->session->set_flashdata('message', 'Anda Telah Memberikan Penilaian');
            redirect(('Blog_user/detailAndComment/') . $id);
        } else {
            set_cookie($id, 'liked', time() + 3153600000);
            $data = $this->Blog_user_model->getRatingBlogw($id);
            $plus = implode($data) + 1;
            $this->Blog_user_model->updateRatingw($id, $plus);
            $this->session->set_flashdata('berhasil', 'Terima Kasih Telah Memberikan Penilaian');
            redirect(('Blog_user/detailAndComment/') . $id);
        }
    }

    public function save_ratings($id) {

        if (isset($_COOKIE[$id])) {
            $this->session->set_flashdata('message', 'Anda Telah Memberikan Penilaian');
            redirect(('Blog_user/detailAndComment/') . $id);
        } else {
            set_cookie($id, 'liked', time() + 3153600000);
            $data = $this->Blog_user_model->getRatingBlogs($id);
            $plus = implode($data) + 1;
            $this->Blog_user_model->updateRatings($id, $plus);
            $this->session->set_flashdata('berhasil', 'Terima Kasih Telah Memberikan Penilaian');
            redirect(('Blog_user/detailAndComment/') . $id);
        }
    }

    public function save_ratinga($id) {

        if (isset($_COOKIE[$id])) {
            $this->session->set_flashdata('message', 'Anda Telah Memberikan Penilaian');
            redirect(('Blog_user/detailAndComment/') . $id);
        } else {
            set_cookie($id, 'liked', time() + 3153600000);
            $data = $this->Blog_user_model->getRatingBloga($id);
            $plus = implode($data) + 1;
            $this->Blog_user_model->updateRatinga($id, $plus);
            $this->session->set_flashdata('berhasil', 'Terima Kasih Telah Memberikan Penilaian');
            redirect(('Blog_user/detailAndComment/') . $id);
        }
    }

}
