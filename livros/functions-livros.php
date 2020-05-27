<?php

require_once('../config.php');
require_once(DBAPI);

$livros = null;
$livro = null;

/**	 *  Listagem de Livros	 */    
function index()
{
    global $livros;
    $livros = find_all('livros');
}

/**	 *  Cadastro de Livros	 */	
function add() {
    if (!empty($_POST['livro'])) {
        $today = date_create('now', new DateTimeZone('America/Sao_Paulo'));	
        $livro = $_POST['livro'];
        $livro['data_modificacao'] = $livro['data_criacao'] = $today->format("Y-m-d H:i:s");
        save('livros', $livro);	    
        header('location: index.php');	  
    }	
}

/**	 *	Atualizacao/Edicao de Livros	 */	
function edit() {	
    $now = date_create('now', new DateTimeZone('America/Sao_Paulo'));	
    if (isset($_GET['id'])) {	
      $id = $_GET['id'];	
      if (isset($_POST['livro'])) {	
        $livro = $_POST['livro'];
        $livro['data_modificacao'] = $now->format("Y-m-d H:i:s");
        update('livros', $id, $livro);	      
        header('location: index.php');	    
        } else {	
            global $livro;	      
            $livro = find('livros', $id);
            } 
    } else {
        header('location: index.php');	  
        }
}

/**	 *  Visualização de um Livro	 */	
function view($id = null) {	  
    global $livro;	  
    $livro = find('livros', $id);	
}

/**	 *  Exclusão de um Livro	 */	
function delete($id = null) {	
    global $livro;	  
    $livro = remove('livros', $id);	
    header('location: index.php');	
}