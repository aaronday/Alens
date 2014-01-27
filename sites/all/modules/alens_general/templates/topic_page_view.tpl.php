<?php $theme_path = base_path() . drupal_get_path('theme', 'alens'); ?>
<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title></title>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js"></script>
        <script src="<?php echo $theme_path; ?>/galleria_src/js/galleria-1.3.3.min.js"></script>
        <script>
            Galleria.loadTheme('<?php echo $theme_path; ?>/galleria_src/themes/classic/galleria.classic.min.js');
            Galleria.run('.galleria');
        </script>
        
        <style>
            .galleria{ width: 1000px; height: 600px; background: #000 }
        </style>
    </head>

    <body style="background: #000;">
        <div class="galleria" style="margin: 0 auto;">
            <?php print $topic_images; ?>
        </div>

    </body>
</html>
