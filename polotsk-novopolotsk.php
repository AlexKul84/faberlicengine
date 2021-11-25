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
    <!--   Yandex.Metrika counter-->
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
<!--   Off Canvas Navigation   -->
<div class="navmenu navmenu-default navmenu-fixed-left offcanvas">
    <!--- Off Canvas Side Menu -->
    <div class="close" data-toggle="offcanvas" data-target=".navmenu">
        <span class="fa fa-close"></span>
    </div>
    <div class="add-margin"></div>
    <ul class="nav navmenu-nav">
        <!--- Menu -->
        <li><a href="#home" class="page-scroll">Главная</a></li>
        <!--            <li><a href="#stock" class="page-scroll">Акции</a></li>-->
        <li><a href="#catalog" class="page-scroll">Каталоги</a></li>
        <li><a href="#works" class="page-scroll">Зачем нужна регистрация</a></li>
        <li><a href="#faq" class="page-scroll">Порядок регистрации</a></li>
        <li><a href="#about-us" class="page-scroll">О faberlic</a></li>
        <li><a href="#shop" class="page-scroll">Интернет-магазин faberlic</a></li>
        <li><a href="#contact-main" class="page-scroll">Контакты</a></li>
    </ul><!--- End Menu -->
    <div class="contact">
        <h5 class="page-scroll">Как меня найти:</h5>
        <p class="page-scroll"><span class="fa fa-phone-square"></span> +375-29-816-57-58</p>
        <p class="page-scroll"><span class="fa fa-envelope"></span> faberlic-regby@mail.ru</p>
        <p class="page-scroll"><span class="fa fa-vk"></span> <a href="https://vk.com/club60248140">vkontakte</a></p>
        <p class="page-scroll"><span class="fa fa-odnoklassniki-square"></span> <a href="https://ok.ru/marynovopolozk">odnoklassniki</a></p>
        <form name="order" method="post">
            <button class="btn go-to-btn margin-left-btn" onclick="window.open('https://faberlic.com/register?sponsor=1000373967370&lang=ru'); yaCounter45566292.reachGoal('ORDERREG'); return true;" name="order2">РЕГИСТРАЦИЯ</button>
        </form>
    </div>
</div> <!--- End Off Canvas Side Menu -->

<!-- 1st Page - Home -->
<section id="home">

    <div class="demo-1">

        <div id="slider" class="sl-slider-wrapper">

            <div class="sl-slider">
                <div id="navigation-main">
                    <!-- Navigation -->
                    <nav id="menu" data-toggle="offcanvas" data-target=".navmenu">
                        <span class="fa fa-bars"></span>
                    </nav>
                    <form name="order" method="post">
                        <h5><button class="main-btn" onclick="window.open('https://faberlic.com/register?sponsor=1000373967370&lang=ru'); yaCounter45566292.reachGoal('ORDERREG'); return true;" name="order2">Стать консультантом</button></h5>
                    </form>
                    <!-- end: Navigation -->
                </div>

<!--                <div class="sl-slide bg-1" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">-->
<!--                    <div class="sl-slide-inner">-->
<!--                        <div id="bg-logo"></div>-->
<!--                        <h2>КИСЛОРОДНАЯ КОСМЕТИКА №1 В МИРЕ</h2>-->
<!--                        <div class="blockquote">-->
<!--                            <form name="order" method="post">-->
<!--                                <h3 class="f_bold">Получи скидку от 20% сразу после регистрации на сайте-->
<!--                                    <button class="name-logo" onclick="window.open('https://faberlic.com/register?sponsor=1000373967370&lang=ru'); yaCounter45566292.reachGoal('ORDERREG'); return true;" name="order2">faberlic</button>!-->
<!--                                    Активным новичкам помогаем в раскрутке группы!-->
<!--                                </h3>-->
<!--                            </form>-->
<!--                            <form name="order" method="post">-->
<!--                                <button class="btn go-to-btn margin-right-btn" onclick="window.open('https://faberlic.com/register?sponsor=1000373967370&lang=ru'); yaCounter45566292.reachGoal('ORDERREG'); return true;" name="order2">ПОЛУЧИТЬ СКИДКУ</button>-->
<!--                            </form>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->

<!--                <div class="sl-slide bg-4" data-orientation="vertical" data-slice1-rotation="10" data-slice2-rotation="-15" data-slice1-scale="1.5" data-slice2-scale="1.5">-->
<!--                    <div class="sl-slide-inner">-->
<!--                        <form name="order" method="post">-->
<!--                            <h2>-->
<!--                                Учавствуй в акциях и получай дополнительные бонусы от-->
<!--                                <button class="name-logo" onclick="window.open('https://faberlic.com/register?sponsor=1000373967370&lang=ru'); yaCounter45566292.reachGoal('ORDERREG'); return true;" name="order2">faberlic</button>-->
<!--                                после бесплатной регистрации!-->
<!--                            </h2>-->
<!--                        </form>-->
<!--                        <div class="blockquote">-->
<!--                            <a href="akcii.php" class="btn send-btn margin-right-btn">УЗНАТЬ ПРО АКЦИИ</a>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->

                <div class="sl-slide bg-6" data-orientation="horizontal" data-slice1-rotation="3" data-slice2-rotation="3" data-slice1-scale="2" data-slice2-scale="1">
                    <div class="sl-slide-inner">
                        <div class="blockquote">
                            <form name="order" method="post">
                                <h2>
                                    Зарабатывай с Faberlic или заказывай товары для себя и друзей в итернет-магазине со скидкой сразу после регистрации!
                                </h2>
                            </form>
                            <form name="order" method="post">
                                <button class="btn go-to-btn margin-left-btn" onclick="window.open('https://faberlic.by/?sponsor=1000373967370&lang=ru'); yaCounter45566292.reachGoal('ORDERREG'); return true;" name="order2">ПРЕЙТИ В МАГАЗИН</button>
                            </form>
                        </div>
                    </div>
                </div>

            </div><!-- /sl-slider -->

            <div id="down-dots">
                <a href="#catalog" class="down-btn page-scroll">
                    <span class="fa fa-angle-down nov"></span>
                </a>
            </div>
        </div><!-- /slider-wrapper -->

    </div>

</section>
<!-- end: 1st Page - Home -->

<section id="catalog">
    <div class="container">
        <div class="row text-center">
            <div>
                <div class="section-title">
                    <h2 class="wow fadeInUp">Каталоги</h2>
                </div>
                <div class="container">
                    <div class="owl-carousel" id="about-team">
                        <!-- item -->
                        <div class="team-item">
                            <!-- team-member wrapper-->
                            <div class="team-item-wrapper">
                                <!-- team-member pic -->
                                <div class="team-member-picture-wrapper">
                                    <div class="team-item-picture">
                                        <img src="img/team1.jpg" alt=""/>
                                    </div>
                                    <div class="team-member-find">
                                        <div class="team-member-find-overlay">
                                            <!-- overlay content -->
                                            <div class="team-member-find-content">
                                                <a href="cat_by.php" target="_blank" class="block-link">СМОТРЕТЬ КАТАЛОГ</span></a>
                                            </div>
                                            <!-- /overlay content -->
                                        </div>
                                    </div>
                                </div>
                                <!-- /team-member pic -->
                                <!-- team-member Infos -->
                                <div class="team-item-content">
                                    <h4 class="team-item-title"><a href="cat_by.php" target="_blank">Беларусь Каталог № 16/2018</a></h4>
                                </div>
                                <!-- team-member Infos -->
                            </div>
                            <!-- /team-member wrapper-->
                        </div>
                        <!-- /item -->
                        <!-- item -->
                        <div class="team-item">
                            <!-- team-member wrapper-->
                            <div class="team-item-wrapper">
                                <!-- team-member pic -->
                                <div class="team-member-picture-wrapper">
                                    <div class="team-item-picture">
                                        <img src="img/team3.jpg" alt=""/>
                                    </div>
                                    <div class="team-member-find">
                                        <div class="team-member-find-overlay">
                                            <!-- overlay content -->
                                            <div class="team-member-find-content">
                                                <a href="Florange_spring_2019_by.php" target="_blank" class="block-link">СМОТРЕТЬ КАТАЛОГ</span></a>
                                            </div>
                                            <!-- /overlay content -->
                                        </div>
                                    </div>
                                </div>
                                <!-- /team-member pic -->
                                <!-- team-member Infos -->
                                <div class="team-item-content">
                                    <h4 class="team-item-title"><a href="Florange_spring_2019_by.php" target="_blank">Беларусь Каталог Беларусь Каталог Florange (Весна-Лето 2018)</a></h4>
                                </div>
                                <!-- team-member Infos -->
                            </div>
                            <!-- /team-member wrapper-->
                        </div>
                        <!-- /item -->
                        <!-- item -->
                        <div class="team-item">
                            <!-- team-member wrapper-->
                            <div class="team-item-wrapper">
                                <!-- team-member pic -->
                                <div class="team-member-picture-wrapper">
                                    <div class="team-item-picture">
                                        <img src="img/team4.jpg" alt=""/>
                                    </div>
                                    <div class="team-member-find">
                                        <div class="team-member-find-overlay">
                                            <!-- overlay content -->
                                            <div class="team-member-find-content">
                                                <a href="Florange_winter_2018_by.php" target="_blank" class="block-link">СМОТРЕТЬ КАТАЛОГ</span></a>
                                            </div>
                                            <!-- /overlay content -->
                                        </div>
                                    </div>
                                </div>
                                <!-- /team-member pic -->
                                <!-- team-member Infos -->
                                <div class="team-item-content">
                                    <h4 class="team-item-title"><a href="Florange_winter_2018_by.php" target="_blank">Беларусь Каталог Florange (Очень жаркий Sale до -65%)</a></h4>
                                </div>
                                <!-- team-member Infos -->
                            </div>
                            <!-- /team-member wrapper-->
                        </div>
                        <!-- /item -->

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid register">
        <div class="text-center">
            <h2>Сразу после бесплатной регистрации вся продукция из каталогов доступна со скидкой 20%!</h2>
            <form name="order" method="post">
                <button class="btn go-to-btn margin-left-btn" onclick="window.open('https://faberlic.com/register?sponsor=1000373967370&lang=ru'); yaCounter45566292.reachGoal('ORDERREG'); return true;" name="order2">РЕГИСТРАЦИЯ</button>
            </form>
            <br>
            <a href="#works" class="down-btn page-scroll"><span class="fa fa-angle-down"></span></a>
        </div>
    </div>
</section>
<!-- /catalog -->

<!-- buissnes Section -->
<section id="works">
    <div class="tab-content">
        <div class="container">
            <!--Tab Content Title start-->
            <div class="row text-center">
                <div class="section-title">
                    <h2 class="wow fadeInUp">
                        ЗАЧЕМ НУЖНА РЕГИСТРАЦИЯ И ПОЧЕМУ ИМЕННО МЫ?
                    </h2>
                    <h3 class="wow fadeInUp f_bold">
                        АКТИВНЫМ КОНСУЛЬТАНТАМ МЫ ОКАЗЫВАЕМ РЕАЛЬНУЮ ПОМОЩЬ В РАСКРУТКЕ ГРУППЫ!
                        ВЫ МОЖЕТЕ ВЫБИРАТЬ - СТРОИТЬ СВОЙ БИЗНЕС ИЛИ ЗАКАЗЫВАТЬ КОСМЕТИКУ ДЛЯ СЕБЯ!
                    </h3>
                </div>
            </div>
            <!--Tab Content Title end-->
            <div role="tabpanel">
                <!-- Nav Tabs start  -->
                <div class="tab-content-nav">
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#tab-1" aria-controls="tab-1" role="tab" data-toggle="tab">Бизнес с faberlic</a></li>
                        <li role="presentation"><a href="#tab-2" aria-controls="tab-2" role="tab" data-toggle="tab">faberlic для себя</a></li>
                    </ul>
                </div>
                <!-- Nav Tabs end  -->
                <!-- Tab Panes Start -->
                <div class="tab-content">
                    <!-- Tab 1 start -->
                    <div role="tabpanel" class="tab-pane fade in active" id="tab-1">
                        <div class="row">
                            <h3>Почему выгодно начать бизнес с faberlic?</h3>
                            <p>
                                1. Чем больше в Вашей структуре активных констультанов, тем большую скидку (до 60%!) Вы получаете при заказе товаров на сайте faberlic.
                            </p>
                            <p>
                                2. С ростом Вашей структуры, Вы получаете возможность получать реальный доход от faberlic за каждый период.
                            </p>
                            <p>
                                3. С ростом структуры, Вы получаете новые статусы faberlic, и соответствующие бонусы и доплаты.
                            </p>
                            <h3>
                                Как это работает
                            </h3>
                            <form name="order" method="post">
                                <p>
                                    1. Вы регистрируетесь на сайте fabtrlic по нашей ссылке
                                    <button class="name-logo" onclick="window.open('https://faberlic.com/register?sponsor=1000373967370&lang=ru'); yaCounter45566292.reachGoal('ORDERREG'); return true;" name="order2">Регистрация</button>.
                                </p>
                            </form>
                            <p>
                                2. Высылаете нам персональныю ссылку для регистрации нового консультанта которая находится на сайте faberlic во вкладке "Моя структура"
                            </p>
                            <p>
                                3. Покупаете товары faberlic для себя и друзей в интернет-магазине faberlic
                            </p>
                            <p>
                                4. Есть желание начать свой бизнс? Сообщите об этом нам и мы начнём раскрутку Вашей группы faberlic! Мы начнём добавлять Вам новичков в структуру и расскажем, как это делать онлайн, чтобы Вы могли развиваться самостоятельно и автоматизировать этот процесс!
                            </p>
                            <div class="text-center">
                                <form name="order" method="post">
                                    <button class="btn send-btn margin-left-btn" onclick="window.open('https://faberlic.com/register?sponsor=1000373967370&lang=ru'); yaCounter45566292.reachGoal('ORDERREG'); return true;" name="order2">РЕГИСТРАЦИЯ</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Tab 1 end -->

                    <!-- Tab 2 start -->
                    <div role="tabpanel" class="tab-pane fade" id="tab-2">
                        <div class="row">
                            <h3>6 причин регистрации  в Фаберлик для себя.</h3>
                            <p>
                                1.	Экономия семейного бюджета. Совершая покупки в интернет-магазине для себя и своей семьи вы экономите. Продукция Фаберлик стоит дешевле, чем аналогичная в магазинах масс-маркета. Не нужно переплачивать консультанту. Вы покупаете продукцию напрямую у компании по цене склада.                                 </p>
                            <p>
                                2.	Выгодные предложения и акции. За все ваши покупки вам начисляются баллы, которые можно обменять на  бесплатную продукцию по программе «Фаберлик-клуб».
                            </p>
                            <p>
                                3.	Делать покупки в интернет-магазине Фаберлик удобно и вы экономите свое время. Не нужно ходить по магазинам и стоять в очередях. Огромный выбор бытовой химии, средств гигиены, декоративной и уходовой косметики, одежды, нижнего белья, одежда для беременных. Оплатить заказ можно картой. Доставка заказа осуществляется на пункт выдачи или почтой. Пункты выдачи есть почти во всех городах Беларуси. Доставка до пункта выдачи бесплатная.
                            </p>
                            <p>
                                4.	Покупки напрямую со склада, минуя полки магазинов. Ваш продукт никто не откроет, чтобы понюхать, отлить себе, посмотреть какая кисточка у туши, или какой тон у губной помады или блеска. Что очень часто бывает в наших магазинах.
                            </p>
                            <p>
                                5.	Нет обязательных заказов. Покупаете только по мере необходимости.
                            </p>
                            <p>
                                6.	Ненавязчивость. Я как ваш наставник, обещаю, что вы не услышите от меня рассказов про счастливое будущие, успешный бизнес, не буду обещать золотые горы и т.д. Со своей стороны обещаю помощь по оформлению заказа, расскажу, как оплатить и получить ваш заказ, если вам понадобиться моя помощь.
                            </p>
                            <div class="text-center">
                                <form name="order" method="post">
                                    <button class="btn send-btn margin-right-btn" onclick="window.open('https://faberlic.by/?sponsor=1000373967370&lang=ru'); yaCounter45566292.reachGoal('ORDERREG'); return true;" name="order2">НАЧАТЬ ПОКУПКИ</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Tab 2 end -->
                </div>
                <!-- Tab Panes End -->
            </div>
        </div>

    </div>
    <div class="container">
        <div class="row text-center">
            <div class="col-md-8 col-md-offset-2">
                <div class="section-title">
                    <h2 class="wow fadeInUp">Всё чаще выбирают бизнес с <span>faberlic</span></h2>
                </div>
            </div>
        </div>
        <div class="space"></div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 col-sm-6 nopadding">
                <div class="portfolio-item1">
                    <div class="visible-bg">
                        <div class="visible-text">
                            <h3 class="lead">Всегда в плюсе</h3>
                            <div class="hline-visible"></div>
                            <p class="discript">Абсолютно бесплатная регистрация в faberlic даёт Вам возможность преобретать косметику лучшего качества для себя и друзей со скидкой!</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-6 nopadding no-display">
                <div class="portfolio-item">
                    <div class="hover-bg">
                        <div class="hover-text">
                            <form name="order" method="post">
                                <h5><button class="reg-link" onclick="window.open('https://faberlic.com/register?sponsor=1000373967370&lang=ru'); yaCounter45566292.reachGoal('ORDERREG'); return true;" name="order2">РЕГИСТРАЦИЯ</button></h5>
                            </form>
                            <p class="lead">Всегда в плюсе</p>
                            <div class="hline"></div>
                        </div>
                        <img src="img/portfolio/02.jpg" class="img-responsive" alt="...">
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-sm-6 nopadding no-display">
                <div class="portfolio-item">
                    <div class="hover-bg">
                        <div class="hover-text">
                            <form name="order" method="post">
                                <h5><button class="reg-link" onclick="window.open('https://faberlic.com/register?sponsor=1000373967370&lang=ru'); yaCounter45566292.reachGoal('ORDERREG'); return true;" name="order2">РЕГИСТРАЦИЯ</button></h5>
                            </form>
                            <p class="lead">Свой бизнес</p>
                            <div class="hline"></div>
                        </div>
                        <img src="img/portfolio/03.jpg" class="img-responsive" alt="...">
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-6 nopadding">
                <div class="portfolio-item2">
                    <div class="visible-bg">
                        <div class="visible-text">
                            <h3 class="lead">Ваш собственный бизнес в свободное время</h3>
                            <div class="hline-visible"></div>
                            <p class="discript">Мечтаете начать свой собственный бизнес с минимальными вложениями в свободное от работы время, faberlic это как раз то, в чём вы можете попробовать свои силы</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-sm-6 nopadding">
                <div class="portfolio-item3">
                    <div class="visible-bg">
                        <div class="visible-text dark">
                            <h3 class="lead">Поддержка и консультация</h3>
                            <div class="hline-visible"></div>
                            <p class="discript">Я, как консультант faberlic, всегда буду рада помочь вам в раскрутке вашего бизнеса. Есть желание начать свой бизнес с faberlic, обратитесь за помощью! Любой консультант заинтересован в вашем успехе</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-6 nopadding no-display">
                <div class="portfolio-item">
                    <div class="hover-bg">
                        <div class="hover-text">
                            <form name="order" method="post">
                                <h5><button class="reg-link" onclick="window.open('https://faberlic.com/register?sponsor=1000373967370&lang=ru'); yaCounter45566292.reachGoal('ORDERREG'); return true;" name="order2">РЕГИСТРАЦИЯ</button></h5>
                            </form>
                            <p class="lead">Поддержка и консультация</p>
                            <div class="hline"></div>
                        </div>
                        <img src="img/portfolio/06.jpg" class="img-responsive" alt="...">
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-sm-6 nopadding no-display">
                <div class="portfolio-item">
                    <div class="hover-bg">
                        <div class="hover-text">
                            <form name="order" method="post">
                                <h5><button class="reg-link" onclick="window.open('https://faberlic.com/register?sponsor=1000373967370&lang=ru'); yaCounter45566292.reachGoal('ORDERREG'); return true;" name="order2">РЕГИСТРАЦИЯ</button></h5>
                            </form>
                            <p class="lead">Бонусы и акции</p>
                            <div class="hline"></div>
                        </div>
                        <img src="img/portfolio/07.jpg" class="img-responsive" alt="...">
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-6 nopadding">
                <div class="portfolio-item4">
                    <div class="visible-bg">
                        <div class="visible-text dark">
                            <h3 class="lead">Бонусы и приятные мелочи</h3>
                            <div class="hline-visible"></div>
                            <p class="discript">После регистрации faberlic дарит вам не только возможность заказывать косметику лучшего качества со скидкой, но также  огромное количество бонусов и подарков, семинаров по красоте и бизнесу, с faberlic вам никогда не будет скучно</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="text-center">
            <h3>Регистрируясь в faberlic Вы можете выбирать покупать косметиу для себя и друзей, получая бонусы и подарки или строить свой бизнес</h3>
            <form name="order" method="post">
                <button class="btn go-to-btn margin-left-btn" onclick="window.open('https://faberlic.com/register?sponsor=1000373967370&lang=ru'); yaCounter45566292.reachGoal('ORDERREG'); return true;" name="order2">РЕГИСТРАЦИЯ</button>
            </form>
            <br>
            <a href="#faq" class="down-btn page-scroll"><span class="fa fa-angle-down"></span></a>
        </div>
    </div>
</section>

<!-- faq Section -->
<section id="faq">
    <div class="container">
        <div class="row">
            <div class="text-left">
                <div class="text-center">
                    <h2>Порядок регистрации</h2>
                </div>
                <p>Регистрация в faberlic очень простая, абсолютно бесплатная и не требует паспортных данных. Для регистрации нужно выполнить всего 3 пункта:</p>
                <form name="order" method="post">
                    <p>1. Перейти по ссылке <button class="reg-link" onclick="window.open('https://faberlic.com/register?sponsor=1000373967370&lang=ru'); yaCounter45566292.reachGoal('ORDERREG'); return true;" name="order2">регистрация</button></p>
                </form>
                <p>2. Заполнить поля: «Фамилия», «Имя», «Отчество», «E-mail», «Мобильный телефон», «Населённый пункт». Нажимаем кнопку подтвердить.</p>
                <p>3. На Ваш мобильный телефон придёт SMS с кодом подтверждения. Вводим его и нажимаем кнопку «Зарегестрироваться».</p>
                <p>После этого Вы получите свой регистрационный номер и возможность делать заказы со скидкой от 20%. </p>
                <p>Получить продукцию faberlic можно в пунктах выдачи во всех городах Беларуси. Оплату можно произвести онлайн.</p>
            </div>
            <div class="text-center">
                <form name="order" method="post">
                    <button class="btn go-to-btn margin-left-btn" onclick="window.open('https://faberlic.com/register?sponsor=1000373967370&lang=ru'); yaCounter45566292.reachGoal('ORDERREG'); return true;" name="order2">РЕГИСТРАЦИЯ</button>
                </form>
                <br>
                <a href="#about-us" class="down-btn page-scroll"><span class="fa fa-angle-down"></span></a>
            </div>
        </div>
    </div>
</section>

<!-- about Section -->

<!-- about faberlic Section -->
<section id="about-us">
    <section id="about-faberlic">
        <div class="container">
            <div class="row text-center">
                <div>
                    <div class="section-title">
                        <h2 class="wow fadeInUp">О <span>faberlic</span></h2>
                    </div>
                    <h3>faberlic - самый крупный производитель кислородной косметики в Мире с 15-летним успешным опытом работы. Компания входит в рейтинг "ТОП-100 парфюмерно-косметических компаний" по версии Women's Wear Daily.   faberlic - самая лучшая косметика для всей семьи по доступным ценам. Для многих faberlic - это свой успешный бизнес и карьера предпринимателя.  Главный тренд развития компании на следующие 10 лет – превращение из парфюмерно-косметической компании в компанию образа жизни, моды и стиля. </h3>
                </div>
            </div>
        </div>
    </section>

</section>

<!-- in numeric Section -->
<section id="f-numeric">
    <div class="container text-center">

        <div class="row">
            <div class="col-md-3 col-sm-3">
                <div class="service-numeric">
                    <h1>30</h1>
                    <p>патентов имеет компания faberlic и входит в рейтинг «Топ-100 крупнейших косметических компаний мира»</p>
                </div>
            </div>

            <div class="col-md-3 col-sm-3">
                <div class="service-numeric">
                    <h1>в 24</h1>
                    <p>странах мира открыты представительства faberlic</p>
                </div>
            </div>

            <div class="col-md-3 col-sm-3">
                <div class="service-numeric">
                    <h1>в 42</h1>
                    <p>странах  работает доставка</p>
                </div>
            </div>

            <div class="col-md-3 col-sm-3">
                <div class="service-numeric">
                    <h1>5000000</h1>
                    <p>потребителей каждый день с удовольствием пользуются продуктами Faberlic!</p>
                </div>
            </div>
        </div>
    </div>
    <div id="f-register">
        <div class="container">
            <div class="row text-center">
                <div>
                    <form name="order" method="post">
                        <h3>Получить скидку 20% на продукцию faberlic
                            <button class="btn go-to-btn margin-left-btn" onclick="window.open('https://faberlic.com/register?sponsor=1000373967370&lang=ru'); yaCounter45566292.reachGoal('ORDERREG'); return true;" name="order2">РЕГИСТРАЦИЯ</button></h3>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="tabs">
    <div class="container text-center wow fadeInUp">
        <div class="row">
            <div class="col-md-3 col-sm-3">
                <div class="service">
                    <span class="fa fa-file fa-3x"></span>
                    <h4>БЕСПЛАТНАЯ РЕГИСТРАЦИЯ</h4>
                    <p>Бесплатная регистрация не требующая Ваших паспортных данных</p>
                </div>
            </div>

            <div class="col-md-3 col-sm-3">
                <div class="service">
                    <span class="fa fa-clock-o fa-3x"></span>
                    <h4>НЕНАВЯЗЧИВОСТЬ</h4>
                    <p>Нету никаких обязательных заказов для продления регистрации</p>
                </div>
            </div>

            <div class="col-md-3 col-sm-3">
                <div class="service">
                    <span class="fa fa-certificate fa-3x"></span>
                    <h4>ЛУЧШЕЕ КАЧЕСТВО</h4>
                    <p>Качество продукции, подтверждённое сертификатами</p>
                </div>
            </div>

            <div class="col-md-3 col-sm-3">
                <div class="service">
                    <span class="fa fa-gratipay fa-3x"></span>
                    <h4>ЛУЧШАЯ ЦЕНА</h4>
                    <p>Доступная цена продукции (мамочки в декрете меня поймут, когда семейный бюджет очень ограничен)</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- shop Section -->
<section id="shop">
    <div class="overlay">
        <div class="container text-center">
            <div class="section-title">
                <h2>Интернет-магазин faberlic предлагает огромный выбор качественной косметики, парфюмерии, аксессуаров и одежды для Вас</h2>
                <hr>
            </div>
            <form name="order" method="post">
                <button class="btn go-to-btn  margin-right-btn" onclick="window.open('https://faberlic.by/?sponsor=1000373967370&lang=ru'); yaCounter45566292.reachGoal('ORDERSHOP'); return true;" name="order1">ПЕРЕЙТИ В МАГАЗИН</button>
                <button class="btn send-btn margin-left-btn" onclick="window.open('https://faberlic.com/register?sponsor=1000373967370&lang=ru'); yaCounter45566292.reachGoal('ORDERREG'); return true;" name="order2">ПОЛУЧИТЬ СКИДКУ</button>
            </form>
        </div>
        <a href="#contact-main" class="down-btn page-scroll"><span class="fa fa-angle-down"></span></a>
    </div>
</section>

<!--  Contacts  -->
<section id="contact-main">
    <div class="container-fluid">
        <div class="row text-center">
            <div class="section-titile">
                <h2 class="wow fadeInUp">
                    ПУНКТЫ ВЫДАЧИ ПО ВСЕЙ БЕЛАРУСИ
                </h2>
            </div>
        </div>

        <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=1lf3s8yU55IvBA5dfYDMEVZiasVr6ShO&width=100%&height=400&lang=ru_RU&sourceType=constructor&scroll=true"></script>

        <div class="contakt-block">

            <div class="contact">
                <h3 class="page-scroll">Есть вопросы, свяжитесь со мной</h3>
                <p class="page-scroll"><span class="fa fa-phone-square"></span> +375-29-816-57-58</p>
                <p class="page-scroll"><span class="fa fa-envelope"></span> faberlic-regby@mail.ru</p>
                <p class="page-scroll"><span class="fa fa-vk"></span> <a href="https://vk.com/club60248140">vkontakte</a></p>
                <p class="page-scroll"><span class="fa fa-odnoklassniki-square"></span> <a href="https://ok.ru/marynovopolozk">odnoklassniki</a></p>
                <form name="order" method="post">
                    <button class="btn go-to-btn margin-left-btn" onclick="window.open('https://faberlic.com/register?sponsor=1000373967370&lang=ru'); yaCounter45566292.reachGoal('ORDERREG'); return true;" name="order2">РЕГИСТРАЦИЯ</button>
                </form>
            </div>

        </div>
    </div>
</section>

<!--  end: Contacts  -->


<section id="footer">
    <div class="container">
        <div class="pull-left">
            <p>Консультант Faberlic: Куликова Юлия</p>
        </div>
        <div class="pull-right">
            <a href="#home" class="page-scroll">На верх<span class="fa fa-angle-up"></span></a>
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