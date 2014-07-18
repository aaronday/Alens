<?php $theme_path = base_path() . drupal_get_path('theme', 'alens'); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <!--
        <title>NEXT - Easy to use Portfolio - Retina Ready and Responsive HTML5 Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="next by Designova - An easy to use Personal Portfolio - Retina Ready and Responsive HTML5 theme">
        <meta name="author" content="Designova">
        -->

        <!--<link rel="shortcut icon" href="<?php echo $theme_path; ?>/home_src/assets/ico/favicon.ico">--> 
        <!-- Standard iPhone Touch Icon--> 
        <link rel="apple-touch-icon" sizes="57x57" href="assets/ico/apple-touch-icon-57-precomposed" />
        <!-- Retina iPhone Touch Icon--> 
        <link rel="apple-touch-icon" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed" />
        <!-- Standard iPad Touch Icon--> 
        <link rel="apple-touch-icon" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed" />
        <!-- Retina iPad Touch Icon--> 
        <link rel="apple-touch-icon" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed" />

        <link href="<?php echo $theme_path; ?>/home_src/assets/css/bootstrap.css" rel="stylesheet">
        <link href="<?php echo $theme_path; ?>/home_src/assets/css/bootstrap-theme.css" rel="stylesheet">
        <link href="<?php echo $theme_path; ?>/home_src/assets/css/extension.css" rel="stylesheet">
        <link href="<?php echo $theme_path; ?>/home_src/assets/css/typography.css" rel="stylesheet">
        <link href="<?php echo $theme_path; ?>/home_src/stylesheets/responsive-nav.css" rel="stylesheet">
        <link href="<?php echo $theme_path; ?>/home_src/stylesheets/prettyPhoto.css" rel="stylesheet"/>
        <link href="<?php echo $theme_path; ?>/home_src/stylesheets/jquery.tweet.css" rel="stylesheet"/>
        <link href="<?php echo $theme_path; ?>/home_src/stylesheets/responsive-nav.css" rel="stylesheet">
        <link href="<?php echo $theme_path; ?>/home_src/stylesheets/quotes.css" rel="stylesheet">
        <link href="<?php echo $theme_path; ?>/home_src/stylesheets/services.css" rel="stylesheet">
        <link href="<?php echo $theme_path; ?>/home_src/stylesheets/animate.css" rel="stylesheet">
        <link href="<?php echo $theme_path; ?>/home_src/stylesheets/effects.css" rel="stylesheet">
        <link href="<?php echo $theme_path; ?>/home_src/stylesheets/jquery.easy-pie-chart.css" rel="stylesheet">
        <link href="<?php echo $theme_path; ?>/home_src/stylesheets/sidemenu.css" rel="stylesheet">
        <link href="<?php echo $theme_path; ?>/home_src/stylesheets/slidingmenu.css" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo $theme_path; ?>/home_src/font-awesome/css/font-awesome.min.css">


        <link href="<?php echo $theme_path; ?>/home_src/stylesheets/metro-panel.css" rel="stylesheet">
        <link href="<?php echo $theme_path; ?>/home_src/stylesheets/style.css" rel="stylesheet">
        <link type="text/css" media="screen" rel="stylesheet" href="<?php echo $theme_path; ?>/home_src/awwwards.css" />


        <script src="<?php echo $theme_path; ?>/home_src/javascripts/modernizr.custom.menu.js"></script>
        <script src="<?php echo $theme_path; ?>/home_src/javascripts/modernizr.custom.quotes.js"></script>
        <script src="<?php echo $theme_path; ?>/home_src/javascripts/modernizr.custom.services.js"></script>

        <!--[if lt IE 9]>
          <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
          <link href="stylesheets/ie8.css" rel="stylesheet">
        <![endif]-->
    </head>

    <body>
        <div id="awwwards" class="left black">
            <a href="http://www.awwwards.com/best-websites/next-by-designova" target="_blank">best websites of the world</a>
        </div>


        <!-- Preloader -->
        <div id="preloader">
            <div id="status">&nbsp;</div>
        </div>



        <!-- Mobile Only Navigation - 2 types each for small device screens -->
        <!-- Sliding Navigation : starts -->
        <nav class="menu visible-xs" id="sm">
            <div class="sm-wrap">
                <h1 class="sm-logo">next</h1>
                <i class="icon-remove menu-close"></i>
                <a class="scroll-link"  data-soffset="0" href="#intro">Home</a>
                <a class="scroll-link"  data-soffset="0" href="#about">About</a>
                <a class="scroll-link"  data-soffset="0" href="#works">Photos</a>
                <a class="scroll-link"  data-soffset="0" href="#footprints">Footprints</a>
                <a class="scroll-link"  data-soffset="0" href="#contact">Contact</a>
            </div>
            <!-- Navigation Trigger Button -->
            <div id="sm-trigger"></div>
        </nav>
        <!-- Sliding Navigation : ends -->






        <section id="mastwrap" class="sliding">


            <div id="sidebar-nav" class="sq-side-menu hidden-xs">
                <ul>
                    <!-- Starting : Nav Block -->
                    <?php print $navi_blocks; ?>
                    <!-- Ending : Nav Block -->
                </ul>
                <!-- end sq-side-menu ul -->
            </div>
            <!-- end sq-side-menu -->

            <!--<div id="logo" class="hidden-xs"><img alt="" title="" src="<?php echo $theme_path; ?>/home_src/images/logo.png"/></div>-->

            <!-- HEADER : STARTS -->

            <!-- HOME : STARTS -->
            <section id="home" data-stellar-background-ratio="1.7" data-stellar-vertical-offset="0" data-stellar-horizontal-offset="0">
                <section id="metro-panel" class="fx fx-bounceIn">

                    <!-- stripe:starts  -->
                    <div class="stripe clearfix">

                        <!-- Tile : Starts -->
                        <div class="tile tile-01 transparent">
                        </div>
                        <!-- Tile : Ends -->

                        <!-- Tile : Starts -->
                        <div class="tile tile-01 transparent">
                        </div>
                        <!-- Tile : Ends -->

                        <!-- Tile : Starts -->
                        <div class="tile nav-tile tile-01  next-bg-one">
                            <a class="tile-nav scroll-link" href="#about" data-soffset="0">
                                <div class="nav-hover next-bg-twelve">
                                    <h5>Call me Aaron! I am a software engineer</h5>
                                    <p>learn more about me</p>
                                </div>
                                <span>About me</span>
                                <img alt="" title="" src="<?php echo $theme_path; ?>/home_src/images/icons/01.png"/>
                            </a>
                        </div>
                        <!-- Tile : Ends -->

                        <!-- Tile : Starts -->
                        <div class="tile tile-01 thumb">
                            <div class="tile-nav flipX">
                                <img alt="" title="" class="img1" src="<?php echo $theme_path; ?>/home_src/images/tiles/03a.jpg">
                                <img alt="" title="" class="img2" src="<?php echo $theme_path; ?>/home_src/images/tiles/03b.jpg">
                            </div>
                        </div>
                        <!-- Tile : Ends -->

                        <!-- Tile : Starts -->
                        <div class="tile nav-tile tile-01  next-bg-two">
                            <a class="tile-nav scroll-link" href="#works" data-soffset="0">
                                <div class="nav-hover next-bg-four">
                                    <h5>Take photos around the world</h5>
                                    <p>To record, to see more</p>
                                </div>
                                <span>Photography</span>
                                <img alt="" title="" src="<?php echo $theme_path; ?>/home_src/images/icons/02.png"/>
                            </a>
                        </div>
                        <!-- Tile : Ends -->

                        <!-- Tile : Starts -->
                        <div class="tile transparent">
                        </div>
                        <!-- Tile : Ends -->

                        <!-- Tile : Starts -->
                        <div class="slogan tile-03   text-left">
                            <div class="inner">
                                <h1>Aaron Dai</h1>
                                <h3>More than an engineer...</h3>
                            </div>
                        </div>
                        <!-- Tile : Ends -->

                        <!-- Tile : Starts -->
                        <div class="tile nav-tile tile-01  next-bg-three">
                            <a class="tile-nav scroll-link" href="#footprints" data-soffset="0">
                                <div class="nav-hover next-bg-eight">
                                    <h5>Reading or travelling</h5>
                                    <p>either your body or soul must be on the way</p>
                                </div>
                                <span>Footprint</span>
                                <img alt="" title="" src="<?php echo $theme_path; ?>/home_src/images/icons/04.png"/>
                            </a>
                        </div>
                        <!-- Tile : Ends -->

                        <!-- Tile : Starts -->
                        <div class="tile tile-01 thumb">
                            <div class="tile-nav flipX">
                                <img alt="" title="" class="img1" src="<?php echo $theme_path; ?>/home_src/images/tiles/02a.jpg">
                                <img alt="" title="" class="img2" src="<?php echo $theme_path; ?>/home_src/images/tiles/02b.jpg">
                            </div>
                        </div>
                        <!-- Tile : Ends -->

                        <!-- Tile : Starts -->
                        <div class="tile tile-01 thumb">
                            <div class="tile-nav flipY">
                                <img alt="" title="" class="img1" src="<?php echo $theme_path; ?>/home_src/images/tiles/05a.jpg">
                                <img alt="" title="" class="img2" src="<?php echo $theme_path; ?>/home_src/images/tiles/05b.jpg">
                            </div>
                        </div>
                        <!-- Tile : Ends -->
                        
                        <!-- Tile : Starts -->
                        <div class="tile tile-01 thumb">
                            <div class="tile-nav flipX">
                                <img alt="" title="" class="img1" src="<?php echo $theme_path; ?>/home_src/images/tiles/02a.jpg">
                                <img alt="" title="" class="img2" src="<?php echo $theme_path; ?>/home_src/images/tiles/02b.jpg">
                            </div>
                        </div>
                        <!-- Tile : Ends -->
                        
                        <!-- Tile : Starts -->
                        <div class="tile nav-tile tile-01 next-bg-six">
                            <a class="tile-nav scroll-link" href="" data-soffset="0">
                                <div class="nav-hover next-bg-eight">
                                    <h5>My favorite compositions</h5>
                                    <p></p>
                                </div>
                                <span>Gallery</span>
                                <img alt="" title="" src="<?php echo $theme_path; ?>/home_src/images/icons/06.png"/>
                            </a>
                        </div>
                        <!-- Tile : Ends -->

                        <!-- Tile : Starts -->
                        <div class="tile tile-01 thumb">
                            <div class="tile-nav flipX">
                                <img alt="" title="" class="img1" src="<?php echo $theme_path; ?>/home_src/images/tiles/01a.jpg">
                                <img alt="" title="" class="img2" src="<?php echo $theme_path; ?>/home_src/images/tiles/01b.jpg">
                            </div>
                        </div>
                        <!-- Tile : Ends -->

                        <!-- Tile : Starts -->
                        <div class="tile tile-01 thumb">
                            <div class="tile-nav flipY">
                                <img alt="" title="" class="img1" src="<?php echo $theme_path; ?>/home_src/images/tiles/06a.jpg">
                                <img alt="" title="" class="img2" src="<?php echo $theme_path; ?>/home_src/images/tiles/06b.jpg">
                            </div>
                        </div>
                        <!-- Tile : Ends -->

                        <!-- Tile : Starts -->
                        <div class="tile nav-tile tile-01 next-bg-eight">
                            <a class="tile-nav scroll-link" href="#contact" data-soffset="0">
                                <div class="nav-hover next-bg-one">
                                    <h5>Wanna be my friend?</h5>
                                    <p>Feel free to send me the email!</p>
                                </div>
                                <span>Contact me</span>
                                <img alt="" title="" src="<?php echo $theme_path; ?>/home_src/images/icons/05.png"/>
                            </a>
                        </div>
                        <!-- Tile : Ends -->

                    </div>
                    <!-- stripe :ends-->

                </section>
            </section>
            <!-- HOME : ENDS -->

            <!-- ABOUT : STARTS -->
            <section id="about" class="page-section navigation-fadeIn">

                <section class="container">

                    <div class="row">
                        <article class="col-md-12 text-left">
                            <h2 class="page-heading"><?php $titles = _define_titles(); print $titles[0];?></h2>
                            <div class="liner"><span></span></div>
                        </article>
                    </div>

                    <div class="row add-top">
                        <article class="col-md-12 text-left">
                            <p class="welcome-text fx fx-rollIn"><?php $descriptions = _define_descriptions(); print $descriptions[0];?></p>
                        </article>
                    </div>

                    <div class="row add-top">
                        <article class="col-md-3 col-xs-6 text-center skill-wrap">
                            <div class="chart1" data-percent="86">86%<span>码代码</span></div>
                        </article>
                        <article class="col-md-3 col-xs-6 text-center skill-wrap">
                            <div class="chart2" data-percent="54">54%<span>摄影</span></div>
                        </article>
                        <article class="col-md-3  col-xs-6 text-center skill-wrap">
                            <div class="chart3" data-percent="79">79%<span>装傻</span></div>
                        </article>
                        <article class="col-md-3  col-xs-6 text-center skill-wrap">
                            <div class="chart4" data-percent="88">88%<span>卖萌</span></div>
                        </article>
                    </div>


                    <div class="row add-top fx fx-bounceIn">
                        <article class="col-md-5 col-xs-6 mob-hor-full text-left">
                            <img class="img-responsive" alt="" title="" src="<?php echo $theme_path; ?>/home_src/images/about/profile.jpg"/>
                        </article>
                        <article class="col-md-7 col-xs-6 mob-hor-full text-left">
                            <ul class="be-social">
                                <li><a target="_blank" href="http://weibo.com/aaronlovequeena"><span class="next-bg-eight be-social-chinese">微博求关注</span></a></li>
                                <li><a target="_blank" href="http://www.douban.com/people/44938761/"><span class="next-bg-two be-social-chinese">来豆瓣找我吧</span></a></li>
                                <li><a target="_blank" href="javascript: alert('你能上么，亲？');"><span class="next-bg-three">Follow my tweets on Twitter</span></a></li>
                                <li><a target="_blank" href="javascript: alert('党不让我们上，我们就要听话。');"><span class="next-bg-four">Connect me via Facebook</span></a></li>
                            </ul>
                        </article>
                    </div>

                </section>

            </section>
            <!-- ABOUT : ENDS -->

            <!-- QUOTES : STARTS -->
            <!--
            <section id="testimonials" class="page-section next-bg-one">

                <section class="container">

                    <div class="row">

                        <article class="col-md-12 text-left fx fx-flipInY">

                            <div id="cbp-qtrotator" class="cbp-qtrotator">
                                <div class="cbp-qtcontent">
                                    <img alt="" title="" src="<?php echo $theme_path; ?>/home_src/images/testimonials/01.jpg"  />
                                    <blockquote>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus tristique ultrices semper. Integer venenatis erat at sodales pharetra.</p>
                                        <footer>Pino Caruso</footer>
                                    </blockquote>
                                </div>
                                <div class="cbp-qtcontent">
                                    <img alt="" title="" src="<?php echo $theme_path; ?>/home_src/images/testimonials/02.jpg"  />
                                    <blockquote>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus tristique ultrices semper. Integer venenatis erat at sodales pharetra.</p>
                                        <footer>Albert Einstein</footer>
                                    </blockquote>
                                </div>
                                <div class="cbp-qtcontent">
                                    <img alt="" title="" src="<?php echo $theme_path; ?>/home_src/images/testimonials/03.jpg"  />
                                    <blockquote>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus tristique ultrices semper. Integer venenatis erat at sodales pharetra.</p>
                                        <footer>Leonardo Da Vinci</footer>
                                    </blockquote>
                                </div>
                            </div>

                        </article>
                    </div>

                </section>

            </section>-->
            <!-- QUOTES : ENDS -->

            <!-- PORTFOLIO : STARTS -->
            <section id="works" class="page-section">

                <section class="container">

                    <div class="row">
                        <article class="col-md-12 text-left">
                            <h2 class="page-heading page-heading-alt"><?php $titles = _define_titles(); print $titles[1];?></h2>
                            <div class="liner"><span></span></div>
                        </article>
                    </div>

                    <div class="row add-top add-bottom">
                        <article class="col-md-12 text-left">
                            <p class="welcome-text welcome-text-alt fx fx-bounceIn"><?php $descriptions = _define_descriptions(); print $descriptions[1];?></p>
                        </article>
                    </div>

                    <!--
                    <div class="row next-bg-eleven common-pad">

                        <article class="text-left ">
                            <div id="item_container" class="clearfix"></div>

                            <div id="filter" class="clearfix">
                                <div id="filter_wrapper">
                                    <ul id="portfolioFilter">
                                        <li class="active"><a href="#" class="all">All</a></li>
                                        <li class="separator">/</li>
                                        <li><a href="#" class="category1">Image Slider</a></li>
                                        <li class="separator">/</li>
                                        <li><a href="#" class="category2">Youtube</a></li>
                                        <li class="separator">/</li>
                                        <li><a href="#" class="category3">Vimeo</a></li>
                                        <li class="separator">/</li>
                                        <li><a href="#" class="category4">Lightbox Photos</a></li>
                                        <li class="separator">/</li>
                                        <li><a href="#" class="category5">Lightbox Video</a></li>
                                        <li class="separator">/</li>
                                        <li><a href="#flickr-panel" class="scroll-link" data-soffset="90">Flickr</a></li>
                                    </ul>
                                </div>
                            </div>
                        </article>
                    </div>
                    -->

                    <div class="row" style="width: 990px;">
                        <section id="portfolio-wrap" class="clearfix">

                            <!-- Thumbnails -->
                            <div id="portfolio_thumbs" class="fx fx-slideInLeft">

                                <ul class="sortablePortfolio clearfix">
                                    <?php print $works_map; ?>
                                </ul>
                            </div>
                            <!-- End: Thumbnails -->

                        </section>  
                    </div>

                </section>  
            </section>
            <!-- PORTFOLIO : ENDS -->

            <!-- FLICKR : STARTS
            <section id="flickr-panel" class="page-section next-bg-twelve">
                <section class="container fx fx-flipInX">

                    <div class="row">
                        <article class="text-left">
                            <h2 class="page-heading page-heading-alt">@flickr</h2>
                            <div class="liner"><span></span></div>
                        </article>
                    </div>

                    <div class="row add-top">
                        <article class="text-left">
                            <ul id="flickr" class="feed clearfix"></ul>

                        </article>
                    </div>

                </section>
            </section>
            FLICKR : ENDS -->

            <!-- SERVICES : STARTS -->
            <section id="footprints" class="page-section next-bg-four">

                <section class="container">

                    <div class="row">
                        <article class="col-md-12 text-left">
                            <h2 class="page-heading page-heading-alt"><?php $titles = _define_titles(); print $titles[2];?></h2>
                            <div class="liner"><span></span></div>
                        </article>
                    </div>

                    <div class="row add-top add-bottom">
                        <article class="col-md-12 text-left">
                            <p class="welcome-text welcome-text-alt fx fx-slideInRight"><?php $descriptions = _define_descriptions(); print $descriptions[2];?></p>
                        </article>
                    </div>

                    <div class="row add-top">
                        <article class="col-md-12">

                            <ul id="rb-grid" class="rb-grid clearfix">
                                <?php print $footprints_map;?>
                            </ul>

                        </article>
                        <!-- span : ends -->
                    </div>

                </section>
                <!-- container:ends -->

            </section>
            <!-- SERVICES : ENDS -->

            <!-- CONTACT : STARTS -->
            <section id="contact" class="page-section" >


                <section class="container">

                    <div class="row">
                        <article class="col-md-12 text-left">
                            <h2 class="page-heading page-heading-alt"><?php $titles = _define_titles(); print $titles[3];?></h2>
                            <div class="liner"><span></span></div>
                        </article>
                    </div>

                    <div class="row add-top add-bottom">
                        <article class="col-md-12 text-left">
                            <p class="welcome-text welcome-text-alt fx fx-slideInDown"><?php $descriptions = _define_descriptions(); print $descriptions[3];?></p>
                        </article>
                    </div>

                    <div class="row add-top add-bottom">

                        <article class="col-md-12 contact-panel fx fx-rollIn">

                            <div class="row">
                                <article class="col-md-12 text-center">
                                    <div id="fname"  class="alert alert-error" style="display: none;">
                                        Name must not be empty
                                    </div>
                                    <div id="fmail" class="alert alert-error " style="display: none;">
                                        Please provide a valid email
                                    </div>
                                    <div id="fmsg" class="alert alert-error " style="display: none;">
                                        Message should not be empty
                                    </div>
                                    <div id="successmsg" class="alert alert-msg " style="display: none;">
                                        Your information has been submitted successfully!
                                    </div>
                                </article>
                            </div>

                            <form name="myform" id="contactForm" action="" enctype="multipart/form-data" method="post"> 
                                <div class="row add-top-small">
                                    <article class="col-md-6">
                                        <input size="100" type="text" name="name" id="name" placeholder="Name" onClick="warningClearUp()">
                                    </article>
                                    <article class="col-md-6">
                                        <input type="text"  size="30" id="email" name="email" placeholder="email" onClick="warningClearUp()">
                                    </article>
                                </div>
                                <div class="row add-top-small">
                                    <article class="col-md-12">
                                        <textarea  id="msg" rows="3" cols="40" name="message" placeholder="Message" onClick="warningClearUp()"></textarea>
                                        <button type="button" name="submit" id="submit" class="btn btn-next add-top-half" onClick="submitForm()" style="float: left; ">Send Message</button>
                                        <img id="ajax-loader" alt="" title="" src="<?php echo $theme_path; ?>/home_src/images/ajax-loader.gif" style="float: left;  margin-left: 10px; margin-top: 20px; display: none;"/>
                                    </article>
                                </div>
                            </form>

                        </article>

                    </div>

                </section> 

            </section>
            <!-- CONTACT : ENDS -->

            <!-- ADDRESS-PANEL : STARTS 
            <section id="address-panel" class="page-section">

                <section class="container">

                    <div class="row">
                        <article class="col-md-12 text-left">
                            <h2 class="page-heading">connect me</h2>
                            <div class="liner"><span></span></div>
                        </article>
                    </div>

                    <div class="row add-top">
                        <article class="col-md-12 text-left fx fx-flipInX">
                            <p class="welcome-text">john doe<br/>box #24, kenfield<br/>dublin, ireland</p>
                        </article>
                    </div>

                    <div class="row add-top connect fx fx-flipInY">
                        <article class="col-md-4 text-left">
                            <h3>+012.345.6789</h3>
                        </article>
                        <article class="col-md-4 text-center">
                            <h3>mail@johndoe.me</h3>
                        </article>
                        <article class="col-md-4 text-right">
                            <h3>johndoe@skype</h3>
                        </article>
                    </div>

                    <div class="row add-top-half add-bottom">
                        <article class="col-md-12 social-block text-left">
                            <a href="#"><img alt="next" title="next" src="<?php echo $theme_path; ?>/home_src/images/contact/01.png"/></a>
                            <a href="#"><img alt="next" title="next" src="<?php echo $theme_path; ?>/home_src/images/contact/02.png"/></a>
                            <a href="#"><img alt="next" title="next" src="<?php echo $theme_path; ?>/home_src/images/contact/03.png"/></a>
                            <a href="#"><img alt="next" title="next" src="<?php echo $theme_path; ?>/home_src/images/contact/04.png"/></a>
                        </article>
                    </div>

                </section> 

            </section>
            ADDRESS-PANEL   : ENDS -->

            <!-- TWEET-FEED : STARTS 
            <section id="tweet-feed" class="page-section">

                <section class="container">

                    <div class="row">
                        <article class="col-md-12 text-left">
                            <h2 class="page-heading page-heading-alt">@twitter</h2>
                            <div class="liner"><span></span></div>
                        </article>
                    </div>

                    <div class="row add-top add-bottom">
                        <article class="col-md-12 text-left fx fx-tada">
                            <article id="ticker" class="query"></article>
                        </article>
                    </div>

                </section> 

            </section>
             TWEET-FEED  : ENDS -->

            <!-- FOOTER : STARTS -->
            <footer id="mastfoot">

                <section class="container">

                    <div class="row foot-border">
                        <article class="col-md-12 credits text-center">
                            <!--<img alt="" title="" src="<?php echo $theme_path; ?>/home_src/images/foot-logo.png"/>-->
                            <h3 style="font-family: YueGo_EL;">纯属学习娱乐，设计版权归他人所有</h3>
                        </article>

                    </div>

                    <div class="row">
                        <article class="col-md-6 credits text-left">
                            <p>Copyright &copy; 2013 Next. <br/>All rights reserved</p>
                        </article>
                        <article class="col-md-6 foot-icons text-right">
                            <ul class="clearfix text-right">
                                <li><a href="#"><img alt="" title="" src="<?php echo $theme_path; ?>/home_src/images/footer/01.png"/></a></li>
                                <li><a href="#"><img alt="" title="" src="<?php echo $theme_path; ?>/home_src/images/footer/02.png"/></a></li>
                            </ul>
                        </article>
                    </div>

                </section> 
            </footer>
        </section>
        <!-- mastwrap : ends -->

        <script src="<?php echo $theme_path; ?>/home_src/javascripts/jquery-1.9.1.min.js" type="text/javascript"></script>
        <script src="<?php echo $theme_path; ?>/home_src/javascripts/jquery.easing.1.3.js" type="text/javascript"></script>
        <script src="<?php echo $theme_path; ?>/home_src/assets/js/bootstrap.js" ></script> 
        <script src="<?php echo $theme_path; ?>/home_src/assets/js/bootstrap.min.js" ></script> 
        <script src="<?php echo $theme_path; ?>/home_src/javascripts/responsive-nav.js" type="text/javascript" ></script>
        <script src="<?php echo $theme_path; ?>/home_src/javascripts/jquery.stellar.js"></script>
        <script src="<?php echo $theme_path; ?>/home_src/javascripts/prettyPhoto.js"></script>
        <script src="<?php echo $theme_path; ?>/home_src/javascripts/flexslider.js"></script>
        <script src="<?php echo $theme_path; ?>/home_src/javascripts/waypoints.min.js"></script>
        <script src="<?php echo $theme_path; ?>/home_src/javascripts/jquery.tweet.js"></script>
        <script src="<?php echo $theme_path; ?>/home_src/javascripts/portfolio.js"></script>
        <!--<script src="<?php echo $theme_path; ?>/home_src/javascripts/form-validation.js"></script>-->
        <script src="<?php echo $theme_path; ?>/home_src/javascripts/responsive-nav.js"></script>
        <script src="<?php echo $theme_path; ?>/home_src/javascripts/jquery.easy-pie-chart.js"></script>
        <script src="<?php echo $theme_path; ?>/home_src/javascripts/jquery.cbpQTRotator.js"></script>
        <script src="<?php echo $theme_path; ?>/home_src/javascripts/classie.js"></script>
        <script src="<?php echo $theme_path; ?>/home_src/javascripts/jquery.fittext.js"></script>
        <script src="<?php echo $theme_path; ?>/home_src/javascripts/jquery.flickr.js"></script>
        <script src="<?php echo $theme_path; ?>/home_src/javascripts/boxgrid.js"></script>
        <script src="<?php echo $theme_path; ?>/home_src/javascripts/retina.js"></script>
        <script src="<?php echo $theme_path; ?>/home_src/javascripts/preloader.js"></script>
        <script src="<?php echo $theme_path; ?>/home_src/javascripts/effects.js"></script>
        <script src="<?php echo $theme_path; ?>/home_src/javascripts/scroll.js"></script>
        <script src="<?php echo $theme_path; ?>/home_src/javascripts/slidingmenu.js"></script>
        <script src="<?php echo $theme_path; ?>/home_src/javascripts/script.js"></script>

        <script>
            $(function() {
                Boxgrid.init();
            });
        </script>

        <script>
            var navigation = responsiveNav("#nav", {// Selector: The ID of the wrapper
                animate: true, // Boolean: Use CSS3 transitions, true or false
                transition: 400, // Integer: Speed of the transition, in milliseconds
                label: "Menu", // String: Label for the navigation toggle
                insert: "after", // String: Insert the toggle before or after the navigation
                customToggle: "", // Selector: Specify the ID of a custom toggle
                openPos: "relative", // String: Position of the opened nav, relative or static
                jsClass: "js", // String: 'JS enabled' class which is added to <html> el
                init: function() {
                }, // Function: Init callback
                open: function() {
                }, // Function: Open callback
                close: function() {
                } // Function: Close callback
            });
        </script>


        <script>

            // var mySwiper = new Swiper('.swiper-container',{ 
            // mode:'horizontal',
            // pagination: false,
            // slidesPerView: 3,
            // loop: true,
            // calculateHeight: true
            // });

        </script>

        <script>
            $(function() {
                $('#cbp-qtrotator').cbpQTRotator();
            });
        </script>
        <script>
            function warningClearUp(){
                $('#fname').css('display', 'none');
                $('#fmail').css('display', 'none');
                $('#fmsg').css('display', 'none');
            }
            function submitForm(){
                var name = $('#name').val();
                var mail = $('#email').val();
                var msg = $('#msg').val();
                
                var passValid = validInputValue(name, mail, msg);
                
                if(passValid){
                    $('#ajax-loader').css('display', 'block');
                    
                    $.ajax({
                        type: 'post',
                        url: '/alens/submitform/'+name +'/'+mail +'/'+msg,
                        data: {},
                        success: function(msg){
                            if(msg == 'success'){
                                $('#successmsg').fadeIn('slow');
                                $('#ajax-loader').css('display', 'none');
                                $('#successmsg').fadeOut(5000);
                            }
                        },
                        error: function(){
                            alert('fail');
                        }
                    })
                }
                
            }
            
            function isValidEmailAddress(emailAddress) {
                var pattern = new RegExp(/^(("[\w-+\s]+")|([\w-+]+(?:\.[\w-+]+)*)|("[\w-+\s]+")([\w-+]+(?:\.[\w-+]+)*))(@((?:[\w-+]+\.)*\w[\w-+]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][\d]\.|1[\d]{2}\.|[\d]{1,2}\.))((25[0-5]|2[0-4][\d]|1[\d]{2}|[\d]{1,2})\.){2}(25[0-5]|2[0-4][\d]|1[\d]{2}|[\d]{1,2})\]?$)/i);
                return pattern.test(emailAddress);
            };
            
            function validInputValue(name, email, msg){
                if(name == ""){
                        $('#fname').fadeIn('slow');
                        $("input#name").focus();
                        return false;
                }
                if(email == ""){
                    $('#fmail').fadeIn('slow');
                    $("input#email").focus();
                    return false;
                }
                if (email !== "") {  
                    if (!isValidEmailAddress(email)) {
                            $('#fmail').fadeIn('slow'); //error message
                            $("input#email").focus();   //focus on email field
                            return false;  
                    }
                } 
                if ( msg == "") {  
                    $('#fmsg').fadeIn('slow');
                    $("input#msg").focus();
                    return false;
                }
               
                return true;
            }
         
         </script>
         <script>
             function openNote(noteId){
                 window.open('/alens/note/'+noteId);
             }
         </script>
    </body>
</html>
