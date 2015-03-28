<?php
ini_set('display_errors', true);
error_reporting(E_ALL);

$pagina= filter_input(INPUT_GET, 'pg');

if($pagina=='home' or $pagina=='empresa' or $pagina=='produtos' or $pagina=='contato' or $pagina=='servicos'){
    require_once($pagina.".php");
}else{
    require_once("home.php");
}
?>