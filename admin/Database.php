<?php
class Database {
    
    private $host = 'localhost';    
    private $db_name = 'nome_do_banco';  // Nome do banco de dados
    private $username = 'usuario';     // Nome do usuário
    private $password = 'senha';       // Senha do usuário
    private $conn;                     // Variável para armazenar a conexão


    // Método para abrir a conexão com o banco de dados
    public function connect($host, $db_name, $username, $password, $conn) {
        // Tenta criar uma nova conexão PDO
        $this->conn = null;

        try {
            $dsn = "mysql:host=" . $this->host . ";dbname=" . $this->db_name . ";charset=utf8"; // String de conexão DSN
            $this->conn = new PDO($dsn, $this->username, $this->password); // Criação da instância PDO
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Configuração para gerar erros em exceções
        } catch (PDOException $e) {
            // Caso ocorra algum erro na conexão, ele será capturado aqui
            echo "Erro na conexão com o banco de dados: " . $e->getMessage();
        }

        return $this->conn;  // Retorna a conexão estabelecida
    }
        // Getter para o host
    public function getHost() {
        return $this->host;
    }

    // Setter para o host
    public function setHost($host) {
        $this->host = $host;
    }

    // Getter para o nome do banco de dados
    public function getDbName() {
        return $this->db_name;
    }

    // Setter para o nome do banco de dados
    public function setDbName($db_name) {
        $this->db_name = $db_name;
    }

    // Getter para o nome de usuário
    public function getUsername() {
        return $this->username;
    }

    // Setter para o nome de usuário
    public function setUsername($username) {
        $this->username = $username;
    }

    // Getter para a senha
    public function getPassword() {
        return $this->password;
    }

    // Setter para a senha
    public function setPassword($password) {
        $this->password = $password;
    }

    // Fechar a conexão
    public function close() {
        $this->conn = null;
    }

}
?>
