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

    public function getAllKategori()
    {
        return $this->db->select('kategori')->get('kategori_portofolio')->result_array();
    }

    public function getPortoKategori($kategori)
    {
        return $this->db->get_where('portofolio', ['kategori'=>$kategori])->row_array();
    }
}