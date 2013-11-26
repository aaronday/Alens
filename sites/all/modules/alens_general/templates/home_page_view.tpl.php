<?php $theme_path = base_path() . drupal_get_path('theme', 'alens'); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>NEXT - Easy to use Portfolio - Retina Ready and Responsive HTML5 Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="next by Designova - An easy to use Personal Portfolio - Retina Ready and Responsive HTML5 theme">
        <meta name="author" content="Designova">

        <link rel="shortcut icon" href="<?php echo $theme_path; ?>/home_src/assets/ico/favicon.ico">
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
                <a class="scroll-link"  data-soffset="0" href="#portfolio">Portfolio</a>
                <a class="scroll-link"  data-soffset="0" href="#services">Services</a>
                <a class="scroll-link"  data-soffset="0" href="#contact">Contact</a>
                <a href="single-profile.html">Profile Page</a>
                <a href="single-project.html">Project Page</a>
            </div>
            <!-- Navigation Trigger Button -->
            <div id="sm-trigger"></div>
        </nav>
        <!-- Sliding Navigation : ends -->






        <section id="mastwrap" class="sliding">


            <div id="sidebar-nav" class="sq-side-menu hidden-xs">
                <ul>
                    <!-- Starting : Nav Block -->
                    <?php print $navi_blocks;?>
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
                                    <h5>叫我戴小枫，我是个程序员，但又不止是程序猿</h5>
                                    <p>想了解我更多？</p>
                                </div>
                                <span>关于我</span>
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
                            <a class="tile-nav scroll-link" href="#portfolio" data-soffset="0">
                                <div class="nav-hover next-bg-four">
                                    <h5>10年 / 5大洲 / 28个城市</h5>
                                    <p>记录，让人看到更多</p>
                                </div>
                                <span>片刻·点滴</span>
                                <img alt="" title="" src="<?php echo $theme_path; ?>/home_src/images/icons/06.png"/>
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
                                <h1>戴小枫</h1>
                                <h3>A guy who is more than an engineer</h3>
                            </div>
                        </div>
                        <!-- Tile : Ends -->

                        <!-- Tile : Starts -->
                        <div class="tile nav-tile tile-01  next-bg-three">
                            <a class="tile-nav scroll-link" href="#services" data-soffset="0">
                                <div class="nav-hover next-bg-eight">
                                    <h5>身体和灵魂</h5>
                                    <p>总该有一个在路上</p>
                                </div>
                                <span>足迹</span>
                                <img alt="" title="" src="<?php echo $theme_path; ?>/home_src/images/icons/03.png"/>
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
                        <div class="tile nav-tile tile-01 next-bg-six">
                            <a class="tile-nav scroll-link" href="single-project.html" data-soffset="0">
                                <div class="nav-hover next-bg-eight">
                                    <h5>在这里，你将看到</h5>
                                    <p>精华</p>
                                </div>
                                <span>画廊</span>
                                <img alt="" title="" src="<?php echo $theme_path; ?>/home_src/images/icons/02.png"/>
                            </a>
                        </div>
                        <!-- Tile : Ends -->

                        <!-- Tile : Starts -->
                        <div class="tile nav-tile tile-01 next-bg-five">
                            <a href="single-profile.html" class="tile-nav">
                                <div class="nav-hover next-bg-ten">
                                    <h5>Single profile / Resume page</h5>
                                    <p>Standalone page</p>
                                </div>
                                <span>待定</span>
                                <img alt="" title="" src="<?php echo $theme_path; ?>/home_src/images/icons/04.png"/>
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
                                    <h5>想和我做基友？</h5>
                                    <p>给我发email</p>
                                </div>
                                <span>联系我</span>
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
                            <h2 class="page-heading">关于我</h2>
                            <div class="liner"><span></span></div>
                        </article>
                    </div>

                    <div class="row add-top">
                        <article class="col-md-12 text-left">
                            <p class="welcome-text fx fx-rollIn">我叫戴小枫，在一家IT公司做着俗称“码农”的工作，每日朝九晚五的生活严重缺乏趣味。幸好自己还有一个爱好——摄影。我的愿望就是成为会写程序的人里的最能拍照的。</p>
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
                                <li><a href="#"><span class="next-bg-eight">微博求关注</span></a></li>
                                <li><a href="#"><span class="next-bg-two">来豆瓣找我吧</span></a></li>
                                <li><a href="#"><span class="next-bg-three">Follow my tweets on Twitter</span></a></li>
                                <li><a href="#"><span class="next-bg-four">Connect me via Facebook</span></a></li>
                            </ul>
                        </article>
                    </div>


                </section>

            </section>
            <!-- ABOUT : ENDS -->

            <!-- QUOTES : STARTS -->
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
                        <!-- span : ends -->
                    </div>

                </section>
                <!-- container:ends -->

            </section>
            <!-- QUOTES : ENDS -->

            <!-- PORTFOLIO : STARTS -->
            <section id="portfolio" class="page-section">

                <section class="container">

                    <div class="row">
                        <article class="col-md-12 text-left">
                            <h2 class="page-heading page-heading-alt">my portfolio</h2>
                            <div class="liner"><span></span></div>
                        </article>
                    </div>

                    <div class="row add-top add-bottom">
                        <article class="col-md-12 text-left">
                            <p class="welcome-text welcome-text-alt fx fx-bounceIn">I have worked for more than 50 clients over last 2 years. Explore my best works here</p>
                        </article>
                    </div>

                    <div class="row next-bg-eleven common-pad">

                        <article class="text-left ">
                            <!-- Container element for a single portfolio item. Do not remove! -->
                            <div id="item_container" class="clearfix"></div>

                            <!-- Filter -->
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
                            <!-- End: Filter -->
                        </article>
                    </div>

                    <div class="row">
                        <section id="portfolio-wrap" class="clearfix">

                            <!-- Thumbnails -->
                            <div id="portfolio_thumbs" class="fx fx-slideInLeft">

                                <ul class="sortablePortfolio clearfix">

                                    <!-- 1st thumb -->
                                    <li data-type="category1" class="simple-bg-one">
                                        <!-- Thumbnail -->
                                        <a href="photo_item.htm" class="more_info">
                                            <img alt="simple" title="simple" src="<?php echo $theme_path; ?>/home_src/images/portfolio_thumbs/portfolio1.jpg"/>
                                            <img alt="simple" title="simple" src="<?php echo $theme_path; ?>/home_src/images/portfolio_thumbs/portfolio1_rollover.jpg" class="rollover" />
                                        </a>
                                        <!-- Info -->
                                        <div class="item_info">
                                            <h3><a href="photo_item.htm" class="more_info"><span class="next-bg-one">Project TItle</span></a></h3>
                                            <p><span>image slider</span></p>
                                        </div>
                                    </li>

                                    <!-- 2nd thumb -->
                                    <li data-type="category2" class="simple-bg-two">
                                        <!-- Thumbnail -->
                                        <a href="youtube_item.htm" class="more_info">
                                            <img alt="simple" title="simple" src="<?php echo $theme_path; ?>/home_src/images/portfolio_thumbs/portfolio2.jpg"/>
                                            <img alt="simple" title="simple" src="<?php echo $theme_path; ?>/home_src/images/portfolio_thumbs/portfolio2_rollover.jpg" class="rollover" />
                                        </a>
                                        <!-- Info -->
                                        <div class="item_info">
                                            <h3><a href="youtube_item.htm" class="more_info"><span class="next-bg-two">Project TItle</span></a></h3>
                                            <p><span>youtube</span></p>
                                        </div>
                                    </li>

                                    <!-- 3rd thumb -->
                                    <li data-type="category3" class="simple-bg-three">
                                        <!-- Thumbnail -->
                                        <a href="vimeo_item.htm" class="more_info">
                                            <img alt="simple" title="simple" src="<?php echo $theme_path; ?>/home_src/images/portfolio_thumbs/portfolio3.jpg"/>
                                            <img alt="simple" title="simple" src="<?php echo $theme_path; ?>/home_src/images/portfolio_thumbs/portfolio3_rollover.jpg" class="rollover" />
                                        </a>
                                        <!-- Info -->
                                        <div class="item_info">
                                            <h3><a href="vimeo_item.htm" class="more_info"><span class="next-bg-three">Project TItle</span></a></h3>
                                            <p><span>vimeo</span></p>
                                        </div>
                                    </li>

                                    <!-- 4th thumb -->
                                    <li data-type="category1" class="simple-bg-four">
                                        <!-- Thumbnail -->
                                        <a href="photo_item.htm" class="more_info">
                                            <img alt="simple" title="simple" src="<?php echo $theme_path; ?>/home_src/images/portfolio_thumbs/portfolio4.jpg"/>
                                            <img alt="simple" title="simple" src="<?php echo $theme_path; ?>/home_src/images/portfolio_thumbs/portfolio4_rollover.jpg" class="rollover" />
                                        </a>
                                        <!-- Info -->
                                        <div class="item_info">
                                            <h3><a href="photo_item.htm" class="more_info"><span class="next-bg-four">Project TItle</span></a></h3>
                                            <p><span>image slider</span></p>
                                        </div>
                                    </li>

                                    <!-- 5th thumb -->
                                    <li data-type="category4" class="simple-bg-five">
                                        <!-- Thumbnail -->
                                        <a href="<?php echo $theme_path; ?>/home_src/images/portfolio_zoom/01.jpg" data-gal="prettyPhoto[gallery]">
                                            <img alt="simple" title="simple" src="<?php echo $theme_path; ?>/home_src/images/portfolio_thumbs/portfolio5.jpg"/>
                                            <img alt="simple" title="simple" src="<?php echo $theme_path; ?>/home_src/images/portfolio_thumbs/portfolio5_rollover.jpg" class="rollover" />
                                        </a>
                                        <!-- Info -->
                                        <div class="item_info">
                                            <h3><a href="<?php echo $theme_path; ?>/home_src/images/portfolio_zoom/01.jpg" data-gal="prettyPhoto[gallery]"><span class="next-bg-five">Project TItle</span></a></h3>
                                            <p><span>lightbox image</span></p>
                                        </div>
                                    </li>

                                    <!-- 6th thumb -->
                                    <li data-type="category2" class="simple-bg-six">
                                        <!-- Thumbnail -->
                                        <a href="youtube_item.htm" class="more_info">
                                            <img alt="simple" title="simple" src="<?php echo $theme_path; ?>/home_src/images/portfolio_thumbs/portfolio6.jpg"/>
                                            <img alt="simple" title="simple" src="<?php echo $theme_path; ?>/home_src/images/portfolio_thumbs/portfolio6_rollover.jpg" class="rollover" />
                                        </a>
                                        <!-- Info -->
                                        <div class="item_info">
                                            <h3><a href="youtube_item.htm" class="more_info"><span class="next-bg-six">Project TItle</span></a></h3>
                                            <p><span>youtube</span></p>
                                        </div>
                                    </li>

                                    <!-- 7th thumb -->
                                    <li data-type="category5" class="simple-bg-seven">
                                        <!-- Thumbnail -->
                                        <a href="http://www.youtube.com/watch?v=1iIZeIy7TqM" data-gal="prettyPhoto[gallery]">
                                            <img alt="simple" title="simple" src="<?php echo $theme_path; ?>/home_src/images/portfolio_thumbs/portfolio7.jpg"/>
                                            <img alt="simple" title="simple" src="<?php echo $theme_path; ?>/home_src/images/portfolio_thumbs/portfolio7_rollover.jpg" class="rollover" />
                                        </a>
                                        <!-- Info -->
                                        <div class="item_info">
                                            <h3><a href="http://www.youtube.com/watch?v=1iIZeIy7TqM" data-gal="prettyPhoto[gallery]"><span class="next-bg-seven">Project TItle</span></a></h3>
                                            <p><span>lightbox video</span></p>
                                        </div>
                                    </li>

                                    <!-- 8th thumb -->
                                    <li data-type="category1" class="simple-bg-eight">
                                        <!-- Thumbnail -->
                                        <a href="photo_item.htm" class="more_info">
                                            <img alt="simple" title="simple" src="<?php echo $theme_path; ?>/home_src/images/portfolio_thumbs/portfolio8.jpg"/>
                                            <img alt="simple" title="simple" src="<?php echo $theme_path; ?>/home_src/images/portfolio_thumbs/portfolio8_rollover.jpg" class="rollover" />
                                        </a>
                                        <!-- Info -->
                                        <div class="item_info">
                                            <h3><a href="photo_item.htm" class="more_info"><span class="next-bg-eight">Project TItle</span></a></h3>
                                            <p><span>photography</span></p>
                                        </div>
                                    </li>

                                    <!-- 9th thumb -->
                                    <li data-type="category3" class="simple-bg-one">
                                        <!-- Thumbnail -->
                                        <a href="vimeo_item.htm" class="more_info">
                                            <img alt="simple" title="simple" src="<?php echo $theme_path; ?>/home_src/images/portfolio_thumbs/portfolio9.jpg"/>
                                            <img alt="simple" title="simple" src="<?php echo $theme_path; ?>/home_src/images/portfolio_thumbs/portfolio9_rollover.jpg" class="rollover" />
                                        </a>
                                        <!-- Info -->
                                        <div class="item_info">
                                            <h3><a href="vimeo_item.htm" class="more_info"><span class="next-bg-nine">Project TItle</span></a></h3>
                                            <p><span>vimeo</span></p>
                                        </div>
                                    </li>

                                    <!-- 10th thumb -->
                                    <li data-type="category2" class="simple-bg-two">
                                        <!-- Thumbnail -->
                                        <a href="youtube_item.htm" class="more_info">
                                            <img alt="simple" title="simple" src="<?php echo $theme_path; ?>/home_src/images/portfolio_thumbs/portfolio10.jpg"/>
                                            <img alt="simple" title="simple" src="<?php echo $theme_path; ?>/home_src/images/portfolio_thumbs/portfolio10_rollover.jpg" class="rollover" />
                                        </a>
                                        <!-- Info -->
                                        <div class="item_info">
                                            <h3><a href="youtube_item.htm" class="more_info"><span class="next-bg-ten">Project TItle</span></a></h3>
                                            <p><span>youtube</span></p>
                                        </div>
                                    </li>

                                    <!-- 11th thumb -->
                                    <li data-type="category1" class="simple-bg-three">
                                        <!-- Thumbnail -->
                                        <a href="photo_item.htm" class="more_info">
                                            <img alt="simple" title="simple" src="<?php echo $theme_path; ?>/home_src/images/portfolio_thumbs/portfolio11.jpg"/>
                                            <img alt="simple" title="simple" src="<?php echo $theme_path; ?>/home_src/images/portfolio_thumbs/portfolio11_rollover.jpg" class="rollover" />
                                        </a>
                                        <!-- Info -->
                                        <div class="item_info">
                                            <h3><a href="photo_item.htm" class="more_info"><span class="next-bg-eleven">Project TItle</span></a></h3>
                                            <p><span>photography</span></p>
                                        </div>
                                    </li>

                                    <!-- 12th thumb -->
                                    <li data-type="category2" class="simple-bg-four">
                                        <!-- Thumbnail -->
                                        <a href="youtube_item.htm" class="more_info">
                                            <img alt="simple" title="simple" src="<?php echo $theme_path; ?>/home_src/images/portfolio_thumbs/portfolio12.jpg"/>
                                            <img alt="simple" title="simple" src="<?php echo $theme_path; ?>/home_src/images/portfolio_thumbs/portfolio12_rollover.jpg" class="rollover" />
                                        </a>
                                        <!-- Info -->
                                        <div class="item_info">
                                            <h3><a href="youtube_item.htm" class="more_info"><span class="next-bg-twelve">Project TItle</span></a></h3>
                                            <p><span>youtube</span></p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <!-- End: Thumbnails -->

                        </section>  
                    </div>

                </section>  
            </section>
            <!-- PORTFOLIO : ENDS -->

            <!-- FLICKR : STARTS -->
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
                            <!-- FLICKR FEED : STARTS -->
                            <ul id="flickr" class="feed clearfix"></ul>
                            <!-- FLICKR FEED : ENDS-->

                        </article>
                        <!-- span : ends -->
                    </div>

                </section>
            </section>
            <!-- FLICKR : ENDS -->

            <!-- SERVICES : STARTS -->
            <section id="services" class="page-section next-bg-four">

                <section class="container">

                    <div class="row">
                        <article class="col-md-12 text-left">
                            <h2 class="page-heading page-heading-alt">my services</h2>
                            <div class="liner"><span></span></div>
                        </article>
                    </div>

                    <div class="row add-top add-bottom">
                        <article class="col-md-12 text-left">
                            <p class="welcome-text welcome-text-alt fx fx-slideInRight">I offer premium services, I can produce quality websites, designs, apps and artworks</p>
                        </article>
                    </div>

                    <div class="row add-top">
                        <article class="col-md-12">

                            <ul id="rb-grid" class="rb-grid clearfix">

                                <li class="rb-span-2 next-bg-one">
                                    <h3>Web Design</h3><span class="rb-temp">HTML5 / CSS3/ JS</span>
                                    <img alt="" title="" class="service-thumb" src="<?php echo $theme_path; ?>/home_src/images/services/01.png"/>
                                    <div class="rb-overlay">
                                        <span class="rb-close">close</span>


                                        <!-- service-content : starts -->
                                        <div class="rb-week clearfix next-bg-one">

                                            <!-- service-matter : starts -->
                                            <div class="service-matter">
                                                <span>Web Design</span>

                                                <!-- carousel : starts -->
                                                <div id="service-carousel-01" class="carousel slide">

                                                    <!-- Wrapper for slides -->
                                                    <div class="carousel-inner">

                                                        <div class="item active">
                                                            <img alt="" title="" class="service-spec-img" src="<?php echo $theme_path; ?>/home_src/images/services/specs/01.jpg"/>
                                                            <div class="carousel-caption"></div>
                                                        </div>

                                                        <div class="item">
                                                            <img alt="" title="" class="service-spec-img" src="<?php echo $theme_path; ?>/home_src/images/services/specs/02.jpg"/>
                                                            <div class="carousel-caption"></div>
                                                        </div>

                                                        <div class="item">
                                                            <img alt="" title="" class="service-spec-img" src="<?php echo $theme_path; ?>/home_src/images/services/specs/03.jpg"/>
                                                            <div class="carousel-caption"></div>
                                                        </div>

                                                    </div>
                                                    <!-- Wrapper for slides : ends -->
                                                </div>
                                                <!-- carousel : ends -->

                                            </div>
                                            <!-- service-matter : ends -->

                                            <!--  service-info:starts -->
                                            <div class="service-info">
                                                <h5 class="service-spec">HTML5 / CSS3/ JS</h5>
                                                <h3>Service Overview</h3>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus tristique ultrices semper. Integer venenatis erat at sodales pharetra. Suspendisse sed erat sit amet sem interdum mollis. Sed volutpat tincidunt lorem, sed suscipit lacus lacinia at. Phasellus vel nulla scelerisque, viverra mi at, adipiscing est. Nullam porttitor turpis vel tellus rutrum porta. Cras sit amet varius nibh. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus tristique ultrices semper. Integer venenatis erat at sodales pharetra. Suspendisse sed erat sit amet sem interdum mollis. </p>
                                            </div>
                                            <!--  service-info:ends -->

                                        </div>
                                        <!-- service-content : ends -->
                                    </div>
                                    <!-- rb : ends -->

                                </li>

                                <li class="next-bg-two">
                                    <h3>Print Design</h3><span class="rb-temp">Photoshop</span>
                                    <img alt="" title="" class="service-thumb" src="<?php echo $theme_path; ?>/home_src/images/services/02.png"/>
                                    <div class="rb-overlay">
                                        <span class="rb-close">close</span>
                                        <!-- service-content : starts -->
                                        <div class="rb-week clearfix next-bg-two">

                                            <!-- service-matter : starts -->
                                            <div class="service-matter">
                                                <span>Print Design</span>

                                                <!-- carousel : starts -->
                                                <div id="service-carousel-02" class="carousel slide">

                                                    <!-- Wrapper for slides -->
                                                    <div class="carousel-inner">

                                                        <div class="item active">
                                                            <img alt="" title="" class="service-spec-img" src="<?php echo $theme_path; ?>/home_src/images/services/specs/01.jpg"/>
                                                            <div class="carousel-caption"></div>
                                                        </div>

                                                        <div class="item">
                                                            <img alt="" title="" class="service-spec-img" src="<?php echo $theme_path; ?>/home_src/images/services/specs/02.jpg"/>
                                                            <div class="carousel-caption"></div>
                                                        </div>

                                                        <div class="item">
                                                            <img alt="" title="" class="service-spec-img" src="<?php echo $theme_path; ?>/home_src/images/services/specs/03.jpg"/>
                                                            <div class="carousel-caption"></div>
                                                        </div>

                                                    </div>
                                                    <!-- Wrapper for slides : ends -->
                                                </div>
                                                <!-- carousel : ends -->

                                            </div>
                                            <!-- service-matter : ends -->

                                            <!--  service-info:starts -->
                                            <div class="service-info">
                                                <h5 class="service-spec">Photoshop</h5>
                                                <h3>Service Overview</h3>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus tristique ultrices semper. Integer venenatis erat at sodales pharetra. Suspendisse sed erat sit amet sem interdum mollis. Sed volutpat tincidunt lorem, sed suscipit lacus lacinia at. Phasellus vel nulla scelerisque, viverra mi at, adipiscing est. Nullam porttitor turpis vel tellus rutrum porta. Cras sit amet varius nibh. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus tristique ultrices semper. Integer venenatis erat at sodales pharetra. Suspendisse sed erat sit amet sem interdum mollis. </p>
                                            </div>
                                            <!--  service-info:ends -->


                                        </div>
                                        <!-- service-content : ends -->
                                    </div>
                                    <!-- rb : ends -->

                                </li>

                                <li class="next-bg-three">
                                    <h3>Logo Brand</h3><span class="rb-temp">CorelDraw</span>
                                    <img alt="" title="" class="service-thumb" src="<?php echo $theme_path; ?>/home_src/images/services/03.png"/>
                                    <div class="rb-overlay">
                                        <span class="rb-close">close</span>
                                        <!-- service-content : starts -->
                                        <div class="rb-week clearfix next-bg-three">

                                            <!-- service-matter : starts -->
                                            <div class="service-matter">
                                                <span>Logo Brand</span>

                                                <!-- carousel : starts -->
                                                <div id="service-carousel-03" class="carousel slide">

                                                    <!-- Wrapper for slides -->
                                                    <div class="carousel-inner">

                                                        <div class="item active">
                                                            <img alt="" title="" class="service-spec-img" src="<?php echo $theme_path; ?>/home_src/images/services/specs/01.jpg"/>
                                                            <div class="carousel-caption"></div>
                                                        </div>

                                                        <div class="item">
                                                            <img alt="" title="" class="service-spec-img" src="<?php echo $theme_path; ?>/home_src/images/services/specs/02.jpg"/>
                                                            <div class="carousel-caption"></div>
                                                        </div>

                                                        <div class="item">
                                                            <img alt="" title="" class="service-spec-img" src="<?php echo $theme_path; ?>/home_src/images/services/specs/03.jpg"/>
                                                            <div class="carousel-caption"></div>
                                                        </div>

                                                    </div>
                                                    <!-- Wrapper for slides : ends -->
                                                </div>
                                                <!-- carousel : ends -->

                                            </div>
                                            <!-- service-matter : ends -->

                                            <!--  service-info:starts -->
                                            <div class="service-info">
                                                <h5 class="service-spec">CorelDraw</h5>
                                                <h3>Service Overview</h3>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus tristique ultrices semper. Integer venenatis erat at sodales pharetra. Suspendisse sed erat sit amet sem interdum mollis. Sed volutpat tincidunt lorem, sed suscipit lacus lacinia at. Phasellus vel nulla scelerisque, viverra mi at, adipiscing est. Nullam porttitor turpis vel tellus rutrum porta. Cras sit amet varius nibh. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus tristique ultrices semper. Integer venenatis erat at sodales pharetra. Suspendisse sed erat sit amet sem interdum mollis. </p>
                                            </div>
                                            <!--  service-info:ends -->

                                        </div>
                                        <!-- service-content : ends -->
                                    </div>
                                    <!-- rb : ends -->

                                </li>

                                <li class="rb-span-4 next-bg-six">
                                    <h3>CMS Site</h3><span class="rb-temp">PHP / WordPress / Joomla</span>
                                    <img alt="" title="" class="service-thumb" src="<?php echo $theme_path; ?>/home_src/images/services/04.png"/>
                                    <div class="rb-overlay">
                                        <span class="rb-close">close</span>
                                        <!-- service-content : starts -->
                                        <div class="rb-week clearfix next-bg-six">

                                            <!-- service-matter : starts -->
                                            <div class="service-matter">
                                                <span>CMS Site</span>

                                                <!-- carousel : starts -->
                                                <div id="service-carousel-04" class="carousel slide">

                                                    <!-- Wrapper for slides -->
                                                    <div class="carousel-inner">

                                                        <div class="item active">
                                                            <img alt="" title="" class="service-spec-img" src="<?php echo $theme_path; ?>/home_src/images/services/specs/01.jpg"/>
                                                            <div class="carousel-caption"></div>
                                                        </div>

                                                        <div class="item">
                                                            <img alt="" title="" class="service-spec-img" src="<?php echo $theme_path; ?>/home_src/images/services/specs/02.jpg"/>
                                                            <div class="carousel-caption"></div>
                                                        </div>

                                                        <div class="item">
                                                            <img alt="" title="" class="service-spec-img" src="<?php echo $theme_path; ?>/home_src/images/services/specs/03.jpg"/>
                                                            <div class="carousel-caption"></div>
                                                        </div>

                                                    </div>
                                                    <!-- Wrapper for slides : ends -->
                                                </div>
                                                <!-- carousel : ends -->

                                            </div>
                                            <!-- service-matter : ends -->

                                            <!--  service-info:starts -->
                                            <div class="service-info">
                                                <h5 class="service-spec">PHP / WordPress / Joomla</h5>
                                                <h3>Service Overview</h3>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus tristique ultrices semper. Integer venenatis erat at sodales pharetra. Suspendisse sed erat sit amet sem interdum mollis. Sed volutpat tincidunt lorem, sed suscipit lacus lacinia at. Phasellus vel nulla scelerisque, viverra mi at, adipiscing est. Nullam porttitor turpis vel tellus rutrum porta. Cras sit amet varius nibh. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus tristique ultrices semper. Integer venenatis erat at sodales pharetra. Suspendisse sed erat sit amet sem interdum mollis. </p>
                                            </div>
                                            <!--  service-info:ends -->

                                        </div>
                                        <!-- service-content : ends -->
                                    </div>
                                    <!-- rb : ends -->

                                </li>

                                <li class="rb-span-2 next-bg-five">
                                    <h3>Web Apps</h3><span class="rb-temp">Python / RoR</span>
                                    <img alt="" title="" class="service-thumb" src="<?php echo $theme_path; ?>/home_src/images/services/05.png"/>
                                    <div class="rb-overlay">
                                        <span class="rb-close">close</span>
                                        <!-- service-content : starts -->
                                        <div class="rb-week clearfix next-bg-five">

                                            <!-- service-matter : starts -->
                                            <div class="service-matter">
                                                <span>Web Apps</span>

                                                <!-- carousel : starts -->
                                                <div id="service-carousel-05" class="carousel slide">

                                                    <!-- Wrapper for slides -->
                                                    <div class="carousel-inner">

                                                        <div class="item active">
                                                            <img alt="" title="" class="service-spec-img" src="<?php echo $theme_path; ?>/home_src/images/services/specs/01.jpg"/>
                                                            <div class="carousel-caption"></div>
                                                        </div>

                                                        <div class="item">
                                                            <img alt="" title="" class="service-spec-img" src="<?php echo $theme_path; ?>/home_src/images/services/specs/02.jpg"/>
                                                            <div class="carousel-caption"></div>
                                                        </div>

                                                        <div class="item">
                                                            <img alt="" title="" class="service-spec-img" src="<?php echo $theme_path; ?>/home_src/images/services/specs/03.jpg"/>
                                                            <div class="carousel-caption"></div>
                                                        </div>

                                                    </div>
                                                    <!-- Wrapper for slides : ends -->
                                                </div>
                                                <!-- carousel : ends -->

                                            </div>
                                            <!-- service-matter : ends -->

                                            <!--  service-info:starts -->
                                            <div class="service-info">
                                                <h5 class="service-spec">Python / RoR</h5>
                                                <h3>Service Overview</h3>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus tristique ultrices semper. Integer venenatis erat at sodales pharetra. Suspendisse sed erat sit amet sem interdum mollis. Sed volutpat tincidunt lorem, sed suscipit lacus lacinia at. Phasellus vel nulla scelerisque, viverra mi at, adipiscing est. Nullam porttitor turpis vel tellus rutrum porta. Cras sit amet varius nibh. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus tristique ultrices semper. Integer venenatis erat at sodales pharetra. Suspendisse sed erat sit amet sem interdum mollis. </p>
                                            </div>
                                            <!--  service-info:ends -->

                                        </div>
                                        <!-- service-content : ends -->
                                    </div>
                                    <!-- rb : ends -->

                                </li>

                                <li class="rb-span-2 next-bg-eight">
                                    <h3>Mobile Apps</h3><span class="rb-temp">iOS / Android</span>
                                    <img alt="" title="" class="service-thumb" src="<?php echo $theme_path; ?>/home_src/images/services/06.png"/>
                                    <div class="rb-overlay">
                                        <span class="rb-close">close</span>

                                        <!-- service-content : starts -->
                                        <div class="rb-week clearfix next-bg-eight">

                                            <!-- service-matter : starts -->
                                            <div class="service-matter">
                                                <span>Mobile Apps</span>

                                                <!-- carousel : starts -->
                                                <div id="service-carousel-06" class="carousel slide">

                                                    <!-- Wrapper for slides -->
                                                    <div class="carousel-inner">

                                                        <div class="item active">
                                                            <img alt="" title="" class="service-spec-img" src="<?php echo $theme_path; ?>/home_src/images/services/specs/01.jpg"/>
                                                            <div class="carousel-caption"></div>
                                                        </div>

                                                        <div class="item">
                                                            <img alt="" title="" class="service-spec-img" src="<?php echo $theme_path; ?>/home_src/images/services/specs/02.jpg"/>
                                                            <div class="carousel-caption"></div>
                                                        </div>

                                                        <div class="item">
                                                            <img alt="" title="" class="service-spec-img" src="<?php echo $theme_path; ?>/home_src/images/services/specs/03.jpg"/>
                                                            <div class="carousel-caption"></div>
                                                        </div>

                                                    </div>
                                                    <!-- Wrapper for slides : ends -->
                                                </div>
                                                <!-- carousel : ends -->

                                            </div>
                                            <!-- service-matter : ends -->

                                            <!--  service-info:starts -->
                                            <div class="service-info">
                                                <h5 class="service-spec">iOS / Android</h5>
                                                <h3>Service Overview</h3>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus tristique ultrices semper. Integer venenatis erat at sodales pharetra. Suspendisse sed erat sit amet sem interdum mollis. Sed volutpat tincidunt lorem, sed suscipit lacus lacinia at. Phasellus vel nulla scelerisque, viverra mi at, adipiscing est. Nullam porttitor turpis vel tellus rutrum porta. Cras sit amet varius nibh. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus tristique ultrices semper. Integer venenatis erat at sodales pharetra. Suspendisse sed erat sit amet sem interdum mollis. </p>
                                            </div>
                                            <!--  service-info:ends -->


                                        </div>
                                        <!-- service-content : ends -->
                                    </div>
                                    <!-- rb : ends -->

                                </li>

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
                            <h2 class="page-heading page-heading-alt">contact me</h2>
                            <div class="liner"><span></span></div>
                        </article>
                    </div>

                    <div class="row add-top add-bottom">
                        <article class="col-md-12 text-left">
                            <p class="welcome-text welcome-text-alt fx fx-slideInDown">I will reply to each and every email. If you have projects feel free to call me anytime</p>
                        </article>
                    </div>

                    <div class="row add-top add-bottom">

                        <article class="col-md-12 contact-panel fx fx-rollIn">

                            <div class="row">
                                <article class="col-md-12 text-center">
                                    <div id="fname"  class="alert alert-error error">
                                        Name must not be empty
                                    </div>
                                    <div id="fmail" class="alert alert-error  error">
                                        Please provide a valid email
                                    </div>
                                    <div id="fmsg" class="alert alert-error  error">
                                        Message should not be empty
                                    </div>
                                </article>
                            </div>

                            <form name="myform" id="contactForm" action="sendcontact.php" enctype="multipart/form-data" method="post"> 
                                <div class="row add-top-small">
                                    <article class="col-md-6">
                                        <input size="100" type="text" name="name" id="name" placeholder="Name">
                                    </article>
                                    <article class="col-md-6">
                                        <input type="text"  size="30" id="email" name="email" placeholder="email">
                                    </article>
                                </div>
                                <div class="row add-top-small">
                                    <article class="col-md-12">
                                        <textarea  id="msg" rows="3" cols="40" name="message" placeholder="Message"></textarea>
                                        <button type="submit" name="submit" id="submit" class="btn btn-next add-top-half">Send Message</button>
                                    </article>
                                </div>
                            </form>

                        </article>

                    </div>

                </section> 

            </section>
            <!-- CONTACT : ENDS -->

            <!-- ADDRESS-PANEL : STARTS -->
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
            <!-- ADDRESS-PANEL   : ENDS -->

            <!-- TWEET-FEED : STARTS -->
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
            <!-- TWEET-FEED  : ENDS -->

            <!-- FOOTER : STARTS -->
            <footer id="mastfoot">

                <section class="container">

                    <div class="row foot-border">
                        <article class="col-md-12 credits text-center">
                            <img alt="" title="" src="<?php echo $theme_path; ?>/home_src/images/foot-logo.png"/>
                            <h3>Built by Designova</h3>
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
        <script src="<?php echo $theme_path; ?>/home_src/javascripts/form-validation.js"></script>
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

    </body>
</html>
