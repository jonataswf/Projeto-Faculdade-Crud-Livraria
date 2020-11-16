<?php
// Sessão
session_start();
// Conexão
include_once '../includes/db_connect.php';

// Editar tabelas
if(isset($_POST['btn-editar'])):

    $titulo = mysqli_escape_string($conexao, $_POST['titulo']);
    $autor = mysqli_escape_string($conexao, $_POST['autor']);
    $ano = mysqli_escape_string($conexao, $_POST['ano']);
    $preco = mysqli_escape_string($conexao, $_POST['preco']);
    $quantidade = mysqli_escape_string($conexao, $_POST['quantidade']);
    $tipo = mysqli_escape_string($conexao, $_POST['tipo']);
	$nome = mysqli_escape_string($conexao, $_POST['nome']);
	
	$id = mysqli_escape_string($conexao, $_POST['alterar']);

	$sql = "UPDATE acervo a JOIN editora e ON a.idEditora = e.id SET a.titulo = '$titulo', a.autor = '$autor', a.ano = '$ano', a.preco = '$preco', a.quantidade = '$quantidade', a.tipo = '$tipo', e.nome = '$nome' WHERE a.idAcervo = '$id'";

	if(mysqli_query($conexao, $sql)):
		$_SESSION['mensagem'] = "Atualizado com sucesso!";
		header('Location: ../index.php');
	else:
		$_SESSION['mensagem'] = "Erro ao atualizar";
		header('Location: ../index.php');
	endif;
endif;