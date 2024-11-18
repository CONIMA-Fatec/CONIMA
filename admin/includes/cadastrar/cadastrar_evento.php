<?php
include "../conexao.php";
include "../funcoes.php";
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = htmlspecialchars($_POST['nome']);
    $descricao = htmlspecialchars($_POST['descricao']);
    $dataInicio = htmlspecialchars($_POST['dataInicio']);
    $dataFim = htmlspecialchars($_POST['dataFim']);

    $sql = "INSERT INTO evento (nome, descricao, data_inicio, data_fim) VALUES(:nome, :descricao, :dataInicio, :dataFim);";
    $comando = $pdo->prepare($sql);

    $comando->bindParam(":nome", $nome);
    $comando->bindParam(":descricao", $descricao);
    $comando->bindParam(":dataInicio", $dataInicio);
    $comando->bindParam(":dataFim", $dataFim);

    $comando -> execute();
}
header("Location: http://localhost:3030/admin/edicao.php");
?>