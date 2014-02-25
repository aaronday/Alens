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

function photo_page_display($topic_id) {
    $photo_images = _generate_photo_images($topic_id);
    $page_content = theme('photo_page_view', array('photo_images' => $photo_images));
    return $page_content;
}

function topic_page_display($topic_id) {
    $topic_images = _generate_topic_images($topic_id);
    $page_content = theme('topic_page_view', array('topic_images' => $topic_images));
    return $page_content;
}

function note_page_display($note_id) {
    $item_content = _generate_foot_print_item_content($note_id);
    $page_content = theme('note_page_view', array('item_content' => $item_content));
    return $page_content;
}

function submit_contact_form($name, $email, $msg) {
    _insert_contact($name, $email, $msg);
    print_r("success");
}

function _generate_navi_block() {
    $theme_path = base_path() . drupal_get_path('theme', 'alens');
    $menus = _define_menu();

    $page_content = '';
    for ($i = 0; $i < count($menus); $i++) {
        $x = $i + 1;
        $page_content .= '<li class="next-bg-' . $x . '">';
        if($menus[$i] != 'photos'){
            $section_name = $menus[$i];
        }else{
            $section_name = 'works';
        }
        $page_content .= '<a class="scroll-link" id="' . $section_name . '-link" href="#' . $section_name . '" data-soffset="0">';
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
    $page_content .= _generate_topic_cover_image($theme_path);
//    for ($i = 1; $i < 6; $i++) {
//        $page_content .= '<li data-type="category' . $i . '" class="simple-bg-one">';
//        $page_content .= '<a href="photo_item.htm" class="more_info">';
//        $page_content .= '<img alt="simple" title="simple" src="' . $theme_path . '/home_src/images/portfolio_thumbs/portfolio' . $i . '.jpg"/>';
//        $page_content .= '<img alt="simple" title="simple" src="' . $theme_path . '/home_src/images/portfolio_thumbs/portfolio' . $i . '_rollover.jpg" class="rollover" />';
//        $page_content .= '</a>';
//        $page_content .= '<div class="item_info">';
//        $page_content .= '<h3><a href="#" class="more_info"><span class="next-bg-' . $i . '">Project TItle</span></a></h3>';
//        $page_content .= '<p><span>image slider</span></p>';
//        $page_content .= '</div>';
//        $page_content .= '</li>';
//    }

    return $page_content;
}

function _generate_footprints_map() {
    $theme_path = base_path() . drupal_get_path('theme', 'alens');

    $footprints = _get_all_footprints();
    $notes_num = count($footprints);
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
                $x = $total_item_num + $i - 1;
                $footprint = $footprints[$x];
                $page_content .= '<li class="' . $items_layout_arr[$i - 1] . ' next-bg-' . $j . '" onClick="openNote(' . $footprint->id . ')">';
                $str_length = _calculate_text_length($items_layout_arr[$i - 1]);
                $page_content .= '<h3>' . strip_tags($footprint->title) . '</h3><span class="rb-temp">' . _parse_footprint_body_string($footprint->body, $str_length) . '</span>';
//                $page_content .= '<img alt="" title="" class="service-thumb" src="' . $theme_path . '/home_src/images/services/01.png"/>';
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
                if ($j == 3) {
                    $j = $j + 4;
                }
                $x = $total_item_num + $i - 1;
                $footprint = $footprints[$x];
                $page_content .= '<li class="' . $items_layout_arr[$i - 1] . 'next-bg-' . $j . '" target="_blank" href="note/' . $footprint->id . '">';
                $str_length = _calculate_text_length($items_layout_arr[$i - 1]);
                $page_content .= '<h3>' . strip_tags($footprint->title) . '</h3><span class="rb-temp">' . _parse_footprint_body_string($footprint->body, $str_length) . '</span>';
//                $page_content .= '<img alt="" title="" class="service-thumb" src="' . $theme_path . '/home_src/images/services/01.png"/>';
                $page_content .= '</li>';
            }
            $total_item_num = $total_item_num + count($items_layout_arr);
        }
        $x++;
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

function _generate_topic_images($topic_id) {
    $page_content = '';
    $page_content .= _generate_topic_images_content($topic_id);
    return $page_content;
}

function _generate_photo_images($topic_id) {
    $page_content = '';
    $page_content .= _generate_photo_images_content($topic_id);
//    for ($i = 1; $i < 10; $i++) {
//        $page_content .= '<section>';
//        $page_content .= '<img src="' . base_path() . 'sites/default/files/images/' . $i . '.jpg" />';
//        $page_content .= '</section>';
//    }
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

function _generate_topic_cover_image($theme_path) {
    $page_content = '';
    $topics = _get_topics();
    foreach ($topics as $key => $topic) {
        $image = _get_topic_cover_images($topic->id);
        $i = $key + 1;
        $page_content .= '<li data-type="category' . $i . '" class="simple-bg-one">';
        $page_content .= '<a target="_blank" href="./topic/' . $topic->id . '" class="">';
        $page_content .= '<img alt="" title="simple" src="' . $image->url . '" class="origin"/>';
        $page_content .= '<img alt="" title="simple" src="' . $image->url . '" class="rollover" />';
        $page_content .= '</a>';
        $page_content .= '<div class="item_info">';
        $page_content .= '<h3><a target="_blank" href="./topic/' . $topic->id . '" class=""><span class="next-bg-' . $i . '">' . $topic->name . '</span></a></h3>';
        $page_content .= '<p><span>image slider</span></p>';
        $page_content .= '</div>';
        $page_content .= '</li>';
    }
    return $page_content;
}

function _get_topics() {
    $results = db_select('topics', 't')->fields('t')->execute()->fetchAll();
    return $results;
}

function _get_topic_cover_images($topic_id) {
    $results = db_select('managed_images', 'mi')->fields('mi')->condition('mi.topic', $topic_id)->execute()->fetchAll();
    foreach ($results as $result) {
        return $result;
    }
}

function _generate_photo_images_content($topic_id) {
    $page_content = '';
    $images = _get_topic_images($topic_id);
    foreach ($images as $key => $image) {
        $page_content .= '<section>';
        $page_content .= '<img src="' . $image->url . '" />';
        $page_content .= '</section>';
    }
    return $page_content;
}

function _generate_topic_images_content($topic_id) {
    $page_content = '';
    $images = _get_topic_images($topic_id);
    foreach ($images as $key => $image) {
        $page_content .= '<img src="' . $image->url . '">';
    }
    return $page_content;
}

function _get_topic_images($topic_id) {
    $results = db_select('managed_images', 'mi')->fields('mi')->condition('mi.topic', $topic_id)->execute()->fetchAll();
    return $results;
}

function _get_all_footprints() {
    $query = db_select('footprints', 'fp');
    $query->fields('fp');
    $query->orderBy('fp.id');
    $result = $query->execute()->fetchAll();
    return $result;
}

function _get_footprints_by_id($note_id) {
    $query = db_select('footprints', 'fp');
    $query->fields('fp');
    $query->condition('fp.id', $note_id);
    $query->orderBy('fp.id');
    $result = $query->execute()->fetchObject();
    return $result;
}

function _parse_footprint_body_string($original_str, $str_length) {
    $original_str = strip_tags($original_str);
    $shorted_str = mb_substr($original_str, 0, $str_length);
    return $shorted_str . '... ...';
}

function _calculate_text_length($class_str) {
    $str_length = 0;
    if ($class_str == 'rb-span-2') {
        $str_length = 120;
    } else if ($class_str == 'rb-span-4') {
        $str_length = 240;
    } else {
        $str_length = 50;
    }
    return $str_length;
}

function _insert_contact($name, $email, $msg) {
    $query = db_insert('contact')
            ->fields(array(
                'name' => $name,
                'email' => $email,
                'body' => $msg
            ))
            ->execute();
}

function _generate_foot_print_item_content($note_id) {
    $page_content = '';
    $note = _get_footprints_by_id($note_id);
    $body = $note->body;
    $contents = split('</p><p>', $body);
    $page_content .= '<div class="bb-item">';
    $page_content .= '<div class="bb-custom-firstpage">';
    $page_content .= '<p>' . $note->title . '</p>';
    $page_content .= '</div>';
    $page_content .= '<div class="bb-custom-side">';
    $page_content .= '<p>' . strip_tags($contents[0]) . '</p>';
    $page_content .= '</div>';
    $page_content .= '</div>';
    $key = 1;
    while ($key < count($contents)) {
        $page_content .= '<div class="bb-item">';
        for ($i = 0; $i < 2; $i++) {
            if (trim(strip_tags($contents[$key])) != '') {
                $page_content .= '<div class="bb-custom-side">';
                $page_content .= '<p>' . strip_tags($contents[$key]) . '</p>';
                $page_content .= '</div>';
            }
            $key++;
        }
        $page_content .= '</div>';
    }
    return $page_content;
}

?>
