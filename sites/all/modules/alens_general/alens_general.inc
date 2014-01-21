<?php

function home_page_display() {
//    $page_content = '';
    $navi_blocks = _generate_navi_block();
    $works_map = _generate_works_map();
    $footprints_map = _generate_footprints_map();
    $page_content = theme('home_page_view', array('navi_blocks' => $navi_blocks, 'works_map' => $works_map, 'footprints_map' => $footprints_map)); //, array('wall_images' => $wall_images, 'wall_layout' => $wall_layout)
    return $page_content;
}

function gallery_page_display() {
    $gallery_images = _generate_gallery_images();
    $page_content = theme('gallery_page_view', array('gallery_images' => $gallery_images));
    return $page_content;
}

function photo_page_display() {
    $photo_images = _generate_photo_images();
    $page_content = theme('photo_page_view', array('photo_images' => $photo_images));
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

function _generate_works_map() {
    $theme_path = base_path() . drupal_get_path('theme', 'alens');

    $page_content = '';
    for ($i = 1; $i < 13; $i++) {
        $page_content .= '<li data-type="category' . $i . '" class="simple-bg-one">';
        $page_content .= '<a href="photo_item.htm" class="more_info">';
        $page_content .= '<img alt="simple" title="simple" src="' . $theme_path . '/home_src/images/portfolio_thumbs/portfolio' . $i . '.jpg"/>';
        $page_content .= '<img alt="simple" title="simple" src="' . $theme_path . '/home_src/images/portfolio_thumbs/portfolio' . $i . '_rollover.jpg" class="rollover" />';
        $page_content .= '</a>';
        $page_content .= '<div class="item_info">';
        $page_content .= '<h3><a href="#" class="more_info"><span class="next-bg-' . $i . '">Project TItle</span></a></h3>';
        $page_content .= '<p><span>image slider</span></p>';
        $page_content .= '</div>';
        $page_content .= '</li>';
    }

    return $page_content;
}

function _generate_footprints_map() {
    $theme_path = base_path() . drupal_get_path('theme', 'alens');

    $notes_num = 11;
    $items_layout_arr = _random_line_items();
    $total_item_num = 0;

    $page_content = '';
    while ($total_item_num < $notes_num) {
        if ($total_item_num + count($items_layout_arr) <= $notes_num) {
            for ($i = 1; $i <= count($items_layout_arr); $i++) {
                $j = $total_item_num + $i;
                if ($j == 3) {
                    $j = $j + 4;
                }
                $page_content .= '<li class="' . $items_layout_arr[$i - 1] . ' next-bg-' . $j . '">';
                $page_content .= '<h3>题目</h3><span class="rb-temp">内容吧啦吧啦……</span>';
                $page_content .= '<img alt="" title="" class="service-thumb" src="' . $theme_path . '/home_src/images/services/01.png"/>';
                $page_content .= '</li>';
            }
            $total_item_num = $total_item_num + count($items_layout_arr);
            $items_layout_arr = _random_line_items();
        } else {
            while (count($items_layout_arr) + $total_item_num != $notes_num) {
                $items_layout_arr = _random_line_items();
            }
            for ($i = 1; $i <= count($items_layout_arr); $i++) {
                $j = $total_item_num + $i;
                $page_content .= '<li class="' . $items_layout_arr[$i - 1] . ' next-bg-' . $j . '">';
                $page_content .= '<h3>题目</h3><span class="rb-temp">内容吧啦吧啦……</span>';
                $page_content .= '<img alt="" title="" class="service-thumb" src="' . $theme_path . '/home_src/images/services/01.png"/>';
                $page_content .= '</li>';
            }
            $total_item_num = $total_item_num + count($items_layout_arr);
        }
    }

    return $page_content;
}

function _generate_gallery_images($topic_id) {
    $page_content = '';
    for ($i = 1; $i < 10; $i++) {
        $page_content .= '{image: "' . base_path() . 'sites/default/files/images/' . $i . '.jpg", title: "Image Credit: Maria Kazvan", thumb: "' . base_path() . 'sites/default/files/images/' . $i . '.jpg", url: "#"},';
    }
    return $page_content;
}

function _generate_photo_images() {
    $page_content = '';
    for ($i = 1; $i < 10; $i++) {
        $page_content .= '<section>';
        $page_content .= '<div style="float: left;"><img src="' . base_path() . 'sites/default/files/images/' . $i . '.jpg" /></div>';
        $page_content .= '<div style="float: left; width: 200px; height: 500px; background: white;"></div>';
        $page_content .= '<div style="clear: both;"></div>';
        $page_content .= '</section>';
    }
    return $page_content;
}

function _random_line_items() {
    $items_layout_arr = array();
    $item_num = rand(1, 10000);
    if ($item_num >= 1 && $item_num <= 2500) {
        $items_layout_arr = array('rb-span-4');
    } else if ($item_num > 2500 && $item_num <= 5000) {
        $items_layout_arr = array('rb-span-2', 'rb-span-2');
    } else if ($item_num > 5000 && $item_num <= 7500) {
        $i = rand(0, 1);
        if ($i = 0) {
            $items_layout_arr = array('rb-span-2', '', '');
        } else {
            $items_layout_arr = array('', '', 'rb-span-2');
        }
    } else if ($item_num > 7500 && $item_num <= 10000) {
        $items_layout_arr = array('', '', '', '');
    }
    return $items_layout_arr;
}

?>
