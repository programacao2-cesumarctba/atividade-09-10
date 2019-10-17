<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

    function index(){
        $this->load->model('user_model');
        $data['userList'] = $this->user_model->getList();
        $this->load->view('userList', $data);
    }

    public function add(){
        $data['titulo'] = 'Cadastra Produto';
        $data['edita'] = false;
        $data['acao'] = 'addDB';
        $this->load->view('userAdd', $data);
    }

    public function addDB()
    {
        $data = [
            'name' => $_POST['nome'],
            'email'=> $_POST['email']
        ];

        $this->load->model('user_model');
        $this->user_model->add($data);

        $this->index();
    }

    public function edit()
    {
        $id = $_GET['id'];


        $data['titulo'] = 'Edita Usuário';
        $data['edita'] = true;
        $data['acao'] = 'editDB';

        $this->load->model('user_model');
        $data['user'] = $this->user_model->getUser($id);
        $this->load->view('userAdd', $data);
    }

    public function editDB()
    {
        $data = [
            'id'   => $_POST['id'],
            'name' => $_POST['nome'],
            'email'=> $_POST['email']
        ];

        $this->load->model('user_model');
        $this->user_model->edit($data);

        $this->index();
    }

    public function delete()
    {
        $id = $_GET['id'];

        $data = [
            'id' => $id
        ];

        $this->load->model('user_model');
        $this->user_model->delete($data);
        $this->index();
    }


}
