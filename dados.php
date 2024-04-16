<?php
$nome = $_POST['nome'];
$endereco = $_POST['endereco'];
$Nendereco = $_POST['Nendereco'];
$cpf = $_POST['cpf'];
$cnpj = $_POST['cnpj'];
$tel = $_POST['tel'];


include 'conexao.php';

$insert = "INSERT INTO tb_cliente VALUES (NULL, '$nome', '$endereco', '$Nendereco', '$cpf', '$cnpj', '$tel')";

$query = mysqli_query($conexao, $insert);

echo "Inserido com sucesso";


?>