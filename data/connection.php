<?php
//arquivo responsavel pela conexão com o banco de dados;

$host = "localhost";
$db = "blog_tec";
$user = "root";
$pass = "zxc123";

$connection = new PDO("mysql:host=$host;dbname=$db", $user, $pass);

// inserindo dado no banco
//$stmt = $connection->prepare("INSERT INTO user (nome, email) VALUES (:nome, :email)");
$id = 1;
//$nome = "lausssri";
//$email = "devddssdd@gmail.com";

// atualizando dado no banco
//$stmt = $connection->prepare("UPDATE user SET nome = :nome, email = :email WHERE id = :id");

$stmt = $connection->prepare("SELECT * FROM user WHERE id > :id");

$stmt->bindParam(":id", $id);
//$stmt->bindParam(":nome", $nome);
//$stmt->bindParam(":email", $email);

$stmt->execute();

//recebendo dados retornados do banco
//$data = $stmt->fetch(PDO::FETCH_ASSOC);
//print_r($data);
$users = $stmt->fetchAll(PDO::FETCH_ASSOC);//traz todos os itens que corresponder a query
print_r($users);





?>
