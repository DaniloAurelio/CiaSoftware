<?php
/**
 * Created by PhpStorm.
 * User: DANILO
 * Date: 15/05/2015
 * Time: 08:57
 */
try {
   # global $conexao;
     $conexao = new \PDO("mysql:host=localhost;dbname=ciasoftware", "root", "");
}catch (\PDOException $e){
    die ("Erro : ".$e->getCode()." - ".$e->getMessage());

}

?>
