<?php

class Admin_model extends CI_model{

    public function login($table, $where){
        return $this->db->get_where($table, $where);
    }
    
    public function getIdUser($username){
        return $this->db->select('id')->where('username', $username)->get('admin')->row_array();
    }

    public function getIdPass($password){
        return $this->db->select('id')->where('password', $password)->get('admin')->row_array();
    }

    public function getusername($username){
        return $this->db->select('username')->where('username', $username)->get('admin')->row_array();
    }

    // public function getpassword($password){
    //     return $this->db->select('password')->where('password', $password)->get('admin')->row_array();
    // }


} 

?>