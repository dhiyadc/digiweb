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
    public function getPortobyID($id)
    {
        return $this->db->get_where('portofolio', ['id'=>$id])->row_array();
    }
    public function updatePortofolio($id)
    {
        $data=[
            "path_gambar" => $this->input->post('image'),
            "judul" => $this->input->post('judul'),
            "text" => $this->input->post('text'),
            "tanggal_publish" => date('Y-m-d')
        ];

        $this->db->where('id', $id);
        $this->db->update('portofolio', $data);
    }
}