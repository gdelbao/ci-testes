<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Site extends CI_Controller{
    public function index(){
        $dados = array(
            'titulo_pagina' => 'Titulo da home page',
            'view_principal' => 'home',
        );
        $this->load->view('site', $dados);
    }
    public function contato(){
        $dados = array(
            'titulo_pagina' => 'Titulo da home page',
            'view_principal' => 'contato',
        );
        $this->load->view('site', $dados);
    }
}
?>