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

    public function createrating($id)
    {
        $data = [
            'id_blog' => $id,
            'sangat_puas' => 0,
            'puas' => 0,
            'cukup' => 0,
            'kurang_puas' => 0,
            'tidak_puas' => 0
        ];
        $this->db->insert('rating', $data);
    }

    public function getCommentbyBlogId($id){
            return $this->db->where(['id_blog' => $id])->get('comment')->result_array();
    }

    public function getRatingBlogSP($id){
            return $this->db->select('sangat_puas')->where('id_blog', $id)->get('rating')->row_array();
    }

    public function getRatingBlogP($id){
            return $this->db->select('puas')->where('id_blog', $id)->get('rating')->row_array();
    }

    public function getRatingBlogC($id){
            return $this->db->select('cukup')->where('id_blog', $id)->get('rating')->row_array();
    }

    public function getRatingBlogKP($id){
            return $this->db->select('kurang_puas')->where('id_blog', $id)->get('rating')->row_array();
    }

    public function getRatingBlogTP($id){
            return $this->db->select('tidak_puas')->where('id_blog', $id)->get('rating')->row_array();
    }

    public function updateRatingsp($id, $total){
        $dataa = [
            'sangat_puas' => $total,
        ];
        $this->db->where('id_blog' , $id)->update('rating', $dataa);
    }

    public function updateRatingp($id, $total){
        $dataa = [
            'puas' => $total+1 ,
        ];
        $this->db->where('id_blog' , $id)->update('rating', $dataa);
    }

    public function updateRatingc($id, $total){
        $dataa = [
            'cukup' => $total ,
        ];
        $this->db->where('id_blog' , $id)->update('rating', $dataa);
    }

    public function updateRatingkp($id, $total){
        $dataa = [
            'kurang_puas' => $total ,
        ];
        $this->db->where('id_blog' , $id)->update('rating', $dataa);
    }

    public function updateRatingtp($id, $total){
        $dataa = [
            'tidak_puas' => $total ,
        ];
        $this->db->where('id_blog' , $id)->update('rating', $dataa);
    }

   
    
}

?>