<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Recebendo dados do formulário
// Recebendo dados do formulário e validando
$nome = $_POST['nm_nome'];
$nmendereco = $_POST['nm_endereco'];
$nrendereco = $_POST['nr_endereco'];
$nrcnpj = $_POST['nr_cnpj'];
$nrtelefone = $_POST['nr_telefone'];

include 'conexao.php';

//Dados para inserir os dados
$insert = "INSERT INTO tb_editora VALUES (NULL, '$nome', '$nmendereco', '$nrendereco', '$nrcnpj', '$nrtelefone ')";

//inserindo os dados no banco de dados utilizando a função mysqli
$query = mysqli_query($conexao, $insert);

if ($query) {
    echo "Inserido com sucesso";
} else {
    echo "Erro ao inserir: " . mysqli_error($conexao);
}


?>
