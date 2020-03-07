<?php

class Blog_model extends CI_Model{

    public function createblog()
    {
        $data = [ 
            'id' => NULL,
            'id_admin' => $this->session->userdata('id_adm'),
            'path_gambar' => 1,
            'judul' => $this->input->post('judul'),
            'author' => $this->session->userdata('user'),
            'text' => $this->input->post('text'),
            'tanggal_publish' => date('Y-m-d')
        ];
        $this->db->insert('blog', $data);
    }

    public function getAllBlog()
    {
        return $this->db->get('blog')->result_array();
    }

    public function deleteblogg($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('blog');
    }

    public function getDetailByID($id)
    {
        return $this->db->get_where('blog', ['id' => $id]) ->row_array();
    }

    public function GetBlogById($id)
    {
        return $this->db->where(['id' => $id])->get('blog')->result_array()[0];
    }

    public function updateeBlog($id)
    {
        $data = [ 
            'id_admin' => $this->session->userdata('id_adm'),
            'path_gambar' => 1,
            'judul' => $this->input->post('judul'),
            'author' => $this->session->userdata('user'),
            'text' => $this->input->post('text'),
            'tanggal_publish' => date('Y-m-d')
        ];
        $this->db->where('id', $id);
        $this->db->update('blog', $data);
    }

}