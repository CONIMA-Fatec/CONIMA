<?php
// include "conexao.php";
include "funcoes.php";

session_start();
autenticar();

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administração do Site</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        Administração do Site
    </header>
    <div class="dashboard">
        <h3>Painel de Inscrições</h3>
        <p>Aqui você pode visualizar e gerenciar as inscrições.</p>
        <button onclick="window.location.href='inscricoes.php'">Acessar Inscrições</button>
    </div>
    <main>
        <h2>Painel Administrativo</h2>
        <nav>
            <button onclick="window.location.href='participante.php'">Participante</button>
            <button onclick="window.location.href='edicao.php'">Edição</button>
            <button onclick="window.location.href='patrocinadores.php'">Patrocinadores</button>
            <button onclick="window.location.href='usuarios.php'">Gerenciar Usuários</button>
        </nav>
        <br>
        <a href="admin.php?logout=true">Logout</a>
    </main>
</body>
</html>

