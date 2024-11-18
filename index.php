<?php
include "includes/funcoes.php";
include "conexao.php"; 
// Consulta ao banco de dados
$sql = "SELECT data_fim FROM evento WHERE id = 2;";
$comando = $pdo->query($sql); 
$comando->execute();
$resultado = $comando->fetch(PDO::FETCH_ASSOC); 
// Função de contagem regressiva
function contagemRegressiva($dataFinal) {
    $timestampFinal = strtotime($dataFinal);
    $timestampAtual = time();
    $diferenca = $timestampFinal - $timestampAtual;

    if ($diferenca <= 0) {
        return array('dias' => 0, 'horas' => 0, 'minutos' => 0);
    } else {
        $dias = floor($diferenca / (60 * 60 * 24));
        $horas = floor(($diferenca % (60 * 60 * 24)) / (60 * 60));
        $minutos = floor(($diferenca % (60 * 60)) / 60);
        return array('dias' => $dias, 'horas' => $horas, 'minutos' => $minutos);
    }
}

$resultadoContagem = contagemRegressiva($resultado['data_fim']); 
?>

<!DOCTYPE html>
<html lang="pt-br">
<?php include 'include/head.php'; 

?>
<style>
  body{background: linear-gradient(0deg, rgba(136, 8, 91, 1) 9%, rgba(221, 102, 10, 1) 100%)}
</style>
<body>
<?php include 'include/nav.php'; ?>
  <header>
  </header>
  <main>
    <article class=articlehome>
      <div class="subtitle-home">
        <h1>O poder da Inteligência Artificial <br> Transforme o seu futuro</h1>
      </div>
      <section class="slidehome">
        <section class="contagem-regress" >
        <div class="countdown-container">
        <div class="countdown-item">
            <div class="countdown-number" id="days"></div>
            <div class="countdown-label"> <?= $resultadoContagem['dias'] ?> dias</div>
        </div>
        </div>
        <div class="countdown-container">
        <div class="countdown-item">
            <div class="countdown-number" id="hours"></div>
            <div class="countdown-label"> <?= $resultadoContagem['horas'] ?> horas</div>
        </div>
        </div>
        <div class="countdown-container">
        <div class="countdown-item">
            <div class="countdown-number" id="minutes"></div>
            <div class="countdown-label"> <?= $resultadoContagem['minutos'] ?> minutos</div>
        </div>
        </div>
        </section>
        <div class="imagens">
          <img src="assets/keynotes/FernandoPaes.JPG" alt="">
          <img src="assets/keynotes/Geicielle2.jpg" alt="">
          <img src="assets/keynotes/MARCEL-2.jpg" alt="">
        </div>
      </section>
    </article>
    
    <aside class="home">
        <div class="subtitle-direita">
          <div>
            <h1>Como nos encontrar?</h1>
            <p>FATEC - Marília</p>
            <p>Avenida Castro Alves, 62- Somenzari, Marília - SP</p>
          </div>
          <div>
            <br>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3693.8456779366043!2d-49.95655822396893!3d-22.207970313271844!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94bfd7217b8e873b%3A0xd7de49af9e293d42!2sFatec%20Mar%C3%ADlia%20-%20Faculdade%20de%20Tecnologia!5e0!3m2!1spt-BR!2sbr!4v1717740971548!5m2!1spt-BR!2sbr" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
        </div>
      <div class="subtitle-esquerda">
        <h2>Faculdade de <br> Tecnologia de Marília</h2>
        <img src="assets/images/fatec-marilia.jpg" alt="">
      </div>
      
    </aside>
  </main>
  <?php include 'include/footer.php'; 
 
  ?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>