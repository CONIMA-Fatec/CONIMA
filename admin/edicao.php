<?php
$dir = 'includes/';
$files = scandir($dir);

foreach ($files as $file) {
    if (pathinfo($file, PATHINFO_EXTENSION) === 'php') {
        include $dir . $file;
    }
}
include "header.php";
?>
<header> <h2>Cadastrar Evento</h2> </header>
   
   <form method="POST" enctype="multipart/form-data" action="includes/cadastrar/cadastrar_evento.php" class="cadastrarParticipante">
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
            <label for="dataInicio">Data de Início do Evento:</label><br>
            <input type="date" id="dataInicio" name="dataInicio" required>
        </div>
        <div class="form-group">
            <label for="dataFim">Data de Fim do Evento:</label><br>
            <input type="date" id="dataFim" name="dataFim" required>
        </div>
<br>
<br>
<div class="form-group" id="botoes">
            <button type="submit">Cadastrar</button>
            <a href="admin.php" class="back">Voltar ao Painel</a>
        </div>
        
      
   </form>
        
</body>
</html>