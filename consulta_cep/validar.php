<?php 
require_once("conexao.php");

$email = $_POST['email'];
$senha = $_POST['senha'];


$sql = "SELECT id FROM cliente WHERE (email= '$email') AND (senha = '$senha')";

$query = mysqli_query ($connection, $sql);

if (mysqli_num_rows($query) != 1){
    header ("Location: login.php");
}
else{
header ("Location: index.php");
}
?>