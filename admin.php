<?php
require 'src/subscription.php';

$subscriptions = allSubscriptions();
//Debug subscriptions array
//print_r($subscriptions);
?>
<link href="https://getbootstrap.com/docs/4.4/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="assets/css/styles-admin.css">

<!--<nav class="navbar navbar-expand-md navbar-dark bg-dark">-->
<!--    <span class="navbar-brand">Адміністратор</span>-->
<!--    <div class="collapse navbar-collapse" id="navbarCollapse">-->
<!--        <ul class="navbar-nav px-3 ml-auto">-->
<!--            <li class="nav-item text-nowrap">-->
<!--                <a class="nav-link" href="logout.php">Вийти</a>-->
<!--            </li>-->
<!--        </ul>-->
<!--    </div>-->
<!--</nav>-->

<title>Адміністратор</title>

<header id="header" class="header">

    <div class="hat">

        <img src="assets/img/Logo_image.svg" alt="Logo image">

        <div class="logo_title">
            Магазин комп'ютерних комплектуючих
        </div>

        <div class="sign_in">
            <a href="login.php">Вийти</a>
        </div>
    </div>
</header>

<main role="main" class="container pt-3">
    <h1>Користувачі, що підписались на розсилку</h1><br>
    <table class="table table-striped table-sm">
        <thead>
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Email</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($subscriptions as $index => $subscription): ?>
            <tr>
                <td><?= $index + 1 ?></td>
                <td><?= $subscription['name'] ?></td>
                <td><?= $subscription['email'] ?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</main>