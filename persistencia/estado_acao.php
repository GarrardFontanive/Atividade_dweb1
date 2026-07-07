<?php
require 'conexao.php';

$acao = $_POST['acao'] ?? $_GET['acao'] ?? '';

if ($acao == 'criar') {
    $stmt = $pdo->prepare("INSERT INTO estado (nome, sigla) VALUES (?, ?)");
    $stmt->execute([$_POST['nome'], $_POST['sigla']]);
} 
elseif ($acao == 'editar') {
    $stmt = $pdo->prepare("UPDATE estado SET nome = ?, sigla = ? WHERE id = ?");
    $stmt->execute([$_POST['nome'], $_POST['sigla'], $_POST['id']]);
} 
elseif ($acao == 'deletar') {
    $stmt = $pdo->prepare("DELETE FROM estado WHERE id = ?");
    $stmt->execute([$_GET['id']]);
}

header('Location: estado_list.php');
exit;
?>