<?php
//recebendo dados do formulário
//array variável que consegue receber mais de uma informação, armazena em índices
//variável só recebe um valor por vez

$nome = $_POST['nm'];
$setor = $_POST['setor'];
$login = $_POST['login'];
$senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);


// echo "$nome";
// echo "<br>";
// echo "$setor";
// echo "<br>";
// echo "$login";
// echo "<br>";
// echo "$senha";
// echo "<br>";



// print_r($_POST);

include 'conexao.php';

//Dados para inserir os dados
$insert = "INSERT INTO tb_user VALUES (NULL, '$nome', '$setor', '$login', '$senha')";

//inserindo os dados no banco de dados utilizando a função mysqli
$query = mysqli_query($conexao, $insert);

echo "Inserido com sucesso";

