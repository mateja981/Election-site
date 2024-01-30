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
      .class-a{
        position: fixed;
        top:0vh;
      }

      .class-b{
        position: fixed;
        top:10vh;
        width: 100%;
      }
    </style>
</head>

  <body class="body-login">
  
    <?php
		include('header.php'); 
	?>
    <?php
		include('navBar.php'); 
	?>
 
    <div class="login-div">
      <div class="w-form">
        <form id="email-form" name="municipio-form" action="unos-opstine.php" data-name="municipio form" method="post">
          <label for="municipio" class="login-field">Име општине:</label>
          <input type="text" class="login-text-field w-input" maxlength="256" name="Opstina" data-name="Opstina" id="Opstina" required="">
          <input type="submit" value="Унеси" data-wait="Сачекајте..." class="login-btn">
        </form>
      </div>
    </div>
  </body>
</html>