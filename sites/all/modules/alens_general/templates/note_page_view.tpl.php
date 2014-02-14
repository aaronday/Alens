<link rel="stylesheet" type="text/css" href="/alens/<?php echo drupal_get_path('theme', 'alens') ?>/footprint_src/css/jquery.jscrollpane.custom.css" />
<link rel="stylesheet" type="text/css" href="/alens/<?php echo drupal_get_path('theme', 'alens') ?>/footprint_src/css/bookblock.css" />
<link rel="stylesheet" type="text/css" href="/alens/<?php echo drupal_get_path('theme', 'alens') ?>/footprint_src/css/custom.css" />
<script src="/alens/<?php echo drupal_get_path('theme', 'alens') ?>/footprint_src/js/modernizr.custom.79639.js"></script>

<div id="container" class="container">
    <div class="menu-panel">
        <h3>Table of Contents</h3>
        <ul id="menu-toc" class="menu-toc">
            <?php print $menu_items; ?>
        </ul>
    </div>
    <div class="bb-custom-wrapper">
        <div id="bb-bookblock" class="bb-bookblock">
            <?php print $item_content; ?>
        </div>
        <nav>
            <span id="bb-nav-prev">&larr;</span>
            <span id="bb-nav-next">&rarr;</span>
        </nav>
        <span id="tblcontents" class="menu-button">Table of Contents</span>
    </div>
</div>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script src="/alens/<?php echo drupal_get_path('theme', 'alens') ?>/footprint_src/js/jquery.mousewheel.js"></script>
<script src="/alens/<?php echo drupal_get_path('theme', 'alens') ?>/footprint_src/js/jquery.jscrollpane.min.js"></script>
<script src="/alens/<?php echo drupal_get_path('theme', 'alens') ?>/footprint_src/js/jquerypp.custom.js"></script>
<script src="/alens/<?php echo drupal_get_path('theme', 'alens') ?>/footprint_src/js/jquery.bookblock.js"></script>
<script src="/alens/<?php echo drupal_get_path('theme', 'alens') ?>/footprint_src/js/page.js"></script>
<script>
    $(function() {
        Page.init();
    });
</script>