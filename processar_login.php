<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Aqui, você deve substituir a lógica a seguir pela sua própria lógica de autenticação.
    // Verifique se o nome de usuário e a senha correspondem a um usuário válido no seu sistema.

    if ($username === "Raul" && $password === "1234") {
        header("Location: index.html"); // Redireciona para a página de login bem-sucedido.
        exit;
    } else {
        header("Location: login.html?erro=1"); // Redireciona de volta para a página de login com um parâmetro de erro.
        exit;
    }
} else {
    // Se alguém tentar acessar este arquivo diretamente sem enviar o formulário, você pode redirecioná-lo para a página de login.
    header("Location: login.html");
    exit;
}

?>