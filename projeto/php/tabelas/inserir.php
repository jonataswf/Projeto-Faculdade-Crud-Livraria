<?php
// Conexão
include_once '../../includes/db_connect.php';
// Header
include_once '../../includes/header.php';
?>

<?php

//inserir dados para teste
$inserir_dados_tabela_editora = "INSERT INTO editora (nome) VALUES 
('editora1'),
('editora2'),
('editora3'),
('editora4'),
('editora5');";

$inserir_dados_tabela_acervo = "INSERT INTO acervo (idEditora, titulo, autor, ano, preco, quantidade, tipo) VALUES 
(1, 'Titulo1', 'Autor1', 2020, 40.50, 1, 2),
(5, 'Titulo2', 'Autor2', 2017, 50.50, 3, 4),
(4, 'Titulo3', 'Autor3', 2012, 100.50, 5, 8),
(3, 'Titulo4', 'Autor4', 2010, 72.50, 20, 10),
(2, 'Titulo5', 'Autor5', 2007, 99.50, 15, 2),
(1, 'Titulo6', 'Autor6', 2002, 37.50, 4, 5),
(1, 'Titulo7', 'Autor7', 2000, 42.50, 62, 3);";
if (mysqli_query($conexao, $inserir_dados_tabela_acervo)) {
    if (mysqli_query($conexao, $inserir_dados_tabela_editora)) {
    echo "
    <p id='positivo'>Dados inseridos</p>";
    } else {
    echo "
    <p id='negativo'>Dados não inseridos</p>"; 
    }
}
mysqli_close($conexao);   
?>  

<?php
// Footer
include_once '../../includes/footer.php';
?>