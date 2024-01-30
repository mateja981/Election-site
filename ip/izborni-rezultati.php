<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Izborni rezultati</title>

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
        .dropdown {
            display: inline-block;
            position: relative;
        }

        .dropdown select {
            padding: 10px;
            font-size: 16px;
        }

        .options {
            list-style: none;
            padding: 0;
            margin: 0;
            display: flex;
            flex-direction: column;
        }

        .option {
            position: relative;
            margin-bottom: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
            font-size: 35px;
            height: 45px;
            font-family: 'Playfair Display', serif;
            font-weight: medium;
            color: #21231e;
            line-height: 45px;
            display: flex;
            justify-content: start;
            align-items: center;
        }

        .option:hover {
            background-color: #f2f2f2;
        }

        .sub-menu {
            display: none;
            position: absolute;
            top: 100%;
            box-shadow: 0 2px 4px rgba(0, 0, 0, .6);
            width: max-content;
            z-index: 2;
            list-style-type: none;
            margin: 0;
            padding: 0;
        }

        .option:hover .sub-menu {
            display: none;
        }

        .sub-menu li {
            padding: 5px;
            transition: background-color 0.3s;
            font-size: 25px;
            font-family: 'Playfair Display', serif;
            font-weight: normal;
            color: #21231e;

        }

      .box:checked + .sub-menu {
        display: block;
        background: #edb92e;
        color: #666666;
      }
    </style>

  </head>
  <body>
   
    <?php
		include('header.php'); 
	?>
    <?php
		include('navBar.php'); 
	?>
 
    <div class="class-f">
      <h2 class="resaults-heading">Изборни резултати</h2>
      <div class="parties-div">
        <div class="party-div">
          <div class="party-card _1">
            <h4 class="party-heading">Име странке</h4>
            <div class="percentage-text">18%</div>
          </div>
          <div class="party-card blue _2">
            <h4 class="party-heading">Име странке</h4>
            <div class="percentage-text">15%</div>
          </div>
          <div class="party-card white _3">
            <h4 class="party-heading">Име странке</h4>
            <div class="percentage-text">12%</div>
          </div>
        </div>
        <div class="party-div">
          <div class="party-card _4">
            <h4 class="party-heading">Име странке</h4>
            <div class="percentage-text">10%</div>
          </div>
          <div class="party-card blue _5">
            <h4 class="party-heading">Име странке</h4>
            <div class="percentage-text">8%</div>
          </div>
          <div class="party-card white _6">
            <h4 class="party-heading">Име странке</h4>
            <div class="percentage-text">7%</div>
          </div>
        </div>
        <div class="party-div">
          <div class="party-card _7">
            <h4 class="party-heading">Име странке</h4>
            <div class="percentage-text">6%</div>
          </div>
          <div class="party-card blue _8">
            <h4 class="party-heading">Име странке</h4>
            <div class="percentage-text">5%</div>
          </div>
          <div class="party-card white _9">
            <h4 class="party-heading">Име странке</h4>
            <div class="percentage-text">5%</div>
          </div>
        </div>
        <div class="party-div">
          <div class="party-card small">
            <h4 class="party-heading">Име странке</h4>
            <div class="percentage-text small">3.5%</div>
          </div>
          <div class="party-card blue small">
            <h4 class="party-heading">Име странке</h4>
            <div class="percentage-text small">2.5%</div>
          </div>
          <div class="party-card blue small">
            <h4 class="party-heading">Име странке</h4>
            <div class="percentage-text small">2%</div>
          </div>
          <div class="party-card white small">
            <h4 class="party-heading">Име странке</h4>
            <div class="percentage-text small">1.8%</div>
          </div>
        </div>
        <div class="party-div">
          <div class="party-card small">
            <h4 class="party-heading">Име странке</h4>
            <div class="percentage-text small">1.5%</div>
          </div>
          <div class="party-card blue small">
            <h4 class="party-heading">Име странке</h4>
            <div class="percentage-text small">1.2%</div>
          </div>
          <div class="party-card blue small">
            <h4 class="party-heading">Име странке</h4>
            <div class="percentage-text small">1%</div>
          </div>
          <div class="party-card white small">
            <h4 class="party-heading">Име странке</h4>
            <div class="percentage-text small">0.5%</div>
          </div>
        </div>
      </div>
      <div class="municipalities">
        <h3 class="h3-manicipalities">Резултати по општинама</h3>
        <div class="letters">
          <div class="letters-row">
            <a href="#A" class="letter-link">A</a>
            <a href="#B" class="letter-link">Б</a>
            <a href="#V" class="letter-link">В</a>
            <a href="#" class="letter-link">Г</a>
            <a href="#" class="letter-link">Д</a>
            <a href="#" class="letter-link">Е</a>
            <a href="#" class="letter-link">Ђ</a>
            <a href="#" class="letter-link">Ж</a>
            <a href="#" class="letter-link">З</a>
            <a href="#" class="letter-link">И</a>
          </div>
          <div class="letters-row">
            <a href="#" class="letter-link">Ј</a>
            <a href="#" class="letter-link">К</a>
            <a href="#" class="letter-link">Л</a>
            <a href="#" class="letter-link">Љ</a>
            <a href="#" class="letter-link">М</a>
            <a href="#" class="letter-link">Н</a>
            <a href="#" class="letter-link">Њ</a>
            <a href="#" class="letter-link">О</a>
            <a href="#" class="letter-link">П</a>
            <a href="#" class="letter-link">Р</a>
          </div>
          <div class="letters-row">
            <a href="#" class="letter-link">С</a>
            <a href="#" class="letter-link">Т</a>
            <a href="#" class="letter-link">Ћ</a>
            <a href="#" class="letter-link">У</a>
            <a href="#" class="letter-link">Ф</a>
            <a href="#" class="letter-link">Х</a>
            <a href="#" class="letter-link">Ц</a>
            <a href="#" class="letter-link">Ч</a>
            <a href="#" class="letter-link">Џ</a>
            <a href="#" class="letter-link">Ш</a>
          </div>
        </div>

<div class="dropdown">
        <ul class="options">
            <li class="option" id="A">
                <label for="box1">Општина Ада</label>
                <input type="checkbox" id="box1" class="box" />
                
                <ul class="sub-menu">
                    <li>Ime stranke 1 xx%</li>
                    <li>Ime stranke 2 xx%</li>
                    <li>Ime stranke 3 xx%</li>
                    <li>Ime stranke 4 xx%</li>
                </ul>
            </li>
            <li class="option">
                <label for="box2">Општина Александровац</label>
                <input type="checkbox" id="box2" class="box" />
                <ul class="sub-menu">
                    <li>Ime stranke 1 xx%</li>
                    <li>Ime stranke 2 xx%</li>
                    <li>Ime stranke 3 xx%</li>
                    <li>Ime stranke 4 xx%</li>
                    <li>Ime stranke 5 xx%</li>
                </ul>
            </li>
            <li class="option">
                <label for="box3">Општина Алексинац</label>
                <input type="checkbox" id="box3" class="box" />
                <ul class="sub-menu">
                    <li>Ime stranke 1 xx%</li>
                    <li>Ime stranke 2 xx%</li>
                    <li>Ime stranke 3 xx%</li>
                    <li>Ime stranke 4 xx%</li>
                    <li>Ime stranke 5 xx%</li>
                    <li>Ime stranke 6 xx%</li>
                </ul>
            </li>
            <li class="option">
                <label for="box4">Општина Алибунар</label>
                <input type="checkbox" id="box4" class="box" />
                <ul class="sub-menu">
                    <li>Ime stranke 1 xx%</li>
                    <li>Ime stranke 2 xx%</li>
                    <li>Ime stranke 3 xx%</li>
                    <li>Ime stranke 4 xx%</li>
                    <li>Ime stranke 5 xx%</li>
                    <li>Ime stranke 6 xx%</li>
                </ul>
            </li>
            <li class="option">
                <label for="box5">Општина Апатин</label>
                <input type="checkbox" id="box5" class="box" />
                <ul class="sub-menu">
                    <li>Ime stranke 1 xx%</li>
                    <li>Ime stranke 2 xx%</li>
                    <li>Ime stranke 3 xx%</li>
                    <li>Ime stranke 4 xx%</li>
                    <li>Ime stranke 5 xx%</li>
                    <li>Ime stranke 6 xx%</li>
                </ul>
            </li>
            <li class="option">
                <label for="box6">Општина Аранђеловац</label>
                <input type="checkbox" id="box6" class="box" />
                <ul class="sub-menu">
                    <li>Ime stranke 1 xx%</li>
                    <li>Ime stranke 2 xx%</li>
                    <li>Ime stranke 3 xx%</li>
                    <li>Ime stranke 4 xx%</li>
                    <li>Ime stranke 5 xx%</li>
                    <li>Ime stranke 6 xx%</li>
                </ul>
            </li>
            <li class="option">
                <label for="box7">Општина Ариље</label>
                <input type="checkbox" id="box7" class="box" />
                <ul class="sub-menu">
                    <li>Ime stranke 1 xx%</li>
                    <li>Ime stranke 2 xx%</li>
                    <li>Ime stranke 3 xx%</li>
                    <li>Ime stranke 4 xx%</li>
                    <li>Ime stranke 5 xx%</li>
                    <li>Ime stranke 6 xx%</li>
                </ul>
            </li>
            <li class="option" id="B">
                <label for="box8">Општина Бабушинац</label>
                <input type="checkbox" id="box8" class="box" />
                <ul class="sub-menu">
                    <li>Ime stranke 1 xx%</li>
                    <li>Ime stranke 2 xx%</li>
                    <li>Ime stranke 3 xx%</li>
                    <li>Ime stranke 4 xx%</li>
                    <li>Ime stranke 5 xx%</li>
                    <li>Ime stranke 6 xx%</li>
                </ul>
            </li>
            <li class="option">
                <label for="box9">Општина Бајина Башта</label>
                <input type="checkbox" id="box9" class="box" />
                <ul class="sub-menu">
                    <li>Ime stranke 1 xx%</li>
                    <li>Ime stranke 2 xx%</li>
                    <li>Ime stranke 3 xx%</li>
                    <li>Ime stranke 4 xx%</li>
                    <li>Ime stranke 5 xx%</li>
                    <li>Ime stranke 6 xx%</li>
                </ul>
            </li>
        </ul>
    </div>

        </div>
    </div>
  </body>
</html>