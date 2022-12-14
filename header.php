<?php 

// We need to add session_start whenever we set and read variable from session
session_start();

include 'stock.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gem Pre-Order</title>
    <link rel="stylesheet" href="/css/css.css">

</head>
<body>
<nav>
    <ul class="clientMenu">
        <li><a href="/">Main Page</a></li>
        <li><a href='/about.php'>About Us</a></li>
    </ul>
    <ul class="clientMenu">
        <?php
        if($_SESSION){
            echo '
            <li><a href="/allOrders.php">All Orders</a></li>
            <li><a href="/functions.php?op=logout">Logout</a></li>';
        } else {
            echo '<li><a href="/login.php">Staff Login</a></li>';
        }
        ?>
    </ul>
</nav>