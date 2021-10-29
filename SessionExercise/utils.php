<?php

function destroySession()
{
    session_start();

    unset($_SESSION);

    destroyCookie();

    session_destroy();
    header("Location: ./index.php?logout=true");
}

function destroyCookie()
{
    if (ini_get("session.use_cookies")) {
        $params = session_get_cookie_params();
        setcookie(
            session_name(),
            '',
            time() - 42000,
            $params["path"],
            $params["domain"],
            $params["secure"],
            $params["httponly"]
        );
    }
}

function checkUser($username, $password)
{
    $emaildb = "ggarahuetes";
    $passworddb = "123456";


    if ($passworddb === $password && $emaildb === $username) {
        return true;
    } else {
        return false;
    }
}

function authUser()
{
    session_start();

    $username = $_POST["username"];
    $password = $_POST["password"];

    //CONECTAR CON LA BASE DE DATOS

    if (checkUser($username, $password)) {
        $_SESSION["isLogged"] = true;
        $_SESSION["username"] = $username;
        header("Location: ./panel.php");
    } else {
        header("Location: ./index.php?error=true");
    }
}
