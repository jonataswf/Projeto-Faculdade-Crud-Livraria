<?php
// variaveis de conexao
$servername ="localhost";
$username = "root";
$password = "";
$database = "livraria";

// conectar no servidor e no db
$conexao = mysqli_connect($servername, $username, $password, $database);

// verificar conexao com o servidor
if ($conexao->connect_errno) {
    printf("Connect failed: %s\n", $conexao->connect_error);
    exit();
}
?>