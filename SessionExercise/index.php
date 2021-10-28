<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Session Exercise</title>
    <link rel="stylesheet" href="./assets/css/index.css">
</head>

<body>
    <h1 class="main-title">Welcome to the wonder web</h1>
    <div class="login">
        <form method="post" action="./validate.php">
            <h2 class="login_title">Log in and start the wonder</h2>
            <input class="login__input" type="text" placeholder="example123" name="username" id="nameInput">
            <label class="login__label" for="nameInput">Username</label>
            <input class="login__input" type="password" placeholder="Your password" name="password" id="passInput">
            <label class="login__label" for="passInput">Password</label>
            <input class="login__button" type="submit" value="Log in">
        </form>
    </div>

</body>

</html>