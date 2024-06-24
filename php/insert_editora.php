<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Recebendo dados do formulário
// Recebendo dados do formulário e validando
$nm_editora = $_POST['nm_editora'];
$nm_endereco_edi = $_POST['nm_endereco_edi'];
$nr_endereco_edi = $_POST['nr_endereco_edi'];
$nr_cnpj_edi = $_POST['nr_cnpj_edi'];
$nr_telefone_edi = $_POST['nr_telefone_edi'];

include 'conexao.php';

//Dados para inserir os dados
$insert = "INSERT INTO tb_editora VALUES (NULL, '$nm_editora', '$nm_endereco_edi', '$nr_endereco_edi', '$nr_cnpj_edi', '$nr_telefone_edi')";

//inserindo os dados no banco de dados utilizando a função mysqli
$query = mysqli_query($conexao, $insert);

if ($query) {
    echo "Inserido com sucesso";
} else {
    echo "Erro ao inserir: " . mysqli_error($conexao);
}


?>
