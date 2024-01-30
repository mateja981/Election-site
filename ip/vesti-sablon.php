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
      .new-div {
        z-index: 2;
        max-width: 80vw;
        background-color: #f7f7f7;
        flex-direction: column;
        padding: 5vh 5vw 5vh 10vw;
        display: block;
        position: absolute;
        overflow: visible;
      }

      .fs-div {
        width: 100%;
        height: 100vh;
        display: flex;
        justify-content: start;
        align-items: center;
      }

      .new-title {
        color: #0c4076;
        margin-top: 20px;
        margin-bottom: 0;
        font-family: Noto Sans, sans-serif;
        font-size: 32px;
        font-weight: 400;
        line-height: 36px;
        text-decoration: none;
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
    <div class="fs-div">
      <div class="new-div">
        <h1 class="new-heading">Наслов</h1>
        <p>Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст </p>
        <div>01.01.2023.</div>
      </div>
    </div>
  </body>