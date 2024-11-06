<?php
$database = new Database();

// Usando setters para alterar os valores
$database->setHost('localhost');
$database->setDbName('mysql');
$database->setUsername('agnes');
$database->setPassword('');

// Verificando as alterações
echo $database->getHost();     // Exibe 'novo_host'
echo $database->getDbName();   // Exibe 'novo_banco'

?>
