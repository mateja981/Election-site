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
      .login-btn {
        color: #edb92e;
        background-color: rgba(255, 255, 255, 0);
        border: 2px solid #c6363c;
        border-radius: 10px;
        font-size: 15px;
        line-height: 20px;
        color: #c6363c;
        margin-bottom: 20px;
        display: inline-block;
      }

      .cont-mail {
        margin-bottom: 10px;
      }

      .image-news {
        z-index: -1;
        position: fixed;
        top: 0%;
        bottom: 0%;
        left: 0%;
        right: 0%;
      }

      .class-a {
        z-index: 999;
        position: fixed;
        top: 0%;
        bottom: 0%;
        left: 0%;
        right: 0%;
      }

      .class-b {
        z-index: 999;
        position: fixed;
        top: 10vh;
        bottom: 0%;
        left: 0%;
        right: 0%;
      }

      .new-date {
        color: #c6363c;
        ont-family: Noto Sans, sans-serif;
        font-size: 18px;
        font-weight: 200;
        line-height: 20px;
      }
    </style>
  </head>
  <body class="body"> <?php
    include('header.php'); 
  ?> <?php
    include('navBar.php'); 
  ?> <img src="folder/Pobednik.jpg" sizes="(max-width: 2560px) 100vw, 2560px" class="image-news">
    <div class="cont-div"> <?php include('ucitavanje-opstina.php'); ?>
  </body>
</html>