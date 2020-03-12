<?php

class Portofolio_user_model extends CI_Model{
    public function getAllPortofolio()
    {
        return $this->db->get('portofolio')->result_array();
    }
    public function getPortobyID($id)
    {
        return $this->db->get_where('portofolio', ['id'=>$id])->row_array();
    }

}