<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- displays site properly based on user's device -->
     <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
     <link rel="stylesheet" href="scss/style.css">
     <title>EE-LAB</title>

     <style>
          .attribution { font-size: 11px; text-align: center; }
          .attribution a { color: hsl(228, 45%, 44%); }
     </style>

</head>

<body>

     <header class="header">
          <div class="overlay has-fade"></div>

          <nav class="container flex flex-jc-sb flex-ai-c">
               <a href="/" class="header__logo">
                    <img src="images/eelablogo.png" alt="EELAB" />
               </a>
     </header>


     <section class="loginp">
          <div class="loginp__form">
               <div class="loginp__title">
                    <h2>Welcome</h2>
               <div class="loginp__btnbox">
                    <div class="loginp__toggle">
                         <div id="toggle"></div>
                         <button type="button" class="loginp__button" onclick="login()">Login</button>
                         <button type="button" class="loginp__button" onclick="register()">Register</button>
                    </div>
               </div>
               <form action="include/login.inc.php" method="post" id="login" class="loginp__inputs">
                    <input type="text" name="uid" class="loginp__input" placeholder="Username/Email">
                    <input type="password" name="pwd" class="loginp__input" placeholder="Password">
                    <button type="submit" name="submit" class="loginp__submit">Log in</button>
               </form>
               <form action="include/register.inc.php" method="post" id="register" class="loginp__inputs">
                    <input type="text" name="name" class="loginp__input" placeholder="Full name">
                    <input type="text" name="email" class="loginp__input" placeholder="Email">
                    <input type="text" name="uid" class="loginp__input" placeholder="Username">
                    <input type="password" name="pwd" class="loginp__input" placeholder="Password">
                    <input type="password" name="pwdrepeat" class="loginp__input" placeholder="Confirm Password">
                    <button type="submit" name="submit" class="loginp__submit">Register</button>
               </form>
          </div>
          <div class="loginp__echo">
               <?php
                    if (isset($_GET['error'])) {
                         if ($_GET['error'] == "emptyinput") {
                              echo "<p>Fill in all fields!</p>";
                         }
                         else if ($_GET['error'] == "wronglogin") {
                              echo "<p>Incorrect login information</p>";
                         }
                         else if ($_GET['error'] == "invaliduid") {
                              echo "<p>Choose a proper username</p>";
                         }
                         else if ($_GET['error'] == "invalidemail") {
                              echo "<p>Choose a proper email</p>";
                         }
                         else if ($_GET['error'] == "passwordsdpntmatch") {
                              echo "<p>Passwords don't match!</p>";
                         }
                         else if ($_GET['error'] == "stmtfailed") {
                              echo "<p>Something went wrong, try again!</p>";
                         }
                         else if ($_GET['error'] == "usernametaken") {
                              echo "<p>Username already taken</p>";
                         }
                         else if ($_GET['error'] == "none") {
                              echo "<p align='center'><font color=white>You have signed up!</p>";
                         }
                    }
               ?>
          </div>
     </section>

     <script>
          var x = document.getElementById("login");
          var y = document.getElementById("register");
          var z = document.getElementById("toggle");

          function register(){
          x.style.left = "-400px";
          y.style.left = "50px";
          z.style.left = "110px";
          }
          
          function login(){
          x.style.left = "50px";
          y.style.left = "450px";
          z.style.left = "0";
          }

     </script>
</body>
</html>

