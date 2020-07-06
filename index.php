<?php
error_reporting(-1);
header('Content-Type: text/html; charset=utf-8');
?>
<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Drafter</title>
    <link href="https://necolas.github.io/normalize.css/8.0.1/normalize.css" rel="stylesheet">
    <link rel="icon" type="image/png" sizes="32x32" href="img/logo.png">
    <link href="styles/main.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" >
      (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
       m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
      (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

      ym(62685085, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true
      });
    </script>
<noscript><div><img src="https://mc.yandex.ru/watch/62685085" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
  </head>
  <body>
    <?php
    echo "poshel ti";
    ?>
    <div id="modal_overlay" onclick="modalWindowHidden()">
      <div class="modal_window">
        <div class="modal_window_text_background">
          <img src="img/modal/ornament.svg" alt=""class="left_ornament">
          <h2>Советник</h2>
          <p></p>
          <button class="default_item">Понятно</button>
          <img src="img/modal/ornament.svg" alt="" class="right_ornament">
        </div>
        <img src="img/modal/helper.png" alt="there should be helper, but she is smoking" class="helper">
      </div>
    </div>
    <div id="wrapper">
      <header>
        <img src="img/logo.png" alt="" class="logo_img"><a href="" class="logo">ДРАФТЕР</a>
          <ul>
            <li><a href="https://vk.com/timy78" target="_blank">GOODBOY DDD</a></li>
            <li><a href="https://vk.com/moevich" target="_blank">Simaoku DDD</a></li>
            <li><a >Не кликай</a></li>
            <li><a href="https://vk.com/im?sel=254519689" target="_blank">Нашелся баг?</a></li>
          </ul>
      </header>
      <div id="main">
        <div id="settings">
          <div id="players_qt_settings">
            <button type="button" class="default_button" onclick="changeQuantity('2', '4')">Дуэль</button>
            <button type="button" class="default_button" onclick="changeQuantity('4', '4')">2х2</button>
            <button type="button" class="default_button" onclick="changeQuantity('6', '4')">FFA-6</button>
            <button type="button" class="default_button" onclick="changeQuantity('8', '4')">FFA-8</button>
            <button type="button" class="default_button" onclick="changeQuantity('10', '4')">FFA-10</button>
            <button type="button" class="default_button" onclick="changeQuantity('12', '3')">FFA-12</button>
            <div>Количество игроков:<input name="players_qt" type="number" min="1" max="12" value="8" class="default_item" onkeydown="return checkInputPlayers(this)"></div>
            <div>Лидеров на каждого:<input name="leaders_qt" type="number" min="1" value="4" class="default_item" onkeydown="return checkInputLeaders(this)"></div>
          </div>
          <div id="info_nav">
            <div id="info">
              <div id="remain">Осталось:<span class="counter">48</span> </div>
              <div id="banned">Забанено:<span class="counter">0</span> </div>
            </div>
            <div id="navigation">
              <button type="button" class="default_item" onclick="">Топ 8 банов</button>
              <button type="button" class="default_item" onclick="banReset()">Сбросить баны</button>
              <button type="button" class="default_item">Показать нации</button>
            </div>
            <div id="search">
              <div id="sort_button_inside" class="default_item"><button type="button">А-Я</button></div>
              <div id="search_line" class="default_item">
                <img src="img/search.svg" alt="">
                <input type="search" name="" value="" spellcheck="false" id="search_search">
              </div>
            </div>
          </div>
          <div id="civs">
            <div id="container">

              <div class="cell">
                <div class="item item-default" id="amanitore" nation="Нубия" leader="Аманиторе" nationAbb="nb">
                  <div class="item-hover"></div>
                  <input type="checkbox" value="" class="item_checkbox" checked>
                  <div class="bg_icon"><img src="img/leaders/amanitore.png" alt=""class='leader_icon'></div>
                  <span class="leader_name">Аманиторе</span>
                </div>
              </div>
              <div class="cell">
                <div class="item item-default" id="catherine" nation="Франция" leader="Екатерина Медичи" nationAbb="fr">
                  <div class="item-hover"></div>
                  <input type="checkbox" value="" class="item_checkbox" checked>
                  <div class="bg_icon"><img src="img/leaders/catherine.png" alt=""class='leader_icon'></div>
                  <span class="leader_name">Екатерина Медичи</span>
                </div>
              </div>
              <div class="cell">
                <div class="item item-default" id="chandragupta" nation="Индия" leader="Чандрагупта" nationAbb="in">
                  <div class="item-hover"></div>
                  <input type="checkbox" value="" class="item_checkbox" checked>
                  <div class="bg_icon"><img src="img/leaders/chandragupta.png" alt=""class='leader_icon'></div>
                  <span class="leader_name">Чандрагупта</span>
                </div>
              </div>
              <div class="cell">
                <div class="item item-default" id="cleopatra" nation="Египет" leader="Клеопатра" nationAbb="eg">
                  <div class="item-hover"></div>
                  <input type="checkbox" value="" class="item_checkbox" checked>
                  <div class="bg_icon"><img src="img/leaders/cleopatra.png" alt=""class='leader_icon'></div>
                  <span class="leader_name">Клеопатра</span>
                </div>
              </div>
              <div class="cell">
                <div class="item item-default" id="cyrus" nation="Персия" leader="Кир" nationAbb="pr">
                  <div class="item-hover"></div>
                  <input type="checkbox" value="" class="item_checkbox" checked>
                  <div class="bg_icon"><img src="img/leaders/cyrus.png" alt=""class='leader_icon'></div>
                  <span class="leader_name">Кир</span>
                </div>
              </div>
              <div class="cell">
                <div class="item item-default" id="alexander" nation="Македония" leader="Александр Македонский" nationAbb="mc">
                  <div class="item-hover"></div>
                  <input type="checkbox" value="" class="item_checkbox" checked>
                    <div class="bg_icon"><img src="img/leaders/alexander.png" alt=""class='leader_icon'></div>
                  <span class="leader_name">Александр Македонский</span>
                </div>
              </div>
              <div class="cell">
                <div class="item item-default" id="dido" nation="Финикия" leader="Дидона" nationAbb="phn">
                  <div class="item-hover"></div>
                  <input type="checkbox" value="" class="item_checkbox" checked>
                  <div class="bg_icon"><img src="img/leaders/dido.png" alt=""class='leader_icon'></div>
                  <span class="leader_name">Дидона</span>
                </div>
              </div>
              <div class="cell">
                <div class="item item-default" id="eleanor(fr)" nation="Франция" leader="Алиенора Аквитанская" nationAbb="fr">
                  <div class="item-hover"></div>
                  <input type="checkbox" value="" class="item_checkbox" checked>
                  <div class="bg_icon"><img src="img/leaders/eleanor(fr).png" alt=""class='leader_icon'></div>
                  <span class="leader_name">Алиенора Аквитанская</span>
                </div>
              </div>
              <div class="cell">
                <div class="item item-default" id="eleanor(eng)" nation="Англия" leader="Алиенора Аквитанская" nationAbb="ang">
                  <div class="item-hover"></div>
                  <input type="checkbox" value="" class="item_checkbox" checked>
                  <div class="bg_icon"><img src="img/leaders/eleanor(eng).png" alt=""class='leader_icon'></div>
                  <span class="leader_name">Алиенора Аквитанская</span>
                </div>
              </div>
              <div class="cell">
                <div class="item item-default" id="frederick" nation="Германия" leader="Фридрих Барбаросса" nationAbb="de">
                  <div class="item-hover"></div>
                  <input type="checkbox" value="" class="item_checkbox" checked>
                  <div class="bg_icon"><img src="img/leaders/frederick.png" alt=""class='leader_icon'></div>
                  <span class="leader_name">Фридрих Барбаросса</span>
                </div>
              </div>
              <div class="cell">
                <div class="item item-default" id="gandhi" nation="Индия" leader="Ганди" nationAbb="in">
                  <div class="item-hover"></div>
                  <input type="checkbox" value="" class="item_checkbox" checked>
                  <div class="bg_icon"><img src="img/leaders/gandhi.png" alt=""class='leader_icon'></div>
                  <span class="leader_name">Ганди</span>
                </div>
              </div>
              <div class="cell">
                <div class="item item-default" id="genghis" nation="Монголия" leader="Чингисхан" nationAbb="mn">
                  <div class="item-hover"></div>
                  <input type="checkbox" value="" class="item_checkbox" checked>
                  <div class="bg_icon"><img src="img/leaders/genghis.png" alt=""class='leader_icon'></div>
                  <span class="leader_name">Чингисхан</span>
                </div>
              </div>
              <div class="cell">
                <div class="item item-default" id="gilgamesh" nation="Шумеры" leader="Гильгамеш" nationAbb="sh">
                  <div class="item-hover"></div>
                  <input type="checkbox" value="" class="item_checkbox" checked>
                  <div class="bg_icon"><img src="img/leaders/gilgamesh.png" alt=""class='leader_icon'></div>
                  <span class="leader_name">Гильгамеш</span>
                </div>
              </div>
              <div class="cell">
                <div class="item item-default" id="gitarja" nation="Индонезия" leader="Трибхувана" nationAbb="gt">
                  <div class="item-hover"></div>
                  <input type="checkbox" value="" class="item_checkbox" checked>
                  <div class="bg_icon"><img src="img/leaders/gitarja.png" alt=""class='leader_icon'></div>
                  <span class="leader_name">Трибхувана</span>
                </div>
              </div>
              <div class="cell">
                <div class="item item-default" id="gorgo" nation="Греция" leader="Горго" nationAbb="gr">
                  <div class="item-hover"></div>
                  <input type="checkbox" value="" class="item_checkbox" checked>
                  <div class="bg_icon"><img src="img/leaders/gorgo.png" alt=""class='leader_icon'></div>
                  <span class="leader_name">Горго</span>
                </div>
              </div>
              <div class="cell">
                <div class="item item-default" id="harald" nation="Норвегия" leader="Харальд Суровый" nationAbb="no">
                  <div class="item-hover"></div>
                  <input type="checkbox" value="" class="item_checkbox" checked>
                  <div class="bg_icon"><img src="img/leaders/harald.png" alt=""class='leader_icon'></div>
                  <span class="leader_name">Харальд Суровый</span>
                </div>
              </div>
              <div class="cell">
                <div class="item item-default" id="jadwiga" nation="Польша" leader="Ядвига" nationAbb="pl">
                  <div class="item-hover"></div>
                  <input type="checkbox" value="" class="item_checkbox" checked>
                  <div class="bg_icon"><img src="img/leaders/jadwiga.png" alt=""class='leader_icon'></div>
                  <span class="leader_name">Ядвига</span>
                </div>
              </div>
              <div class="cell">
                <div class="item item-default" id="jayavarman" nation="Кхмеры" leader="Джайаварман VII" nationAbb="kh">
                  <div class="item-hover"></div>
                  <input type="checkbox" value="" class="item_checkbox" checked>
                  <div class="bg_icon"><img src="img/leaders/jayavarman.png" alt=""class='leader_icon'></div>
                  <span class="leader_name">Джайаварман VІІ</span>
                </div>
              </div>
              <div class="cell">
                <div class="item item-default" id="john" nation="Австралия" leader="Джон Кэртин" nationAbb="au">
                  <div class="item-hover"></div>
                  <input type="checkbox" value="" class="item_checkbox" checked>
                  <div class="bg_icon"><img src="img/leaders/john.png" alt=""class='leader_icon'></div>
                  <span class="leader_name">Джон Кэртин</span>
                </div>
              </div>
              <div class="cell">
                <div class="item item-default" id="kristina" nation="Швеция" leader="Кристина" nationAbb="se">
                  <div class="item-hover"></div>
                  <input type="checkbox" value="" class="item_checkbox" checked>
                  <div class="bg_icon"><img src="img/leaders/kristina.png" alt=""class='leader_icon'></div>
                  <span class="leader_name">Кристина</span>
                </div>
              </div>
              <div class="cell">
                <div class="item item-default" id="kupe" nation="Маори" leader="Купе" nationAbb="kp">
                  <div class="item-hover"></div>
                  <input type="checkbox" value="" class="item_checkbox" checked>
                  <div class="bg_icon"><img src="img/leaders/kupe.png" alt=""class='leader_icon'></div>
                  <span class="leader_name">Купе</span>
                </div>
              </div>
              <div class="cell">
                <div class="item item-default" id="lautaro" nation="Мапуче" leader="Лаутаро" nationAbb="mp">
                  <div class="item-hover"></div>
                  <input type="checkbox" value="" class="item_checkbox" checked>
                  <div class="bg_icon"><img src="img/leaders/lautaro.png" alt=""class='leader_icon'></div>
                  <span class="leader_name">Лаутаро</span>
                </div>
              </div>
              <div class="cell">
                <div class="item item-default" id="mansa" nation="Мали" leader="Муса I" nationAbb="mm">
                  <div class="item-hover"></div>
                  <input type="checkbox" value="" class="item_checkbox" checked>
                  <div class="bg_icon"><img src="img/leaders/mansa.png" alt=""class='leader_icon'></div>
                  <span class="leader_name">Муса І</span>
                </div>
              </div>
              <div class="cell">
                <div class="item item-default" id="matthias" nation="Венгрия" leader="Матьяш I Корвин" nationAbb="hu">
                  <div class="item-hover"></div>
                  <input type="checkbox" value="" class="item_checkbox" checked>
                  <div class="bg_icon"><img src="img/leaders/matthias.png" alt=""class='leader_icon'></div>
                  <span class="leader_name">Матьяш І Корвин</span>
                </div>
              </div>
              <div class="cell">
                <div class="item item-default" id="montezuma" nation="Ацтеки" leader="Монтесума I" nationAbb="az">
                  <div class="item-hover"></div>
                  <input type="checkbox" value="" class="item_checkbox" checked>
                  <div class="bg_icon"><img src="img/leaders/montezuma.png" alt=""class='leader_icon'></div>
                  <span class="leader_name">Монтесума І</span>
                </div>
              </div>
              <div class="cell">
                <div class="item item-default" id="mvemba" nation="Конго" leader="Мвемба а Нзинга" nationAbb="kg">
                  <div class="item-hover"></div>
                  <input type="checkbox" value="" class="item_checkbox" checked>
                  <div class="bg_icon"><img src="img/leaders/mvemba.png" alt=""class='leader_icon'></div>
                  <span class="leader_name">Мвемба а Нзинга</span>
                </div>
              </div>
              <div class="cell">
                <div class="item item-default" id="pachacuti" nation="Инки" leader="Пачакутек" nationAbb="ink">
                  <div class="item-hover"></div>
                  <input type="checkbox" value="" class="item_checkbox" checked>
                  <div class="bg_icon"><img src="img/leaders/pachacuti.png" alt=""class='leader_icon'></div>
                  <span class="leader_name">Пачакутек</span>
                </div>
              </div>
              <div class="cell">
                <div class="item item-default" id="pedro" nation="Бразилия" leader="Педру II" nationAbb="br">
                  <div class="item-hover"></div>
                  <input type="checkbox" value="" class="item_checkbox" checked>
                  <div class="bg_icon"><img src="img/leaders/pedro.png" alt=""class='leader_icon'></div>
                  <span class="leader_name">Педру ІІ</span>
                </div>
              </div>
              <div class="cell">
                <div class="item item-default" id="pericles" nation="Греция" leader="Перикл" nationAbb="gr">
                  <div class="item-hover"></div>
                  <input type="checkbox" value="" class="item_checkbox" checked>
                  <div class="bg_icon"><img src="img/leaders/pericles.png" alt=""class='leader_icon'></div>
                  <span class="leader_name">Перикл</span>
                </div>
              </div>
              <div class="cell">
                <div class="item item-default" id="peter" nation="Россия" leader="Петр I" nationAbb="rus">
                  <div class="item-hover"></div>
                  <input type="checkbox" value="" class="item_checkbox" checked>
                  <div class="bg_icon"><img src="img/leaders/peter.png" alt=""class='leader_icon'></div>
                  <span class="leader_name">Петр І</span>
                </div>
              </div>
              <div class="cell">
                <div class="item item-default" id="philip" nation="Испания" leader="Филипп II" nationAbb="es">
                  <div class="item-hover"></div>
                  <input type="checkbox" value="" class="item_checkbox" checked>
                  <div class="bg_icon"><img src="img/leaders/philip.png" alt=""class='leader_icon'></div>
                  <span class="leader_name">Филипп ІІ</span>
                </div>
              </div>
              <div class="cell">
                <div class="item item-default" id="poundmaker" nation="Кри" leader="Паундмейкер" nationAbb="kri">
                  <div class="item-hover"></div>
                  <input type="checkbox" value="" class="item_checkbox" checked>
                  <div class="bg_icon"><img src="img/leaders/poundmaker.png" alt=""class='leader_icon'></div>
                  <span class="leader_name">Паундмейкер</span>
                </div>
              </div>
              <div class="cell">
                <div class="item item-default" id="qin_shi" nation="Китай" leader="Цинь Шихуанди" nationAbb="cn">
                  <div class="item-hover"></div>
                  <input type="checkbox" value="" class="item_checkbox" checked>
                  <div class="bg_icon"><img src="img/leaders/qin_shi.png" alt=""class='leader_icon'></div>
                  <span class="leader_name">Цинь Шихуанди</span>
                </div>
              </div>
              <div class="cell">
                <div class="item item-default" id="robert" nation="Шотландия" leader="Роберт I Брюс" nationAbb="scot">
                  <div class="item-hover"></div>
                  <input type="checkbox" value="" class="item_checkbox" checked>
                  <div class="bg_icon"><img src="img/leaders/robert.png" alt=""class='leader_icon'></div>
                  <span class="leader_name">Роберт І Брюс</span>
                </div>
              </div>
              <div class="cell">
                <div class="item item-default" id="saladin" nation="Аравия" leader="Саладин" nationAbb="sa">
                  <div class="item-hover"></div>
                  <input type="checkbox" value="" class="item_checkbox" checked>
                  <div class="bg_icon"><img src="img/leaders/saladin.png" alt=""class='leader_icon'></div>
                  <span class="leader_name">Саладин</span>
                </div>
              </div>
              <div class="cell">
                <div class="item item-default" id="seondeok" nation="Корея" leader="Сондок" nationAbb="kr">
                  <div class="item-hover"></div>
                  <input type="checkbox" value="" class="item_checkbox" checked>
                  <div class="bg_icon"><img src="img/leaders/seondeok.png" alt=""class='leader_icon'></div>
                  <span class="leader_name">Сондок</span>
                </div>
              </div>
              <div class="cell">
                <div class="item item-default" id="shaka" nation="Зулусы" leader="Чака" nationAbb="zul">
                  <div class="item-hover"></div>
                  <input type="checkbox" value="" class="item_checkbox" checked>
                  <div class="bg_icon"><img src="img/leaders/shaka.png" alt=""class='leader_icon'></div>
                  <span class="leader_name">Чака</span>
                </div>
              </div>
              <div class="cell">
                <div class="item item-default" id="suleiman" nation="Османы" leader="Сулейман I Великолепный" nationAbb="osm">
                  <div class="item-hover"></div>
                  <input type="checkbox" value="" class="item_checkbox" checked>
                  <div class="bg_icon"><img src="img/leaders/suleiman.png" alt=""class='leader_icon'></div>
                  <span class="leader_name">Сулейман І Великолепный</span>
                </div>
              </div>
              <div class="cell">
                <div class="item item-default" id="tamar" nation="Грузия" leader="Тамара" nationAbb="ge">
                  <div class="item-hover"></div>
                  <input type="checkbox" value="" class="item_checkbox" checked>
                  <div class="bg_icon"><img src="img/leaders/tamar.png" alt=""class='leader_icon'></div>
                  <span class="leader_name">Тамара</span>
                </div>
              </div>
              <div class="cell">
                <div class="item item-default" id="teddy" nation="Америка" leader="Теодор Рузвельт" nationAbb="us">
                  <div class="item-hover"></div>
                  <input type="checkbox" value="" class="item_checkbox" checked>
                  <div class="bg_icon"><img src="img/leaders/teddy.png" alt=""class='leader_icon'></div>
                  <span class="leader_name">Теодор Рузвельт</span>
                </div>
              </div>
              <div class="cell">
                <div class="item item-default" id="tokimune" nation="Япония" leader="Ходзе Токимуне" nationAbb="jp">
                  <div class="item-hover"></div>
                  <input type="checkbox" value="" class="item_checkbox" checked>
                  <div class="bg_icon"><img src="img/leaders/tokimune.png" alt=""class='leader_icon'></div>
                  <span class="leader_name">Ходзе Токимуне</span>
                </div>
              </div>
              <div class="cell">
                <div class="item item-default" id="tomyris" nation="Скифия" leader="Томирис" nationAbb="sc">
                  <div class="item-hover"></div>
                  <input type="checkbox" value="" class="item_checkbox" checked>
                  <div class="bg_icon"><img src="img/leaders/tomyris.png" alt=""class='leader_icon'></div>
                  <span class="leader_name">Томирис</span>
                </div>
              </div>
              <div class="cell">
                <div class="item item-default" id="trajan" nation="Рим" leader="Траян" nationAbb="rm">
                  <div class="item-hover"></div>
                  <input type="checkbox" value="" class="item_checkbox" checked>
                  <div class="bg_icon"><img src="img/leaders/trajan.png" alt=""class='leader_icon'></div>
                  <span class="leader_name">Траян</span>
                </div>
              </div>
              <div class="cell">
                <div class="item item-default" id="victoria" nation="Англия" leader="Виктория" nationAbb="ang">
                  <div class="item-hover"></div>
                  <input type="checkbox" value="" class="item_checkbox" checked>
                  <div class="bg_icon"><img src="img/leaders/victoria.png" alt=""class='leader_icon'></div>
                  <span class="leader_name">Виктория</span>
                </div>
              </div>
              <div class="cell">
                <div class="item item-default" id="wilfrid" nation="Канада" leader="Уилфрид Лорье" nationAbb="cnd">
                  <div class="item-hover"></div>
                  <input type="checkbox" value="" class="item_checkbox" checked>
                  <div class="bg_icon"><img src="img/leaders/wilfrid.png" alt=""class='leader_icon'></div>
                  <span class="leader_name">Уилфрид Лорье</span>
                </div>
              </div>
              <div class="cell">
                <div class="item item-default" id="wilhelmina" nation="Нидерланды" leader="Вильгельмина" nationAbb="nl">
                  <div class="item-hover"></div>
                  <input type="checkbox" value="" class="item_checkbox" checked>
                  <div class="bg_icon"><img src="img/leaders/wilhelmina.png" alt=""class='leader_icon'></div>
                  <span class="leader_name">Вильгельмина</span>
                </div>
              </div>
              <div class="cell">
                <div class="item item-default" id="ladysixsky" nation="Майя" leader="Иш-Вак-Чан-Ахав" nationAbb="my">
                  <div class="item-hover"></div>
                  <input type="checkbox" value="" class="item_checkbox" checked>
                  <div class="bg_icon"><img src="img/leaders/ladysixsky.png" alt=""class='leader_icon'></div>
                  <span class="leader_name">Иш-Вак-Чан-Ахав</span>
                </div>
              </div>
              <div class="cell">
                <div class="item item-default" id="simonbolivar" nation="Великая Колумбия" leader="Симон Боливар" nationAbb="gc">
                  <div class="item-hover"></div>
                  <input type="checkbox" value="" class="item_checkbox" checked>
                  <div class="bg_icon"><img src="img/leaders/simonbolivar.png" alt=""class='leader_icon'></div>
                  <span class="leader_name">Симон Боливар</span>
                </div>
              </div>
            </div>
            <button type="button" id="start_button" class="default_item" onclick="startingDraft()">Старт</button>
            <span id="prompt">Результат скопирован в буфер обмена</span>
          </div>
        </div>
        <div id="result">
          <span id="test">ТУТ БУДЕТ ВАШ ДРАФТ</span>

        </div>
      </div>
      <footer>
        <div class="footer_block">
          <span id="footer_logo">Драфтер</span>
          <span class="comm">Некоммерческий проект для игры<br>Sid Meier's Civilization VI</span>
        </div><div class="footer_block">
          <span class="tit">От идиотов для идиотов</span>
          <span class="comm">Не потели, но сделали</span>
        </div><div class="footer_block">
          <span class="tit">Поддержать проект на еду и хостинг:</span>
          <span id="links">
            <a href="" class="comm">Qiwi</a>
            <a href="" class="comm">Paypal</a>
            <a href="" class="comm">Patreon</a>
            <a href="" class="comm">Яндекс.Деньги</a>
          </span>
        </div><div class="footer_block">
          <span class="tit">Приготовили:</span>
          <span class="comm"><mark>Simaoku</mark> дизайнил</span><br>
          <span class="comm"><mark>GOODBOY</mark> портил</span>
        </div><div class="footer_block">
          <span class="tit">Поругаться:</span>
          <a href="https://vk.com/im?sel=140203052" target="_blank" class="comm">Сергей Тарасов</a>
        </div>
      </footer>
    </div>
    <script type="text/javascript" src="script/draft.js"></script>
  </body>
</html>
