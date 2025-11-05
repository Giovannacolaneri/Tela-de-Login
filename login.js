import { auth, signInWithEmailAndPassword } from "./FireBase.js";

document.getElementById("loginForm").addEventListener("submit", (e) => {
  e.preventDefault();

  const email = document.getElementById("email").value;
  const senha = document.getElementById("senha").value;

  signInWithEmailAndPassword(auth, email, senha)
    .then(() => alert("Login realizado com sucesso!"))
    .catch((error) => alert("Erro: " + error.message));
});
