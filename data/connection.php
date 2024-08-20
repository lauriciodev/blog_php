<?php
//arquivo responsavel pela conexão com o banco de dados;

$host = "localhost";
$db = "blog_tec";
$user = "root";
$pass = "zxc123";

$connection = new PDO("mysql:host=$host;dbname=$db", $user, $pass);

?>
