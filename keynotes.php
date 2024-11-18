<?php
include "conexao.php";
$sql = "SELECT nome, descricao, formacao, instituicao, foto, texAlt FROM convidado WHERE deleted_at IS NULL; ";
$comando = $pdo->prepare($sql);
$comando = $pdo->query($sql);
$result = $comando->fetchAll();
?>
<!DOCTYPE html>
<html lang="pt-br">
<?php include 'include/head.php'; ?>
<style>
  body{background: linear-gradient(0deg, rgba(136, 8, 91, 1) 9%, rgba(221, 102, 10, 1) 100%);}
</style>
<body>
<?php include 'include/nav.php'; ?>
  <header>
    <div class="subtitle"><h1>Sobre os Participantes</h1></div>
  </header>
  <main>
    <section class="containercarousel">
        <?php
        if (count($result) > 0) {
            foreach ($result as $row) {
                echo '<div class="slide-container">';
                echo '<div class="slide" tabindex="*">';
                echo '<div class="contentcarousel">';
                echo '<h1>' . $row["nome"] . '</h1>';
                echo '<h3>' . $row["formacao"] . ' ' . $row["instituicao"] . '</h3>';
                echo '<img src="' . $row["foto"] . '" alt="' . $row["textAlt"] . '" onError="this.onerror=null;this.src=\'image_not_found.jpg\'">';
                echo '<p>' . $row["descricao"] . '</p>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
            }
        }
        else{
            echo '<h1> Não há participantes no momento </h1>';
        } 
        ?>
    </section>
</main>
<?php include 'include/footer.php'; ?>
</body>

</html>