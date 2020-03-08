<?php

class Blog_user_model extends CI_model{

    public function getAllBlog(){
        return $this->db->get('blog')->result_array();
    }

    public function getDetailBlog($id){
        return $this->db->get_where('blog', ['id' => $id])->row_array();
    }

}

?>