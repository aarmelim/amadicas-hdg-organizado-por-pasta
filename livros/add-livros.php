<?php 
    require_once('functions-livros.php');
    add();
?>
<?php 
    include(HEADER_TEMPLATE); 
?>

<h2>Novo Livro</h2>

<form action="add-livros.php" method="post">
    <!-- area de campos do form -->
    <hr />
    <div class="row">
        <div class="form-group col-md-10"> 
            <label for="nome_livro">Nome do Livro</label> 
            <input type="text" class="form-control" name="livro['nome_livro']"> 
        </div>
        <div class="form-group col-md-2"> 
            <label for="situacao">Situação</label> 
            <input type="text" class="form-control" name="livro['situacao']"> 
        </div>
    </div>
    <div class="row">
        <div class="form-group col-md-6"> 
            <label for="autor">Autor</label> 
            <input type="text" class="form-control" name="livro['autor']"> 
        </div>
        <div class="form-group col-md-4"> 
            <label for="ondeli">Onde li</label> 
            <input type="text" class="form-control" name="livro['ondeli']"> 
        </div>
        <div class="form-group col-md-2"> 
            <label for="nota_livro">Nota do Livro</label> 
            <input type="text" class="form-control" name="livro['nota_livro']"> 
        </div>
    </div>
    <div class="row">
        <div class="form-group col-md-12"> 
            <label for="descricao">Descrição</label> 
            <input type="text" class="form-control" name="livro['descricao']"> 
        </div>
    <div id="actions" class="row">
        <div class="col-md-12"> 
            <button type="submit" class="btn btn-primary">
                Salvar
            </button> 
            <a href="index.php" class="btn btn-default">
                Cancelar
            </a> 
        </div>
    </div>
</form>

<?php 
    include(FOOTER_TEMPLATE); 
?>