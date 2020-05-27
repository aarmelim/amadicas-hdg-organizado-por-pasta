<?php	
error_reporting(E_ALL);
ini_set('display_errors', 'On');
?>
<?php require_once '../config.php'; ?>
<?php require_once DBAPI; ?>
<?php $db = open_database(); ?>
<?php 
    require_once('functions-livros.php');
    index();    
?>

<?php 
    include(HEADER_TEMPLATE); 
?>
<header>
        <div class="row">
            <div class="col-sm-6 text-left">
                <h2>Livros</h2>
            </div>
            <div class="col-sm-6 text-right"> 
                <a href="add-livros.php">
                    Novo Livro
                </a> 
            </div>
        </div>
</header>

<?php if (!empty($_SESSION['message'])) : ?> 
    <div class="alert alert-<?php echo $_SESSION['type']; ?> alert-dismissible" role="alert"> 
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button> 
        <?php echo $_SESSION['message']; ?> 
    </div> 
<?php endif; ?>

<hr>
<?php if ($db) : ?>
    <div class="table-responsive">
    <table class="table table-sm table-hover">
        <thead class="thead-light">
            <tr>
                <th scope="col">Nome do Livro</th>
                <th scope="col">Autor</th>
                <th scope="col">Situação</th>
                <th scope="col">Data</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody> 
            <?php if ($livros) : ?> 
                <?php foreach ($livros as $livro) : ?> 
                    <tr>
                        <td><?php echo $livro['nome_livro']; ?></td>
                        <td><?php echo $livro['autor']; ?></td>
                        <td><?php echo $livro['situacao']; ?></td>
                        <td><?php echo $livro['data_modificacao']; ?></td>
                        <td class="actions text-right"> 
                            <a href="edit-livros.php?id=<?php echo $livro['id']; ?>" class="btn btn-sm btn-warning">
                                e
                            </a> 
                            <a href="delete-livros.php?id=<?php echo $livro['id']; ?>" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#delete-modal" data-livro="<?php echo $livro['id']; ?>"> 
                                x  
                            </a> 
                        </td>
                    </tr> 
                <?php endforeach; ?> 
            <?php else : ?> 
            <tr>
                <td colspan="6">Nenhum registro encontrado.</td>
            </tr> 
            <?php endif; ?> 
        </tbody>
    </table>
    </div>
<?php else : ?> <div class="alert alert-danger" role="alert">
        <p><strong>ERRO:</strong> Não foi possível Conectar ao Banco de Dados!</p>
    </div>
<?php endif; ?>

<?php include(FOOTER_TEMPLATE); ?>