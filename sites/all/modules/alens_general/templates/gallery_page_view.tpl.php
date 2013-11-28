<?php $theme_path = base_path() . drupal_get_path('theme', 'alens'); ?>
<!DOCTYPE html>

<html lang="en">


    <head>
        <title>Supersized - Full Screen Background Slideshow jQuery Plugin</title>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8" />

        <link rel="stylesheet" href="<?php echo $theme_path; ?>/gallery_src/css/supersized.css" type="text/css" media="screen" />
        <link rel="stylesheet" href="<?php echo $theme_path; ?>/gallery_src/theme/supersized.shutter.css" type="text/css" media="screen" />

        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
        <script type="text/javascript" src="<?php echo $theme_path; ?>/gallery_src/js/jquery.easing.min.js"></script>

        <script type="text/javascript" src="<?php echo $theme_path; ?>/gallery_src/js/supersized.3.2.7.min.js"></script>
        <script type="text/javascript" src="<?php echo $theme_path; ?>/gallery_src/theme/supersized.shutter.min.js"></script>

        <script type="text/javascript">

            jQuery(function($) {

                $.supersized({
                    // Functionality
                    slide_interval: 3000, // Length between transitions
                    transition: 1, // 0-None, 1-Fade, 2-Slide Top, 3-Slide Right, 4-Slide Bottom, 5-Slide Left, 6-Carousel Right, 7-Carousel Left
                    transition_speed: 700, // Speed of transition

                    // Components							
                    slide_links: 'blank', // Individual links for each slide (Options: false, 'num', 'name', 'blank')
                    slides: [// Slideshow Images
                        <?php print $gallery_images;?>
                        //{image: 'http://buildinternet.s3.amazonaws.com/projects/supersized/3.2/slides/kazvan-1.jpg', title: 'Image Credit: Maria Kazvan', thumb: 'http://buildinternet.s3.amazonaws.com/projects/supersized/3.2/thumbs/kazvan-1.jpg', url: 'http://www.nonsensesociety.com/2011/04/maria-kazvan/'},
                        //{image: 'http://buildinternet.s3.amazonaws.com/projects/supersized/3.2/slides/kazvan-2.jpg', title: 'Image Credit: Maria Kazvan', thumb: 'http://buildinternet.s3.amazonaws.com/projects/supersized/3.2/thumbs/kazvan-2.jpg', url: 'http://www.nonsensesociety.com/2011/04/maria-kazvan/'},
                        //{image: 'http://buildinternet.s3.amazonaws.com/projects/supersized/3.2/slides/kazvan-3.jpg', title: 'Image Credit: Maria Kazvan', thumb: 'http://buildinternet.s3.amazonaws.com/projects/supersized/3.2/thumbs/kazvan-3.jpg', url: 'http://www.nonsensesociety.com/2011/04/maria-kazvan/'},
                        //{image: 'http://buildinternet.s3.amazonaws.com/projects/supersized/3.2/slides/wojno-1.jpg', title: 'Image Credit: Colin Wojno', thumb: 'http://buildinternet.s3.amazonaws.com/projects/supersized/3.2/thumbs/wojno-1.jpg', url: 'http://www.nonsensesociety.com/2011/03/colin/'},
                        //{image: 'http://buildinternet.s3.amazonaws.com/projects/supersized/3.2/slides/wojno-2.jpg', title: 'Image Credit: Colin Wojno', thumb: 'http://buildinternet.s3.amazonaws.com/projects/supersized/3.2/thumbs/wojno-2.jpg', url: 'http://www.nonsensesociety.com/2011/03/colin/'},
                        //{image: 'http://buildinternet.s3.amazonaws.com/projects/supersized/3.2/slides/wojno-3.jpg', title: 'Image Credit: Colin Wojno', thumb: 'http://buildinternet.s3.amazonaws.com/projects/supersized/3.2/thumbs/wojno-3.jpg', url: 'http://www.nonsensesociety.com/2011/03/colin/'},
                        //{image: 'http://buildinternet.s3.amazonaws.com/projects/supersized/3.2/slides/shaden-1.jpg', title: 'Image Credit: Brooke Shaden', thumb: 'http://buildinternet.s3.amazonaws.com/projects/supersized/3.2/thumbs/shaden-1.jpg', url: 'http://www.nonsensesociety.com/2011/06/brooke-shaden/'},
                        //{image: 'http://buildinternet.s3.amazonaws.com/projects/supersized/3.2/slides/shaden-2.jpg', title: 'Image Credit: Brooke Shaden', thumb: 'http://buildinternet.s3.amazonaws.com/projects/supersized/3.2/thumbs/shaden-2.jpg', url: 'http://www.nonsensesociety.com/2011/06/brooke-shaden/'},
                        //{image: 'http://buildinternet.s3.amazonaws.com/projects/supersized/3.2/slides/shaden-3.jpg', title: 'Image Credit: Brooke Shaden', thumb: 'http://buildinternet.s3.amazonaws.com/projects/supersized/3.2/thumbs/shaden-3.jpg', url: 'http://www.nonsensesociety.com/2011/06/brooke-shaden/'}
                    ]

                });
            });

        </script>

    </head>

    <style type="text/css">
        ul#demo-block{ margin:0 15px 15px 15px; }
        ul#demo-block li{ margin:0 0 10px 0; padding:10px; display:inline; float:left; clear:both; color:#aaa; background:url('img/bg-black.png'); font:11px Helvetica, Arial, sans-serif; }
        ul#demo-block li a{ color:#eee; font-weight:bold; }
    </style>

    <body>
        <!--Thumbnail Navigation-->
        <div id="prevthumb"></div>
        <div id="nextthumb"></div>

        <!--Arrow Navigation-->
        <a id="prevslide" class="load-item"></a>
        <a id="nextslide" class="load-item"></a>

        <div id="thumb-tray" class="load-item">
            <div id="thumb-back"></div>
            <div id="thumb-forward"></div>
        </div>

        <!--Time Bar-->
        <div id="progress-back" class="load-item">
            <div id="progress-bar"></div>
        </div>

        <!--Control Bar-->
        <div id="controls-wrapper" class="load-item">
            <div id="controls">

                <a id="play-button"><img id="pauseplay" src="<?php echo $theme_path; ?>/gallery_src/img/pause.png"/></a>

                <!--Slide counter-->
                <div id="slidecounter">
                    <span class="slidenumber"></span> / <span class="totalslides"></span>
                </div>

                <!--Slide captions displayed here-->
                <div id="slidecaption"></div>

                <!--Thumb Tray button-->
                <a id="tray-button"><img id="tray-arrow" src="<?php echo $theme_path; ?>/gallery_src/img/button-tray-up.png"/></a>

                <!--Navigation-->
                <ul id="slide-list"></ul>

            </div>
        </div>

    </body>
</html>
