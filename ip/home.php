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
      .body {
        height: 100vh;
        overflow: hidden;
      }

      .news {
        font-family: var(--playfair);
        color: var(--black);
        margin-top: 0;
        margin-bottom: 2vh;
      }

      .news-div {
        align-items: center;
        margin-top: 20px;
        display: flex;
      }

      .news-title {
        font-family: var(--playfair);
        color: var(--black);
        font-size: 24px;
        font-weight: 700;
        line-height: 30px;
        text-decoration: none;
      }

      .news-text {
        font-family: var(--nato-sans);
        color: var(--black);
      }

      .news-image {
        width: 125px;
        height: 125px;
        object-fit: cover;
      }
    </style>
  </head>
  <body class="body">
    <div class="background-images">
      <img src="folder/Skupstina.jpg" class="background-image-left">
      <img src="folder/Pobednik.jpg" class="background-image-right">
    </div> <?php
    include('header.php'); 
  ?> <?php
    include('navBar.php'); 
  ?> <div class="class-cde">
      <div class="class-c">
        <div class="municipalities">
          <div class="municipality">
            <div class="municipality-name">Општина Ада</div>
            <ul role="list" class="parties">
              <li class="party">Ime stranke 1 <span class="percentage-of-votes">50%</span>
              </li>
              <li class="party">Ime stranke 1 <span class="percentage-of-votes">30%</span>
              </li>
              <li class="party">Ime stranke 1 <span class="percentage-of-votes">20%</span>
              </li>
            </ul>
          </div>
          <div class="municipality">
            <div class="municipality-name">Општина Александровац</div>
            <ul role="list" class="parties">
              <li class="party">Ime stranke 1 <span class="percentage-of-votes">50%</span>
              </li>
              <li class="party">Ime stranke 1 <span class="percentage-of-votes">30%</span>
              </li>
              <li class="party">Ime stranke 1 <span class="percentage-of-votes">20%</span>
              </li>
            </ul>
          </div>
          <div class="municipality">
            <div class="municipality-name">Општина Алексинац</div>
            <ul role="list" class="parties">
              <li class="party">Ime stranke 1 <span class="percentage-of-votes">50%</span>
              </li>
              <li class="party">Ime stranke 1 <span class="percentage-of-votes">30%</span>
              </li>
              <li class="party">Ime stranke 1 <span class="percentage-of-votes">20%</span>
              </li>
            </ul>
          </div>
          <div class="municipality">
            <div class="municipality-name">Општина Алибунар</div>
            <ul role="list" class="parties">
              <li class="party">Ime stranke 1 <span class="percentage-of-votes">50%</span>
              </li>
              <li class="party">Ime stranke 1 <span class="percentage-of-votes">30%</span>
              </li>
              <li class="party">Ime stranke 1 <span class="percentage-of-votes">20%</span>
              </li>
            </ul>
          </div>
          <div class="municipality">
            <div class="municipality-name">Општина Апатин</div>
            <ul role="list" class="parties">
              <li class="party">Ime stranke 1 <span class="percentage-of-votes">50%</span>
              </li>
              <li class="party">Ime stranke 1 <span class="percentage-of-votes">30%</span>
              </li>
              <li class="party">Ime stranke 1 <span class="percentage-of-votes">20%</span>
              </li>
            </ul>
          </div>
          <div class="municipality">
            <div class="municipality-name">Општина Аранђеловац</div>
            <ul role="list" class="parties">
              <li class="party">Ime stranke 1 <span class="percentage-of-votes">50%</span>
              </li>
              <li class="party">Ime stranke 1 <span class="percentage-of-votes">30%</span>
              </li>
              <li class="party">Ime stranke 1 <span class="percentage-of-votes">20%</span>
              </li>
            </ul>
          </div>
          <div class="municipality">
            <div class="municipality-name">Општина Ариље</div>
            <ul role="list" class="parties">
              <li class="party">Ime stranke 1 <span class="percentage-of-votes">50%</span>
              </li>
              <li class="party">Ime stranke 1 <span class="percentage-of-votes">30%</span>
              </li>
              <li class="party">Ime stranke 1 <span class="percentage-of-votes">20%</span>
              </li>
            </ul>
          </div>
          <div class="municipality">
            <div class="municipality-name">Општина Бабушница</div>
            <ul role="list" class="parties">
              <li class="party">Ime stranke 1 <span class="percentage-of-votes">50%</span>
              </li>
              <li class="party">Ime stranke 1 <span class="percentage-of-votes">30%</span>
              </li>
              <li class="party">Ime stranke 1 <span class="percentage-of-votes">20%</span>
              </li>
            </ul>
          </div>
          <div class="municipality">
            <div class="municipality-name">Општина Бајина Башта</div>
            <ul role="list" class="parties">
              <li class="party">Ime stranke 1 <span class="percentage-of-votes">50%</span>
              </li>
              <li class="party">Ime stranke 1 <span class="percentage-of-votes">30%</span>
              </li>
              <li class="party">Ime stranke 1 <span class="percentage-of-votes">20%</span>
              </li>
            </ul>
          </div>
          <div class="municipality">
            <div class="municipality-name">Општина Баточина</div>
            <ul role="list" class="parties">
              <li class="party">Ime stranke 1 <span class="percentage-of-votes">50%</span>
              </li>
              <li class="party">Ime stranke 1 <span class="percentage-of-votes">30%</span>
              </li>
              <li class="party">Ime stranke 1 <span class="percentage-of-votes">20%</span>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="class-de">
        <div class="class-d">
          <form action="search" class="search w-form">
            <label for="search" class="search-label">Претрага</label>
            <input type="search" class="search-input w-input" maxlength="256" name="query" placeholder="Име општине…" id="search" required="">
            <input type="submit" value="Претражи" class="search-button w-button">
          </form>
        </div>
        <div class="class-e"> <?php include('ucitavanje-vesti.php');?> </div>
      </div>
    </div>
    </div>
    </div>
    </div>
    <script type="text/javascript">
      document.addEventListener('DOMContentLoaded', function() {
        // Pronađi dropdown blok
        var dropdownBlock = document.getElementById('municipalityDropdown');
        // Kada se klikne na dropdown blok
        dropdownBlock.addEventListener('click', function() {
          // Dodaj ili ukloni klasu 'open' na dropdown bloku
          dropdownBlock.classList.toggle('open');
        });
      });
    </script>
  </body>
</html>