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

      .dropdown {
        margin-bottom: 20px;
        color: #0c4076;
        font-size: 16px;
      }

      .second {
        max-width: 83px;
        margin-bottom: 40px;
      }

      .margin-b {
        margin-bottom: 10px;
      }
    </style>
  </head>
  <body class="body-login"> <?php
    include('header.php'); 
  ?> <?php
    include('navBar.php'); 
  ?>
    <!--class="login-field"-->
    <!--class="login-text-field w-input"-->
    <div class="login-div">
      <div id="forms">
        <div class="w-form">
          <form id="email-form" name="municipio-form" data-name="municipio form" method="post">
            <label class="login-field" for="broj_birackog_mesta">Unesite broj biračkog mesta:</label>
            <input type="number" id="broj_birackog_mesta" class="margin-b" name="broj_birackog_mesta" min="1" required>
            <label class="login-field" for="opstina">Izaberite opštinu:</label>
            <select id="opstina" name="opstina" class="margin-b"></select>
            <span onclick="addFunction()" class="login-btn second">Додај</span>
          </form>
        </div>
      </div>
      <input type="submit" value="Potvrdi" class="login-btn">
    </div>
    <script src="skripta.js"></script>
  </body>
</html>