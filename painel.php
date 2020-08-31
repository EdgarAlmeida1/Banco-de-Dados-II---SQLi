<?php
    $login_cookie = $_COOKIE['login'];

    if(isset($login_cookie)){
        echo"Bem-Vindo<br>";
        echo"~ Informações Sensíveis ~";
    }
    else{
        echo"<br><a href='index.html'>Faça Login</a> Para ler o conteúdo";
    }
?>