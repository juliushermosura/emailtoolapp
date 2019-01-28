<?php

function is_page(string $page_name) : bool
{
    return Request::path() === $page_name;
}

function generate_sidebar_navlinks($navigation) : string
{
    $output  = "<ul class='navigation'>";

    foreach($navigation as $nav_item) {
        if ($nav_item['type'] == 'title') {
            $output .= '<span class="sidebar__title">' . $nav_item['label'] . '</span>';
            continue;
        }

        $output .= is_page($nav_item['id']) ? '<li class="navigation__active"><a href>' : '<li><a href="' . $nav_item['url'] . '">';
        $output .= '<i class="zmdi zmdi-' . $nav_item['icon'] . '"></i> ' . $nav_item['label'] . '</a></li>';
    }

    $output .= "</ul>";

    return $output;
}