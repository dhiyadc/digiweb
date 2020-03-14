<?php

class Blog_user_model extends CI_model{

    public function getAllBlog(){
        return $this->db->get('blog')->result_array();
    }

    public function getDetailBlog($id){
        return $this->db->get_where('blog', ['id' => $id])->row_array();
    }

    public function create_comment($id , $name){
        $data = [ 
            'id_comment' => NULL,
            'id_blog' => $id,
            'name' => $name,
            'comment' => $this->input->post('isi_komen')
        ];
        $this->db->insert('comment', $data);
    }

    public function createrating($id)
    {
        $data = [
            'id_blog' => $id,
            'like' => 0,
            'love' => 0,
            'haha' => 0,
            'wow' => 0,
            'sad' => 0,
            'angry' => 0
        ];
        $this->db->insert('rating', $data);
    }

    public function getCommentbyBlogId($id){
            return $this->db->where(['id_blog' => $id])->get('comment')->result_array();
    }

    public function getRatingBlogli($id){
            return $this->db->select('like')->where('id_blog', $id)->get('rating')->row_array();
    }

    public function getRatingBloglo($id){
            return $this->db->select('love')->where('id_blog', $id)->get('rating')->row_array();
    }

    public function getRatingBlogh($id){
            return $this->db->select('haha')->where('id_blog', $id)->get('rating')->row_array();
    }

    public function getRatingBlogw($id){
            return $this->db->select('wow')->where('id_blog', $id)->get('rating')->row_array();
    }

    public function getRatingBlogs($id){
            return $this->db->select('sad')->where('id_blog', $id)->get('rating')->row_array();
    }

    public function getRatingBloga($id){
            return $this->db->select('angry')->where('id_blog', $id)->get('rating')->row_array();
    }

    public function updateRatingli($id, $total){
        $dataa = [
            'like' => $total,
        ];
        $this->db->where('id_blog' , $id)->update('rating', $dataa);
    }

    public function updateRatinglo($id, $total){
        $dataa = [
            'love' => $total,
        ];
        $this->db->where('id_blog' , $id)->update('rating', $dataa);
    }

    public function updateRatingh($id, $total){
        $dataa = [
            'haha' => $total ,
        ];
        $this->db->where('id_blog' , $id)->update('rating', $dataa);
    }

    public function updateRatingw($id, $total){
        $dataa = [
            'wow' => $total ,
        ];
        $this->db->where('id_blog' , $id)->update('rating', $dataa);
    }

    public function updateRatings($id, $total){
        $dataa = [
            'sad' => $total ,
        ];
        $this->db->where('id_blog' , $id)->update('rating', $dataa);
    }

    public function updateRatinga($id, $total){
        $dataa = [
            'angry' => $total ,
        ];
        $this->db->where('id_blog' , $id)->update('rating', $dataa);
    }

   
    
}

?>