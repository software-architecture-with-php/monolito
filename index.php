<?php
// index.php

// Roteamento simples baseado no parâmetro 'page'
$page = $_GET['page'] ?? 'home';

switch ($page) {
    case 'cadastro_produto':
        // Exibe o formulário de cadastro
        require 'cadastro_produto.html';
        break;
    case 'salvar_produto':
        // Processa o formulário de cadastro (POST)
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            require 'cadastro_produto.php';
        } else {
            header('Location: ?page=lista_produtos.html');
            exit;
        }
        break;
    default:
        echo "<h1>Bem-vindo ao sistema!</h1>";
        echo "<a href='?page=cadastro_produto'>Cadastrar Produto</a>";
        break;
}
?>
