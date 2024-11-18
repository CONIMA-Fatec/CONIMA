<?php
$dir = 'includes/';
$files = scandir($dir);

foreach ($files as $file) {
    if (pathinfo($file, PATHINFO_EXTENSION) === 'php') {
        include $dir . $file;
    }
}
session_start();
autenticar(); // Certifique-se de que o usuário está autenticado
buscarEdicoes(); //serve para buscar as edições do coninma está no arquivo funcoes.php

?>
<header> <h2>Cadastrar Patrocinadores</h2> </header>
<main>
    <section>
    <form method="POST" action="includes/busca/buscar_patrocionadores.php" class="buscar">
    <div class="form-group">
        <input type="text" name="termo_busca" placeholder="Digite o nome do patrocinador">
    </div>
    <div class="form-group" style="text-align: center;">
        <button type="submit">Buscar</button> <button type="submit">Listar</button>
    </div>

    </form>
    </section>
    <section>
    <form method="POST" enctype="multipart/form-data" action="includes/cadastrar/cadastrar_patrocinadores.php" class="cadastrarParticipante">
       <div class="form-group">
           <label for="nome">Nome:</label>
           <input type="text" id="nome" name="nome" required>
       </div>
       <div class="form-group">
           <label for="tipo_patrocinio">Tipo:</label> 
           <select id="tipo_patrocinio" name="tipo_patrocinio" required>
                <option value="patrocinadores">Patrocinadores</option>
                <option value="apoio">Apoio</option>
                <option value="intituicoesParceiras">Intituições Parceiras</option>
            </select>
       </div>
       <div class="form-group">
        <label for="edicao_evento">Edição do Evento:</label>
            <select name="edicao_evento" id="edicao_evento">
                <?php
                $edicoes = buscarEdicoes();
                foreach ($edicoes as $edicao) {
                    echo "<option value='{$edicao['id']}'>{$edicao['nome']}</option>";
                }
                ?>
            </select>
       </div>
       <div class="form-group">
           <label for="foto">Logo:</label>
           <input type="file" id="foto" name="foto" accept="image/png, image/jpeg" required>
       </div>  
       <div class="form-group">
           <label for="altimg">Texto Alternativo da logo:</label>
           <textarea id="altimg" name="altImg" maxlength="2000" required></textarea>
           <br>
           <br>
           <div class="form-group" id="botoes">
            <button type="submit">Cadastrar</button>
            <a href="admin.php" class="back">Voltar ao Painel</a>
        </div>
      
   </form>
    </section>
   
</main>
    
        
</body>
</html>