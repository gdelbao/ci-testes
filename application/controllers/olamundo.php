<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Olamundo extends CI_Controller{
    
    public function index(){
        $this->load->view('olamundo');
    }
    
    public function incluir(){
        $this->load->view('exemplo2');
    }
    
    public function ex3(){
        $dados = array(
            'titulo' => 'Este tipo foi passado via Controllet',
            'texto' => 'Texto enviado pelo Controlador',
            'menu' => array(
                0=> '<a href="#">Home</a>',
                1=> '<a href="#">Sobre</a>',
                2=> '<a href="#">Serviços</a>',
                3=> '<a href="#">Contatos</a>'
            ),
            'segmento'=> $this->uri->segment(3)
        );
        $this->load->view('exemplo3', $dados);
    }
}
?>