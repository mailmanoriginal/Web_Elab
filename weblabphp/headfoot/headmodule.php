<?php
     if (!session_id()) session_start();
     if (!$_SESSION['logon']){ 
         header("Location:../../../login.php");
         exit();
     }
?>

<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- displays site properly based on user's device -->
     <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
     <link rel="stylesheet" href="../../../scss/style.css">
     <title>EE-LAB</title>

     <style>
          .attribution { font-size: 11px; text-align: center; }
          .attribution a { color: hsl(228, 45%, 44%); }
     </style>
</head>

</head>
<body>

     <header class="header">
          <div class="overlay has-fade"></div>

          <nav class="container flex flex-jc-sb flex-ai-c">
               <a href="/" class="header__logo">
                    <img src="../../../images/eelablogo.png" alt="EELAB" />
               </a>

               <a id="btnHamburger" href="#" class="header__toggle hide-for-desktop">
                    <span></span>
                    <span></span>
                    <span></span>
               </a>

               <div class="header__links hide-for-mobile">
                    <a href="../../../index.php">Home</a>
                    <a href="../../../labs.php">Labs</a>
                    <a href="../../../contact.php">Contact</a>
                    <a href="../notfound.php">News</a>
               </div>

               <a href="../../../include/logout.inc.php" class="button__header header__cta hide-for-mobile">Logout</a>
          </nav>

          <div class="header__menu has-fade">
               <a href="../../../index.php">Home</a>
               <a href="../../../labs.php">Labs</a>
               <a href="../../../contact.php">Contact</a>
               <a href="../notfound.php">News</a>
               <a href="include/logout.inc.php">Logout</a>
          </div>

     </header>