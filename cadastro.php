<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cadastro</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <main>
    <div>
      <h1>Cadastro</h1>
      <form id="cadastroForm">
        <label>Email:<br>
          <input type="email" id="email" required>
        </label><br><br>
        <label>Senha:<br>
          <input type="password" id="senha" required>
        </label><br><br>
        <button type="submit">Cadastrar</button>
      </form>

      <p>Já tem conta? <a href="index.php">Fazer login</a></p>
    </div>
  </main>

  <script src="register.js"></script>
  <script type="module" src="firebase.js"></script>
  <script type="module" src="cadastro.js"></script>
</body>
</html>
