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
        z-index: 2;
      }

      .class-b {
        position: fixed;
        top: 10vh;
        width: 100%;
        z-index: 2;
      }

      .login-div {
        height: 850px;
        margin-top: 50vh;
      }

      .register-file {
        margin-bottom: 20px;
        color: #a12d2e;
      }
    </style>
  </head>
  <body class="body-login"> <?php
    include('header.php'); 
  ?> <?php
    include('navBar.php'); 
  ?> <div class="login-div">
      <div class="w-form">
        <form id="email-form" name="email-form" action='register.php' data-name="Email Form" method="post">
          <label for="Email" class="login-field">Имејл:</label>
          <input type="email" class="login-text-field w-input" maxlength="256" name="Email" data-name="Email" placeholder="ime@gmail.com" id="Email" required="">
          <label for="Password" class="login-field">Шифра:</label>
          <input type="password" class="login-text-field w-input" maxlength="256" name="Password" data-name="Password" placeholder="" id="Password" required="">
          <label for="Ime" class="login-field">Име:</label>
          <input type="text" class="login-text-field w-input" maxlength="256" name="Ime" data-name="Ime" placeholder="Петар" id="Ime" required="">
          <label for="Prezime" class="login-field">Презиме:</label>
          <input type="text" class="login-text-field w-input" maxlength="256" name="Prezime" data-name="Prezime" placeholder="Петровић" id="Prezime" required="">
          <label for="Telefon" class="login-field">Број телефона:</label>
          <input type="tel" class="login-text-field w-input" maxlength="256" name="Telefon" data-name="Telefon" placeholder="060 0000000" id="Telefon" required="">
          <label for="Adresa" class="login-field">Адреса:</label>
          <input type="text" class="login-text-field w-input" maxlength="256" name="Adresa" data-name="Adresa" placeholder="Балканска 10, Београд" id="Adresa" required="">
          <label for="IDIzbornomesto" class="login-field">Изборно место:</label>
          <input type="text" class="login-text-field w-input" maxlength="256" name="IDIzbornomesto" data-name="IDIzbornomesto" placeholder="152" id="IDIzbornomesto" required="">
          <label for="Slika" class="login-field">Слика:</label>
          <input type="file" id="Slika" class="register-file" name="Slika">
          <input type="submit" value="Региструј се" data-wait="Сачекајте..." class="login-btn">
        </form>
      </div>
    </div>
  </body>
</html>