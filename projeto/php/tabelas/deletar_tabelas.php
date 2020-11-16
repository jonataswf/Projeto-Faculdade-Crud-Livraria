<?php
// Conexão
include_once '../../includes/db_connect.php';
// Header
include_once '../../includes/header.php';
?>

<?php

 // deletar tabelas
$deletar_tabelas = "DROP TABLE editora, acervo;";  
if (mysqli_query($conexao, $deletar_tabelas)) {
    echo "
    <p id='positivo'>Tabelas deletadas</p>";
} else {
    echo "
    <p id='negativo'>Não existem tabelas para deletar</p>";
}
mysqli_close($conexao); 
?>  

<?php
// Footer
include_once '../../includes/footer.php';
?>