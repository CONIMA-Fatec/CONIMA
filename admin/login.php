<?php
session_start();
include "includes/header.php";
?>


<body>
    <header><h2>Login - Administração</h2></header>
    <form method="POST" action="includes/validar_login.php" class="cadastrarParticipante">
    <div class="form-group">
    <label for="username">Usuário:</label><br>
    <input type="text" id="username" name="username" required>
    </div>    
    <div class="form-group" >
    <label for="password">Senha:</label><br>
        <input type="password" id="password" name="password" required>
    </div>
    <div class="form-group">
    <button type="submit" style="text-align: center;">Entrar</button>
    </div>
       
        <p>Não possui cadastro? <a href="form_cadastro_usuario.php">Clique aqui</a> para solicitar o cadastro.</p>
    </form>
    <?php if (isset($error)) echo "<p style='color:red;'>$error</p>"; ?>
   
</body>
<?php if (isset($_GET['error'])): ?>
    <p style="color: red;"><?= htmlspecialchars($_GET['error']) ?></p>
<?php endif; ?>
<?php include "footer.php"; ?>