<?php

class Kelas_model extends CI_Model {
    public function cekLogin($table,$where)
	{		
		return $this->db->get_where($table,$where);
	}
    public function getAllClass()
    {
        return $this->db->get('kelas')->result_array();
    }

    public function getClassById($id)
    {
        $this->db->where('id',$id);
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
        return "default.jpg";
    } 
    
    private function updateImage($id) 
    {
        $config['upload_path'] = './images/';
        $config['allowed_types'] = 'jpg|png|jpeg';
        $config['max_size'] = '3000';
        $config['overwrite'] = true;

        $data = $this->db->get_where('kelas',['id' => $id])->row();
        unlink("images/".$data->path_gambar);

        $this->load->library('upload', $config);
        if ($this->upload->do_upload('path_gambar')) {
            return $this->upload->data('file_name');
        }
        return "default.jpg";
    }  

    public function createClass()
    {
        $data = [
            // 'id' => uniqid(),
            'judul' => $this->input->post('judul'),
            'text' => $this->input->post('text'),
            'path_gambar' => $this->insertImage()
        ];

        $this->db->insert('kelas',$data);

        // $this->id = abs( crc32( uniqid() ) );
        // $this->judul = $this->input->post('judul');
        // $this->text = $this->input->post('text');
        // $this->path_gambar = $this->insertImage();

        // $this->db->insert('kelas',$this);
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
                'text' => $this->input->post('text'),
                'path_gambar' => $this->updateImage($id)
            ];
        }
        else {
            $data = [
                'judul' => $this->input->post('judul'),
                'text' => $this->input->post('text'),
                'path_gambar' => $this->input->post('old_image')
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