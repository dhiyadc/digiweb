<?php
class Tentang_Model extends CI_Model {
    public function getAllStaff() {
        return $this->db->get('tentang')->result_array();
    }

    public function getStaffbyID($id) {
        return $this->db->get_where('tentang', ['id' => $id])->row_array();
    }

    public function insertTentang() {
        $data = [
            'nama' => $this->input->post('nama'),
            'jabatan' => $this->input->post('jabatan'),
            'quote' => $this->input->post('quote'),
            'path_ig' => $this->input->post('ig'),
            'path_fb' => $this->input->post('fb'),
            'path_twit' => $this->input->post('twitter'),
        ];
        $this->db->insert('tentang', $data);
    }

    public function deleteTentang($id) {
        $this->db->delete('tentang', ['id' => $id]);
    }

    public function updateTentang($id) {
        $data = [
            'nama' => $this->input->post('nama'),
            'jabatan' => $this->input->post('jabatan'),
            'quote' => $this->input->post('quote'),
            'path_ig' => $this->input->post('ig'),
            'path_fb' => $this->input->post('fb'),
            'path_twit' => $this->input->post('twitter'),
        ];
        $this->db->where('id', $id);
        $this->db->update('tentang', $data);
    }

}
