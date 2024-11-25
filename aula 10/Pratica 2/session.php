<?php
session_start();

if (!isset($_SESSION['user'])){

    $_SESSION['user'] = $_POST['user'];
    $_SESSION['password'] = $_POST['senha'];
    $_SESSION['session_start'] = time();

    setcookie('user', $_POST['user'], time()+(60*5), '/');
    setcookie('session_start', time(), time()+(60*5), '/');
}

$_SESSION['last_request'] = time();

$user = $_SESSION['user'];
$password = $_SESSION['password'];
$session_start = date('d/m/y H:i:s',$_SESSION['session_start']);
$last_request = date('d/m/y H:i:s',$_SESSION['last_request']);
$session_timer =  date('h:i:s',$_SESSION['last_request'] - $_SESSION['session_start']);

echo "<h1>User: $user</h1> 
     <h2>Password: $password</h2>
     <h2>Inicio da sessao: $session_start</h2>
     <h2>Ultima Requisicao: $last_request</h2>
     <h2>Tempo da sessao: $session_timer</h2><br>";

    if (!isset($_COOKIE['user']) || !isset($_COOKIE['session_start'])){
        echo "<h2>Cookies da sessão foram perdidos.</h2>";
    }
    else{
        $cookieuser = $_COOKIE['user'];
        $cookiestart = date('d/m/y H:i:s',$_COOKIE['session_start']);

        echo "<h2><strong>Cookies</strong></h2>
              <h2>User: $cookieuser</h2>
              <h2>Start: $cookiestart</h2>";
    }