<?php
    session_start();
    if(!isset($_SESSION['usuario'])) {
        $_SESSION['usuario'] = 'user_name';

        echo "Sessão iniciada, o usuário foi registrado <br>";
        echo '<a href="SessionContinua.php"> Clique aqui para continuar</a>'; 
    } else {
        echo "O seu identificador de sessão é: " . session_id() . "<br>";
        echo '<a href="sessionContinua.php">Acessar</a>';
    }
?>