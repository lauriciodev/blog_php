1. Configuração do Banco de Dados
Antes de começarmos, certifique-se de que você tenha um banco de dados MySQL e uma tabela criados. Aqui está um exemplo simples de uma tabela chamada users:

sql
Copiar código
CREATE DATABASE exampledb;

USE exampledb;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    email VARCHAR(100)
);
2. Conectar ao Banco de Dados com PDO
Primeiro, você precisa criar um script PHP para conectar-se ao banco de dados usando PDO.

php
Copiar código
<?php
$host = '127.0.0.1'; // ou localhost
$db   = 'exampledb';
$user = 'seu_usuario';
$pass = 'sua_senha';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

try {
    $pdo = new PDO($dsn, $user, $pass, $options);
} catch (\PDOException $e) {
    throw new \PDOException($e->getMessage(), (int)$e->getCode());
}
?>
3. Inserir Dados
Para inserir dados na tabela users, você pode preparar uma instrução SQL e executá-la:

php
Copiar código
<?php
require 'path_to_your_connection_file.php'; // Substitua pelo caminho correto

$name = "John Doe";
$email = "john.doe@example.com";

$sql = "INSERT INTO users (name, email) VALUES (?, ?)";
$stmt = $pdo->prepare($sql);
$stmt->execute([$name, $email]);

echo "Usuário inserido com sucesso.";
?>
4. Buscar Dados
Para buscar dados do banco de dados:

php
Copiar código
<?php
require 'path_to_your_connection_file.php'; // Substitua pelo caminho correto

$sql = "SELECT id, name, email FROM users";
$stmt = $pdo->query($sql);

while ($row = $stmt->fetch()) {
    echo $row['name'] . " - " . $row['email'] . "<br>";
}
?>
5. Atualizar Dados
Para atualizar dados existentes:

php
Copiar código
<?php
require 'path_to_your_connection_file.php'; // Substitua pelo caminho correto

$updatedEmail = 'new.john.doe@example.com';
$id = 1; // ID do usuário que você deseja atualizar

$sql = "UPDATE users SET email=? WHERE id=?";
$stmt = $pdo->prepare($sql);
$stmt->execute([$updatedEmail, $id]);

echo "Email atualizado com sucesso.";
?>
6. Excluir Dados
Para excluir dados:

php
Copiar código
<?php
require 'path_to_your_connection_file.php'; // Substitua pelo caminho correto

$id = 1; // ID do usuário que você deseja excluir

$sql = "DELETE FROM users WHERE id=?";
$stmt = $pdo->prepare($sql);
$stmt->execute([$id]);

echo "Usuário excluído com sucesso.";
?>
Esse é um guia básico para começar a usar o PDO com MySQL em PHP. Com esses exemplos, você pode criar, ler, atualizar e excluir dados em um banco de dados MySQL. Lembre-se de substituir os valores de conexão e ajustar as consultas conforme necessário para o seu banco de dados específico.
