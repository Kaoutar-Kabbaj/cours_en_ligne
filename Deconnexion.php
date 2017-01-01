<!DOCTYPE html>
<html>
<head>
  <title>User</title>
</head>
<link rel="stylesheet" type="text/css" href="css/menu.css">
<meta charset="UTF-8">



<body class="news">
  

  <?php 
      include('connexion.php');
      session_start();
      $login = $_SESSION['login'];
      $id = $_SESSION['id'];
      $role =  $_SESSION['role'];

 ?>
  <?php
 if (isset($_GET['test'])) {
    session_destroy();
    setcookie('login', NULL, -1);
    setcookie('mdp', NULL, -1);
    header("location:index.php");
  }
   
   ?>
</body>
</html>