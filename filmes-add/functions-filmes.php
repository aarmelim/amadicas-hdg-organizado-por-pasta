<?php

require_once('../config.php');
require_once(DBAPI);

$filmes = null;
$filme = null;
$situacao = null;

/**	 *  Listagem de Filmes - todos	 */    
function index()
{
    global $filmes;
    $filmes = find_all('filmes');
}

/**	 *  Listagem de Filmes - ordenado por campo 'situacao'	 */    
function index_orderbyfild($fild)
{
    global $filmes;
    $filmes = find_all_orderbyfild('filmes',null,$fild);
}

/**	 *  Cadastro de Filmes	 */	
function add() {
    if (!empty($_POST['filme'])) {
        $today = date_create('now', new DateTimeZone('America/Sao_Paulo'));	
        $filme = $_POST['filme'];
        $filme['data_modificacao'] = $filme['data_criacao'] = $today->format("Y-m-d H:i:s");
        save('filmes', $filme);	    
        header('location: index.php');	  
    }	
}

/**	 *	Atualizacao/Edicao de Filmes	 */	
function edit() {	
    $now = date_create('now', new DateTimeZone('America/Sao_Paulo'));	
    if (isset($_GET['id'])) {	
      $id = $_GET['id'];	
      if (isset($_POST['filme'])) {	
        $filme = $_POST['filme'];
        $filme['data_modificacao'] = $now->format("Y-m-d H:i:s");
        update('filmes', $id, $filme);	      
        header('location: index.php');	    
        } else {	
            global $filme;	      
            $filme = find('filmes', $id);
            } 
    } else {
        header('location: index.php');	  
        }
}

/**	 *  Visualização de um Cliente	 */	
function view($id = null) {	  
    global $filme;	  
    $filme = find('filmes', $id);	
}

/**	 *  Exclusão de um Cliente	 */	
function delete($id = null) {	
    global $filme;	  
    $filme = remove('filmes', $id);	
    header('location: index.php');	
}