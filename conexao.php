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