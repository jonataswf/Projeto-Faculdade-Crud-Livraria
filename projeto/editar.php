<?php
// Conexão
include_once 'includes/db_connect.php';
// Header
include_once 'includes/header.php';
// Select
if(isset($_GET['editar'])):
	$id = mysqli_escape_string($conexao, $_GET['editar']);

	$sql = "SELECT * FROM acervo as a join editora as e on a.idEditora = e.id WHERE idAcervo = '$id'";
	$resultado = mysqli_query($conexao, $sql);
	$dados = mysqli_fetch_array($resultado);
endif;
?>

<div class="row">
	<div class="col s12 m6 push-m3">
		<h3 class="light"> Editar Cadastro </h3>
		<form action="php_action/update.php" method="POST">
			<input type="hidden" name="alterar" value="<?php echo $dados['idAcervo'];?>">
			
            <div class="input-field col s12">
				<input type="text" name="titulo" id="titulo" value="<?php echo $dados['titulo'];?>">
				<label for="titulo">Titulo</label>
			</div>

            <div class="input-field col s12">
				<input type="text" name="autor" id="autor" value="<?php echo $dados['autor'];?>">
				<label for="autor">Autor</label>
			</div>

            <div class="input-field col s12">
				<input type="text" name="ano" id="ano" value="<?php echo $dados['ano'];?>">
				<label for="ano">Ano</label>
			</div>

            <div class="input-field col s12">
				<input type="text" name="preco" id="preco" value="<?php echo $dados['preco'];?>">
				<label for="preco">Preco</label>
			</div>

            <div class="input-field col s12">
				<input type="text" name="quantidade" id="quantidade" value="<?php echo $dados['quantidade'];?>">
				<label for="quantidade">Quantidade</label>
			</div>

            <div class="input-field col s12">
				<input type="text" name="tipo" id="tipo" value="<?php echo $dados['tipo'];?>">
				<label for="tipo">Tipo</label>
			</div>

            <div class="input-field col s12">
				<input type="text" name="nome" id="nome" value="<?php echo $dados['nome'];?>">
				<label for="nome">Nome Editora</label>
			</div>

			<button type="submit" name="btn-editar" class="btn"> Atualizar</button>
			<a href="index.php" class="btn green"> Lista de livros </a>
		</form>
		
	</div>
</div>

<?php
// Footer
include_once 'includes/footer.php';
?>