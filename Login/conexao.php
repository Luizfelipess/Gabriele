<?php

    define('HOST', '127.0.0.1');
    define('USUARIO' , 'gabriele');
    define('SENHA' ,'abc123');
    define('DB' , 'bancoteste');

    $conexao = mysqli_connect(HOST , USUARIO , SENHA , DB) or die ('Não foi possivel conectar');






?>