<?php
    session_start();
    $sessionStarted = true;

    if(!isset($_COOKIE["usuario"])) {
        echo "O valor do COOKIE usuário não foi declarado <br>";
    }
    if(!isset($_COOKIE["started"])) {
        echo "O valor do COOKIE time não foi declarado <br>";
    }

    if (!isset($_SESSION['usuario'])) {
        if(isset($_POST['campo_login'])) {
            $_SESSION['usuario'] = $_post['campo_login'];    
            $_SESSION['started'] = time();
            setcookie("usuario", $_POST['campo_login'], time() +60*5, "/");
            setcookie("usuario", $_SESSION['started'], time() +60*5, "/");

            echo "Sessão iniciada, o usuário foi registrado... <br>";
            echo '<a href="formularioLogin.php" Clique aqui para continuar<br></a>'; 
        }else {
            $sessionStarted = false;
        }
    }
    if($sessionStarted) {
        $_SESSION['last_request'] = time();
        $lastReq = strtotime(gmdate("Y-m\TH:i:s\Z", $_SESSION['last_request']));
        if(isset($_SESSION['started'])) {
            $startSess = strtotime(gmdate("Y-m\TH:i:s\Z", $_SESSION['last_request']));
            $timeElapsed = $lastReq-$startSess;
        }

        echo "O seu identificador de sessão é: " . session_id() . "<br>"; 
        echo "Dados da sessão: <br>" . print_r($_SESSION) . "<br>"; 
        if(isset($timeElapsed)) {
            echo "Sua sessão iniciou a: " . $timeElapsed . "<br>";
        }
        echo '<a hre="formularioLogin.php">Continuar</a>'; 
    }
?>