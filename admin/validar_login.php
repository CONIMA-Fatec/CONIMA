<?php
session_start();
include "conexao.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);

    // Valida as credenciais no banco de dados
    $stmt = $pdo->prepare("SELECT id FROM usuarios WHERE username = :username AND senha = :senha");
    $stmt->execute([
        'username' => $username,
        'senha' => md5($password) // Altere conforme seu método de hash
    ]);

    $usuario = $stmt->fetch();

    if ($usuario) {
        $_SESSION['usuario_id'] = $usuario['id']; // Armazena o ID do usuário na sessão
        header("Location: admin.php");
        exit;
    } else {
        $error = "Usuário ou senha inválidos.";
        header("Location: login.php?error=" . urlencode($error));
        exit;
    }
}
?>
