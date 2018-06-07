<?php
  class M_login extends CI_Model{
      function auth_user($email){
          $this->db->select('*');
          $this->db->from('users');
          $this->db->where('email',$email);
          $user = $this->db->get();
          return $user;
      }

      function auth_admin($email){
        $this->db->select('*');
        $this->db->from('admin');
        $this->db->where('email',$email);
        $admin = $this->db->get();
        return $admin;
    }

    function user_daftar($datauser){
    $query=$this->db->insert('users',$datauser);
    return $query;
    }
  }
