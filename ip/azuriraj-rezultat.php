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
  display: inline-block;
  color: #c6363c;
}

.login-btn.right {
  margin-right: 15px;
  color: #0c4076;
  border: 2px solid #0c4076;
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

.new-date{
  color: #c6363c;
  ont-family: Noto Sans, sans-serif;
  font-size: 18px;
  font-weight: 200;
  line-height: 20px;}

  .separator{
    width: 100%;
    height: 0.3vh;
    border-radius: 10px;
    background-color: #21231e;;

  }
    </style>

  </head>

  <body class="body">
 
    <?php
    include('header.php'); 
  ?>
    <?php
    include('navBar.php'); 
  ?>
 
    
    <img src="folder/Pobednik.jpg" sizes="(max-width: 2560px) 100vw, 2560px" class="image-news">


    <div class="cont-div">
      <div>
        <div class="title-all">Укупно:</div>
        <div class="info-text">Укупан број гласова: 1 000 000</div>
        <div class="info-text">Број неважећих гласова: 1 000</div>
        <div class="info-text">Број бирача: 6 300 000 </div>
        <div class="partidos">
          <div class="partidos-text">Странка 1: 500 000</div>
          <div class="partidos-text">Странка 2: 300 000 </div>
          <div class="partidos-text">Странка 3: 6 300 000 </div>
        </div>
      </div>
      <div class="separator"> </div>
      <div>
        <div class="title-all">Бирачко место 1:</div>
        <div class="info-text">Укупан број гласова: 4000</div>
        <div class="info-text">Број неважећих гласова: 40</div>
        <div class="info-text">Број бирача: 6000 </div>
        <div class="partidos">
          <div class="partidos-text">Странка 1: 3000</div>
          <div class="partidos-text">Странка 2: 2000 </div>
          <div class="partidos-text">Странка 3: 1000</div>
        </div>
        <img src="folder/Zapisnicar.jpg" sizes="10vw" class="human-image">
        <div class="update w-form">
          <form id="partidos-form" name="partidos-form" data-name="Partidos Form" method="get">
            <label for="name-2" class="upade-text">Ажурирај податке</label>
            <label for="proccents" class="party-name">Странка 1</label>
            <input type="number" class="text-field w-input" maxlength="256" name="percentage" data-name="percentage" placeholder="" id="percentage">
            <label for="percentage-2" class="party-name">Странка 2</label>
            <input type="number" class="text-field w-input" maxlength="256" name="percentage" data-name="percentage" placeholder="" id="percentage-2">
            <label for="percentage-3" class="party-name">Странка 3</label>
            <input type="number" class="text-field w-input" maxlength="256" name="percentage" data-name="percentage" placeholder="" id="percentage-3">
            <label for="percentage-4" class="party-name">Број неважећих гласова</label>
            <input type="number" class="text-field w-input" maxlength="256" name="percentage" data-name="percentage" placeholder="" id="percentage-4">
            <input type="submit" value="Ажурирај" data-wait="Сачекајте..." class="login-btn">
          </form>
        </div>
      </div>
      <div class="separator"> </div>
      <div>
        <div class="title-all">Бирачко место 2:</div>
        <div class="info-text">Укупан број гласова: 4000</div>
        <div class="info-text">Број неважећих гласова: 40</div>
        <div class="info-text">Број бирача: 6000 </div>
        <div class="partidos">
          <div class="partidos-text">Странка 1: 3000</div>
          <div class="partidos-text">Странка 2: 2000 </div>
          <div class="partidos-text">Странка 3: 1000</div>
        </div>
        <img src="folder/Zapisnicar.jpg" sizes="10vw" class="human-image">
        <div class="update w-form">
          <form id="partidos-form" name="partidos-form" data-name="Partidos Form" method="get">
            <label for="name-2" class="upade-text">Ажурирај податке</label>
            <label for="proccents" class="party-name">Странка 1</label>
            <input type="number" class="text-field w-input" maxlength="256" name="percentage" data-name="percentage" placeholder="" id="percentage">
            <label for="percentage-2" class="party-name">Странка 2</label>
            <input type="number" class="text-field w-input" maxlength="256" name="percentage" data-name="percentage" placeholder="" id="percentage-2">
            <label for="percentage-3" class="party-name">Странка 3</label>
            <input type="number" class="text-field w-input" maxlength="256" name="percentage" data-name="percentage" placeholder="" id="percentage-3">
            <label for="percentage-4" class="party-name">Број неважећих гласова</label>
            <input type="number" class="text-field w-input" maxlength="256" name="percentage" data-name="percentage" placeholder="" id="percentage-4">
            <input type="submit" value="Ажурирај" data-wait="Сачекајте..." class="login-btn">
          </form>
        </div>
      </div>
      <div class="separator"> </div>
      <div>
        <div class="title-all">Бирачко место 3:</div>
        <div class="info-text">Укупан број гласова: 4000</div>
        <div class="info-text">Број неважећих гласова: 40</div>
        <div class="info-text">Број бирача: 6000 </div>
        <div class="partidos">
          <div class="partidos-text">Странка 1: 3000</div>
          <div class="partidos-text">Странка 2: 2000 </div>
          <div class="partidos-text">Странка 3: 1000</div>
        </div>
        <img src="folder/Zapisnicar.jpg" sizes="10vw" class="human-image">
        <div class="update w-form">
          <form id="partidos-form" name="partidos-form" data-name="Partidos Form" method="get">
            <label for="name-2" class="upade-text">Ажурирај податке</label>
            <label for="proccents" class="party-name">Странка 1</label>
            <input type="number" class="text-field w-input" maxlength="256" name="percentage" data-name="percentage" placeholder="" id="percentage">
            <label for="percentage-2" class="party-name">Странка 2</label>
            <input type="number" class="text-field w-input" maxlength="256" name="percentage" data-name="percentage" placeholder="" id="percentage-2">
            <label for="percentage-3" class="party-name">Странка 3</label>
            <input type="number" class="text-field w-input" maxlength="256" name="percentage" data-name="percentage" placeholder="" id="percentage-3">
            <label for="percentage-4" class="party-name">Број неважећих гласова</label>
            <input type="number" class="text-field w-input" maxlength="256" name="percentage" data-name="percentage" placeholder="" id="percentage-4">
            <input type="submit" value="Ажурирај" data-wait="Сачекајте..." class="login-btn">
          </form>
        </div>
      </div>
      </div>

     <script src="sat.js"> </script>
</body>
</html>