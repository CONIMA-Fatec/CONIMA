<?php
$tipo_banco = "mysql"; //identificador do SGBD
$servidor = "localhost"; //o meu localhost
$porta = 3306;                 //porta do mysql SHOW VARIABLES WHERE Variable_name = 'port';
$banco = "coninma";          //nome do banco a ser usado

//usuário e senha para conexão com banco
$usuario_banco = "coninma";
$usuario_senha = "NovaSenha!123";

//a DSN é uma string que informa a biblioteca alguns dados sobre o banco
$dsn = "$tipo_banco:host=$servidor;dbname=$banco;port:$porta";

try {
    $pdo = new PDO($dsn, $usuario_banco, $usuario_senha); //os parametros minimos para criação de PDO (Php Data Objects)
} catch(PDOException $e){
    throw new PDOException($e->getMessage(), $e->getCode());


}
?>
