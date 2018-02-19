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

    <link rel="stylesheet" type="text/css" href="/polytate/css/polytate.css" media="screen" />
    <script type="text/javascript" src="/polytate/js/jquery.js"></script>
    <script type="text/javascript" src="/polytate/js/polytate.min.js"></script>
    <link rel="stylesheet" href="/css/style3D.css"  />

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
<nav class="navbar navbar-inverse navbar-left-fixed">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Contact</a></li>

            </ul>
        </div>
    </div>
</nav>

<nav class="navbar navbar-inverse navbar-fixed-bottom-custom">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li><a href="#">Home</a></li>
            </ul>
        </div>
    </div>
</nav>
<!--==============================header=================================-->
<header id="header">
    {{--<div class="container">--}}
        {{--<h1 class="navbar-brand navbar-brand_"><a href="index.html"><img alt="Grill point" src="/img/logo/logo.jpg"></a></h1>--}}
    {{--</div>--}}
   @include('index.menu')

</header>
<!--==============================content=================================-->
<div id="content">

    <body>
    <!--==============================slider=================================-->
    <div class="slider">
        <div class="camera_wrap">
            <div data-src="/img/slide/slide1.jpg"></div>
            <div data-src="/img/slide/slide2.jpg"></div>
            <div data-src="/img/slide/slide3.jpg"></div>
            <div data-src="/img/slide/slide4.jpg"></div>
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

    <script>
        var xAngle = 0, yAngle = 0;
        document.addEventListener('keydown', function(e) {
            switch(e.keyCode) {

                case 37: // left
                    yAngle -= 90;
                    break;

                case 38: // up
                    xAngle += 90;
                    break;

                case 39: // right
                    yAngle += 90;
                    break;

                case 40: // down
                    xAngle -= 90;
                    break;
            };

            $('cube').style.webkitTransform = "rotateX("+xAngle+"deg) rotateY("+yAngle+"deg)";
        }, false);

    </script>
<br><br>
    <div id="menu" class="clearfix">
    <ul id="hori">
        <li>Items: </li>
        <li><a href="{{route('index.one', $env = 1)}}" class="polytate-item">One</a></li>
        <li><a href="two.html" class="polytate-item">Two</a></li>
        <li><a href="three.html" class="polytate-item">Three</a></li>
        <li><a href="four.html" class="polytate-item">Four</a></li>
        <li><a href="six.html" class="polytate-item">six</a></li>
        <li><a href="seven.html" class="polytate-item">seven</a></li>
    </ul>
    </div>

    <div class="row">
    <div style="min-height:100%;height:300px;" class="clearfix">
        <div style="margin: auto;min-height:100%;height:100%;width:60%;" id="hor"></div>
        {{--/<div style="float:right;min-height:100%;height:300px;width:100%;" id="ver"></div>--}}
    </div>
    </div>

    <br><br><br><br><br><br><br><br>
    {{--<div id="wrap">--}}
        {{--<div id="cube">--}}
            {{--<div class="face one">--}}
                {{--One face--}}
            {{--</div>--}}
            {{--<div class="face two">--}}
                {{--Up, down, left, right--}}
            {{--</div>--}}
            {{--<div class="face three">--}}
                {{--Lorem ipsum.--}}
            {{--</div>--}}
            {{--<div class="face four">--}}
                {{--New forms of navigation are fun.--}}
            {{--</div>--}}
            {{--<div class="face five">--}}
                {{--Rotating 3D cube--}}
            {{--</div>--}}
            {{--<div class="face six">--}}
                {{--More content--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}


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
<script>
    var	PT1 = {

            appendTo		: 'hor',
            orientation		: $PT.HORIZONTAL,
            reverse			: false,
            context			: '#hori'
        },
        PT2 = {

            appendTo		: 'ver',
            orientation		: $PT.VERTICAL,
            reverse			: true,
            context			: document.getElementById('vert'),
            preLoad			: true
        };

    Polytate.init();
    Polytate.createInstance( PT1 );
    Polytate.createInstance( PT2 );

</script>
</body>
</html>

