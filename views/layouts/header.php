<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- styles -->
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>
    <nav class="navbar">
        <a href="?controller=index" class="navbar-brand">CMS Ejemplo</a>
        <ul class="navbar-nav">
            <li><a class="nav-link" href="?controller=user">Users</a></li>
        </ul>
        <?php if(isset($_SESSION['user'])): ?>
            <ul>
                <li><p><?= $_SESSION['user']->name; ?></p></li>
            </ul>
            <ul>
                <li>
                    <a href="?controller=security&method=logout">Cerrar sesion</a></p></li>
            </ul>
        <?php endif; ?>
    </nav>
    <main class="container">

