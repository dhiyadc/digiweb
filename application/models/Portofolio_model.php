<?php

class Portofolio_model extends CI_Model{
    public function getAllPortofolio()
    {
        return $this->db->get('portofolio')->result_array();
    }
    public function getPortobyID($id)
    {
        return $this->db->get_where('portofolio', ['id'=>$id])->row_array();
    }
    public function createPortofolio()
    {
        $data=[
            "path_gambar" => $this->insertImage(),
            "judul" => $this->input->post('judul'),
            "text" => $this->input->post('text'),
            "tanggal_publish" => date('Y-m-d'),
            "link" => $this->input->post('link')
        ];
        $this->db->insert('portofolio', $data);
    }
    public function delPortofolio($id)
    {
        $data= $this->db->get_where('portofolio', ['id'=>$id])->row();
        $deldata= $this->db->delete('portofolio',['id'=>$id]);
        if($deldata){
            unlink('images/'.$data->path_gambar);
        }
    }
    public function updatePortofolio($id)
    {
        if(!empty($_FILES['path_gambar']['name'])){
            $data=[
                "path_gambar" => $this->updateImage($id),
                "judul" => $this->input->post('judul'),
                "text" => $this->input->post('text'),
                "tanggal_publish" => date('Y-m-d'),
                "link" => $this->input->post('link')
            ];
        }
        else{
            $data=[
                "path_gambar" => $this->input->post('old_image'),
                "judul" => $this->input->post('judul'),
                "text" => $this->input->post('text'),
                "tanggal_publish" => date('Y-m-d'),
                "link" => $this->input->post('link')
            ];
        }

        $this->db->where('id', $id);
        $this->db->update('portofolio', $data);
    }

    private function insertImage() 
    {
        $config['upload_path'] = './images/';
        $config['allowed_types'] = 'jpg|png|jpeg';
        $config['max_size'] = '3000';
        $config['remove_space'] = true;

        $this->load->library('upload', $config);
        if ($this->upload->do_upload('path_gambar')) {
            return $this->upload->data('file_name');
        }
    }

    private function updateImage($id) 
    {
        $config['upload_path'] = './images/';
        $config['allowed_types'] = 'jpg|png|jpeg';
        $config['max_size'] = '3000';
        $config['remove_space'] = true;

        $data = $this->db->get_where('kelas',['id' => $id])->row();
        unlink("images/".$data->path_gambar);

        $this->load->library('upload', $config);
        if ($this->upload->do_upload('path_gambar')) {
            return $this->upload->data('file_name');
        }
    }

}