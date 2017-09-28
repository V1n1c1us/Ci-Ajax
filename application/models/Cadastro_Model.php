<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Cadastro_Model extends CI_Model {


    public function salvar_dados($nome, $sobrenome, $email){
        $data = array(
            'nome' => $nome,
            'sobrenome' => $sobrenome,
            'email' => $email
        );
        return $this->db->insert('usuario', $data);
    }
    

}

/* End of file ModelName.php */


?>