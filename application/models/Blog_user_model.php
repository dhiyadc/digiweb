<?php

class Blog_user_model extends CI_model{

    public function getAllBlog(){
        return $this->db->get('blog')->result_array();
    }

    public function getDetailBlog($id){
        return $this->db->get_where('blog', ['id' => $id])->row_array();
    }

    public function create_comment($id){
        $data = [ 
            'id_comment' => NULL,
            'id_blog' => $id,
            'name' => $this->input->post('nama_komen'),
            'comment' => $this->input->post('isi_komen')
        ];
        $this->db->insert('comment', $data);
    }

    public function getCommentbyBlogId($id){
       return $this->db->where(['id_blog' => $id])->get('comment')->result_array();
    }

}

?>