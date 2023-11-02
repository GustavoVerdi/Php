<?php
    session_start();
    $sessionStarted = true;

    if (!isset($_SESSION['usuario'])) {
        if(isset($_POST['campo_login'])) {
            $_SESSION['usuario'] = $_post['campo_login'];    
            $_SESSION['started'] = time();

            echo "Sessão iniciada, o usuário foi registrado... <br>";
            echo '<a href="formularioLoginCookie.php" Clique aqui para continuar<br></a>'; 
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
        echo '<a hre="formularioLoginCookie.php">Continuar</a>'; 
    }
?>