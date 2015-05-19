<?php
require("./config/database.php");

$sql="DROP TABLE IF EXISTS `tb_paginas`;
CREATE TABLE `tb_paginas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(50) DEFAULT NULL,
  `titulo` varchar(100) DEFAULT NULL,
  `conteudo` longblob,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

";
$stmt = $conexao->prepare($sql);
$stmt->execute();
echo "### TABELA CRIADA ###";


for($x=1;$x<=5;$x++){
    $descricao = "ome".$x;
    $titulo = "Home".$x;
    $conteudo = "<h1> Home do Sistema <h1>".$x;
    $sql="INSERT INTO `tb_paginas` VALUES('',:descricao,:titulo,:conteudo)";
    $stmt=$conexao->prepare($sql);
    $stmt->bindParam(":descricao",$descricao);
    $stmt->bindParam(":conteudo",$conteudo);
    $stmt->bindParam(":titulo",$titulo);
    $stmt->execute();

}


