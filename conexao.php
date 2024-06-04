<?php
$server = "localhost";
$user= "root";
$pass="";
$dbname="geral";

 $conn = mysqli_connect($server,$user,$pass,$dbname);

 function mensagem($texto, $tipo){
    echo"<div class='alert alert-$tipo' role='alert'>
   $texto
  </div>";
 }
 function mostra_data($data_vista){
   $data_vista=explode("-",$data_vista);
$escreve=$data_vista[2]."/".$data_vista[1]."/".$data_vista[0];
return $escreve;
 }