<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Calypso - MultiPurpose Responsive Template - Bootstrap 3</title>
    <!-- Style -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <!-- Responsive -->
    <link href="css/responsive.css" rel="stylesheet">
    <!-- Choose Layout -->
    <link href="css/layout-semiboxed.css" rel="stylesheet">
    <!-- Choose Skin -->
    <link href="css/skin-red.css" rel="stylesheet">
    <!-- Demo -->
    <link rel="stylesheet" id="main-color" href="css/skin-red.css" media="screen"/>
    <!-- Favicon -->
    <link rel="shortcut icon" href="img/favicon.ico">

    <link rel="stylesheet" media="screen" href="css/font-awesome.css" />
    <link rel="stylesheet" media="screen" href="css/animate.css" />
    <link rel="stylesheet" media="screen" href="css/flexslider.css" />
    <link rel="stylesheet" media="screen" href="js/fancybox/jquery.fancybox.css" />

    <script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
    <script src="js/chosen/chosen.jquery.min.js"></script>
    <script src="js/app.plugin.js"></script>
    <link rel="stylesheet" href="js/chosen/chosen.css" type="text/css" />



    <!-- =========================================
    Head Libs
    ========================================== -->
    <script type="text/javascript" src="js/js/vendor/modernizr.custom.js"></script>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <link href="css/ie8.css" rel="stylesheet">
</head>
<body class="off">

<div class="wrapbox">

    <?php include_once 'header.php'; ?>

    <!-- Slider Accueil -->
    <section>
        <div class="row" style="margin-top: 70px;">
            <div class="col-md-9">
                <span id="header_shadow" style="top: -1px;"></span>
                <section class="pageheader-default text-center">
                    <div class="semitransparentbg">
                        <h1 class="animated fadeInLeftBig notransition">Galerie </h1>
                        <p class="animated fadeInRightBig notransition container page-description">
                            Theme de l'evenement ici
                        </p>
                        <br>
                        <div class="text-center">
                            <p class="bigtext">
                                <span class="fontpacifico" style="color:#FFF;">Rechercher des evenements</span>
                            </p>
                        </div>
                        <br>
                        <center>
                            <select  style="width:256px;color:#333;" class="chosen-select" onchange="location.href='?pred=' + this[this.selectedIndex].value" >
                                <optgroup label="Ecouter les prédications par thème">
                                    <option value="" style="color: #333;">Rechercher par thème</option>
                                    <option value="" style="color: #333;">Rechercher par thème</option>
                                    <option value="" style="color: #333;">Rechercher par thème</option>
                                    <option value="" style="color: #333;">Rechercher par thème</option>
                                </optgroup>
                            </select>
                        </center>
                    </div>
                </section>

                <section class="carousel carousel-fade slide home-slider topspace20" id="c-slideEvt" data-ride="carousel" data-interval="4500" data-pause="false">
                    <ol class="carousel-indicators">
                        <li data-target="#c-slideEvt" data-slide-to="0" class="active"></li>
                        <li data-target="#c-slideEvt" data-slide-to="1" class=""></li>
                        <li data-target="#c-slideEvt" data-slide-to="2" class=""></li>
                    </ol>
                    <div class="carousel-inner" style="margin-top: -70px;">
                        <div class="item active" style="height: 500px;background: url(images/Eglise.jpg);">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-6 fadein scaleInv anim_1">
                                        <div class="fadein scaleInv anim_2">
                                            <h1 class="carouselText1 animated fadeInUpBig">Bienvenue ! <span class="colortext">vous êtes bénis</span></h1>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item" style="height: 500px;background: url(img/demo/slide3.jpg);">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12 text-center">
                                        <br>
                                        <br>
                                        <div class="animated fadeInDownBig notransition">
                                            <span class="car-largetext">Vivid Skins <span class="font300">&amp; Three</span> Layouts</span><br>
                                        </div>
                                        <br>
                                        <br>
                                        <div class="car-widecircle animated fadeInLeftBig notransition">
                                            <span>Wide</span>
                                        </div>
                                        <div class="car-middlecircle animated fadeInUpBig notransition">
                                            <span>Boxed</span>
                                        </div>
                                        <div class="car-smallcircle animated fadeInRightBig notransition">
                                            <span>Narrow</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item" style="height: 500px;background: url(img/demo/slide3.jpg);">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12 text-center">
                                        <br>
                                        <br>
                                        <div class="animated fadeInDownBig notransition">
                                            <span class="car-largetext">Vivid Skins <span class="font300">&amp; Three</span> Layouts</span><br>
                                        </div>
                                        <br>
                                        <br>
                                        <div class="car-widecircle animated fadeInLeftBig notransition">
                                            <span>Wide</span>
                                        </div>
                                        <div class="car-middlecircle animated fadeInUpBig notransition">
                                            <span>Boxed</span>
                                        </div>
                                        <div class="car-smallcircle animated fadeInRightBig notransition">
                                            <span>Narrow</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="left carousel-control animated fadeInLeft" href="#c-slideEvt" data-slide="prev"><i class="icon-angle-left"></i></a>
                    <a class="right carousel-control animated fadeInRight" href="#c-slideEvt" data-slide="next"><i class="icon-angle-right"></i></a>
                </section>
                <!-- Pensees du Jour -->
                <section class="grayarea recent-projects-home" style="background-color: #3a80c6;padding-top: 0px;">
                    <span id="header_shadow" style="top: -1px;"></span>
                    <div class="container">
                        <div class="row" >
                            <br>
                            <h1 class="small text-center topspace10 fontpacifico" style="color:#FFF;">RESTEZ CONNECTÉS</h1>
                            <div class="text-center smalltitle">
                            </div>
                            <div class="col-md-12">
                                <div class="list_carousel text-center">
                                    <div class="carousel_nav" style="background: none;">
                                        <a class="prev" id="car_prev" href="#"><span>prev</span></a>
                                        <a class="next" id="car_next" href="#"><span>next</span></a>
                                    </div>
                                    <div class="clearfix">
                                    </div>
                                    <ul id="carousel-projects">
                                        <li>
                                            <div class="boxcontainer">
                                                <img src="img/demo/showcase1.jpg" alt="">
                                                <div class="roll">
                                                    <div class="wrapcaption">
                                                        <a href="projectdetail.html"><i class="icon-link captionicons"></i></a>
                                                        <a data-gal="prettyPhoto[gallery1]" href="img/demo/showcase1.jpg" title="La Chaux De Fonds"><i class="icon-zoom-in captionicons"></i></a>
                                                    </div>
                                                </div>
                                                <h1><a href="projectdetail.html">Trains</a></h1>
                                                <p>
                                                    Lore ipsum
                                                </p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="boxcontainer">
                                                <img src="img/demo/showcase2.jpg" alt="">
                                                <div class="roll">
                                                    <div class="wrapcaption">
                                                        <a href="projectdetail.html"><i class="icon-link captionicons"></i></a>
                                                        <a data-gal="prettyPhoto[gallery1]" href="img/demo/showcase2.jpg" title="La Chaux De Fonds"><i class="icon-zoom-in captionicons"></i></a>
                                                    </div>
                                                </div>
                                                <h1><a href="projectdetail.html">Automobiles</a></h1>
                                                <p>
                                                    Jura mountains
                                                </p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="boxcontainer">
                                                <img src="img/demo/showcase3.jpg" alt="">
                                                <div class="roll">
                                                    <div class="wrapcaption">
                                                        <a href="projectdetail.html"><i class="icon-link captionicons"></i></a>
                                                        <a data-gal="prettyPhoto[gallery1]" href="img/demo/showcase3.jpg" title="La Chaux De Fonds"><i class="icon-zoom-in captionicons"></i></a>
                                                    </div>
                                                </div>
                                                <h1><a href="projectdetail.html">Biscaya</a></h1>
                                                <p>
                                                    Clio sorevins
                                                </p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="boxcontainer">
                                                <img src="img/demo/showcase4.jpg" alt="">
                                                <div class="roll">
                                                    <div class="wrapcaption">
                                                        <a href="projectdetail.html"><i class="icon-link captionicons"></i></a>
                                                        <a data-gal="prettyPhoto[gallery1]" href="../img/demo/showcase4.jpg" title="La Chaux De Fonds"><i class="icon-zoom-in captionicons"></i></a>
                                                    </div>
                                                </div>
                                                <h1><a href="projectdetail.html">Serenity</a></h1>
                                                <p>
                                                    Tabiscum rocens
                                                </p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="boxcontainer">
                                                <img src="img/demo/showcase1.jpg" alt="">
                                                <div class="roll">
                                                    <div class="wrapcaption">
                                                        <a href="projectdetail.html"><i class="icon-link captionicons"></i></a>
                                                        <a data-gal="prettyPhoto[gallery1]" href="img/demo/showcase1.jpg" title="La Chaux De Fonds"><i class="icon-zoom-in captionicons"></i></a>
                                                    </div>
                                                </div>
                                                <h1><a href="projectdetail.html">BizLeaders</a></h1>
                                                <p>
                                                    Larius trano
                                                </p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="boxcontainer">
                                                <img src="img/demo/showcase2.jpg" alt="">
                                                <div class="roll">
                                                    <div class="wrapcaption">
                                                        <a href="projectdetail.html"><i class="icon-link captionicons"></i></a>
                                                        <a data-gal="prettyPhoto[gallery1]" href="img/demo/showcase2.jpg" title="La Chaux De Fonds"><i class="icon-zoom-in captionicons"></i></a>
                                                    </div>
                                                </div>
                                                <h1><a href="projectdetail.html">Salma</a></h1>
                                                <p>
                                                    Vobiscum atens
                                                </p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="boxcontainer">
                                                <img src="img/demo/showcase3.jpg" alt="">
                                                <div class="roll">
                                                    <div class="wrapcaption">
                                                        <a href="projectdetail.html"><i class="icon-link captionicons"></i></a>
                                                        <a data-gal="prettyPhoto[gallery1]" href="img/demo/showcase3.jpg" title="La Chaux De Fonds"><i class="icon-zoom-in captionicons"></i></a>
                                                    </div>
                                                </div>
                                                <h1><a href="projectdetail.html">RetroDoe</a></h1>
                                                <p>
                                                    Oliya verder
                                                </p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="boxcontainer">
                                                <img src="img/demo/showcase4.jpg" alt="">
                                                <div class="roll">
                                                    <div class="wrapcaption">
                                                        <a href="projectdetail.html"><i class="icon-link captionicons"></i></a>
                                                        <a data-gal="prettyPhoto[gallery1]" href="img/demo/showcase4.jpg" title="La Chaux De Fonds"><i class="icon-zoom-in captionicons"></i></a>
                                                    </div>
                                                </div>
                                                <h1><a href="projectdetail.html">Chaux Fonds</a></h1>
                                                <p>
                                                    Diva menthol
                                                </p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- /Pensees du Jour -->

                <br><br>

                <div class="wrapsemibox" >
                    <section class="container animated fadeInDownNow notransition" style="padding-top: 40px;">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="text-center">
                                    <p class="bigtext">
                                        Praesent <span class="fontpacifico colortext">WowThemes</span> sapien, a vulputate enim auctor vitae
                                    </p>
                                    <p>
                                        Duis non lorem porta, adipiscing eros sit amet, tempor sem. Donec nunc arcu, semper a tempus et, consequat
                                    </p>
                                </div>
                                <div class="text-center topspace20">
                                    <a href="#" class="buttonblack"><i class="icon-shopping-cart"></i>&nbsp; get theme</a>
                                    <a href="#" class="buttoncolor"><i class="icon-link"></i>&nbsp; learn more</a>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
            <div class="col-md-3">
                <section style="height:200px;" class="carousel carousel-fade slide home-slider" id="c-slidepub" data-ride="carousel" data-interval="4500" data-pause="false">
                    <ol class="carousel-indicators">
                        <li data-target="#c-slidepub" data-slide-to="0" class="active"></li>
                        <li data-target="#c-slidepub" data-slide-to="1" class=""></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="item active" style="height:200px;background: url(images/Eglise.jpg);">

                        </div>
                        <div class="item" style="height:200px;background: url(img/demo/slide3.jpg);">

                        </div>
                    </div>
                </section>

                <br>
                <div id="accordion" >
                    <div class="active" style="background-color: #FFF;">
                        <h4>Qui Sommes-Nous ?</h4>
                        <p style="color: #000;">
                            working with this item. If you need support, please send us an email via WowThemes.net.
                        </p>
                    </div>
                    <div style="background-color: #FFF;">
                        <h4>En Quoi Croyons-nous ?</h4>
                        <p style="color: #000;">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.
                        </p>
                    </div>
                    <div style="background-color: #FFF;">
                        <h4>Notre Vision ?</h4>
                        <p style="color: #000;">
                            An animation is an effect that lets an element gradually change from one style to another. You can change as many styles you want, as many times you want.
                        </p>
                    </div>
                </div>

                <section style="margin-top: 20px;">
                    <div class="widget widget-popular-posts">
                        <h4><center>Les dernières prédications</center></h4>
                        <ul style="background-color: #FFF;margin-top: -8px;">
                            <li style="border: 2px solid #f7f7f7;">
                                <div class="widget-thumb">
                                    <a href="#"><img src="images/Eglise.jpg" alt=""></a>
                                </div>
                                <div class="widget-content" style="padding-top: 15px;">
                                    <h5><a href="#" style="color:#333; font-size:14px;font-family: helvetica,arial,sans-serif;">Culte d'adoration et d'actions de grâces</a></h5>
                                    <span style="font-size: 12px;color: #999;">Chaque Dimanche de 10h - 12 h</span>
                                </div>
                                <div class="clearfix"></div>
                            </li>
                            <li style="border: 2px solid #f7f7f7;">
                                <div class="widget-thumb">
                                    <a href="#"><img src="images/Eglise.jpg" alt=""></a>
                                </div>
                                <div class="widget-content" style="padding-top: 15px;">
                                    <h5><a href="#" style="color:#333; font-size:14px;font-family: helvetica,arial,sans-serif;">Etude Biblique</a></h5>
                                    <br><span style="font-size: 12px;color: #999;">Chaque Mercredi de 19h à 21h</span>
                                </div>
                                <div class="clearfix"></div>
                            </li>
                            <li style="border: 2px solid #f7f7f7;">
                                <div class="widget-thumb">
                                    <a href="#"><img src="images/Eglise.jpg" alt=""></a>
                                </div>
                                <div class="widget-content" style="padding-top: 15px;">
                                    <h5><a href="#" style="color:#333; font-size:14px;font-family: helvetica,arial,sans-serif;">Temps D'intercession</a></h5>
                                    <br><span style="font-size: 12px;color: #999;">Chaque Vendredi de 19h à 21h</span>
                                </div>
                                <div class="clearfix"></div>
                            </li>
                            <li style="border: 2px solid #f7f7f7;">
                                <div class="widget-thumb">
                                    <a href="#"><img src="images/Eglise.jpg" alt=""></a>
                                </div>
                                <div class="widget-content" style="padding-top: 15px;font-family: helvetica,arial,sans-serif;">
                                    <h5><a href="#" style="color:#333; font-size:14px;font-family: helvetica,arial,sans-serif;">Culte d'adoration et d'actions de grâces</a></h5>
                                    <span style="font-size: 12px;color: #999;">Chaque Dimanche de 10h - 12 h</span>
                                </div>
                                <div class="clearfix"></div>
                            </li>
                        </ul>
                    </div>
                </section>

                <div class="wowwidget topspace20">
                    <div class="tabs">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#popularPosts" data-toggle="tab"><i class="icon icon-star"></i> Programme de semaine</a></li>
                            <li><a href="#recentPosts" data-toggle="tab">Actualités</a></li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="popularPosts">
                                <ul class="unstyled">
                                    <li>
                                        <div class="tabbedwidget">
                                            <a href="blog-single.html">
                                                <img src="img/demo/showcase1.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="post-info">
                                            <a href="blog-single.html">Finding Treasures</a>
                                            <div class="post-meta">
                                                Dec 12, 2013
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="tabbedwidget">
                                            <a href="blog-single.html">
                                                <img src="img/demo/showcase2.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="post-info">
                                            <a href="blog-single.html">Once Upon a Time</a>
                                            <div class="post-meta">
                                                Jan 16, 2014
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="tabbedwidget">
                                            <a href="blog-single.html">
                                                <img src="img/demo/showcase3.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="post-info">
                                            <a href="blog-single.html">Midnight in Paris</a>
                                            <div class="post-meta">
                                                Sep 28, 2014
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-pane" id="recentPosts">
                                <ul class="unstyled">
                                    <li>
                                        <div class="tabbedwidget">
                                            <a href="blog-single.html">
                                                <img src="img/demo/showcase4.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="post-info">
                                            <a href="blog-single.html">From Rome with Love</a>
                                            <div class="post-meta">
                                                Jan 10, 2014
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="tabbedwidget">
                                            <a href="blog-single.html">
                                                <img src="img/demo/showcase3.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="post-info">
                                            <a href="blog-single.html">Midnight in Paris</a>
                                            <div class="post-meta">
                                                Feb 13, 2014
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="tabbedwidget">
                                            <a href="blog-single.html">
                                                <img src="img/demo/showcase2.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="post-info">
                                            <a href="blog-single.html">City Lights</a>
                                            <div class="post-meta">
                                                Aug 25, 2014
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="animated fadeInLeft notransition" >
                    <div class="box effect2" style="background-color: #5c5c5c;color: #FFF;">
                        <h4 style="color: #FFF;">Besoin de soutien dans la Prière ?</h4>
                        <p>
                            Soumettez au groupe d'intercession votre sujet...
                        </p>
                        <div class="done">
                            <div class="alert alert-success">
                                <button type="button" class="close" data-dismiss="alert">×</button>
                                Your message has been sent. Thank you!
                            </div>
                        </div>
                        <form method="post" action="https://www.wowthemes.net/demo/calypso/contact.php" id="contactform">
                            <div class="form">
                                <input class="col-md-6" type="text" name="name" placeholder="Nom et Prénom">
                                <input class="col-md-6" type="text" name="email" placeholder="E-mail">
                                <textarea class="col-md-12" name="sujet" rows="3" placeholder="Sujet de Prière"></textarea>
                                <input type="submit" id="submit" class="btn btn-default" value="Soumettre">
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <br><br>



    <!-- /.wrapsemibox start-->

    <!-- BEGIN FOOTER
================================================== -->
    <section>

        <p id="back-top">
            <a href="#top"><span></span></a>
        </p>
        <div class="copyright" style="margin-top: -28px;">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <p class="pull-left">
                            &copy; Copyright EBD 2016. Tous droits reservés.
                        </p>
                    </div>
                    <div class="col-md-8">
                        <ul class="footermenu pull-right">
                            <li><a href="#">Accueil</a></li>
                            <li><a href="#">Eglise</a></li>
                            <li><a href="#">Activités</a></li>
                            <li><a href="#">Actualités</a></li>
                            <li><a href="#">Evénements ...</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /footer section end-->
</div>

<script src="js/jquery.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/plugins.js"></script>
<script src="js/common.js"></script>
<script>
    /* ---------------------------------------------------------------------- */
    /*	Accordion
     /* ---------------------------------------------------------------------- */
    var clickElem = $('#accordion div h4');
    clickElem.on('click', function(){
        var $this = $(this),
            parentCheck = $this.parent('div');
        if( !parentCheck.hasClass('active')) {
            var accordItems = $('#accordion div');
            accordItems.removeClass('active');
            parentCheck.addClass('active');
        }
    });
</script>
<script>
    /* ---------------------------------------------------------------------- */
    /*	Carousel
     /* ---------------------------------------------------------------------- */
    $(window).load(function(){
        $('#carousel-projects').carouFredSel({
            responsive: true,
            items       : {
                width       : 200,
                height      : 295,
                visible     : {
                    min         : 1,
                    max         : 4
                }
            },
            width: '200px',
            height: '295px',
            auto: true,
            circular	: true,
            infinite	: false,
            prev : {
                button		: "#car_prev",
                key			: "left",
            },
            next : {
                button		: "#car_next",
                key			: "right",
            },
            swipe: {
                onMouse: true,
                onTouch: true
            },
            scroll: {
                easing: "",
                duration: 1200
            }
        });
    });
</script>
<script>
    //CALL TESTIMONIAL ROTATOR
    $( function() {
        /*
         - how to call the plugin:
         $( selector ).cbpQTRotator( [options] );
         - options:
         {
         // default transition speed (ms)
         speed : 700,
         // default transition easing
         easing : 'ease',
         // rotator interval (ms)
         interval : 8000
         }
         - destroy:
         $( selector ).cbpQTRotator( 'destroy' );
         */
        $( '#cbp-qtrotator' ).cbpQTRotator();
    } );
</script>
<script>
    //CALL PRETTY PHOTO
    $(document).ready(function(){
        $("a[data-gal^='prettyPhoto']").prettyPhoto({social_tools:'', animation_speed: 'normal' , theme: 'dark_rounded'});
    });
</script>
<script>
    //MASONRY
    $(document).ready(function(){
        var $container = $('#content');
        $container.imagesLoaded( function(){
            $container.isotope({
                filter: '*',
                animationOptions: {
                    duration: 750,
                    easing: 'linear',
                    queue: false,
                }
            });
        });
        $('#filter a').click(function (event) {
            $('a.selected').removeClass('selected');
            var $this = $(this);
            $this.addClass('selected');
            var selector = $this.attr('data-filter');
            $container.isotope({
                filter: selector
            });
            return false;
        });
    });
</script>
<script>
    //ROLL ON HOVER
    $(function() {
        $(".roll").css("opacity","0");
        $(".roll").hover(function () {
                $(this).stop().animate({
                    opacity: .8
                }, "slow");
            },
            function () {
                $(this).stop().animate({
                    opacity: 0
                }, "slow");
            });
    });
</script>

<!--BEGIN DEMO PANEL
================================================== -->
<link rel="stylesheet" href="demo/css/style-switcher.css" media="screen"/>
<link rel="stylesheet" href="demo/css/colorpicker.css" media="screen"/>
<script type="text/javascript" src="demo/js/jquery.cookie.js"></script>
<script type="text/javascript" src="demo/js/styleswitch.js"></script>
<script type="text/javascript" src="demo/js/colorpicker.js"></script>
<script type="text/javascript" src="demo/js/switcher.js"></script>
<div class="demobutton">
    <i class="icon-cogs"></i>
</div>
<div id="style-switcher">
    <div id="switcher-header">
        <p>
            Theme Options
        </p>
    </div>
    <div id="switcher-body">
        <p>
            <strong>Layout Styles</strong>
        </p>
        <p>
            <a href="#" class="color-box" style="width:auto;color:#888;font-weight:700;" data-rel="boxed">BOXED</a><br/>
            <a href="#" class="color-box" data-rel="semiboxed" style="width:auto;color:#888;font-weight:700;">SEMIBOXED</a><br/>
            <a href="#" class="color-box" data-rel="wide" style="width:auto;color:#888;font-weight:700;">WIDE</a></br>
        </p>
        <p>
            <strong>Color Schemes</strong>
        </p>
        <div class="colors-holder">
            <a href="#" class="color-box" data-rel="2ac4ea"></a>
            <a href="#" class="color-box" data-rel="be9869"></a>
            <a href="#" class="color-box" data-rel="7f8c8d"></a>
            <a href="#" class="color-box" data-rel="1abc9c"></a>
            <a href="#" class="color-box" data-rel="b4ad7f"></a>
            <a href="#" class="color-box" data-rel="ff8100"></a>
            <a href="#" class="color-box" data-rel="f54828"></a>
            <a href="#" class="color-box" data-rel="00aaaa"></a>
            <a href="#" class="color-box" data-rel="f0b70c"></a>
        </div>
    </div>
    <div id="switcher-footer">
        <p>
            <a href="http://www.wowthemes.net/premium-themes-templates/" target="_blank"><img src="demo/images/logowowthemes.png"></a>
        </p>
    </div>
</div>

<script type="text/javascript" src="../js/js/plugins/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="../js/js/plugins/jquery.backstretch.min.js"></script>
<script type="text/javascript" src="../js/js/plugins/classie.js"></script>
<script type="text/javascript" src="../js/js/plugins/gnmenu.js"></script>
<script type="text/javascript" src="../js/js/plugins/jquery.flexslider-min.js"></script>
<script type="text/javascript" src="../js/js/Melon.js"></script>
<script type="text/javascript">
    /* ==========================================================================
     Background Slider
     ========================================================================== */
    jQuery('#home-section').backstretch([
        "../images/slider/1-1920x1080.jpg",
        "../images/slider/2-1920x1080.jpg"
    ], {
        fade: 250,
        duration: 5000
    });
</script>

</body>
</html>