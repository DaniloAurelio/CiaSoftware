<?php
ini_set('display_errors', true);
error_reporting(E_ALL);
require_once("./config/database.php");
require_once("topo.html");


function verificaPagina($descricao){
    require ("./config/database.php");
    $sql="Select * from tb_paginas where descricao= :descricao ";
    $stmt = $conexao->prepare($sql);
    $stmt->bindValue("descricao",$descricao);
    $stmt->execute();
    $paginas = $stmt->fetch(PDO::FETCH_ASSOC);
    if($paginas){
       $pagina=$paginas['conteudo'];
        echo utf8_encode($pagina);
    }else if($paginas['descricao']=='contato'){
        require_once("topo.html");
        require_once("contato.php");
    }
    else{
        require_once("404.php");
    }
}


 if(isset($_GET['busca']))
    {
        $conteudo = $_GET['busca'];
        $conteudo = "%".$conteudo."%";
        $sql="Select * from tb_paginas where conteudo LIKE :busca ";
        $stmt = $conexao->prepare($sql);
        $stmt->bindParam(":busca",$conteudo,PDO::PARAM_STR);
        $stmt->execute();
        $resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);
        echo "<h1> Resultados encontrados com a palavra : <b>".$_GET['busca']."</b></h1>";
        foreach($resultados as $resultado)
            {

                $texto = substr($resultado["conteudo"],0,500);;

                ?>

                <div class="media">

                    <div class="media-body">
                    <h3><a href="<?=$resultado['descricao'];?>"><?=utf8_encode($resultado['titulo']);?></a></h3 >
                      <h5 class="media-heading"><?=$texto;    ?></h5>

                     </div>
                </div>


                 <?php


            }

    }else
        {
            $rota = parse_url("http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);

            $patch = str_replace("/CiaSoftware/","",$rota['path']);

            verificaPagina($patch);
        }
require_once("rodape.php");

