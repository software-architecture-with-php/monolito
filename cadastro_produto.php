<?php

// Estrutura de monolito.
// Lógica, banco e exibição tudo junto.

// Exemplo de monolito simples em PHP

// Conexão com banco
$pdo = new PDO('mysql:host=localhost;dbname=monolito', 'root', 'root');

// Processa formulário
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST['nome'];
    $preco = $_POST['preco'];
    
    // Validaçoes de erros usando switch/case
    switch (true) {
        case (empty($nome) || empty($preco)):
            die("Nome e preço são obrigatórios.");
        case (!is_string($nome)):
            die("Nome deve ser uma string.");
        case (!is_numeric($preco)):
            die("Preço deve ser um número.");
        case (strpos($preco, '.') === false):
            die("Preço deve ser um número decimal com ponto como separador (ex: 10.50).");
    }

    // Insere produto no banco
    $stmt = $pdo->prepare("INSERT INTO produtos (nome, preco) VALUES (?, ?)");
    $stmt->execute([$nome, $preco]);
    echo "Produto cadastrado com sucesso!";
}

?>