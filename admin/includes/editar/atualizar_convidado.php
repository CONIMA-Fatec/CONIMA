<?php
include "../conexao.php";
include "../funcoes.php";
session_start();
autenticar();
buscarEdicoes();

$id = htmlspecialchars($_GET["id"]);
$sql = "SELECT id, nome, descricao, formacao, instituicao FROM convidado WHERE id = :id;"; //string com o comando SQL a ser executado
$comando = $pdo->prepare($sql);   //montamos e deixamos o SQL preparado

$comando -> bindParam(":id", $id);
$comando->execute();

$res = $comando->fetch();
?>
<link rel="stylesheet" href="style.css">
<header> <h2>Atualizar Convidado</h2> </header>
   
   <form method="POST" enctype="multipart/form-data" action="processar_convidado.php" class="cadastrarParticipante">
                <div>
                    <input type="hidden" name="codigo" value ="<?= $res["id"]?>">
                </div>
       <div class="form-group">
           <label for="nome">Nome:</label>
           <input type="text" id="nome" name="nome" value="<?= $res['nome']?>" required>
       </div>
       <div class="form-group">
           <label for="descricao">Descrição:</label>
           <textarea id="descricao" name="descricao"   
maxlength="2000" required><?= $res["descricao"]?></textarea>
       </div>
       <div class="form-group">
           <label for="formacao">Formação:</label>
           <input type="text" id="formacao" name="formacao" value="<?= $res['formacao']?>" required>
       </div>
       <div class="form-group">
           <label for="instituicao">Instituição:</label>   

           <input type="text" id="instituicao" name="instituicao" value="<?= $res['instituicao']?>"required>
       </div>
       <div class="form-group">
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
<br>
<br>
<div class="form-group" id="botoes">
            <button type="submit">Enviar atualização</button>
            <a href="admin.php" class="back">Voltar ao Painel</a>
        </div>
        
      
   </form>