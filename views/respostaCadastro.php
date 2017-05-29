<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            include_once '../User.php';
            include_once '../DAO/UserDAO.php';

            $user = new User();
            $user->setFirstName($_POST['firstName']);
            $user->setLastName($_POST['lastName']);
            $user->setAddress($_POST['address']);
            $user->setEmail($_POST['email']);
            $user->setCpf($_POST['cpf']);
            $user->setPassword($_POST['password']);

            $udao = new UserDAO();
            
            if($udao ->insert($user)){
                echo 'Cadastro realizado com sucesso!';
            }else{
                echo 'Cadastro não realizado... QUEN QUEN QUEN';
            }
        ?>
    </body>
</html>
