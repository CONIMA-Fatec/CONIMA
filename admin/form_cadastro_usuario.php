<?php
$dir = 'includes/';
$files = scandir($dir);

foreach ($files as $file) {
    if (pathinfo($file, PATHINFO_EXTENSION) === 'php') {
        include $dir . $file;
    }
}
?>
<body>
    <h2>Cadastro de Usuário</h2>
    <form method="POST" action="processa_cadastro.php" class="cadastrarParticipante">
        <label for="nome">Nome Completo:</label><br>
        <input type="text" id="nome" name="nome" required><br><br>

        <label for="cpf">CPF:</label><br>
        <input type="text" id="cpf" name="cpf" required maxlength="11" pattern="\d{11}" title="Digite apenas números"><br><br>
        <div>
            <label for="email">E-mail:</label><br>
            <input type="email" id="email" name="email" required>
        </div>
        <div>
            <label   label for="senha">Senha:</label><br>
            <input type="password" id="senha" name="senha" required>
        </div>    
        <div>
            <label>
                <input type="checkbox" name="termo_aceite" required>
                <p>Aceito os termos de uso da imagem</p>
            </label>
        </div>
        <div>  
            <label for="curso">Curso:</label><br>
            <input type="text" id="curso" name="curso" required>
        </div>
        <div>
            <label for="instituicao">Instituição:</label>
            <select name="instituicao" id="instituicao">
                <option value="FATEC - MARILIA">FATEC - Marília</option>
                <option value="UNIVEM">UNVEM</option>
                <option value="UNIMAR">UNIMAR</option>
            </select>
        </div>
        <div>
            <label for="telefone">Telefone:</label><br>
            <input type="tel" id="telefone" name="telefone" pattern="\d{10,11}" title="Digite um telefone válido com DDD" required>
        </div>
        <div>
            <label for="genero">Gênero:</label><br>
            <select id="genero" name="genero" required>
                <option value="masculino">Masculino</option>
                <option value="feminino">Feminino</option>
                <option value="outro">Outro</option>
                <option value="prefiro_nao_dizer">Prefiro não dizer</option>
            </select>
        </div>
        <div>
            <label for="data_nascimento">Data de Nascimento:</label><br>
            <input type="date" id="data_nascimento" name="data_nascimento" required>
        </div>
        <div>
            <label for="tipo_usuario">Tipo de Usuário:</label><br>
            <select id="tipo_usuario" name="tipo_usuario" required>
                <option value="1">Administrador</option>
                <option value="2">Administrador</option>
                <option value="3">Ouvinte</option>
                <option value="4">Autor</option>
            </select>
        </div>
        <div>
            <button type="submit">Solicitar Cadastro</button>
        </div>
    </form>
</body>
<script src="includes/validar_cpf.js"></script>
</html>
