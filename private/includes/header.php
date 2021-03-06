<!doctype html>
<html lang="en">
<head>


    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


    <title>Wenture<?php if (isset($pagetitle)) {
            echo ' - ' . ucfirst($pagetitle);
        } ?></title>

    <link rel="shortcut icon" href="<?php echo server_root(1); ?>/favicon.ico" type="image/x-icon">
    <link rel="icon" href="<?php echo server_root(1); ?>/favicon.ico" type="image/x-icon">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css"
          integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ"
          crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" type="text/css" href="<?php echo server_root(1) . '/css/main.css'; ?>">
    <?php if (isset($extra_links)) {
        foreach ($extra_links as $link => $v) {
            echo $v;
        }
    } ?>
</head>

<body>

<nav class="navbar navbar-toggleable-sm fixed-top" id="custom-navbar">
    <div class="container">
        <button type="button" class="navbar-toggle collapsed btn btn-secondary hidden-md-up mr-4" id="menyknapp"
                data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="#navbar">
            Menu
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>

        <a class="navbar-brand" href="<?php echo server_root(1) . '/'; ?>">
            <img src="<?php echo server_root(1) . '/img/wenture-logo@0.5x.png'; ?>" style="width: 70px; height: 62px;">
            Wenture
        </a>
        <div id="navbar" class="navbar-collapse collapse">
            <?php if (!isset($pagetitle)) {
                $pagetitle = "";
            } ?>
            <div class="navbar-nav ml-auto">
                <a class="nav-item nav-link" href="<?php echo server_root(1) . '/'; ?>">Home</a>
                <a class="nav-item nav-link<?php if ($pagetitle == 'Places' && $_SERVER['REQUEST_URI'] == server_root(1) . '/places.php?category=3,6') {
                    echo ' active-nav';
                } ?>" href="<?php echo server_root(1) . '/places.php?category=3,6'; ?>">Food</a>
                <a class="nav-item nav-link <?php if ($pagetitle == 'Places' && $_SERVER['REQUEST_URI'] == server_root(1) . '/places.php?category=1,5') {
                    echo ' active-nav';
                } ?>"
                   href="<?php echo server_root(1) . '/places.php?category=1,5'; ?>">Pubs & Bars</a>

                <a class="nav-item nav-link<?php if ($pagetitle == 'Events') {
                    echo ' active-nav';
                } ?>" href="<?php echo server_root(1) . '/events.php'; ?> ">Activities</a>


            </div>
            <?php
            if (loggedIn()) { ?>
                <a class="btn btn-secondary" href="<?php echo server_root(1); ?>/private/phpscripts/logout.php">
                    <i class="material-icons">lock</i>
                </a>
            <?php } ?>

            <!--Navbar-nav-->
        </div>

    </div><!--Container-->

</nav><!--Navbar -->
