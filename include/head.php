<?php

switch ($_SERVER['REQUEST_URI']) {
    case '/about.php':
        $tituloPagina = "Sobre";
        break;
    case '/cronogram.php':
        $tituloPagina = "Calendário";
        break;
    case '/index.php':
        $tituloPagina = "Página Inicial";
        break;
    case '/hackatec.php':
        $tituloPagina = "Hackathon";
        break;
    case '/keynotes.php':
        $tituloPagina = "Participantes";
        break;
    case '/listener.php':
        $tituloPagina = "Ouvintes";
        break;
    case '/submission.php':
        $tituloPagina = "Submissão";
        break;
    case '/submissionING.php':
        $tituloPagina = "Submission";
        break;
    default:
        header("Location: /index");
        break;
}
?>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="theme-color" content="#88085B"/>
  <link rel="shortcut icon" type="image/svg" href="assets/icon/favicon.svg"/>
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/keynotes.css">
  <title><?=$tituloPagina?></title>
</head>