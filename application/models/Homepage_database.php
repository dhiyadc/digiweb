<?php

Class Homepage_database extends CI_Model {

public function getBlogs(){
    $this->db->select('*');
    $this->db->from('blog');
    $this->db->order_by('id', 'DESC');
    $this->db->limit(3);
    return $this->db->get()->result_array();
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
    $this->db->order_by('id', 'DESC');
    $this->db->limit(3);
    return $this->db->get()->result_array();
}


}

?>