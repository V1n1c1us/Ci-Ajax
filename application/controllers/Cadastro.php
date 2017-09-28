<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cadastro extends CI_Controller {

    public function index()
    {
        $this->load->view('home');
    }

    public function salvar(){

        $this->load->model('Cadastro_Model','cadastraModel');
        $nome = $this->input->post('nome');
        $sobrenome = $this->input->post('sobrenome');
        $email = $this->input->post('email');


        $this->cadastraModel->salvar_dados($nome,$sobrenome,$email);
        
    }
}
?>