<?php 
//Dados para conexão do banco
$servidor = "localhost";
$user = "root";
$password = "root"; //ana@123
$banco = "bd_sistema";


//conectando no banco de dados utilizando a função mysqli
$conexao = new mysqli($servidor, $user, $password, $banco); //3306

