<?php
include_once("helpers/helper.php");
include_once("data/connection.php");
?>

<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width-device-width, inicial-scale=1.0">
  <link rel="stylesheet" href="<?= $BASE_URL ?>css/style.css">

  <title>blog php</title>
</head>

<body>
  <header>
    <nav>
      <a href="<?= $BASE_URL ?>"/>
      <img class="logo" src="<?= $BASE_URL?>/img/blog.png" />
      </a>
        <div class="links">
        <a href="<?= $BASE_URL ?>">Home</a>
        <a href="#">Sobre</a>
        <a href="<?= $BASE_URL ?>contato.php">Contato</a>
      </div>
    </nav>
  </header>
