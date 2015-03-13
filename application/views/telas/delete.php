<?php
    $iduser = $this->uri->segment(3);
    if($iduser == NULL){
        redirect('crud/retrieve');
    }
    
    $query = $this->crud->get_byid($iduser)->row();
    
    echo form_open("crud/delete/$iduser");
    
    echo form_label('Nome Completo');
    echo form_input(array('name' => 'nome'), $query->nome, 'disabled = "disables"');
    echo form_label('E-mail');
    echo form_input(array('name' => 'email'), $query->email, 'disabled = "disables"');
    echo form_label('Login');
    echo form_input(array('name' => 'login'), $query->login, 'disabled = "disables"');
    echo form_submit(array('name' => 'cadastrar', 'value' => 'Excluir Registro'));
    echo form_hidden('idusuario', $query->id );
    echo form_close();
?>