<!doctype html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="profile" href="https://gmpg.org/xfn/11" />
  <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Abel&family=Poppins:ital,wght@0,400;0,500;1,400;1,500&display=swap"
    rel="stylesheet">
  <link rel="preload" href="<?= get_stylesheet_directory_uri() ?>/dist/fonts/made-coachella-light.woff2" as="font"
    crossorigin="anonymous" />
  <?php wp_head(); ?>
  <style>
    [x-cloak] {
      display: none;
    }
  </style>
</head>

<body <?php body_class('relative overflow-x-hidden'); ?>>
  <?php wp_body_open(); ?>
  <header>
    <div id="header-container" class="fixed top-0 inset-x-0 z-20 transition-all duration-500">
      <div id="header" class="relative w-full bg-skin-light">
        <div class="container flex items-center py-4 sm:py-5 border-b border-black">
          <div class="mr-auto">
            <a href="<?= home_url() ?>" id="logo-container">
              <span class="sr-only">
                <?= bloginfo('name') ?> Logo
              </span>
              <div class="hidden sm:block">
              </div>
              <div class="w-4 block sm:hidden">
              </div>
            </a>
          </div>
          <?php if (!is_landing_page())
            get_template_part('components/global/header/desktop-menu/desktop-menu'); ?>
        </div>
      </div>
    </div>
  </header>
  <div id="smooth-content" class="overflow-visible w-full">
    <div id="header-placeholder" class="<?= $header_placeholder_class ?>"></div>
    <main>