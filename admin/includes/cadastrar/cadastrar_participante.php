<?php
include "../conexao.php";
include "../funcoes.php";
session_start();
$mensagem = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = htmlspecialchars($_POST['nome']);
    $descricao = htmlspecialchars($_POST['descricao']);
    $formacao = htmlspecialchars($_POST['formacao']);
    $instituicao = htmlspecialchars($_POST['instituicao']);
    $id = htmlspecialchars($_POST['edicao_evento']); 

    // Verifica se o arquivo foi enviado
    if (isset($_FILES['foto']) && $_FILES['foto']['error'] === UPLOAD_ERR_OK) {
        $foto = $_FILES['foto'];
        $extensoesPermitidas = ['jpg', 'jpeg', 'png'];
        $extensao = pathinfo($foto['name'], PATHINFO_EXTENSION);

        if (in_array(strtolower($extensao), $extensoesPermitidas)) {
            $caminhoDestino = '../../../assets/keynotes/' . uniqid() . '.' . $extensao;

            if (move_uploaded_file($foto['tmp_name'], $caminhoDestino)) {
                try {
                    $stmt = $pdo->prepare("
                        INSERT INTO convidado (nome, descricao, formacao, instituicao, foto, evento_id) 
                        VALUES (:nome, :descricao, :formacao, :instituicao, :foto, :id)
                    ");
                    $stmt->execute([
                        ':nome' => $nome,
                        ':descricao' => $descricao,
                        ':formacao' => $formacao,
                        ':instituicao' => $instituicao,
                        ':foto' => $caminhoDestino,
                        ':id' => $id
                    ]);
                    $mensagem = "Participante cadastrado com sucesso!";
                } catch (PDOException $e) {
                    $erro = "Erro ao cadastrar participante: " . $e->getMessage();
                }
            } else {
                $erro = "Erro ao mover o arquivo da foto.";
            }
        }
    } else {
        $erro = "Erro no envio da foto. Certifique-se de que o arquivo é válido.";
    }
}
echo $mensagem;
echo $erro;
header("Location: ../../participante.php");
?>