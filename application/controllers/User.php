<?php
  defined('BASEPATH') OR exit('No direct script access allowed');

  class User extends CI_Controller {

    function index(){
      $this->load->model('user_model');
      $users = $this->user_model->getUsers();

      $userList['users'] = $users;
      $this->load->view('user.html', $userList);
    }
    //
  }
