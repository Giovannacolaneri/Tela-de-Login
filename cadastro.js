import { auth, createUserWithEmailAndPassword } from "./FireBase.js";

document.getElementById("cadastroForm").addEventListener("submit", (e) => {
  e.preventDefault();

  const email = document.getElementById("email").value;
  const senha = document.getElementById("senha").value;

  createUserWithEmailAndPassword(auth, email, senha)
    .then(() => {
      alert("Usuário cadastrado com sucesso!");
      window.location.href = "index.php";
    })
    .catch((error) => alert("Erro: " + error.message));
});
