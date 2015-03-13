<?php
    $iduser = $this->uri->segment(3);
    if($iduser == NULL){
        redirect('crud/retrieve');
    }
    
    $query = $this->crud->get_byid($iduser)->row();
    
    echo form_open("crud/update/$iduser");
    echo validation_errors('<p>','</p>');
    if($this->session->flashdata('edicaook')){
        echo '<p>'.$this->session->flashdata('edicaook').'</p>';
    }
    echo form_label('Nome Completo');
    echo form_input(array('name' => 'nome'), $query->nome, 'autofocus');
    echo form_label('E-mail');
    echo form_input(array('name' => 'email'), $query->email, 'disabled = "disables"');
    echo form_label('Login');
    echo form_input(array('name' => 'login'), $query->login, 'disabled = "disables"');
    echo form_label('Senha');
    echo form_password(array('name' => 'senha'), set_value('senha'));
    echo form_label('Repita a Senha');
    echo form_password(array('name' => 'senha2'), set_value('senha2'));
    echo form_submit(array('name' => 'cadastrar', 'value' => 'Alterar'));
    echo form_hidden('idusuario', $query->id );
    echo form_close();
?>