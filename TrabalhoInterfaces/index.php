<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Registo de Utilizador</title>
</head>
<nav class="navigation" id="navigation">
    <ul class="menu">
      <div class="trilho" id="trilho">
        <div class="indicador"></div>
      </div>
      <div class="fontsize">
      <button id="font-size-inc">Aumentar Fonte</button>
      <button id="font-size-dec">Diminuir Fonte</button>
      </div>
      
    </ul>
  </nav>
<body>
    <div class="container">
    <h1>Registo de Utilizador</h1>
    <form action="submit.php" method="POST" enctype="multipart/form-data">
        <!-- Nome Completo -->
        <label for="nome_completo">Nome Completo:</label>
        <input type="text" id="nome_completo" name="nome_completo" required><br><br>
        
        <!-- Data de Nascimento -->
        <label for="data_nascimento">Data de Nascimento:</label>
        <input type="date" id="data_nascimento" name="data_nascimento" required><br><br>
        
        <!-- Morada -->
        <label for="morada">Morada:</label>
        <input type="text" id="morada" name="morada" required><br><br>
        
        <!-- Email -->
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>
        
        <!-- Nº de Telefone -->
        <label for="telefone">Nº de Telefone:</label>
        <input type="tel" id="telefone" name="telefone" pattern="[0-9]{9}" required><br><br>
        
        <!-- Género -->
        <label for="genero">Género:</label>
        <select id="genero" name="genero" required>
          <option value="Selecione">Selecione...</option>
            <option value="Masculino">Masculino</option>
            <option value="Feminino">Feminino</option>
            <option value="Outro">Outro</option>
        </select><br><br>
        
        <!-- Fotografia -->
        <label for="fotografia">Fotografia:</label>
        <input type="file" id="fotografia" name="fotografia" accept="image/*" required><br><br>
        
        <!-- Documento de Identificação -->
        <label for="documento">Documento de Identificação:</label>
        <select name="doc" id="documento_identificação" required>
          <option value="Selecione">Selecione...</option>
          <option value="Cartão de cidadão">Cartão de cidadão</option>
          <option value="Cartão de Residência">Cartão de Residência</option>
          <option value="Passaporte">Passaporte</option>
        </select>
        
        <input type="file" id="documento" name="documento" accept=".pdf,.jpg,.jpeg,.png" required><br><br>
        
        <!-- Palavra-Passe -->
        <label for="senha">Palavra-Passe:</label>
        <input type="password" id="senha" name="senha" required><br><br>
        
        <!-- Botões -->
        <button class="botao" type="reset">Limpar Formulário</button>
        <button class="botao" type="submit">Submeter</button>
    </form>
    </div>
    <script src="main.js"></script>
</body>
</html>
