<?php
// Header
include_once 'includes/header.php';
?>

<div class="row">
<div class="col s12 m6 push-m3">
    <h3 class="light"> Cadastrar Acervo </h3>
    <form action="php_action/insert.php" method="POST">
        
        <div class="input-field col s12">
            <input type="text" name="idEditora" id="idEditora">
            <label for="idEditora">ID Editora</label>
        </div>

        <div class="input-field col s12">
            <input type="text" name="titulo" id="titulo">
            <label for="titulo">Titulo</label>
        </div>

        <div class="input-field col s12">
            <input type="text" name="autor" id="autor">
            <label for="autor">Autor</label>
        </div>

        <div class="input-field col s12">
            <input type="text" name="ano" id="ano">
            <label for="ano">Ano</label>
        </div>

        <div class="input-field col s12">
            <input type="text" name="preco" id="preco">
            <label for="preco">Preco</label>
        </div>

        <div class="input-field col s12">
            <input type="text" name="quantidade" id="quantidade">
            <label for="quantidade">Quantidade</label>
        </div>

        <div class="input-field col s12">
            <input type="text" name="tipo" id="tipo">
            <label for="tipo">Tipo</label>
        </div>
        
        <button type="submit" name="btn-cadastrar-acervo" class="btn"> Cadastrar </button>
        <a href="index.php" class="btn green"> Lista de Livros </a>
    </form>
    
</div>
</div>

<?php
// Footer
include_once 'includes/footer.php';
?>