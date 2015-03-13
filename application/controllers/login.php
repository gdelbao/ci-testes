<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

    class Login extends CI_Controller{
        
        public function __construct() {
            parent::__construct();
            $this->load->helper('url');
            $this->load->library('form_validation');
        }
        
        public function index(){
            $this->load->view('login_view');
        }
        
        public function valida(){
            $this->form_validation->set_rules('txtLogin','Login', 'trim|required');
            $this->form_validation->set_rules('txtSenha','Senha', 'trim|required');
            
            if($this->form_validation->run()==TRUE){
                //todo terminar
            }
        }
    }
?>