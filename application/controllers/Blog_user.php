<?php

class Blog_user extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Blog_user_model');
    }

    public function index() {
        redirect('Blog_user/read_blog');
    }

    public function read_blog() {
        $ublog = $this->Blog_user_model->getAllBlog();
        $this->load->view('blog_user/read_list', ['blog' => $ublog]);
    }

    public function back() {
        $this->load->view('blog/option');
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

        $this->load->view('blog_user/detail_blog', $data);
    }

    public function save_ratingli($id) {

        if (isset($_COOKIE[$id])) {
            $this->session->set_flashdata('message', 'Sudah di like');
            redirect(('Blog_user/detailAndComment/') . $id);
        } else {
            set_cookie($id, 'liked', time() + 3153600000);
            $data = $this->Blog_user_model->getRatingBlogli($id);
            $plus = implode($data) + 1;
            $this->Blog_user_model->updateRatingli($id, $plus);
            redirect(('Blog_user/detailAndComment/') . $id);
        }

    }
    public function save_ratinglo($id) {

        if (isset($_COOKIE[$id])) {
            $this->session->set_flashdata('message', 'sudah di like');
            redirect(('Blog_user/detailAndComment/') . $id);
        } else {
            set_cookie($id, 'liked', time() + 3153600000);
            $data = $this->Blog_user_model->getRatingBloglo($id);
            $plus = implode($data) + 1;
            $this->Blog_user_model->updateRatinglo($id, $plus);
            redirect(('Blog_user/detailAndComment/') . $id);
        }
    }
    public function save_ratingh($id) {

        if (isset($_COOKIE[$id])) {
            $this->session->set_flashdata('message', 'sudah di like');
            redirect(('Blog_user/detailAndComment/') . $id);
        } else {
            set_cookie($id, 'liked', time() + 3153600000);
            $data = $this->Blog_user_model->getRatingBlogh($id);
            $plus = implode($data) + 1;
            $this->Blog_user_model->updateRatingh($id, $plus);
            redirect(('Blog_user/detailAndComment/') . $id);
        }
    }
    public function save_ratingw($id) {

        if (isset($_COOKIE[$id])) {
            $this->session->set_flashdata('message', 'sudah di like');
            redirect(('Blog_user/detailAndComment/') . $id);
        } else {
            set_cookie($id, 'liked', time() + 3153600000);
            $data = $this->Blog_user_model->getRatingBlogw($id);
            $plus = implode($data) + 1;
            $this->Blog_user_model->updateRatingw($id, $plus);
            redirect(('Blog_user/detailAndComment/') . $id);
        }
    }

    public function save_ratings($id) {

        if (isset($_COOKIE[$id])) {
            $this->session->set_flashdata('message', 'sudah di like');
            redirect(('Blog_user/detailAndComment/') . $id);
        } else {
            set_cookie($id, 'liked', time() + 3153600000);
            $data = $this->Blog_user_model->getRatingBlogs($id);
            $plus = implode($data) + 1;
            $this->Blog_user_model->updateRatings($id, $plus);
            redirect(('Blog_user/detailAndComment/') . $id);
        }
    }

    public function save_ratinga($id) {

        if (isset($_COOKIE[$id])) {
            $this->session->set_flashdata('message', 'sudah di like');
            redirect(('Blog_user/detailAndComment/') . $id);
        } else {
            set_cookie($id, 'liked', time() + 3153600000);
            $data = $this->Blog_user_model->getRatingBloga($id);
            $plus = implode($data) + 1;
            $this->Blog_user_model->updateRatinga($id, $plus);
            redirect(('Blog_user/detailAndComment/') . $id);
        }
    }

}
