<?php

include '../conexao.php';
$id = $_GET['id'];
$sql = "UPDATE convidado SET deleted_at = now() WHERE id = :id";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':id', $id);


if ($stmt->execute()) {
    header("Location: http://localhost:3030/admin/includes/busca/buscar_participantes.php");
} else {
    echo "Erro ao excluir registro: " . $stmt->errorInfo()[2];
}
?>