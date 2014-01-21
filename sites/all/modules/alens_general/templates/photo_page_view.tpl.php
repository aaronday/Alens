<?php $theme_path = base_path() . drupal_get_path('theme', 'alens'); ?>
<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8">

        <title>reveal.js - The HTML Presentation Framework</title>

        <meta name="description" content="A framework for easily creating beautiful presentations using HTML">
        <meta name="author" content="Hakim El Hattab">

        <meta name="apple-mobile-web-app-capable" content="yes" />
        <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />

        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

        <link rel="stylesheet" href="<?php echo $theme_path; ?>/photo_slide_src/css/reveal.min.css">
        <link rel="stylesheet" href="<?php echo $theme_path; ?>/photo_slide_src/css/theme/default.css" id="theme">

        <!-- For syntax highlighting -->
        <link rel="stylesheet" href="<?php echo $theme_path; ?>/photo_slide_src/lib/css/zenburn.css">

        <!-- If the query includes 'print-pdf', use the PDF print sheet -->
        <script>
            document.write('<link rel="stylesheet" href="<?php echo $theme_path; ?>/photo_slide_src/css/print/' + (window.location.search.match(/print-pdf/gi) ? 'pdf' : 'paper') + '.css" type="text/css" media="print">');
        </script>

        <!--[if lt IE 9]>
        <script src="<?php echo $theme_path; ?>/photo_slide_src/lib/js/html5shiv.js"></script>
        <![endif]-->
    </head>

    <body>

        <div class="reveal">

            <!-- Any section element inside of this container is displayed as a slide -->
            <div class="slides">
                <?php print $photo_images; ?>
            </div>

        </div>

        <script src="<?php echo $theme_path; ?>/photo_slide_src/lib/js/head.min.js"></script>
        <script src="<?php echo $theme_path; ?>/photo_slide_src/js/reveal.min.js"></script>

        <script>

            // Full list of configuration options available here:
            // https://github.com/hakimel/reveal.js#configuration
            Reveal.initialize({
                controls: true,
                progress: true,
                history: true,
                center: true,
                theme: Reveal.getQueryHash().theme, // available themes are in /css/theme
                transition: Reveal.getQueryHash().transition || 'default', // default/cube/page/concave/zoom/linear/fade/none

                // Parallax scrolling
                // parallaxBackgroundImage: 'https://s3.amazonaws.com/hakim-static/reveal-js/reveal-parallax-1.jpg',
                // parallaxBackgroundSize: '2100px 900px',

                // Optional libraries used to extend on reveal.js
                dependencies: [
                    {src: '<?php echo $theme_path; ?>/photo_slide_src/lib/js/classList.js', condition: function() {
                            return !document.body.classList;
                        }},
                    {src: '<?php echo $theme_path; ?>/photo_slide_src/plugin/markdown/marked.js', condition: function() {
                            return !!document.querySelector('[data-markdown]');
                        }},
                    {src: '<?php echo $theme_path; ?>/photo_slide_src/plugin/markdown/markdown.js', condition: function() {
                            return !!document.querySelector('[data-markdown]');
                        }},
                    {src: '<?php echo $theme_path; ?>/photo_slide_src/plugin/highlight/highlight.js', async: true, callback: function() {
                            hljs.initHighlightingOnLoad();
                        }},
                    {src: '<?php echo $theme_path; ?>/photo_slide_src/plugin/zoom-js/zoom.js', async: true, condition: function() {
                            return !!document.body.classList;
                        }},
                    {src: '<?php echo $theme_path; ?>/photo_slide_src/plugin/notes/notes.js', async: true, condition: function() {
                            return !!document.body.classList;
                        }}
                ]
            });

        </script>

    </body>
</html>
