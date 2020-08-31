<?php
    $conexao = pg_connect("host=localhost port=5432 dbname=aplicativo user=postgres password=root");

    $login = $_POST['username'];
    $senha = $_POST['password'];
   

    
    $verifica = pg_query($conexao, "SELECT * FROM usuarios WHERE login ='$login' AND senha = '$senha'");

    $count = pg_num_rows($verifica);

    if ($count <= 0){
        echo"<script language='javascript' type='text/javascript'>
                alert('Login e/ou senha incorretos');
                window.location.href='index.html';
            </script>";
        die();
    }
    else{
        setcookie("login",$login);
        header("Location:painel.php");
    }
?>