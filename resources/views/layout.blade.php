<!DOCTYPE html>
<html lang="cz">
<head>
    <title>Home</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="/img/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="/img/favicon.ico" type="image/x-icon" />
    <meta name = "format-detection" content = "telephone=no" />
    <meta name="description" content="Your description">
    <meta name="keywords" content="Your keywords">
    <meta name="author" content="Your name">
    <link rel="stylesheet" href="/css/bootstrap.css" >
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/camera.css">

    <script src="/js/jquery.js"></script>
    <script src="/js/jquery-migrate-1.2.1.js"></script>
    <script src="/js/superfish.js"></script>
    <script src="/js/jquery.mobilemenu.js"></script>
    <script src="/js/jquery.easing.1.3.js"></script>
    <script src="/js/jquery.ui.totop.js"></script>
    <script src="/js/jquery.touchSwipe.min.js"></script>
    <script src="/js/jquery.equalheights.js"></script>


    <script src='/js/camera.js'></script>
    <!--[if (gt IE 9)|!(IE)]><!-->
    <script src="/js/jquery.mobile.customized.min.js"></script>
    <!--<![endif]-->

    <script>
        $(window).load( function(){

            jQuery('.camera_wrap').camera();

        });
    </script>


    <!--[if lt IE 9]>
    <div style='text-align:center'><a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode"><img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." /></a></div>
    <link rel="stylesheet" href="/assets/tm/css/tm_docs.css" type="text/css" media="screen">
    <script src="/assets/assets/js/html5shiv.js"></script>
    <script src="/assets/assets/js/respond.min.js"></script>
    <![endif]-->
</head>

<body>
<!--==============================header=================================-->
<header id="header">
    <div class="container">
        <h1 class="navbar-brand navbar-brand_"><a href="index.html"><img alt="Grill point" src="/img/logo.png"></a></h1>
    </div>
   @include('index.menu')
</header>
<!--==============================content=================================-->
<div id="content">

    <!--==============================slider=================================-->
    <div class="slider">
        <div class="camera_wrap">
            <div data-src="/img/picture1.jpg"></div>
            <div data-src="/img/picture2.jpg"></div>
            <div data-src="/img/picture3.jpg"></div>
        </div>
    </div>
    <!--==============================row1=================================-->
    <div class="row_1">
        <div class="container">
            <p class="title1">Welcome Message!</p>
            <p class="title2">Beciegast nveriti vitaesaert asety kertya aset aplica boserde nerafae kertyuraue styasnemo faserani  iasera khatrsasas ptaiadeser daesraeds. Casrolern atur aut oditaut. onsequuntur magni dolqui ratione voluptatemsequi nesciunt orasario jauystase joasuaserya vytarsa numquam eius modi teincidunt, ut labore et dolore magnam liaseras.</p>
            <a href="#" class="btn btn-default btn-lg btn1">more</a>
        </div>
    </div>

   @yield('body')
    <!--==============================row2=================================-->
   @yield('row2')
    <!--==============================row3=================================-->
   @yield('row3')
    <!--==============================row4=================================-->
    @yield('row4')



</div>
<!--==============================footer=================================-->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4 footercol">
                <ul class="social_icons clearfix">
                    <li><a href="#"><img src="img/follow_icon1.png" alt=""></a></li>
                    <li><a href="#"><img src="img/follow_icon2.png" alt=""></a></li>
                    <li><a href="#"><img src="img/follow_icon3.png" alt=""></a></li>
                    <li><a href="#"><img src="img/follow_icon4.png" alt=""></a></li>
                </ul>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 footerlogo footercol">
                <a class="smalllogo2 logo" href="index.html"><img src="/img/logofooter.png" alt=""></a>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 footercol">
                <p class="footerpriv">&copy; 2013 &bull; <a class="privacylink" href="index-5.html">Privacy policy</a>More  at <a rel="nofollow" href="http://www.templatemonster.com/category.php?category=0&type=1" target="_blank">TemplateMonster.com</a></p>
            </div>
        </div>
    </div>
</footer>
<script src="/js/bootstrap.min.js"></script>
<script src="/js/tm-scripts.js"></script>
</body>
</html>
