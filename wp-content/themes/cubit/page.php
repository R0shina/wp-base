<?php
$page_components = (array) get_field('page_components');

if ($page_components[0]) {
  $layouts = array_map(function ($page_component) {
    return $page_component['acf_fc_layout'];
  }, $page_components);
  if (count(array_intersect(['reviews'], $layouts))) {
    add_action('wp_enqueue_scripts', 'enqueue_swiper');
  }
}

get_header();

if ($page_components) {
  foreach ($page_components as $page_component) {
    $component_name = str_replace('_', '-', $page_component['acf_fc_layout']);
    $fields = $page_component;
    $path = get_page_component_path($component_name);
    if (file_exists($path)) {
      include $path;
    }
  }
}


get_footer();