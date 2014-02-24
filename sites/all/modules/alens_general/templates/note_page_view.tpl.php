<link rel="stylesheet" type="text/css" href="/alens/<?php echo drupal_get_path('theme', 'alens') ?>/note_src/css/default.css" />
<link rel="stylesheet" type="text/css" href="/alens/<?php echo drupal_get_path('theme', 'alens') ?>/note_src/css/bookblock.css" />
<link rel="stylesheet" type="text/css" href="/alens/<?php echo drupal_get_path('theme', 'alens') ?>/note_src/css/style.css" />
<script src="/alens/<?php echo drupal_get_path('theme', 'alens') ?>/note_src/js/modernizr.custom.js"></script>

<div class="container" style="color: #999; overflow: hidden;">
    <div class="bb-custom-wrapper">

        <div id="bb-bookblock" class="bb-bookblock">
            <?php print $item_content; ?>
        </div>

        <nav>
            <a id="bb-nav-first" href="#" class="bb-custom-icon bb-custom-icon-first">First page</a>
            <a id="bb-nav-prev" href="#" class="bb-custom-icon bb-custom-icon-arrow-left">Previous</a>
            <a id="bb-nav-next" href="#" class="bb-custom-icon bb-custom-icon-arrow-right">Next</a>
            <a id="bb-nav-last" href="#" class="bb-custom-icon bb-custom-icon-last">Last page</a>
        </nav>

    </div>

</div><!-- /container -->
<script src="/alens/<?php echo drupal_get_path('theme', 'alens') ?>/note_src/js/jQuery-1.9.1-min.js"></script>
<script src="/alens/<?php echo drupal_get_path('theme', 'alens') ?>/note_src/js/jquerypp.custom.js"></script>
<script src="/alens/<?php echo drupal_get_path('theme', 'alens') ?>/note_src/js/jquery.bookblock.js"></script>
<script>
    var Page = (function() {

        var config = {
            $bookBlock: $('#bb-bookblock'),
            $navNext: $('#bb-nav-next'),
            $navPrev: $('#bb-nav-prev'),
            $navFirst: $('#bb-nav-first'),
            $navLast: $('#bb-nav-last')
        },
        init = function() {
            config.$bookBlock.bookblock({
                speed: 1000,
                shadowSides: 0.8,
                shadowFlip: 0.4
            });
            initEvents();
        },
                initEvents = function() {

            var $slides = config.$bookBlock.children();

            // add navigation events
            config.$navNext.on('click touchstart', function() {
                config.$bookBlock.bookblock('next');
                return false;
            });

            config.$navPrev.on('click touchstart', function() {
                config.$bookBlock.bookblock('prev');
                return false;
            });

            config.$navFirst.on('click touchstart', function() {
                config.$bookBlock.bookblock('first');
                return false;
            });

            config.$navLast.on('click touchstart', function() {
                config.$bookBlock.bookblock('last');
                return false;
            });

            // add swipe events
            $slides.on({
                'swipeleft': function(event) {
                    config.$bookBlock.bookblock('next');
                    return false;
                },
                'swiperight': function(event) {
                    config.$bookBlock.bookblock('prev');
                    return false;
                }
            });

            // add keyboard events
            $(document).keydown(function(e) {
                var keyCode = e.keyCode || e.which,
                        arrow = {
                    left: 37,
                    up: 38,
                    right: 39,
                    down: 40
                };

                switch (keyCode) {
                    case arrow.left:
                        config.$bookBlock.bookblock('prev');
                        break;
                    case arrow.right:
                        config.$bookBlock.bookblock('next');
                        break;
                }
            });
        };

        return {init: init};

    })();
</script>
<script>
    Page.init();
</script>
