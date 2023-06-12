<link href="https://getbootstrap.com/docs/4.4/dist/css/bootstrap.min.css" rel="stylesheet">

<link href="assets/css/reset.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="assets/css/styles-main.css">
<link rel="stylesheet" href="assets/css/styles-add.css">

<title>Авторизація</title>

<header id="header" class="header">
    <div class="hat">

        <div class="logo">
            <img width="38%" height="34%" src="assets/img/Logo_image.svg" alt="Logo image">
        </div>

        <div class="logo_title">
            Магазин комп'ютерних комплектуючих
        </div>

        <div class="home">
            <a href="index.html">На початкову сторінку</a>
        </div>

    </div>
</header>

<div class="authorization_box">
    <div class="authorization_content">
        <div class="inbox">
            <form class="form-signin" method="post">
                <h1 class="">Будь-ласка, увійдіть</h1>
                <br>
                <div class="form-group">
                    <label for="inputEmail" class="sr-only">Login</label>
                    <input type="text" name="login" id="inputEmail" class="form-control" placeholder="Логін" autofocus>
                </div>
                <div class="form-group">
                    <label for="inputEmail" class="sr-only">Password</label>
                    <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Пароль" required>
                </div>

                <button class="btn btn-lg btn-primary btn-block" type="submit">Увійти</button>
            </form>
        </div>
    </div>
</div>




<?php
const ADMIN_LOGIN = 'admin';
const ADMIN_PASSWORD = 'admin';

function login($login, $password)
{
    if ($login === ADMIN_LOGIN && $password === ADMIN_PASSWORD) {
        $_SESSION['authorized'] = true;
        return true;
    }
    return false;
}

function isAuthorized()
{
    return isset($_SESSION['authorized']) && $_SESSION['authorized'] === true;
}

function logout()
{
    unset($_SESSION['authorized']);
}
if (isset($_POST['login']) && isset($_POST['password'])) {
    login($_POST['login'], $_POST['password']);
}

if (isAuthorized()) {
    header("Location: admin.php");
    exit;
}
?>
