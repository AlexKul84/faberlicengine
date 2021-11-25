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
    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="x-ua-compatible" content="IE=9" /><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>faberlic Беларусь</title>
    <meta name="description" content="регистрация в faberlic">
    <meta name="keywords" content="faberlic, регистрация в faberlic, косметика, парфюмерия, аксессуары faberlic">
    <meta name="author" content="Alexey Kulikov">
    <!--   Fonts   -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">
<!--    <link href="https://fonts.googleapis.com/css?family=Lora&amp;subset=cyrillic" rel="stylesheet">-->
    <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico" />
    <!--   Bootstrap   -->
    <link rel="stylesheet" type="text/css"  href="css/bootstrap.min.css">
    <!--   Icons   -->
    <link rel="stylesheet" type="text/css" href="font-awesome-4.7.0/css/font-awesome.css">
    <!--   Menu   -->
    <link rel="stylesheet" type="text/css" href="css/jasny-bootstrap.min.css">
    <!--   Slider   -->
    <link href="css/slider1.css" rel="stylesheet">
    <link href="css/slider2.css" rel="stylesheet">
    <link href="css/slider3.css" rel="stylesheet">
    <!--   Wow-effects   -->
    <link href="css/animate.css" rel="stylesheet">
    <!--   Stock countdown   -->
    <link rel="stylesheet" href="css/flipclock.css">
    <!--   Stylesheet   -->
    <link rel="stylesheet" type="text/css"  href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/responsive.css">

    <!-- owl carousel -->

    <link href="vendor/owl.carousel/owl-carousel/owl.carousel.css" rel="stylesheet">
    <link href="vendor/owl.carousel/owl-carousel/owl.theme.css" rel="stylesheet">
    <!-- /owl carousel -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
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

<!-- stock Section -->
<section id="stock" class="akcii">
    <div class="container">
        <div class="row text-center">
            <div>
                <div class="section-title">
                    <h2 class="wow fadeInUp">НАБОР "ДОМ ФАБЕРЛИК" ВСЕГО ЗА 1 РУБ. ПРИ РЕГИСТРАЦИИ!</h2>
                </div>
<!--                <div class="text-center">-->
<!--                    <img src="img/akcii/RU_image_1.jpg" />-->
<!--                </div>-->
                <h3 class="text-justify">
                    <img src="img/akcii/akcii.jpg" />
                    С продуктами "Дом фаберлик" не нужно боятся грязи. Избавляйтесь от пригоревшего жира, стойких пятен и известкового налёта, берегите блеск стегол и зеркал. С какой бы поверхностью или материалом вы не работали, эффект увидите сразу!
                </h3>
                <h3 class="text-justify">
                    Всем, кто <button class="name-logo" onclick="window.open('https://faberlic.com/register?sponsor=1000373967370&lang=ru'); yaCounter45566292.reachGoal('ORDERREG'); return true;" name="order2">зарегистрируется в Faberlic</button> и сделает покупку в периоде №12/2018, Faberlic предлагает наборе косметики для дома по специальной цене!
                </h3>
                <h3 class="text-justify">
                    1. С 13 августа по 2-е сентября зарегистрируйтесь на сайте <button class="name-logo" onclick="window.open('https://faberlic.com/register?sponsor=1000373967370&lang=ru'); yaCounter45566292.reachGoal('ORDERREG'); return true;" name="order2">www.faberlic.by</button> и получите скидку от 20% на всю продукцию.
                </h3>
                <h3 class="text-justify">
                    2. До 2 сентября оплатите заказ на сумму от 45 руб. (в ценах каталога)
                </h3>
                <h3 class="text-justify">
                    3. С 3 по 23 сентября получите вместе с очередным заказом набор "Дом Faberlic" всего за 1 руб.!
                </h3>
                <h3 class="text-justify">
                    Делая покупки по каждому из следующих 8 каталогов, получите возможность приобретать наборы хитов Faberlic по суперцене – от 3 рублей!
                </h3>
                <h3 class="text-justify">
                    В наборе: <a href="akcii.php#product1" class="page-scroll name-logo">салфетка для очистки стекол</a>, <a href="akcii.php#product2" class="page-scroll name-logo">средство для чистки и мытья стекол и зеркал</a>, <a href="akcii.php#product3" class="page-scroll name-logo">влажные салфетки универсальные</a>, <a href="akcii.php#product4" class="page-scroll name-logo">крем для чистки металлических поверхностей</a> и <a href="akcii.php#product4" class="page-scroll name-logo">концентрированное средство от накипи для чайников и кофемашин</a>..
                </h3>
                <h3>До конца акции осталось</h3>
                <div class="my-clock">
                    <div class="clock"></div>
                    <div class="message"></div>
                </div>
                <form name="order" method="post">
                    <button class="btn go-to-btn margin-left-btn" onclick="window.open('https://faberlic.com/register?sponsor=1000373967370&lang=ru'); yaCounter45566292.reachGoal('ORDERREG'); return true;" name="order2">РЕГИСТРАЦИЯ</button>
                </form>
                <br>
            </div>
        </div>
    </div>
</section>
<!-- /stock Section -->

<!--product1 Section-->
<section id="product1" class="akcii">
    <div class="container">
        <div class="row text-center">
            <div>
                <div class="text-justify">
                    <h3><img src="img/akcii/1.png" />
                        <strong>Салфетка для чистки стёкол</strong>
                    </h3>
                    <h3>
                        Вес: 34 гр.
                    </h3>
                    <h3>
                        Салфетка из микрофибры для очищения стекол: минутное дело для образцового дома!
                    </h3>
                    <h3>
                        <strong>Свойства</strong>
                    </h3>
                    <h3>
                        Салфетка предназначена для мытья окон, зеркал, хрусталя, люстр, стеклянной посуды без использования химических средств.
                    </h3>
                    <h3>
                        Обеспечивает идеальную чистоту и блеск стекла.
                    </h3>
                    <h3>
                        При использовании салфетки не требуется вытирать стекло насухо.
                    </h3>
                    <h3>
                        Слабое загрязнение можнжо удалить сухой салфеткой.
                    </h3>
                    <h3>
                        Слабые загрязнения можно удалить сухой салфеткой.
                    </h3>
                    <h3>
                        Очищает одним движением без разводов, царапин и ворсинок.
                    </h3>
                    <h3>
                        Прекрасно подходит для любыъ поверхностей.
                    </h3>
                    <h3>
                        Размер: 35х35 см.
                    </h3>
                </div>
                <form name="order" method="post">
                    <button class="btn go-to-btn margin-left-btn" onclick="window.open('https://faberlic.com/register?sponsor=1000373967370&lang=ru'); yaCounter45566292.reachGoal('ORDERREG'); return true;" name="order2">ЗАБРАТЬ ПОСЛЕ РЕГИСТРАЦИИ</button>
                </form>
                <br>
            </div>
        </div>
    </div>
</section>
<!-- product1 Section -->

<!-- product2 Section -->
<section id="product2" class="akcii">
    <div class="container">
        <div class="row text-center">
            <div>
                <div class="text-justify">
                    <h3><img src="img/akcii/2.png" />
                        <strong>Средство для мытья стекол и зеркал</strong>
                    </h3>
                    <h3>
                        Вес: 500 гр., Объём: 500 мл.
                    </h3>
                    <h3>
                        Эффективная формула средства универсальна для очищения любых стеклянных, зеркальных и пластиковых поверхностей как в доме, так и автомобиле. Рекомендовано к использованию как в обычных помещениях, так и в помещениях с повышенной влажностью и перепадами температур - кухне, вынных комнатах, душевых кабинах, салоне автомобиля.
                    </h3>
                </div>
                <form name="order" method="post">
                    <button class="btn go-to-btn margin-left-btn" onclick="window.open('https://faberlic.com/register?sponsor=1000373967370&lang=ru'); yaCounter45566292.reachGoal('ORDERREG'); return true;" name="order2">ЗАБРАТЬ ПОСЛЕ РЕГИСТРАЦИИ</button>
                </form>
                <br>
            </div>
        </div>
    </div>
</section>
<!--product2 Section -->

<!--product3 Section -->
<section id="product3" class="akcii">
    <div class="container">
        <div class="row text-center">
            <div>
                <div class="text-justify">
                    <h3><img src="img/akcii/3.png" />
                        <strong>Влажные салфетки универсальные</strong>
                    </h3>
                    <h3>
                        Вес: 190 гр.
                    </h3>
                    <h3>
                        Салфетки пропитаны специальной эмульсией, создарной на основе моющих компоненов растителього происхождения с добавлением лимонной кислоты, которая с лёгкостью очищает любые моющиеся поверхности от жира, грязи и пыли, дополнительно оказывая антибактериальное действие.
                    </h3>
                </div>
                <form name="order" method="post">
                    <button class="btn go-to-btn margin-left-btn" onclick="window.open('https://faberlic.com/register?sponsor=1000373967370&lang=ru'); yaCounter45566292.reachGoal('ORDERREG'); return true;" name="order2">ЗАБРАТЬ ПОСЛЕ РЕГИСТРАЦИИ</button>
                </form>
                <br>
            </div>
        </div>
    </div>
</section>
<!--product3 Section -->

<!--product4 Section -->
<section id="product4" class="akcii">
    <div class="container">
        <div class="row text-center">
            <div>
                <div class="text-justify">
                    <h3><img src="img/akcii/4.png" />
                        <strong>Крем для чистки металлических поверхностей</strong>
                    </h3>
                    <h3>
                        Вес: 250 гр.
                    </h3>
                    <h3>
                        Средство имеет формулу на основе мягкого природного полирующего агента и моющих веществ из растительного сырья - кокосового масла.
                    </h3>
                    <h3>
                        <strong>Свойства</strong>
                    </h3>
                    <h3>
                        Крем мягко удаляет застарелые загрязнения, нагары, пригоревшие остатки пищи, лёгкие известковые отложения и мвжу с различных металлических поверхностей: сковородок, кастрюль, столовых приборов, противней, стальных моек, вытяжек, кранов и т.п.
                    </h3>
                    <h3>
                        Быстро придаёт блеск, устраняет тусклость, при этом не царапает и не повреждает полированное поверхности.
                    </h3>
                </div>
                <form name="order" method="post">
                    <button class="btn go-to-btn margin-left-btn" onclick="window.open('https://faberlic.com/register?sponsor=1000373967370&lang=ru'); yaCounter45566292.reachGoal('ORDERREG'); return true;" name="order2">ЗАБРАТЬ ПОСЛЕ РЕГИСТРАЦИИ</button>
                </form>
                <br>
            </div>
        </div>
    </div>
</section>
<!-- product4 Section -->

<!--product5 Section-->
<section id="product5" class="akcii">
    <div class="container">
        <div class="row text-center">
            <div>
                <div class="text-justify">
                    <h3><img src="img/akcii/5.png" />
                        <strong>Концентрированное средство от накипи для чайноков и кофемащин</strong>
                    </h3>
                    <h3>
                        Вес: 52 гр., объём: 40 мл.
                    </h3>
                    <h3>
                        <strong>Свойства</strong>
                    </h3>
                    <h3>
                        Концентрированная формула в удобных ампулах.
                    </h3>
                    <h3>
                        Быстро и эффективно удаляет накипь и известковый налёт с чайников и кофемашин, а также остальных видов нагревательной техники.
                    </h3>
                    <h3>
                        При регулярном использовании улучшает работу бытовых приборов и увеличивает срок их эксплуатации.
                    </h3>
                    <h3>
                        Безопасно для здоровья и бытовой техники.
                    </h3>
                    <h3>
                        В упаковке 4 ампулы по 10 мл.
                    </h3>
                    <h3>
                        1 амрула рассчитана на 1 применение.
                    </h3>
                </div>
                <form name="order" method="post">
                    <button class="btn go-to-btn margin-left-btn" onclick="window.open('https://faberlic.com/register?sponsor=1000373967370&lang=ru'); yaCounter45566292.reachGoal('ORDERREG'); return true;" name="order2">ЗАБРАТЬ ПОСЛЕ РЕГИСТРАЦИИ</button>
                </form>
                <br>
            </div>
        </div>
    </div>
</section>
<!-- product5 Section -->

<section id="footer">
    <div class="container">
        <div class="pull-left">
            <p>Консультант Faberlic: Куликова Юлия</p>
        </div>
        <div class="pull-right">
            <a href="#stock" class="page-scroll">На верх<span class="fa fa-angle-up"></span></a>
        </div>
    </div>
</section>


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.1.11.1.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<!-- Script for scrolling  -->
<script type="text/javascript" src="js/SmoothScroll.js"></script>
<!--  Script for main slider  -->
<script type="text/javascript" src="js/modernizr.custom.79639.js"></script>
<script type="text/javascript" src="js/jquery.ba-cond.min.js"></script>
<script type="text/javascript" src="js/jquery.slitslider.js"></script>
<script src="js/typed.js"></script>
<!-- Script for stock countdown   -->
<script src="js/flipclock.min.js"></script>
<!--  script for wow-effects  -->
<script src="js/wow.min.js"></script>
<!--  Script for menu  -->
<script type="text/javascript" src="js/jasny-bootstrap.min.js"></script>
<!-- Owl Caroulsel -->
<script src="vendor/owl.carousel/owl-carousel/owl.carousel.js"></script>
<!-- /Owl Caroulsel -->

<script>
    var clock;

    $(function(){


        var Page = (function() {

            var $navArrows = $( '#nav-arrows' ),
                $nav = $( '#nav-dots > span' ),
                slitslider = $( '#slider' ).slitslider( {

                    onBeforeChange : function( slide, pos ) {

                        $nav.removeClass( 'nav-dot-current' );
                        $nav.eq( pos ).addClass( 'nav-dot-current' );

                    }

                } ),

                init = function() {

                    initEvents();

                },

                initEvents = function() {

                    // add navigation events
                    $navArrows.children( ':last' ).on( 'click', function() {

                        slitslider.next();
                        return false;

                    } );

                    $navArrows.children( ':first' ).on( 'click', function() {

                        slitslider.previous();
                        return false;

                    } );

                    $nav.each( function( i ) {

                        $( this ).on( 'click', function( event ) {

                            var $dot = $( this );

                            if( !slitslider.isActive() ) {

                                $nav.removeClass( 'nav-dot-current' );
                                $dot.addClass( 'nav-dot-current' );

                            }

                            slitslider.jump( i + 1 );
                            return false;

                        } );

                    } );

                };

            return { init : init };

        })();

        Page.init();

        //flip-clock

        // Grab the current date
        var currentDate = new Date();

        // Set some date in the future.
        var futureDate  = new Date(2018,8,3);

        // Calculate the difference in seconds between the future and current date
        var diff = futureDate.getTime() / 1000 - currentDate.getTime() / 1000;

        // Instantiate a coutdown FlipClock
        clock = $('.clock').FlipClock(diff, {

            clockFace: 'DailyCounter',
            countdown: true,
            language: 'russian'

        });

    });

</script>

<!-- Javascripts -->
<script type="text/javascript" src="js/main.js"></script>
<script type="text/javascript" src="js/maincatalog.js"></script>

<script type="text/javascript">
    var wow = new WOW();
    <?php if ($_SESSION["split"] == "wow") { ?>wow.init();<?php } ?>
</script>
</body>
</html>