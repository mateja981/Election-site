<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>IP-Projekat</title>
    <!-- Ucitavanje Google Fontova -->
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <link href="folder/css/style.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js" type="text/javascript"></script>
    <script type="text/javascript">
      WebFont.load({
        google: {
          families: ["Playfair Display:regular,500,600,700,800,900:cyrillic,latin", "Noto Sans:100,200,300,regular,500,600,700,800,900:cyrillic,latin"]
        }
      });
    </script>
    <style>
      .class-a {
        position: fixed;
        top: 0vh;
      }

      .class-b {
        position: fixed;
        top: 10vh;
        width: 100%;
      }
    </style>
  </head>
  <body class="body-login"> <?php
    include('header.php'); 
  ?> <?php
    include('navBar.php'); 
  ?> <body class="body-login">
      <div class="login-div">
        <div class="w-form">
          <form id="email-form" name="email-form" action="login.php" data-name="Email Form" method="post">
            <label for="Email" class="login-field">Имејл:</label>
            <input type="email" class="login-text-field w-input" maxlength="256" name="Email" data-name="Email" id="Email" required="">
            <label for="Password" class="login-field">Шифра:</label>
            <input type="password" class="login-text-field down w-input" maxlength="256" name="Password" data-name="Password" id="Password" required="">
            <a href="registruj-se.php" class="login-field register">Региструј се</a>
            <input type="submit" value="Пријави се" data-wait="Сачекајте..." class="login-btn">
          </form>
        </div>
      </div>
    </body>
</html>