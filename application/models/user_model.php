<?php

class User_model extends CI_Model {
  function getUsers(){
    $user = $this->db->get('users');
    return $user->result();
  }
  function deleteUser(){
    $user = $this->db->delete('users');
    return $user->result();
  }
  function updateUser(){
    $user = $this->db->replace('users');
    return $user->result();
  }
  function postUser(){
    $user = $this->db->insert('users');
    return $user->result();
  }
}
