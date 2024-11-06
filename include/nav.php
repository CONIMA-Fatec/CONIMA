<?php
if($_SERVER['REQUEST_URI'] == '/keynotes.php'){
    
}
?>
<nav class="mobile-nav">
        <div class="nav-buttons">
            <a href="submission.php" class="nav-button"><img src="assets/icon/subm.png" alt="Subimissão de Artigos"></a>
            <a href="index.php" class="nav-button"><img src="assets/icon/icon-conin.png" alt=""></a>
            <a href="#" class="nav-button" id="menu-button"><img src="assets/icon/menu.png" alt="Menu"></a>
        </div>
        <div class="menu-list" id="menu-list">
            <a href="cronogram.php">Calendário</a>
            <a href="keynotes.php">Participantes</a>
            <a href="submission.php">Submissão de Artigos</a>
            <a href="listener.php">Inscrição Ouvinte</a>
            <a href="hackatec.php">Inscrição HackaTec</a>
            <a href="about.php">Sobre</a>
            <a id="close-button">Fechar</a>
        </div>
    </nav>
    <nav class="desktop-nav">
        <a href="index.php" class="nav-logo"> <span><img src="assets/Logo/CONINMA 1.png" alt=""></span></a>
        <div class="nav-links">

            <a href="cronogram.php" class="nav-button">Calendário</a>
            <a href="keynotes.php" class="nav-button">Participantes</a>
            <a href="submission.php" class="nav-button">Submissão de Artigos</a>
            <a href="listener.php" class="nav-button">Inscrição Ouvinte</a>
            <a href="hackatec.php" class="nav-button">Inscrição HackaTec</a>
            <a href="about.php" class="nav-button">Sobre</a>
        </div>
    </nav>
    <script>
    // Função para alternar a visibilidade do menu ao clicar no botão do menu
    document.getElementById('menu-button').addEventListener('click', function () {
      var menuList = document.getElementById('menu-list');
      menuList.style.display = (menuList.style.display === 'block') ? 'none' : 'block';
    });

    // Função para fechar o menu ao clicar no botão "Fechar"
    document.getElementById('close-button').addEventListener('click', function () {
      var menuList = document.getElementById('menu-list');
      menuList.style.display = 'none';
    });
  </script>