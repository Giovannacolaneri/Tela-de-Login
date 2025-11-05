<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bem-vinda</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <div>
            <h1>Olá, você entrou!</h1>
            <button id="logout">Sair</button>
        </div>
    </main>

    <script type="module">
        import { auth, signOut } from "./firebase.js";

        document.getElementById("logout").addEventListener("click", () => {
            signOut(auth).then(() => {
                window.location.href = "index.php";
            });
        });
    </script>
</body>
</html>
