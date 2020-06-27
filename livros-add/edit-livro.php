<?php 
    require_once('functions-livros.php');
    edit();    
?>

<?php 
    include(HEADER_TEMPLATE); 
?>

<h2>Atualizar Livro</h2>
<form action="edit-livros.php?id=<?php echo $livro['id']; ?>" method="post">
    <hr />
    <div class="row">
        <div class="form-group col-sm-10"> 
            <label for="nome_livro">Nome do Livro</label> 
            <input type="text" class="form-control" name="livro['nome_livro']" value="<?php echo $livro['nome_livro']; ?>">
        </div>
        <div class="form-group col-sm-2"> 
            <label for="situação">Situação</label> 
            <input type="text" class="form-control" name="livro['situacao']" value="<?php echo $livro['situacao']; ?>">
        </div>
    </div>
    <div class="row">
        <div class="form-group col-sm-6"> 
            <label for="autor">Autor</label> 
            <input type="textarea" class="form-control" name="livro['autor']" value="<?php echo $livro['autor']; ?>">
        </div>
        <div class="form-group col-sm-4"> 
            <label for="ondeli">Onde Li</label> 
            <input type="textarea" class="form-control" name="livro['ondeli']" value="<?php echo $livro['ondeli']; ?>">
        </div>
        <div class="form-group col-sm-2">
            <label for="nota_livro">Nota do Livro</label> 
            <input type="text" class="form-control" name="livro['nota_livro']" value="<?php echo $livro['nota_livro']; ?>">
        </div>
    </div>
    <div class="row">
        <div class="form-group col-sm-12"> 
            <label for="descricao">Descrição</label> 
            <input type="textarea" class="form-control" name="livro['descricao']" value="<?php echo $livro['descricao']; ?>">
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