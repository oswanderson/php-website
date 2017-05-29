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
            include_once('./User.php');
            include_once('./DAO/UserDAO.php');
            include_once('./Product.php');
            include_once('./DAO/ProductDAO.php');
            include_once('./BaughtProducts.php');
            include_once('./DAO/BaughtProductsDAO.php');
            
            $user = new User( );

            $user->setFirstName( $_POST['firstName'] );

            $user->setLastName( $_POST['lastName'] );

            $user->setEmail( $_POST['email'] );

            $user->setAddress( $_POST['address'] );

            $user->setCpf( $_POST['cpf'] );

            $userDAO = new UserDAO( );

            $insertedUser = $userDAO->insert( $user );

            echo "Registro inserido com sucesso. O id do usuário é" . " " . (string)$insertedUser->getUserId( )
        ?>
    </body>
</html>
