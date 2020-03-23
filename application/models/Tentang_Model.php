<?php
class Tentang_Model extends CI_Model
{
    public function getAllStaff()
    {
        $this->db->order_by("id", "asc");
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
        $temp = $this->db->get_where('tentang', ['id' => $id])->row();
        unlink("images/" . $temp->path_gambar);
        $this->db->delete('tentang', ['id' => $id]);
    }

    public function updateTentang($id)
    {
        if (!empty($_FILES['path_gambar']['name'])) {
            $data = [
                'nama' => $this->input->post('nama'),
                'jabatan' => $this->input->post('jabatan'),
                'quote' => $this->input->post('quote'),
                'path_ig' => $this->input->post('ig'),
                'path_fb' => $this->input->post('fb'),
                'path_twit' => $this->input->post('twitter'),
                'path_gambar' => $this->updateImage($id)
            ];
        } else {
            $data = [
                'nama' => $this->input->post('nama'),
                'jabatan' => $this->input->post('jabatan'),
                'quote' => $this->input->post('quote'),
                'path_ig' => $this->input->post('ig'),
                'path_fb' => $this->input->post('fb'),
                'path_twit' => $this->input->post('twitter'),
                'path_gambar' => $this->input->post('old_image')
            ];
        }
        $this->db->where('id', $id);
        $this->db->update('tentang', $data);
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

        $data = $this->db->get_where('tentang', ['id' => $id])->row();
        unlink("images/" . $data->path_gambar);

        $this->load->library('upload', $config);
        if ($this->upload->do_upload('path_gambar')) {
            return $this->upload->data('file_name');
        }
    }

    public function removeImage($id)
    {

        $temp = $this->db->get_where('tentang', ['id' => $id])->row();
        unlink("images/" . $temp->path_gambar);
        $data = [
            'path_gambar' => null
        ];

        $this->db->where('id', $id);
        $this->db->update('tentang', $data);
    }

    public function getStaffByJabatanInti()
    {
        $this->db->where('prioritas', "1");
        $this->db->order_by("id", "asc");
        return $this->db->get('tentang')->result_array();
    }

    public function getDeskripsi()
    {
        return $this->db->get_where('tentang_deskripsi', ['id' => '0'])->row_array();
    }

    public function countDeskripsi()
    {
        return $this->db->get('tentang_deskripsi')->num_rows();
    }

    public function insertDeskripsi()
    {
        $data = [
            'id' => 0,
            'deskripsi' => htmlspecialchars($this->input->post('deskripsi'))
        ];
        $this->db->insert('tentang_deskripsi', $data);
    }

    public function updateDeskripsi($id = 0)
    {
        $data = [
            'deskripsi' => htmlspecialchars($this->input->post('deskripsi'))
        ];
        $this->db->where('id', $id);
        $this->db->update('tentang_deskripsi', $data);
    }

    public function getAllFAQ()
    {
        $this->db->order_by("id", "asc");
        return $this->db->get('tentang_faq')->result_array();
    }

    public function getFAQbyID($id)
    {
        return $this->db->get_where('tentang_faq', ['id' => $id])->row_array();
    }

    public function insertFAQ()
    {
        $data = [
            'question' => $this->input->post('question'),
            'answer' => $this->input->post('answer')
        ];

        $this->db->insert('tentang_faq', $data);
    }

    public function updateFAQ($id)
    {
        $data = [
            'question' => $this->input->post('question'),
            'answer' => $this->input->post('answer')
        ];
        $this->db->where('id', $id);
        $this->db->update('tentang_faq', $data);
    }

    public function deleteFAQ($id)
    {
        $this->db->delete('tentang_faq', ['id' => $id]);
    }
}
