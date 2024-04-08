<?php
//recebendo dados do formulário
//array variável que consegue receber mais de uma informação, armazena em índices
//variável só recebe um valor por vez

$nome = $_POST['nome'];
$setor = $_POST['setor'];
$login = $_POST['login'];
$senha = $_POST['senha'];


echo "$nome";
echo "<br>";
echo "$setor";
echo "<br>";
echo "$login";
echo "<br>";
echo "$senha";
echo "<br>";



print_r($_POST);



?>