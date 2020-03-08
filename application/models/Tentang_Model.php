<?php
class Tentang_Model extends CI_Model
{
    public function getAllStaff()
    {
        return $this->db->get('tentang')->result_array();
    }

    public function getStaffbyID($id)
    {
        return $this->db->get_where('tentang', ['id' => $id])->row_array();
    }

    public function insertTentang()
    {
        $data = [
            'nama' => $this->input->post('nama'),
            'jabatan' => $this->input->post('jabatan'),
            'quote' => $this->input->post('quote'),
            'path_ig' => $this->input->post('ig'),
            'path_fb' => $this->input->post('fb'),
            'path_twit' => $this->input->post('twitter'),
            'path_gambar' => $this->insertImage()
        ];
        $this->db->insert('tentang', $data);
    }

    public function deleteTentang($id)
    {
        $this->db->delete('tentang', ['id' => $id]);
    }

    public function updateTentang($id)
    {
        $data = [
            'nama' => $this->input->post('nama'),
            'jabatan' => $this->input->post('jabatan'),
            'quote' => $this->input->post('quote'),
            'path_ig' => $this->input->post('ig'),
            'path_fb' => $this->input->post('fb'),
            'path_twit' => $this->input->post('twitter'),
            'path_gambar' => $this->updateImage($id)
        ];
        $this->db->where('id', $id);
        $this->db->update('tentang', $data);
    }

    private function insertImage()
    {
        $config['upload_path'] = './assets/tentang/';
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
        $config['upload_path'] = './assets/tentang/';
        $config['allowed_types'] = 'jpg|png|jpeg';
        $config['max_size'] = '3000';
        $config['remove_space'] = true;

        $data = $this->db->get_where('tentang', ['id' => $id])->row();
        unlink("images/" . $data->path_gambar);

        $this->load->library('upload', $config);
        if ($this->upload->do_upload('path_gambar')) {
            return $this->upload->data('file_name');
        }
    }

    public function removeImage($id){
        $data = [
            'path_gambar' => null
        ];

        $this->db->where('id', $id);
        $this->db->update('tentang', $data);
    }
}
