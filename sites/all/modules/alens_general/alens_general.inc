<?php

function home_page_display() {
//    $page_content = '';
    $navi_blocks = _generate_navi_block();
    $page_content = theme('home_page_view', array('navi_blocks' => $navi_blocks)); //, array('wall_images' => $wall_images, 'wall_layout' => $wall_layout)
    return $page_content;
}

function _generate_navi_block() {
    $theme_path = base_path() . drupal_get_path('theme', 'alens');
    $menus = _define_menu();

    $page_content = '';
    for ($i = 0; $i < count($menus); $i++) {
        $x = $i + 1;
        $page_content .= '<li class="next-bg-' . $x . '">';
        $page_content .= '<a class="scroll-link" id="' . $menus[$i] . '-link" href="#' . $menus[$i] . '" data-soffset="0">';
        $page_content .= '<div class="first">';
        $page_content .= '<div class="arrow-right"></div>';
        $page_content .= '<div class="content"><img alt="" title="" src="' . $theme_path . '/home_src/images/icons/0' . $i . '.png"/></div>';
        $page_content .= '</div>';
        $page_content .= '<div class="second">';
        $page_content .= '<div class="arrow-left"></div>';
        $page_content .= '<div class="content">' . $menus[$i] . '</div>';
        $page_content .= '</div>';
        $page_content .= '</a>';
        $page_content .= '</li>';
    }

    return $page_content;
}

function _define_menu() {
    $menu_arr = array('home', 'about', 'portfolio', 'services', 'contact');
    return $menu_arr;
}

?>
