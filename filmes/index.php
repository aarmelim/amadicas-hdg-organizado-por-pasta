<?php	
error_reporting(E_ALL);
ini_set('display_errors', 'On');
?>
<?php require_once '../config.php'; ?>
<?php require_once DBAPI; ?>
<?php $db = open_database(); ?>
<?php 
    require_once('functions-filmes.php');
    index();    
?>

<?php 
    include(HEADER_TEMPLATE); 
?>
<header>
        <div class="row">
            <div class="col-sm-6 text-left">
                <h2>Filmes</h2>
            </div>
            <div class="col-sm-6 text-right"> 
                <a href="add-filmes.php">
                    Novo Filme
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
                <th scope="col">Nome do Filme</th>
                <th scope="col">Data em que vi</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody> 
            <?php if ($filmes) : ?> 
                <?php foreach ($filmes as $filme) : ?> 
                    <tr>
                        <td><?php echo $filme['nome_filme']; ?></td>
                        <td><?php echo $filme['data_criacao']; ?></td>
                        <td class="actions text-right"> 
                            <a href="edit-filmes.php?id=<?php echo $filme['id']; ?>" class="btn btn-sm btn-warning">
                                e
                            </a> 
                            <a href="delete-filmes.php?id=<?php echo $filme['id']; ?>" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#delete-modal" data-filme="<?php echo $filme['id']; ?>"> 
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