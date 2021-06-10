<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">FOOD CHEF</a>
    </div>
    <ul class="nav navbar-nav">
        <?php 
        if(isset($_SESSION['logindtl'])){
        ?>
          <li><a href="<?php echo BASEURL;?>banner">Banner</a></li>
          <li><a href="<?php echo BASEURL;?>about">About</a></li>
          <li><a href="<?php echo BASEURL;?>services">Services</a></li>
          <li><a href="<?php echo BASEURL;?>team">Team</a></li>
          <li><a href="<?php echo BASEURL;?>food">Food</a></li>
          <li><a href="<?php echo BASEURL;?>contact">Contact</a></li>
        <?php } ?>
        </ul>
      </li>
    </ul>
    <ul class="nav navbar-nav navbar-right">

        <?php 
        if(!isset($_SESSION['logindtl'])){
        ?>
      <li><a href="<?php echo BASEURL;?>"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    <?php }else{ ?>
      <li><a href="<?php echo BASEURL;?>login/logout"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
    <?php }?>
    </ul>
  </div>
</nav>
  
<div class="container">
  
