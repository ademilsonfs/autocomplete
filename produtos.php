<?php

$pdo = new PDO('mysql:host=localhost;dbname=importados', 'root', '', [
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ
]); 
$prepare = $pdo->prepare("SELECT cod_fornecedor, descricao FROM produtos WHERE descricao LIKE :descricao");
$prepare->execute([
    'descricao' => $_GET['produto'] . '%',
]);

$produtos = $prepare->fetchAll();

echo json_encode($produtos);


