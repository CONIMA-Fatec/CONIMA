<?php
include "conexao.php";
include "funcoes.php";
session_start();
autenticar(); // Certifique-se de que o usuário está autenticado

// Inicializa as variáveis de erro e mensagem de sucesso
include "header.php";
?>

<header> <h2>Cadastrar Convidado</h2> </header>
   
   <form method="POST" enctype="multipart/form-data" action="cadastrar_participante.php" class="cadastrarParticipante">
       <div class="form-group">
           <label for="nome">Nome:</label>
           <input type="text" id="nome" name="nome" required>
       </div>
       <div class="form-group">
           <label for="descricao">Descrição:</label>
           <textarea id="descricao" name="descricao"   
maxlength="2000" required></textarea>
       </div>
       <div class="form-group">
           <label for="formacao">Formação:</label>
           <input type="text" id="formacao" name="formacao" required>
       </div>
       <div class="form-group">
           <label for="instituicao">Instituição:</label>   

           <input type="text" id="instituicao" name="instituicao" required>
       </div>
       <div class="form-group">
           <label for="foto">Foto:</label>
           <input type="file" id="foto" name="foto" accept="image/png, image/jpeg" required>
       </div>  
       <div class="form-group">
           <label for="altimg">Texto Alternativo da Imagem:</label>
           <textarea id="altimg" name="altImg"   
maxlength="2000" required></textarea>
<br>
<br>
        <div class="form-group">
            <button type="submit">Cadastrar</button>
            <a href="admin.php" class="back">Voltar ao Painel Administrativo</a>
        </div>
      
   </form>
        
</body>
</html>
