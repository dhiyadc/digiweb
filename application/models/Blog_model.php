<?php

class Blog_model extends CI_Model{

    public function createblog()
    {
        $data = [ 
            'id' => NULL,
            'id_admin' => $this->session->userdata('id_adm'),
            'path_gambar' => $this->insertImage(),
            'judul' => $this->input->post('judul'),
            'author' => $this->session->userdata('user'),
            'text' => $this->input->post('text'),
            'tanggal_publish' => date('Y-m-d'),
            'kategori' => $this->input->post('kategori')
        ];
        $this->db->insert('blog', $data);
    }

    public function getAllBlog()
    {
        return $this->db->get('blog')->result_array();
    }

    public function deleteblogg($id)
    {
        $this->db->where('id', $id)->delete('blog');
    }

    public function getDetailByID($id)
    {
        return $this->db->get_where('blog', ['id' => $id]) ->row_array();
    }

    public function getCommentById($id)
    {
        return $this->db->where('id_blog', $id)->get('comment')->result_array();
    }

    public function delete_comment($id)
    {
        $this->db->where('id_comment', $id)->delete('comment');
    }

    public function GetBlogById($id)
    {
        return $this->db->where(['id' => $id])->get('blog')->result_array()[0];
    }

    public function updateeBlog($id)
    {
        if(!empty($_FILES['path_gambar']['name'])) {
            $data = [ 
                'id_admin' => $this->session->userdata('id_adm'),
                'path_gambar' => $this->updateImage($id),
                'judul' => $this->input->post('judul'),
                'author' => $this->session->userdata('user'),
                'text' => $this->input->post('text'),
                'tanggal_publish' => date('Y-m-d'),
                'kategori' => $this->input->post('kategori')
            ];
        }
        else {
            $data = [
                'id_admin' => $this->session->userdata('id_adm'),
                'path_gambar' => $this->input->post('old_image'),
                'judul' => $this->input->post('judul'),
                'author' => $this->session->userdata('user'),
                'text' => $this->input->post('text'),
                'tanggal_publish' => date('Y-m-d'),
                'kategori' => $this->input->post('kategori')
            ];
        }

        $this->db->where('id', $id);
        $this->db->update('blog', $data);
    }

    private function insertImage() 
    {
        $config['upload_path'] = './images/';
        $config['allowed_types'] = 'jpg|png|jpeg';
        $config['max_size'] = '3000';
        $config['remove_space'] = true;

        $this->load->library('upload', $config);
        if ($this->upload->do_upload('path_gambar')) {
            return $this->upload->data('file_name');
        }
    } 
    
    private function updateImage($id) 
    {
        $config['upload_path'] = './images/';
        $config['allowed_types'] = 'jpg|png|jpeg';
        $config['max_size'] = '3000';
        $config['remove_space'] = true;

        $data = $this->db->get_where('blog',['id' => $id])->row();
        unlink("images/".$data->path_gambar);

        $this->load->library('upload', $config);
        if ($this->upload->do_upload('path_gambar')) {
            return $this->upload->data('file_name');
        }
    }  


}