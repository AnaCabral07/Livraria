<?php 

$codigo = $_GET['cod'];

include 'conexao.php';

$deletar = "DELETE FROM tb_user WHERE id_user = $codigo";

$query = mysqli_query($conexao, $deletar);

if ($query) {
    echo "<script>alert('Deletado com sucesso'); history.back(); </script>";
} else {
    echo "Erro no seu escript";
}



?>