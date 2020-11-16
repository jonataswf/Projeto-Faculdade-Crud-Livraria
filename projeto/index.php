<?php
// Conexão
include_once 'includes/db_connect.php';
// Header
include_once 'includes/header.php';
// Mensagem
include_once 'includes/message.php';
?>

<div class="row">
	<div class="col s12 m8 push-m2">
		<h3 class="light"> Livraria </h3>
		<table id='tabela' class="striped">
			<thead>
				<tr>
					<th>Id Acervo:</th>
					<th>Id Editora:</th>
					<th>Titulo:</th>
                    <th>Autor:</th>
                    <th>Ano:</th>
                    <th>Preço:</th>
                    <th>Quantidade:</th>
                    <th>Tipo:</th>
                    <th>Nome Editora:</th>
				</tr>
            </thead>
            <tbody>
				<?php
				$sql = "SELECT * FROM acervo as a join editora as e on a.idEditora = e.id ORDER BY a.idAcervo ASC";
				$resultado = mysqli_query($conexao, $sql);
               
                if(mysqli_num_rows($resultado) > 0):

				while($dados = mysqli_fetch_array($resultado)):
				?>
				<tr>
					<td><?php echo $dados['idAcervo']; ?></td>
					<td><?php echo $dados['idEditora']; ?></td>
					<td><?php echo $dados['titulo']; ?></td>
                    <td><?php echo $dados['autor']; ?></td>
                    <td><?php echo $dados['ano']; ?></td>
                    <td><?php echo $dados['preco']; ?></td>
                    <td><?php echo $dados['quantidade']; ?></td>
                    <td><?php echo $dados['tipo']; ?></td>
                    <td><?php echo $dados['nome']; ?></td>
					<td><a href="editar.php?editar=<?php echo $dados['idAcervo']; ?>" class="btn-floating orange"><i class="material-icons">edit</i></a></td>

					<td><a href="#modal<?php echo $dados['idAcervo']; ?>" class="btn-floating red modal-trigger"><i class="material-icons">delete</i></a></td>

					<!-- Modal Structure -->
					  <div id="modal<?php echo $dados['idAcervo']; ?>" class="modal">
					    <div class="modal-content">
					      <h4>Atenção!</h4>
					      <p>Tem certeza que deseja excluir?</p>
					    </div>
					    <div class="modal-footer">					     

					      <form action="php_action/delete.php" method="POST">
					      	<input type="hidden" name="deletar" value="<?php echo $dados['idAcervo']; ?>">
					      	<button type="submit" name="btn-deletar" class="btn red">Sim, quero deletar</button>

					      	 <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Cancelar</a>

					      </form>

					    </div>
					  </div>


				</tr>
			   <?php 
				endwhile;
				else: ?>

				<tr>
					<td>-</td>
					<td>-</td>
					<td>-</td>
					<td>-</td>
					<td>-</td>
					<td>-</td>
					<td>-</td>
					<td>-</td>
					<td>-</td>
				</tr>

			   <?php 
				endif;
			   ?>

			</tbody>
		</table>
		<br>
		<a href="cadastrar_acervo.php" class="btn">Cadastrar Acervo</a>
		<a href="cadastrar_editora.php" class="btn">Cadastrar Editora</a>
		<input type="text" id="Input" onkeyup="pesquisar()" placeholder="Pesquisar por titulo..." title="Digite um titulo">
	</div>
</div>

<!--Javascript para pesquisar por titulo-->
<script>
function pesquisar() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("Input");
  filter = input.value.toUpperCase();
  table = document.getElementById("tabela");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[2];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
		tr[i].style.display = "none";
      }
    }       
  }
}
</script>
            
<?php
// Footer
include_once 'includes/footer.php';
?>