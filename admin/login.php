<?php
session_start();
include "header.php";
?>


<body>
    <h2>Login - Administração</h2>
    <form method="POST" action="validar_login.php">
        <label for="username">Usuário:</label><br>
        <input type="text" id="username" name="username" required><br>
        <label for="password">Senha:</label><br>
        <input type="password" id="password" name="password" required><br><br>
        <button type="submit">Entrar</button>
        <p>Não possui cadastro? <a href="form_login.php">Clique aqui</a> para solicitar o cadastro.</p>
    </form>
    <?php if (isset($error)) echo "<p style='color:red;'>$error</p>"; ?>
</body>
<?php if (isset($_GET['error'])): ?>
    <p style="color: red;"><?= htmlspecialchars($_GET['error']) ?></p>
<?php endif; ?>
<?php include "footer.php"; ?>