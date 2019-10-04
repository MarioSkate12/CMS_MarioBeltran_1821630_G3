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
    <link rel="stylesheet" href="assets/css/login.css">
    <link rel="stylesheet" type="text/css" href="assets/css/carga.css">
</head>
<body>

  <div id="ctr">
    <div class="carga">
      </div>
    </div>

    <nav class="navbar">
        <div>
              <img src="assets/imgs/cdpp.png" width="200px" height="200px">
        </div>
        <a href="?controller=index" class="navbar-brand">COLEGIO PEPITO PEREZ</a>
        <ul class="navbar-nav">
            <li><a class="nav-link" href="?controller=index">Inicio</a></li>
        </ul>
        <ul class="navbar-nav">
            <li><a class="nav-link" href="">Contactanos</a></li>
        </ul>
         <ul class="navbar-nav">
            <li><a class="nav-link" href="?method=login">Login</a></li>
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
