<?php


$servername  = "localhost";
$username = "root";
$password = "";
$dbname = "karateka";

$con = new mysqli($servername,$username,$password,$dbname);

  $id11 = $_GET['id10'];






  $sql11 = "DELETE FROM demo WHERE  id = $id11";


  $con -> query($sql11);

  header('location:reg.php');



 ?>
