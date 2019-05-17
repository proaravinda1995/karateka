<?php

session_start();
$servername  = "localhost";
$username = "root";
$password = "";
$dbname = "karateka";

$con = new mysqli($servername,$username,$password,$dbname);

  $id10 = $_GET['id10'];

  $sql11 = "DELETE FROM news WHERE  id = $id10";


  $con -> query($sql11);

  header('location:index.php');



 ?>
