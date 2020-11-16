<?php
// Sessão
session_start();

// Conexão
include_once '../includes/db_connect.php';

// Clear
function clear($input) {
	global $conexao;
	// sql
	$var = mysqli_escape_string($conexao, $input);
	// xss
	$var = htmlspecialchars($var);
	return $var;
}
	//insert na tabela editora
	if(isset($_POST['btn-cadastrar-editora'])):
		$nome = clear($_POST['nome']);

		$sql = "INSERT INTO editora (nome) VALUES ('$nome')";

		if(mysqli_query($conexao, $sql)):
			$_SESSION['mensagem'] = "Cadastrado com sucesso!";
			header('Location: ../index.php');
		else:
			$_SESSION['mensagem'] = "Erro ao cadastrar";
			header('Location: ../index.php');
		endif;
	endif;

	//insert na tabela acervo
	if(isset($_POST['btn-cadastrar-acervo'])):
	    $idEditora = clear($_POST['idEditora']);
	    $titulo = clear($_POST['titulo']);
	    $autor = clear($_POST['autor']);
	    $ano = clear($_POST['ano']);
	    $preco = clear($_POST['preco']);
	    $quantidade = clear($_POST['quantidade']);
	    $tipo = clear($_POST['tipo']);

		$sql = "INSERT INTO acervo (idEditora, titulo, autor, ano, preco, quantidade, tipo) VALUES ('$idEditora', '$titulo', '$autor', '$ano', '$preco', '$quantidade', '$tipo')";

		if(mysqli_query($conexao, $sql)):
			$_SESSION['mensagem'] = "Cadastrado com sucesso!";
			header('Location: ../index.php');
		else:
			$_SESSION['mensagem'] = "Erro ao cadastrar";
			header('Location: ../index.php');
		endif;
	endif;
?>