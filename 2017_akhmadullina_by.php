<?php
require_once "lib/start.php";
if (!isset($_SESSION["split"]) || !$_SESSION["split"]) {
    $values = array("wow", "no_wow");
    $rand = mt_rand(0, count($values) - 1);
    $_SESSION["split"] = $values[$rand];
}
if (!isset($_SESSION["camp_id"]) || !$_SESSION["camp_id"]) {
    $data = array();
    $data["ip"] = ip2long($_SERVER["REMOTE_ADDR"]);
    $data["utm_source"] = isset($request["utm_source"])? $request["utm_source"] : null;
    $data["utm_campaign"] = isset($request["utm_campaign"])? $request["utm_campaign"] : null;
    $data["utm_content"] = isset($request["utm_content"])? $request["utm_content"] : null;
    $data["utm_term"] = isset($request["utm_term"])? $request["utm_term"] : null;
    $camp_id = getCampID($data);
    if (!$camp_id) {
        $data["ref"] = isset($_SERVER["HTTP_REFERER"])? $_SERVER["HTTP_REFERER"] : null;
        $data["date"] = time();
        $camp_id = addCamp($data);
    }
    $_SESSION["camp_id"] = $camp_id;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Беларусь Каталог Faberlic by Alena Akhmadullina</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="css/prettyPhoto.css" type="text/css" media="screen" title="prettyPhoto main stylesheet" charset="utf-8" />
    <link rel="stylesheet" type="text/css" href="css/prettystyle.css">

    <script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
    <script src="js/sorting.js" type="text/javascript"></script>
    <script src="js/jquery.isotope.js" type="text/javascript"></script>
    <!-- Yandex.Metrika counter -->
    <script type="text/javascript" >
        (function (d, w, c) {
            (w[c] = w[c] || []).push(function() {
                try {
                    w.yaCounter45566292 = new Ya.Metrika({
                        id:45566292,
                        clickmap:true,
                        trackLinks:true,
                        accurateTrackBounce:true,
                        webvisor:true
                    });
                } catch(e) { }
            });

            var n = d.getElementsByTagName("script")[0],
                s = d.createElement("script"),
                f = function () { n.parentNode.insertBefore(s, n); };
            s.type = "text/javascript";
            s.async = true;
            s.src = "https://mc.yandex.ru/metrika/watch.js";

            if (w.opera == "[object Opera]") {
                d.addEventListener("DOMContentLoaded", f, false);
            } else { f(); }
        })(document, window, "yandex_metrika_callbacks");
    </script>
    <noscript><div><img src="https://mc.yandex.ru/watch/45566292" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
    <!-- /Yandex.Metrika counter -->
</head>
<body>
<div id="navigation-main">
    <a href="index.php" id="main-src">На главную</a>
    <form name="order" method="post">
        <h5><button class="main-btn" onclick="window.open('https://faberlic.com/register?sponsor=1000373967370&lang=ru'); yaCounter45566292.reachGoal('ORDERREG'); return true;" name="order2">Стать консультантом</button></h5>
    </form>
    <!-- end: Navigation -->
</div>
<!--project start-->
<div id="project">

    <div class="container">

        <div class="row">
            <div class="col-md-12 cBtn  lb" style="text-align: center;">
                <h3>Беларусь Каталог Faberlic by Alena Akhmadullina</h3>
                <h3>ПОЛУЧАЙ СКИДКУ 20% НА ВСЕ ТОВАРЫ КАТАЛОГА СРАЗУ ПОСЛЕ РЕГИСТРАЦИИ</h3>
                <form name="order" method="post">
                    <button class="btn go-to-btn margin-left-btn" onclick="window.open('https://faberlic.com/register?sponsor=1000373967370&lang=ru'); yaCounter45566292.reachGoal('ORDERREG'); return true;" name="order2">РЕГИСТРАЦИЯ</button>
                </form>
                <h6>кликните на картинку для увеличения</h6>
            </div>
            <div class="portfolio_block columns3   pretty" data-animated="fadeIn">
                <div class="element col-md-12  gall branding">
                    <a class="plS" href="img/prettyPhotoImages/2017_akhmadullina_by/cat-zoom-001.jpg" rel="prettyPhoto[gallery2]">
                        <img class="img-responsive first-img picsGall" src="img/prettyPhotoImages/2017_akhmadullina_by/cat-zoom-001.jpg" alt=""/>
                    </a>
                    <br />
                    <br />
                </div>
                <div class="element col-md-6 gall branding">
                    <a class="plS" href="img/prettyPhotoImages/2017_akhmadullina_by/cat-zoom-002.jpg" rel="prettyPhoto[gallery2]">
                        <img class="img-responsive picsGall" src="img/prettyPhotoImages/2017_akhmadullina_by/cat-zoom-002.jpg" alt=""/>
                    </a>
                    <br />
                    <br />
                </div>
                <div class="element col-md-6 gall web">
                    <a class="plS" href="img/prettyPhotoImages/2017_akhmadullina_by/cat-zoom-003.jpg" rel="prettyPhoto[gallery2]">
                        <img class="img-responsive picsGall" src="img/prettyPhotoImages/2017_akhmadullina_by/cat-zoom-003.jpg" alt=""/>
                    </a>
                    <br />
                    <br />
                </div>

                <div class="element col-md-6 gall  text_styles">
                    <a class="plS" href="img/prettyPhotoImages/2017_akhmadullina_by/cat-zoom-004.jpg" rel="prettyPhoto[gallery2]">
                        <img class="img-responsive picsGall" src="img/prettyPhotoImages/2017_akhmadullina_by/cat-zoom-004.jpg" alt=""/>
                    </a>
                    <br />
                    <br />
                </div>
                <div class="element col-md-6 gall  web">
                    <a class="plS" href="img/prettyPhotoImages/2017_akhmadullina_by/cat-zoom-005.jpg" rel="prettyPhoto[gallery2]">
                        <img class="img-responsive picsGall" src="img/prettyPhotoImages/2017_akhmadullina_by/cat-zoom-005.jpg" alt=""/>
                    </a>
                    <br />
                    <br />
                </div>
                <div class="element col-md-6 gall  polygraphy">
                    <a class="plS" href="img/prettyPhotoImages/2017_akhmadullina_by/cat-zoom-006.jpg" rel="prettyPhoto[gallery2]">
                        <img class="img-responsive picsGall" src="img/prettyPhotoImages/2017_akhmadullina_by/cat-zoom-006.jpg" alt=""/>
                    </a>
                    <br />
                    <br />
                </div>
                <div class="element col-md-6  gall branding">
                    <a class="plS" href="img/prettyPhotoImages/2017_akhmadullina_by/cat-zoom-007.jpg" rel="prettyPhoto[gallery2]">
                        <img class="img-responsive picsGall" src="img/prettyPhotoImages/2017_akhmadullina_by/cat-zoom-007.jpg" alt=""/>
                    </a>
                    <br />
                    <br />
                </div>

                <div class="element col-md-6 gall text_styles">
                    <a class="plS" href="img/prettyPhotoImages/2017_akhmadullina_by/cat-zoom-008.jpg" rel="prettyPhoto[gallery2]">
                        <img class="img-responsive picsGall" src="img/prettyPhotoImages/2017_akhmadullina_by/cat-zoom-008.jpg" alt=""/>
                    </a>
                    <br />
                    <br />
                </div>

                <div class="element col-md-6 gall polygraphy">
                    <a class="plS" href="img/prettyPhotoImages/2017_akhmadullina_by/cat-zoom-009.jpg" rel="prettyPhoto[gallery2]">
                        <img class="img-responsive picsGall" src="img/prettyPhotoImages/2017_akhmadullina_by/cat-zoom-009.jpg" alt=""/>
                    </a>
                    <br />
                    <br />
                </div>

                <div class="element col-md-6 gall polygraphy">
                    <a class="plS" href="img/prettyPhotoImages/2017_akhmadullina_by/cat-zoom-010.jpg" rel="prettyPhoto[gallery2]">
                        <img class="img-responsive picsGall" src="img/prettyPhotoImages/2017_akhmadullina_by/cat-zoom-010.jpg" alt=""/>
                    </a>
                    <br />
                    <br />
                </div>

                <div class="element col-md-6 gall polygraphy">
                    <a class="plS" href="img/prettyPhotoImages/2017_akhmadullina_by/cat-zoom-011.jpg" rel="prettyPhoto[gallery2]">
                        <img class="img-responsive picsGall" src="img/prettyPhotoImages/2017_akhmadullina_by/cat-zoom-011.jpg" alt=""/>
                    </a>
                    <br />
                    <br />
                </div>

                <div class="element col-md-6 gall polygraphy">
                    <a class="plS" href="img/prettyPhotoImages/2017_akhmadullina_by/cat-zoom-012.jpg" rel="prettyPhoto[gallery2]">
                        <img class="img-responsive picsGall" src="img/prettyPhotoImages/2017_akhmadullina_by/cat-zoom-012.jpg" alt=""/>
                    </a>
                    <br />
                    <br />
                </div>

                <div class="element col-md-6  gall branding">
                    <a class="plS" href="img/prettyPhotoImages/2017_akhmadullina_by/cat-zoom-013.jpg" rel="prettyPhoto[gallery2]">
                        <img class="img-responsive picsGall" src="img/prettyPhotoImages/2017_akhmadullina_by/cat-zoom-013.jpg" alt=""/>
                    </a>
                    <br />
                    <br />
                </div>
                <div class="element col-md-6 gall branding">
                    <a class="plS" href="img/prettyPhotoImages/2017_akhmadullina_by/cat-zoom-014.jpg" rel="prettyPhoto[gallery2]">
                        <img class="img-responsive picsGall" src="img/prettyPhotoImages/2017_akhmadullina_by/cat-zoom-014.jpg" alt=""/>
                    </a>
                    <br />
                    <br />
                </div>
                <div class="element col-md-6 gall web">
                    <a class="plS" href="img/prettyPhotoImages/2017_akhmadullina_by/cat-zoom-015.jpg" rel="prettyPhoto[gallery2]">
                        <img class="img-responsive picsGall" src="img/prettyPhotoImages/2017_akhmadullina_by/cat-zoom-015.jpg" alt=""/>
                    </a>
                    <br />
                    <br />
                </div>

                <div class="element col-md-6 gall  text_styles">
                    <a class="plS" href="img/prettyPhotoImages/2017_akhmadullina_by/cat-zoom-016.jpg" rel="prettyPhoto[gallery2]">
                        <img class="img-responsive picsGall" src="img/prettyPhotoImages/2017_akhmadullina_by/cat-zoom-016.jpg" alt=""/>
                    </a>
                    <br />
                    <br />
                </div>
                <div class="element col-md-6 gall  web">
                    <a class="plS" href="img/prettyPhotoImages/2017_akhmadullina_by/cat-zoom-017.jpg" rel="prettyPhoto[gallery2]">
                        <img class="img-responsive picsGall" src="img/prettyPhotoImages/2017_akhmadullina_by/cat-zoom-017.jpg" alt=""/>
                    </a>
                    <br />
                    <br />
                </div>
                <div class="element col-md-6 gall  polygraphy">
                    <a class="plS" href="img/prettyPhotoImages/2017_akhmadullina_by/cat-zoom-018.jpg" rel="prettyPhoto[gallery2]">
                        <img class="img-responsive picsGall" src="img/prettyPhotoImages/2017_akhmadullina_by/cat-zoom-018.jpg" alt=""/>
                    </a>
                    <br />
                    <br />
                </div>
                <div class="element col-md-6  gall branding">
                    <a class="plS" href="img/prettyPhotoImages/2017_akhmadullina_by/cat-zoom-019.jpg" rel="prettyPhoto[gallery2]">
                        <img class="img-responsive picsGall" src="img/prettyPhotoImages/2017_akhmadullina_by/cat-zoom-019.jpg" alt=""/>
                    </a>
                    <br />
                    <br />
                </div>

                <div class="element col-md-6 gall text_styles">
                    <a class="plS" href="img/prettyPhotoImages/2017_akhmadullina_by/cat-zoom-020.jpg" rel="prettyPhoto[gallery2]">
                        <img class="img-responsive picsGall" src="img/prettyPhotoImages/2017_akhmadullina_by/cat-zoom-020.jpg" alt=""/>
                    </a>
                    <br />
                    <br />
                </div>

                <div class="element col-md-6 gall polygraphy">
                    <a class="plS" href="img/prettyPhotoImages/2017_akhmadullina_by/cat-zoom-021.jpg" rel="prettyPhoto[gallery2]">
                        <img class="img-responsive picsGall" src="img/prettyPhotoImages/2017_akhmadullina_by/cat-zoom-021.jpg" alt=""/>
                    </a>
                    <br />
                    <br />
                </div>

                <div class="element col-md-6 gall polygraphy">
                    <a class="plS" href="img/prettyPhotoImages/2017_akhmadullina_by/cat-zoom-022.jpg" rel="prettyPhoto[gallery2]">
                        <img class="img-responsive picsGall" src="img/prettyPhotoImages/2017_akhmadullina_by/cat-zoom-022.jpg" alt=""/>
                    </a>
                    <br />
                    <br />
                </div>

                <div class="element col-md-6 gall polygraphy">
                    <a class="plS" href="img/prettyPhotoImages/2017_akhmadullina_by/cat-zoom-023.jpg" rel="prettyPhoto[gallery2]">
                        <img class="img-responsive picsGall" src="img/prettyPhotoImages/2017_akhmadullina_by/cat-zoom-023.jpg" alt=""/>
                    </a>
                    <br />
                    <br />
                </div>

                <div class="element col-md-6 gall polygraphy">
                    <a class="plS" href="img/prettyPhotoImages/2017_akhmadullina_by/cat-zoom-024.jpg" rel="prettyPhoto[gallery2]">
                        <img class="img-responsive picsGall" src="img/prettyPhotoImages/2017_akhmadullina_by/cat-zoom-024.jpg" alt=""/>
                    </a>
                    <br />
                    <br />
                </div>

                <div class="element col-md-6  gall branding">
                    <a class="plS" href="img/prettyPhotoImages/2017_akhmadullina_by/cat-zoom-025.jpg" rel="prettyPhoto[gallery2]">
                        <img class="img-responsive picsGall" src="img/prettyPhotoImages/2017_akhmadullina_by/cat-zoom-025.jpg" alt=""/>
                    </a>
                    <br />
                    <br />
                </div>
                <div class="element col-md-6 gall branding">
                    <a class="plS" href="img/prettyPhotoImages/2017_akhmadullina_by/cat-zoom-026.jpg" rel="prettyPhoto[gallery2]">
                        <img class="img-responsive picsGall" src="img/prettyPhotoImages/2017_akhmadullina_by/cat-zoom-026.jpg" alt=""/>
                    </a>
                    <br />
                    <br />
                </div>
                <div class="element col-md-6 gall web">
                    <a class="plS" href="img/prettyPhotoImages/2017_akhmadullina_by/cat-zoom-027.jpg" rel="prettyPhoto[gallery2]">
                        <img class="img-responsive picsGall" src="img/prettyPhotoImages/2017_akhmadullina_by/cat-zoom-027.jpg" alt=""/>
                    </a>
                    <br />
                    <br />
                </div>

                <div class="element col-md-6 gall  text_styles">
                    <a class="plS" href="img/prettyPhotoImages/2017_akhmadullina_by/cat-zoom-028.jpg" rel="prettyPhoto[gallery2]">
                        <img class="img-responsive picsGall" src="img/prettyPhotoImages/2017_akhmadullina_by/cat-zoom-028.jpg" alt=""/>
                    </a>
                    <br />
                    <br />
                </div>
                <div class="element col-md-6 gall  web">
                    <a class="plS" href="img/prettyPhotoImages/2017_akhmadullina_by/cat-zoom-029.jpg" rel="prettyPhoto[gallery2]">
                        <img class="img-responsive picsGall" src="img/prettyPhotoImages/2017_akhmadullina_by/cat-zoom-029.jpg" alt=""/>
                    </a>
                    <br />
                    <br />
                </div>
                <div class="element col-md-6 gall  polygraphy">
                    <a class="plS" href="img/prettyPhotoImages/2017_akhmadullina_by/cat-zoom-030.jpg" rel="prettyPhoto[gallery2]">
                        <img class="img-responsive picsGall" src="img/prettyPhotoImages/2017_akhmadullina_by/cat-zoom-030.jpg" alt=""/>
                    </a>
                    <br />
                    <br />
                </div>
                <div class="element col-md-6  gall branding">
                    <a class="plS" href="img/prettyPhotoImages/2017_akhmadullina_by/cat-zoom-031.jpg" rel="prettyPhoto[gallery2]">
                        <img class="img-responsive picsGall" src="img/prettyPhotoImages/2017_akhmadullina_by/cat-zoom-031.jpg" alt=""/>
                    </a>
                    <br />
                    <br />
                </div>

                <div class="element col-md-6 gall text_styles">
                    <a class="plS" href="img/prettyPhotoImages/2017_akhmadullina_by/cat-zoom-032.jpg" rel="prettyPhoto[gallery2]">
                        <img class="img-responsive picsGall" src="img/prettyPhotoImages/2017_akhmadullina_by/cat-zoom-032.jpg" alt=""/>
                    </a>
                    <br />
                    <br />
                </div>

                <div class="element col-md-6 gall polygraphy">
                    <a class="plS" href="img/prettyPhotoImages/2017_akhmadullina_by/cat-zoom-033.jpg" rel="prettyPhoto[gallery2]">
                        <img class="img-responsive picsGall" src="img/prettyPhotoImages/2017_akhmadullina_by/cat-zoom-033.jpg" alt=""/>
                    </a>
                    <br />
                    <br />
                </div>

                <div class="element col-md-6 gall polygraphy">
                    <a class="plS" href="img/prettyPhotoImages/2017_akhmadullina_by/cat-zoom-034.jpg" rel="prettyPhoto[gallery2]">
                        <img class="img-responsive picsGall" src="img/prettyPhotoImages/2017_akhmadullina_by/cat-zoom-034.jpg" alt=""/>
                    </a>
                    <br />
                    <br />
                </div>

                <div class="element col-md-6 gall polygraphy">
                    <a class="plS" href="img/prettyPhotoImages/2017_akhmadullina_by/cat-zoom-035.jpg" rel="prettyPhoto[gallery2]">
                        <img class="img-responsive picsGall" src="img/prettyPhotoImages/2017_akhmadullina_by/cat-zoom-035.jpg" alt=""/>
                    </a>
                    <br />
                    <br />
                </div>

                <div class="element col-md-6 gall polygraphy">
                    <a class="plS" href="img/prettyPhotoImages/2017_akhmadullina_by/cat-zoom-036.jpg" rel="prettyPhoto[gallery2]">
                        <img class="img-responsive picsGall" src="img/prettyPhotoImages/2017_akhmadullina_by/cat-zoom-036.jpg" alt=""/>
                    </a>
                    <br />
                    <br />
                </div>

                <div class="element col-md-6  gall branding">
                    <a class="plS" href="img/prettyPhotoImages/2017_akhmadullina_by/cat-zoom-037.jpg" rel="prettyPhoto[gallery2]">
                        <img class="img-responsive picsGall" src="img/prettyPhotoImages/2017_akhmadullina_by/cat-zoom-037.jpg" alt=""/>
                    </a>
                    <br />
                    <br />
                </div>
                <div class="element col-md-6 gall branding">
                    <a class="plS" href="img/prettyPhotoImages/2017_akhmadullina_by/cat-zoom-038.jpg" rel="prettyPhoto[gallery2]">
                        <img class="img-responsive picsGall" src="img/prettyPhotoImages/2017_akhmadullina_by/cat-zoom-038.jpg" alt=""/>
                    </a>
                    <br />
                    <br />
                </div>
                <div class="element col-md-6 gall web">
                    <a class="plS" href="img/prettyPhotoImages/2017_akhmadullina_by/cat-zoom-039.jpg" rel="prettyPhoto[gallery2]">
                        <img class="img-responsive picsGall" src="img/prettyPhotoImages/2017_akhmadullina_by/cat-zoom-039.jpg" alt=""/>
                    </a>
                    <br />
                    <br />
                </div>

                <div class="element col-md-6 gall  text_styles">
                    <a class="plS" href="img/prettyPhotoImages/2017_akhmadullina_by/cat-zoom-040.jpg" rel="prettyPhoto[gallery2]">
                        <img class="img-responsive picsGall" src="img/prettyPhotoImages/2017_akhmadullina_by/cat-zoom-040.jpg" alt=""/>
                    </a>
                    <br />
                    <br />
                </div>
                <div class="element col-md-6 gall  web">
                    <a class="plS" href="img/prettyPhotoImages/2017_akhmadullina_by/cat-zoom-041.jpg" rel="prettyPhoto[gallery2]">
                        <img class="img-responsive picsGall" src="img/prettyPhotoImages/2017_akhmadullina_by/cat-zoom-041.jpg" alt=""/>
                    </a>
                    <br />
                    <br />
                </div>
                <div class="element col-md-6 gall  polygraphy">
                    <a class="plS" href="img/prettyPhotoImages/2017_akhmadullina_by/cat-zoom-042.jpg" rel="prettyPhoto[gallery2]">
                        <img class="img-responsive picsGall" src="img/prettyPhotoImages/2017_akhmadullina_by/cat-zoom-042.jpg" alt=""/>
                    </a>
                    <br />
                    <br />
                </div>
                <div class="element col-md-6  gall branding">
                    <a class="plS" href="img/prettyPhotoImages/2017_akhmadullina_by/cat-zoom-043.jpg" rel="prettyPhoto[gallery2]">
                        <img class="img-responsive picsGall" src="img/prettyPhotoImages/2017_akhmadullina_by/cat-zoom-043.jpg" alt=""/>
                    </a>
                    <br />
                    <br />
                </div>

                <div class="element col-md-6 gall text_styles">
                    <a class="plS" href="img/prettyPhotoImages/2017_akhmadullina_by/cat-zoom-044.jpg" rel="prettyPhoto[gallery2]">
                        <img class="img-responsive picsGall" src="img/prettyPhotoImages/2017_akhmadullina_by/cat-zoom-044.jpg" alt=""/>
                    </a>
                    <br />
                    <br />
                </div>

                <div class="element col-md-6 gall polygraphy">
                    <a class="plS" href="img/prettyPhotoImages/2017_akhmadullina_by/cat-zoom-045.jpg" rel="prettyPhoto[gallery2]">
                        <img class="img-responsive picsGall" src="img/prettyPhotoImages/2017_akhmadullina_by/cat-zoom-045.jpg" alt=""/>
                    </a>
                    <br />
                    <br />
                </div>

                <div class="element col-md-6 gall polygraphy">
                    <a class="plS" href="img/prettyPhotoImages/2017_akhmadullina_by/cat-zoom-046.jpg" rel="prettyPhoto[gallery2]">
                        <img class="img-responsive picsGall" src="img/prettyPhotoImages/2017_akhmadullina_by/cat-zoom-046.jpg" alt=""/>
                    </a>
                    <br />
                    <br />
                </div>

                <div class="element col-md-6 gall polygraphy">
                    <a class="plS" href="img/prettyPhotoImages/2017_akhmadullina_by/cat-zoom-047.jpg" rel="prettyPhoto[gallery2]">
                        <img class="img-responsive picsGall" src="img/prettyPhotoImages/2017_akhmadullina_by/cat-zoom-047.jpg" alt=""/>
                    </a>
                    <br />
                    <br />
                </div>

                <div class="element col-md-12 gall polygraphy">
                    <a class="plS" href="img/prettyPhotoImages/2017_akhmadullina_by/cat-zoom-048.jpg" rel="prettyPhoto[gallery2]">
                        <img class="img-responsive last-img picsGall" src="img/prettyPhotoImages/2017_akhmadullina_by/cat-zoom-048.jpg" alt=""/>
                    </a>
                    <br />
                    <br />
                </div>

            </div>

            <div class="col-md-12 cBtn  lb" style="text-align: center;">
                <h3>ПОЛУЧАЙ СКИДКУ 20% НА ВСЕ ТОВАРЫ КАТАЛОГА ПОСЛЕ РЕГИСТРАЦИИ</h3>
                <form name="order" method="post">
                    <button class="btn go-to-btn margin-left-btn" onclick="window.open('https://faberlic.com/register?sponsor=1000373967370&lang=ru'); yaCounter45566292.reachGoal('ORDERREG'); return true;" name="order2">РЕГИСТРАЦИЯ</button>
                </form>
            </div>
            <br />
            <br />

        </div>
    </div>
    <section id="footer">
        <div class="container">
            <div class="pull-left">
                <p>Консультант Faberlic: Куликова Юлия</p>
            </div>
            <div class="pull-right">
                <a href="#project" class="page-scroll">На верх<span class="fa fa-angle-up"></span></a>
            </div>
        </div>
    </section>

    <script src="js/jquery.prettyPhoto.js" type="text/javascript" charset="utf-8"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function(){
            jQuery('#menu').slicknav();

        });
    </script>

    <script type="text/javascript" charset="utf-8">

        jQuery(document).ready(function(){
            jQuery(".pretty a[rel^='prettyPhoto']").prettyPhoto({
                animation_speed:'normal',
                theme:'light_square',
                allow_resize: false,
                allow_expand: true,
                autoplay_slideshow: false,
                social_tools: '<a href="https://faberlic.com/register?sponsor=1000373967370&lang=ru" target="_blank" class="small-btn" name="order2">Скидка 20% после<br />регистрации</a>'});
        });
    </script>
    <script type="text/javascript" src="js/main.js"></script>

</body>

</html>