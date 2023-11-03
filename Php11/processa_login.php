<?php
    session_start();

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST["username"];
        $password = $_POST["password"];

        // Verifique as credenciais. Normalmente, você usaria um banco de dados para verificar as credenciais.
        if ($username === "username" && $password === "password") {
            $_SESSION["username"] = $username;
            $_SESSION["login_time"] = time();
            $_SESSION["last_request_time"] = time();
            
            header("Location: dashboard.php");
            exit();
        } else {
            echo "Credenciais inválidas. Tente novamente.";
        }
    }
?>
