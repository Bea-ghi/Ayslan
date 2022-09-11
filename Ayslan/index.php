<?php 
// A sessão precisa ser iniciada em cada página diferente
if (!isset($_SESSION)) session_start();

if (isset($_SESSION['UsuarioID'])){
echo("Login realizado com succeso!!");
}else{
    header("Location: login.php");
} ?>