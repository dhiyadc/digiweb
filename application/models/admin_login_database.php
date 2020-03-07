<?php

Class admin_login_database extends CI_Model {

// Read data using username and password
public function login($data){
    $username = $data['username'];
    $password = $data['password'];
    $hashed = hash('sha256', $password);
    $user = $this->db->get_where('admin', ['username' => $username])->row_array();

    if($user){
        if($this->db->get_where('admin', ['password' => $hashed])->row_array()){
            return true;
        } else {
            return false;
        }
    } else {
        return false;
    }
}

// Read data from database to show data in admin page
public function read_user_information($username) {

$condition = "username =" . "'" . $username . "'";
$this->db->select('*');
$this->db->from('admin');
$this->db->where($condition);
$this->db->limit(1);
$query = $this->db->get();

if ($query->num_rows() == 1) {
return $query->result();
} else {
return false;
}
}


}

?>