<?php

class Kelas_model extends CI_Model {
    public function getAllClass()
    {
        return $this->db->get('kelas')->result_array();
    }

    public function getClassById($id)
    {
        $this->db->where('id',$id);
        return $this->db->get('kelas')->result_array();
    }

    public function getKategori()
    {
        return $this->db->get('kategori_kelas')->result_array();
    }

    public function getPendaftar()
    {
        return $this->db->get('daftar')->result_array();
    }

    public function getKelasByKategori($id)
    {
        $this->db->where('id_kategori',$id);
        return $this->db->get('kelas')->result_array();
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

    public function createClass()
    {
        $data = [
            'judul' => $this->input->post('judul'),
            'harga' => $this->input->post('harga'),
            'path_gambar' => $this->insertImage(),
            'id_kategori' => $this->input->post('kategori'),
            'deskripsi_1' => $this->input->post('deskripsi_1'),
            'deskripsi_2' => $this->input->post('deskripsi_2'),
            'deskripsi_3' => $this->input->post('deskripsi_3')
        ];

        $this->db->insert('kelas',$data);
    }

    public function deleteClass($id)
    {
        $data = $this->db->get_where('kelas',['id' => $id])->row();
        $deldata = $this->db->delete('kelas',['id'=>$id]);
        if($deldata){
            unlink("images/".$data->path_gambar);
        }
    }

    public function updateClass($id)
    {
        if(!empty($_FILES['path_gambar']['name'])) {
            $data = [
                'judul' => $this->input->post('judul'),
                'harga' => $this->input->post('harga'),
                'path_gambar' => $this->updateImage($id),
                'id_kategori' => $this->input->post('kategori'),
                'deskripsi_1' => $this->input->post('deskripsi_1'),
                'deskripsi_2' => $this->input->post('deskripsi_2'),
                'deskripsi_3' => $this->input->post('deskripsi_3')
            ];
        }
        else {
            $data = [
                'judul' => $this->input->post('judul'),
                'harga' => $this->input->post('harga'),
                'path_gambar' => $this->input->post('old_image'),
                'id_kategori' => $this->input->post('kategori'),
                'deskripsi_1' => $this->input->post('deskripsi_1'),
                'deskripsi_2' => $this->input->post('deskripsi_2'),
                'deskripsi_3' => $this->input->post('deskripsi_3')
            ];
        }

        $this->db->where('id',$id);
        $this->db->update('kelas',$data);
    }

    public function daftar($idclass)
    {
        $data = [
            'id_kelas' => $idclass,
            'nama' => $this->input->post('nama'),
            'no_hp' => $this->input->post('no_hp'),
            'email' => $this->input->post('email'),
            'instansi' => $this->input->post('instansi'),
            'tanggal_publish' => date('Y-m-d')
        ];
        $this->db->insert('daftar',$data);
    }

}