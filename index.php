<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="style.css">
  <link rel="manifest" href="manifest.json">
</head>
<body>
  <main>
    <div>
      <h1>Tela de Login</h1>
      <form id="loginForm">
        <label>Email:<br>
          <input type="email" id="email" required>
        </label><br><br>
        <label>Senha:<br>
          <input type="password" id="senha" required>
        </label><br><br>
        <button type="submit">Entrar</button>
      </form>

      <p><a href="cadastro.php">Cadastre-se</a></p>
    </div>
  </main>

  <script src="register.js"></script>
  <script type="module" src="firebase.js"></script>
  <script type="module" src="login.js"></script>
</body>
</html>
