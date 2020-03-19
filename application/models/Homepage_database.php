<?php

Class Homepage_database extends CI_Model {

public function getBlogs(){
    $this->db->select('*');
    $this->db->from('blog');
    $this->db->order_by('id', 'DESC');
    $this->db->limit(3);
    return $this->db->get()->result_array();
}

public function getBlogComment(){
    return $this->db->query('SELECT blog.id, blog.path_gambar, blog.judul, blog.text, blog.tanggal_publish, COUNT(comment.id_comment) as `comment`
    FROM `blog` LEFT JOIN comment
    ON blog.id = comment.id_blog
    GROUP BY blog.id  
    ORDER BY `blog`.`id` DESC 
    LIMIT 3')->result_array();
}

public function getComment(){
    $this->db->select('*');
    $this->db->from('comment');
    $this->db->order_by('id_blog', 'DESC');
    return $this->db->get()->result_array();
}

public function getCommentbyID($id){
    return $this->db->where(['id_blog' => $id])->get('comment')->num_rows(); 
}

public function getPortofolios(){
    $this->db->select('*');
    $this->db->from('portofolio');
    $this->db->order_by('id', 'DESC');
    $this->db->limit(3);
    return $this->db->get()->result_array();
}

public function getTentang(){
    $this->db->select('*');
    $this->db->from('tentang');
    $this->db->order_by('id', 'ASC');
    $this->db->limit(1);
    return $this->db->get()->result_array();
}

public function getKelas(){
    $this->db->select('*');
    $this->db->from('kelas');
    $this->db->order_by('id', 'DESC');
    $this->db->limit(3);
    return $this->db->get()->result_array();
}

public function getRating(){
    $this->db->select('*');
    $this->db->from('rating');
    $this->db->order_by('id_blog', 'DESC');
    $this->db->limit(3);
    return $this->db->get()->result_array();
}


public function getRatingbyID($id){
    return $this->db->where(['id_blog' => $id])->get('rating')->result_array(); 
}

public function getFAQ(){
    $this->db->select('*');
    $this->db->from('tentang_faq');
    $this->db->order_by('id', 'DESC');
    return $this->db->get()->result_array();
}

public function getDCDesc(){
    return $this->db->select('*')->get('tentang_deskripsi')->result_array();
}


}

?>