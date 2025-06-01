<?php
// lista_produto.php

// Conexão com banco
$pdo = new PDO('mysql:host=localhost;dbname=monolito', 'root', 'root');

// Busca produtos
$produtos = $pdo->query("SELECT * FROM produtos")->fetchAll();
?>
