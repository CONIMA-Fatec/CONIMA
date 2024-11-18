<?php
include "../conexao.php";
include "../funcoes.php";


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = htmlspecialchars($_POST['nome']);
    $tipo = htmlspecialchars($_POST['tipo_patrocinio']);
    $edicaoEvento = htmlspecialchars($_POST['edicao_evento']);
    $textAlt = htmlspecialchars($_POST['altImg']);

    // Verifica se o arquivo foi enviado
    if (isset($_FILES['foto']) && $_FILES['foto']['error'] === UPLOAD_ERR_OK) {
        $foto = $_FILES['foto'];
        $extensoesPermitidas = ['jpg', 'jpeg', 'png'];
        $extensao = pathinfo($foto['name'], PATHINFO_EXTENSION);

        if (in_array(strtolower($extensao), $extensoesPermitidas)) {
            $caminhoDestino = '../../../assets/about/p' . uniqid() . '.' . $extensao;

            if (move_uploaded_file($foto['tmp_name'], $caminhoDestino)) {
                try {
                    $stmt = $pdo->prepare("
                        INSERT INTO patrocinadores (nome, tipo_patrocinio, logo, edicao_evento) 
                        VALUES (:nome, :tipo, :foto, :edicao )
                    ");
                    $stmt->execute([
                        ':nome' => $nome,
                        ':tipo' => $tipo,
                        ':foto' => $caminhoDestino,
                        ':edicao' => $edicaoEvento
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
header("Location: http://localhost:3030/admin/patrocinadores.php");
?>