<!DOCTYPE html>
<html lang="pt-br">
<?php include 'include/head.php'; ?>
<style>
  body{background: linear-gradient(0deg, rgba(136, 8, 91, 1) 9%, rgba(221, 102, 10, 1) 100%)}
</style>
<body onload="updateCountdown()">
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
              <div id="days" class="countdown-number">00</div>
              <div class="countdown-label">dias</div>
            </div>
            <div class="countdown-item">
              <div id="hours" class="countdown-number">00</div>
              <div class="countdown-label">horas</div>
            </div>
            <div class="countdown-item">
              <div id="minutes" class="countdown-number">00</div>
              <div class="countdown-label">minutos</div>
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
  <?php include 'include/footer.php'; ?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <script rel="script" href="js/script.js">

     //Contador

    // Definindo a data final da contagem regressiva (formato: ano, mês - 1, dia, hora, minuto, segundo)
    function updateCountdown() {
      var endDate = new Date(2024, 9, 18, 0, 0,);
      var now = new Date();
      var timeDiff = endDate - now;

      if (timeDiff <= 0) {
        document.getElementById('days').innerText = '00';
        document.getElementById('hours').innerText = '00';
        document.getElementById('minutes').innerText = '00';
      } else {
        var days = Math.floor(timeDiff / (1000 * 60 * 60 * 24));
        var hours = Math.floor((timeDiff % (1000* 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((timeDiff % (1000 * 60 * 60)) / (1000 * 60));

        document.getElementById('days').innerText = padZero(days);
        document.getElementById('hours').innerText = padZero(hours);
        document.getElementById('minutes').innerText = padZero(minutes);
      }
    }

    function padZero(num) {
      return (num < 10 ? '0' : '') + num;
    }

    // Atualizando a contagem regressiva a cada segundo
    setInterval(updateCountdown, 1000);
  </script>
</body>

</html>