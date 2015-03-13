<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

    class Login_model extends CI_Model{
        
        public function login($usuario, $senha){
            $this->db->select('id, usuario, senha');
            $this->db->from('usuario');
            $this->db->where('usuario = '."'".$usuario."'");
            $this->db->where('senha = '."'".md5($senha)."'");
            $this->db->limit(1);
            
            $query = $this->db->get();
            
            if($query->num_rows() == 1){
                return $query->result();
            } else {
                return false;
            }
        }
    }
    
?>