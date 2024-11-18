<?php
$dir = 'includes/';
$files = scandir($dir);

foreach ($files as $file) {
    if (pathinfo($file, PATHINFO_EXTENSION) === 'php') {
        include $dir . $file;
    }
}
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
        Administração do Site <br>
        <a href="admin.php?logout=true" style="color: white;">Logout</a>
    </header>
    <div class="dashboard">
        <h3>Painel de Inscrições</h3>
        <p>Aqui você pode visualizar e gerenciar as inscrições.</p>
        <button onclick="window.location.href='inscricoes.php'">Acessar Inscrições</button>
    </div>
    <main>
        <h2>Painel Administrativo</h2>

        
    </main>
</body>
</html>

