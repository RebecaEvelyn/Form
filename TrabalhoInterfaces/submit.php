<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Obter dados do formulário e verificar se existem
    $nome_completo = isset($_POST['nome_completo']) ? htmlspecialchars($_POST['nome_completo']) : '';
    $data_nascimento = isset($_POST['data_nascimento']) ? htmlspecialchars($_POST['data_nascimento']) : '';
    $morada = isset($_POST['morada']) ? htmlspecialchars($_POST['morada']) : '';
    $email = isset($_POST['email']) ? htmlspecialchars($_POST['email']) : '';
    $telefone = isset($_POST['telefone']) ? htmlspecialchars($_POST['telefone']) : '';
    $genero = isset($_POST['genero']) ? htmlspecialchars($_POST['genero']) : '';
    $senha = isset($_POST['senha']) ? htmlspecialchars($_POST['senha']) : '';

    // Upload de Fotografia
    if (isset($_FILES['fotografia']) && $_FILES['fotografia']['error'] == 0) {
        $foto_nome = $_FILES['fotografia']['name'];
        $foto_tmp = $_FILES['fotografia']['tmp_name'];
        $foto_destino = "uploads/" . uniqid() . "_" . $foto_nome;
        move_uploaded_file($foto_tmp, $foto_destino);
    } else {
        $foto_destino = null;
    }

    // Upload de Documento
    if (isset($_FILES['documento']) && $_FILES['documento']['error'] == 0) {
        $doc_nome = $_FILES['documento']['name'];
        $doc_tmp = $_FILES['documento']['tmp_name'];
        $doc_destino = "uploads/" . uniqid() . "_" . $doc_nome;
        move_uploaded_file($doc_tmp, $doc_destino);
    } else {
        $doc_destino = null;
    }
} else {
    echo "Erro: Nenhum dado foi enviado.";
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registo de Utilizador</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>
<body>
<header>
        <h1>Registo de Utilizador</h1>
        <nav>
            <button id="dark-mode-toggle" aria-label="Alternar Modo Escuro/Claro">
                <i class="fas fa-moon"></i>
            </button>
            <button id="font-size-inc" aria-label="Aumentar Tamanho da Fonte">A+</button>
            <button id="font-size-dec" aria-label="Diminuir Tamanho da Fonte">A-</button>
        </nav>
    </header>
    <div class="container">

    <h1>Dados Submetidos</h1>
    <p><strong>Nome Completo:</strong> <?= $nome_completo; ?></p>
    <p><strong>Data de Nascimento:</strong> <?= $data_nascimento; ?></p>
    <p><strong>Morada:</strong> <?= $morada; ?></p>
    <p><strong>Email:</strong> <?= $email; ?></p>
    <p><strong>Telefone:</strong> <?= $telefone; ?></p>
    <p><strong>Género:</strong> <?= $genero; ?></p>
    <p><strong>Fotografia:</strong> <img src="<?= $foto_destino; ?>" alt="Fotografia" width="150"></p>
    <p><strong>Documento de Identificação:</strong> <a href="<?= $doc_destino; ?>" target="_blank">Ver Documento</a></p>
    </div>
<script src="script.js"></script>

</body>
</html>
