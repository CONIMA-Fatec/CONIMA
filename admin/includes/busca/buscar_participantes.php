<?php
include '../conexao.php';
include '../header.php';

// Recebe o termo de busca
$termo_busca = htmlspecialchars($_POST['termo_busca']);

if (empty($termo_busca)) {
    $sql = "SELECT id, nome, descricao, formacao, instituicao, foto FROM convidado WHERE deleted_at IS NULL;";
} else {
    $sql = "SELECT id, nome, descricao, formacao, instituicao FROM convidado WHERE nome LIKE :termo_busca AND deleted_at IS NULL;";
}

// Prepara a consulta SQL
$stmt = $pdo->prepare($sql);

// Se houver um termo de busca, vincula o valor
if (!empty($termo_busca)) {
    $stmt->bindValue(':termo_busca', "%$termo_busca%");
}

$stmt->execute();

// Exibe os resultados
if ($stmt->rowCount() > 0) {
    echo "<table class='tabela-patrocinadores'>";
    echo "<tr><th>ID</th><th>Nome</th><th>Descrição</th><th>Formação</th><th>Instituição</th><th>Ações</th></tr>";
    while ($row = $stmt->fetch()) {
        echo "<tr>";
        echo "<td>" . $row['id'] . "</td>";
        echo "<td>" . $row['nome'] . "</td>";
        echo "<td>" . $row['descricao'] . "</td>";
        echo "<td>" . $row['formacao'] . "</td>";
        echo "<td>" . $row['instituicao'] . "</td>";
        echo "<td><a href='../editar/atualizar_convidado.php?id=" . $row['id'] . "' class='btn-editar'>Editar</a> <br> <br> <a href='../excluir/excluir_convidado.php?id=" . $row['id'] . "' class='btn-excluir'>Excluir</a></td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "Nenhum convidado encontrado.";
}
?>
<html>
    <link rel="stylesheet" href="style.css">
</html>