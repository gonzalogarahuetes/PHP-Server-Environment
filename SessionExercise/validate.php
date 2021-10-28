<?php
session_start();

$username = $_POST["username"];
$password = $_POST["password"];

//CONECTAR CON LA BASE DE DATOS

checkUser($username, $password);

function checkUser($username, $password)
{
    $emaildb = "ggarahuetes";
    $passworddb = "123456";


    if ($passworddb === $password && $emaildb === $username) {
        $_SESSION["isLogged"] = true;
        $_SESSION["username"] = $username;
        header("Location: ./panel.php");
    } else {
        header("Location: ./index.php");
    }
}
