<?php

class Blog extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Blog_model');
        $this->load->model('Blog_user_model');
    }

    public function createview() {
        $kategori = $this->Blog_model->getAllKategori();
        $this->load->view('_partials/header_admin');
        $this->load->view('blog/create_blog', ['kategori' => $kategori]);
        $this->load->view('_partials/footer_admin');
    }

    public function createblog() {
        $id = $this->Blog_model->createblog();
        $idr = $this->Blog_model->getLastId();
        $this->Blog_user_model->createRating($idr);
        $kategori = $this->input->post('kategori');
        foreach ($kategori as $value) {
            $this->Blog_model->createKategori($id, $value);
        }
        redirect('blog/readblog');
    }

    public function readblog() {
        $blogg = $this->Blog_model->getAllBlog();
        $this->load->view('_partials/header_admin');
        $this->load->view('blog/read_blog', ['blog' => $blogg]);
        $this->load->view('_partials/footer_admin');
    }

    public function update($id) {
        $data['ublog'] = $this->Blog_model->GetBlogById($id);
        $data['kategori'] = $this->Blog_model->getAllKategori();
        $data['kat_pilih'] = $this->Blog_model->getKategori($id);
        $this->load->view('_partials/header_admin');
        $this->load->view('blog/update_blog', $data);
        $this->load->view('_partials/footer_admin');
    }

    public function updateblog($id) {
        $this->Blog_model->updateeBlog($id);
        $kategori = $this->input->post('kategori');
        $this->Blog_model->deleteBeforeKategori($id);
        foreach ($kategori as $value) {
            $this->Blog_model->createKategori($id, $value);
        }
        redirect(base_url('blog/fullDetail/' . $id));
    }

    public function deleteblog($id) {
        $this->Blog_model->deleteblogg($id);
        $this->session->set_flashdata('message', 'Blog Terhapus !');
        redirect(base_url('blog/readblog'));
    }

    public function fullDetail($id) {
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

        $this->load->view('_partials/header_admin');
        $this->load->view('blog/detail_view', $data);
        $this->load->view('_partials/footer_admin');
    }

    public function deleteComment($id, $id_blog) {
        $this->Blog_model->delete_comment($id);
        $this->session->set_flashdata('message', 'Komentar terhapus!');
        redirect('Blog/fullDetail/' . $id_blog);
    }

}
