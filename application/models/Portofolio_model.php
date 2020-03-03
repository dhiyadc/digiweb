<?php

class Portofolio_model extends CI_Model{
    public function getAllPortofolio()
    {
        return $this->db->get('portofolio')->result_array();
    }
    public function createPortofolio()
    {
        $data=[
            "path_gambar" => $this->input->post('image'),
            "judul" => $this->input->post('judul'),
            "text" => $this->input->post('text'),
            "tanggal_publish" => date('Y-m-d')
        ];
        $this->db->insert('portofolio', $data);
    }
    public function delPortofolio($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('Portofolio');
    }
}