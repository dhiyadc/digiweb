<?php

class Blog_model extends CI_Model {

    public function createblog() {
        $data = [
            'id' => null,
            'id_admin' => $this->session->userdata('id_adm'),
            'path_gambar' => $this->insertImage(),
            'judul' => $this->input->post('judul'),
            'author' => $this->session->userdata('user'),
            'text' => $this->input->post('text'),
            'tanggal_publish' => date('Y-m-d'),
            'kategori' => $this->input->post('kategori'),
        ];
        $this->db->insert('blog', $data);
    }

    public function getLastId() {
        return $this->db->select('id')->order_by('id', 'DESC')->get('blog')->row_array();
    }

    public function getAllBlog() {
        return $this->db->get('blog')->result_array();
    }

    public function deleteblogg($id) {
        $this->db->where('id', $id)->delete('blog');
    }

    public function getDetailByID($id) {
        return $this->db->get_where('blog', ['id' => $id])->row_array();
    }

    public function getCommentById($id) {
        return $this->db->where('id_blog', $id)->get('comment')->result_array();
    }

    public function delete_comment($id) {
        $this->db->where('id_comment', $id)->delete('comment');
    }

    public function GetBlogById($id) {
        return $this->db->where(['id' => $id])->get('blog')->result_array()[0];
    }

    public function getRatingBlogli($id) {
        return $this->db->select('like')->where('id_blog', $id)->get('rating')->row_array();
    }

    public function getRatingBloglo($id) {
        return $this->db->select('love')->where('id_blog', $id)->get('rating')->row_array();
    }

    public function getRatingBlogh($id) {
        return $this->db->select('haha')->where('id_blog', $id)->get('rating')->row_array();
    }

    public function getRatingBlogw($id) {
        return $this->db->select('wow')->where('id_blog', $id)->get('rating')->row_array();
    }

    public function getRatingBlogs($id) {
        return $this->db->select('sad')->where('id_blog', $id)->get('rating')->row_array();
    }

    public function getRatingBloga($id) {
        return $this->db->select('angry')->where('id_blog', $id)->get('rating')->row_array();
    }

    public function updateeBlog($id) {
        if (!empty($_FILES['path_gambar']['name'])) {
            $data = [
                'id_admin' => $this->session->userdata('id_adm'),
                'path_gambar' => $this->updateImage($id),
                'judul' => $this->input->post('judul'),
                'author' => $this->session->userdata('user'),
                'text' => $this->input->post('text'),
                'tanggal_publish' => date('Y-m-d'),
                'kategori' => $this->input->post('kategori'),
            ];
        } else {
            $data = [
                'id_admin' => $this->session->userdata('id_adm'),
                'path_gambar' => $this->input->post('old_image'),
                'judul' => $this->input->post('judul'),
                'author' => $this->session->userdata('user'),
                'text' => $this->input->post('text'),
                'tanggal_publish' => date('Y-m-d'),
                'kategori' => $this->input->post('kategori'),
            ];
        }

        $this->db->where('id', $id);
        $this->db->update('blog', $data);
    }

    private function insertImage() {
        $config['upload_path'] = './images/';
        $config['allowed_types'] = 'jpg|png|jpeg';
        $config['max_size'] = '3000';
        $config['remove_space'] = true;

        $this->load->library('upload', $config);
        if ($this->upload->do_upload('path_gambar')) {
            return $this->upload->data('file_name');
        }
    }

    private function updateImage($id) {
        $config['upload_path'] = './images/';
        $config['allowed_types'] = 'jpg|png|jpeg';
        $config['max_size'] = '3000';
        $config['remove_space'] = true;

        $data = $this->db->get_where('blog', ['id' => $id])->row();
        unlink("images/" . $data->path_gambar);

        $this->load->library('upload', $config);
        if ($this->upload->do_upload('path_gambar')) {
            return $this->upload->data('file_name');
        }
    }

}
