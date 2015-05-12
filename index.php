<?php

ini_set('display_errors', true);
error_reporting(E_ALL);

function verificaRota($rota){
    #$paginas =array("home","empresa","produtos","servicos","contato","index");

    $file = $rota.".php";

    if (file_exists($file)) {
        require_once($file);
    } else {
        require_once("404.php");
    }



    $rota = parse_url("http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);

    $patch = str_replace("/","",$rota['path']);


    verificaRota($patch);


    ?>