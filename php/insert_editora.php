<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Recebendo dados do formulário
// Recebendo dados do formulário e validando
$nome = $_POST['nome'];
$nmendereco = $_POST['nmendereco'];
$nrendereco = isset($_POST['nrendereco']) ? intval($_POST['nrendereco']) : 0;
$nrcnpj = isset($_POST['nrcnpj']) ? intval($_POST['nrcnpj']) : 0;
$nrtelefone = isset($_POST['nrtelefone']) ? intval($_POST['nrtelefone']) : 0;

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
