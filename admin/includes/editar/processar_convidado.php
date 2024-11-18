<?php
include "../conexao.php";
include "../funcoes.php";
session_start();
$mensagem = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Sanitizando as entradas
    $nome = htmlspecialchars($_POST['nome']);
    $descricao = htmlspecialchars($_POST['descricao']);
    $formacao = htmlspecialchars($_POST['formacao']);
    $instituicao = htmlspecialchars($_POST['instituicao']);
    $id = htmlspecialchars($_POST['id']); // ID do participante a ser atualizado

    try {
        // Preparando a query de atualização
        $stmt = $pdo->prepare("
            UPDATE convidado 
            SET nome = :nome, 
                descricao = :descricao, 
                formacao = :formacao, 
                instituicao = :instituicao 
            WHERE id = :id
        ");

        // Executando o comando com os valores
        $stmt->execute([
            ':nome' => $nome,
            ':descricao' => $descricao,
            ':formacao' => $formacao,
            ':instituicao' => $instituicao,
            ':id' => $id
        ]);

        $mensagem = "Participante atualizado com sucesso!";
    } catch (PDOException $e) {
        $erro = "Erro ao atualizar participante: " . $e->getMessage();
    }
}

// Exibe mensagens para depuração (apenas durante testes)
if (!empty($mensagem)) {
    echo $mensagem;
}
if (!empty($erro)) {
    echo $erro;
}

// Redireciona de volta para a página de participantes
header("Location: ../../participante.php");
exit;
?>
