<?php
session_start();
include 'definitions.php';
include 'functions.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My website | <?=ucfirst($slug)?></title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
          <div class="navbar-header">
            <a class="navbar-brand" href="#"><?=WEBSITE?></a>
          </div>
          <ul class="nav navbar-nav">

            <li <?php if($slug=='home') {echo 'class="active"'; }?>><a href="index.php">Home</a></li>
            <li <?php if($slug=='about') {echo 'class="active"'; }?>><a href="about.php">About</a></li>
            <li <?php if($slug=='services') {echo 'class="active"'; }?>><a href="services.php">Services</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
            <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
          </ul>
        </div>
      </nav>

