<?php
// Sessão
session_start();
// Conexão
include_once '../includes/db_connect.php';

if(isset($_POST['btn-deletar'])):
	
	$id = mysqli_escape_string($conexao, $_POST['deletar']);

	$sql = "DELETE a.* FROM acervo AS a INNER JOIN editora AS e
	WHERE a.idEditora=e.id AND a.idAcervo = '$id'";


	if(mysqli_query($conexao, $sql)):
		$_SESSION['mensagem'] = "Deletado com sucesso!";
		header('Location: ../index.php');
	else:
		$_SESSION['mensagem'] = "Erro ao deletar";
		header('Location: ../index.php');
	endif;
endif;
?>
