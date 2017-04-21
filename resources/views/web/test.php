<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Agency - Start Bootstrap Theme</title>

    <!-- Bootstrap Core CSS -->
    <link href="/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <!--    <link href="/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">-->
    <!--    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">-->
    <!--    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>-->
    <!--    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>-->
    <!--    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>-->

    <!-- Theme CSS -->
    <link href="/css/web/agency.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="/js/html5shiv.js"  crossorigin="anonymous"></script>
    <script src="/js/respond.min.js"  crossorigin="anonymous"></script>
    <![endif]-->

    <style>
        /*此时将左右箭头标签隐藏*/
        @media (max-width: 767px) {
            body{
                background-color: black !important;
            }
            #myCarousel .ex-carousel-control{
                display: none;
            }

            #myCarousel2 .ex-carousel-control{
                display: none;
            }
        }

        @media (min-width: 768px) {
            body{
                background-color: red !important;
            }

            #myCarousel .ex-carousel-control{
                position: absolute;
                top: 40%;
                left: 1.5rem;
                width: 4rem;
                height: 4rem;
                margin-top: -2rem;
                font-size: 6rem;
                font-weight: 100;
                line-height: 2.5rem;
                color: #fff;
                text-align: center;
                background: #222;
                border: 3px solid #fff;
                -webkit-border-radius: 2rem;
                -moz-border-radius: 23rem;
                border-radius: 2rem;
                opacity: .5;
                filter: alpha(opacity=50);
            }

            #myCarousel .left{
                left: 1.5rem;
                right: auto;
            }

            #myCarousel .right{
                left: auto;
                right: 1.5rem;
            }

            #myCarousel2 .ex-carousel-control{
                position: absolute;
                top: 40%;
                left: 1.5rem;
                width: 4rem;
                height: 4rem;
                margin-top: -2rem;
                font-size: 6rem;
                font-weight: 100;
                line-height: 2.5rem;
                color: #fff;
                text-align: center;
                background: #222;
                border: 3px solid #fff;
                -webkit-border-radius: 2rem;
                -moz-border-radius: 23rem;
                border-radius: 2rem;
                opacity: .5;
                filter: alpha(opacity=50);
            }

            #myCarousel2 .left{
                left: 1.5rem;
                right: auto;
            }

            #myCarousel2 .right{
                left: auto;
                right: 1.5rem;
            }
        }
    </style>

</head>

<body id="page-top" class="index">

<div class="bs-docs-example">
    <div id="myCarousel" class="carousel slide">
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="item">
                <img src="/img/web/carousels/banner.png" alt="" style="width: 100%;">
                <div class="carousel-caption">
                    <h4>First Thumbnail label</h4>
                    <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                </div>
            </div>
            <div class="item active">
                <img src="/img/web/carousels/banner.png" alt="" style="width: 100%;">
                <div class="carousel-caption">
                    <h4>Second Thumbnail label</h4>
                    <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                </div>
            </div>
            <div class="item">
                <img src="/img/web/carousels/banner.png" alt="" style="width: 100%;">
                <div class="carousel-caption">
                    <h4>Third Thumbnail label</h4>
                    <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                </div>
            </div>
        </div>
        <a class="left ex-carousel-control" href="#myCarousel" data-slide="prev">‹</a>
        <a class="right ex-carousel-control" href="#myCarousel" data-slide="next">›</a>
    </div>
</div>




<div class="bs-docs-example2">
    <div id="myCarousel2" class="carousel slide">
        <ol class="carousel-indicators">
            <li data-target="#myCarousel2" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel2" data-slide-to="1"></li>
            <li data-target="#myCarousel2" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="item">
                <img src="/img/web/carousels/banner.png" alt="" style="width: 100%;">
                <div class="carousel-caption">
                    <h4>First Thumbnail label</h4>
                    <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                </div>
            </div>
            <div class="item active">
                <img src="/img/web/carousels/banner.png" alt="" style="width: 100%;">
                <div class="carousel-caption">
                    <h4>Second Thumbnail label</h4>
                    <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                </div>
            </div>
            <div class="item">
                <img src="/img/web/carousels/banner.png" alt="" style="width: 100%;">
                <div class="carousel-caption">
                    <h4>Third Thumbnail label</h4>
                    <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                </div>
            </div>
        </div>
        <a class="left ex-carousel-control" href="#myCarousel2" data-slide="prev">‹</a>
        <a class="right ex-carousel-control" href="#myCarousel2" data-slide="next">›</a>
    </div>
</div>
<!--</div>-->

<!-- jQuery -->
<script src="/js/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="/bootstrap/js/bootstrap.js"></script>

<!-- Plugin JavaScript -->
<script src="/js/jquery.easing.min.js" crossorigin="anonymous"></script>

<!-- Contact Form JavaScript -->
<script src="/js/web/jqBootstrapValidation.js"></script>
<script src="/js/web/contact_me.js"></script>

<!-- Theme JavaScript -->
<script src="/js/web/agency.min.js"></script>

<script>
    $(function(){
        $('#myCarousel').carousel({
            interval: 5000,
            pause: 'hover',
            wrap: true
        }).carousel('cycle');


        $('#myCarousel2').carousel({
            interval: 5000,
            pause: 'hover',
            wrap: true
        }).carousel('cycle');
    });



//    $(function () {
//        var startX, startY, moveEndX, moveEndY;
//
//        $(".bs-docs-example").on({
//            touchstart: function (e) {
//                // e.preventDefault();
//
//                startX = e.originalEvent.changedTouches[0].pageX;
//                startY = e.originalEvent.changedTouches[0].pageY;
//            },
//
//            touchmove: function (e) {
//                e.preventDefault();
//
//                moveEndX = e.originalEvent.changedTouches[0].pageX;
//                moveEndY = e.originalEvent.changedTouches[0].pageY;
//                var x = moveEndX - startX;
//                //向右滑动
//                if (x > 0) {
//
//                    $(".bs-docs-example .left").click();
//
//
//                }else{
//                    $(".bs-docs-example .right").click();
//
//
//                }
//            },
//
//            touchend: function (e) {
//                e.preventDefault();
//            }
//        });
//    });


    // Carousel.$element.on({
//         touchstart: function (e) {
//             // e.preventDefault();
//             Carousel.startX = e.originalEvent.changedTouches[0].pageX;
//             Carousel.startY = e.originalEvent.changedTouches[0].pageY;
//         },
//
//         touchmove: function (e) {
//             e.preventDefault();
//
//             Carousel.moveEndX = e.originalEvent.changedTouches[0].pageX;
//             Carousel.moveEndY = e.originalEvent.changedTouches[0].pageY;
//             var x = Carousel.moveEndX - Carousel.startX;
//             //向右滑动
//             if (x > 0) {
//                 alert('left');
//                 Carousel.$element.find('.left').click();
//             }else{
//                 alert('right');
//
//                 Carousel.$element.find('.right').click();
//             }
//         },
//
//         touchend: function (e) {
//             e.preventDefault();
//         }
    // });
</script>

</body>

</html>
