<?php
$pagina=$_GET['pg'];

if($pagina=='home' or $pagina=='empresa' or $pagina=='produtos' or $pagina=='contato' or $pagina=='servicos'){
    require_once($pagina.".php");
}else{
    require_once("home.php");
}
?>