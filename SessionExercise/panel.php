<?php
session_start();

if (!isset($_SESSION["isLogged"]) && !$_SESSION["isLogged"]) {
    echo '<script>alert("Your are not logged in! Go back and reveal yourself")</script>';
    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel - Session Exercise</title>
    <link rel="stylesheet" href="./assets/css/index.css">
</head>

<body>

    <h1 class="welcome-title">Welcome home, <?= $_SESSION["username"] ?></h1>
    <div class="bgimage"></div>
    <p class="foot-text">Please, enjoy the anonimous painting "La peste a Firenze n'ell 1630"</p>
    <?php
    if (isset($_SESSION["isLogged"]) && $_SESSION["isLogged"]) {
        echo "<div class='logout'><p class='logout__text'>Whenever you get bored, you can logout here =></p><button class='logout__btn' type='button'><a href='close_session.php'>Log out</a></button></div>";
    }
    ?>
</body>

</html>