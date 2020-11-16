
<?php
// Conexão
include_once '../../includes/db_connect.php';
// Header
include_once '../../includes/header.php';
?>

<?php
// criar tabela editora
$criar_tabela_editora = "CREATE TABLE editora (
    id INT NOT NULL AUTO_INCREMENT, 
    nome VARCHAR(60) NOT NULL, 
    PRIMARY KEY (id));";


// criar tabela acervo
$criar_tabela_acervo = "CREATE TABLE acervo (
    idAcervo INT NOT NULL AUTO_INCREMENT,
    idEditora INT NOT NULL,
    titulo VARCHAR(100) NOT NULL,
    autor VARCHAR(60) NOT NULL,
    ano INT NOT NULL,
    preco DOUBLE (40,2) NOT NULL,
    quantidade INT NOT NULL,
    tipo INT NOT NULL,
    FOREIGN KEY (idEditora)
        REFERENCES editora(id),
    PRIMARY KEY(idAcervo));";

if (mysqli_query($conexao, $criar_tabela_editora)) {
    if (mysqli_query($conexao, $criar_tabela_acervo)) {
    echo "
    <p id='positivo'>Tabelas Criadas</p>";
    } else {
    echo "
    <p id='negativo'>Tabelas não foram criadas</p>";
    }
}
mysqli_close($conexao);
?>  

<?php
// Footer
include_once '../../includes/footer.php';
?>