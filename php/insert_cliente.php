<?php
//Recebendo dados do formulario

$nome = $_POST['nm_cliente'];
$endereco = $_POST['nm_endereco'];
$numero = $_POST['nr_endereco'];
$cpf = $_POST['nr_cpf'];
$cnpj = $_POST['nr_cnpj'];
$telefone = $_POST['nr_telefone'];


//Inserindo dados no banco

include 'conexao.php';

//Dados para inserir os dados
$insert = "INSERT INTO tb_cliente VALUES (NULL,'$nome','$endereco','$numero','$cpf','$cnpj','$telefone')";

//inserindo os dados no banco de dados utilizando a função mysqli
$query = mysqli_query($conexao, $insert);

echo "Inserido com Sucesso";

?>