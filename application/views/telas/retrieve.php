<?php
    echo '<h2>Lista de Usuários</h2>';
    
    if($this->session->flashdata('excluirok')){
        echo '<p>'.$this->session->flashdata('excluirok').'</p>';
    }
    
    $this->table->set_heading('Id', 'Nome', 'E-mail', 'Login', 'Operações');
    foreach ($usuarios as $lista){
        $this->table->add_row($lista->id, $lista->nome, $lista->email, $lista->login, anchor("crud/update/$lista->id",'Editar').' - '.anchor("crud/delete/$lista->id",'Excluir'));
        echo $this->table->generate();
    }
?>