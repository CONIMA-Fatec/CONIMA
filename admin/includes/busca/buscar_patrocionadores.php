<?php
include '../conexao.php';
include '../header.php';
// Recebe o termo de busca
$termo_busca = htmlspecialchars($_POST['termo_busca']);
if (empty($termo_busca)) {
    $sql = "SELECT * FROM patrocinadores";
} else {
    $sql = "SELECT * FROM patrocinadores WHERE nome LIKE :termo_busca";
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
    echo "<tr><th>Nome</th><th>Tipo</th><th>Logo</th><th>Ações</th></tr>";
    while ($row = $stmt->fetch()) {
        echo "<tr>";
        echo "<td>" . $row['nome'] . "</td>";
        echo "<td>" . $row['tipo_patrocinio'] . "</td>";
        echo "<td><img src='" . $row['logo'] . "' alt='" . $row['nome'] . "'></td>";
        echo "<td><a href='../editar/atualizar_patrocinador.php?id=" . $row['id'] . "' class='btn-editar'>Editar</a> <br> <br> <a href='../excluir/excluir_patrocinador.php?id=" . $row['id'] . "' class='btn-excluir'>Excluir</a></td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "Nenhum patrocinador encontrado.";
}
?>
<html>
    <link rel="stylesheet" href="style.css">
</html>
