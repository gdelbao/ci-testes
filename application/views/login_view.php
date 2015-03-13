<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Login::CI</title>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('utility/css/login.css') ?>"
    </head>
    <body>
        <h1>Login de Usuário</h1>
        <form method="post" action="">
            <?php
            echo validation_errors('<p>','</p>')
            ?>
            <label for="txtLogin">Login</label>
            <input type="text" name="txtLogin" required="required"/>
            <label for='txtSenha'>Senha</label>
            <input type="password" name="txtSenha" required="required"/>
            <input type="submit" value="Entrar"/>
            <input type="reset" value="Cancelar"/>
        </form>
    </body>
</html>
