<?php
get_header();

$fields = get_field('404_page', 'option');
?>

<section id="page-404">
  <div class="sm:px-6 mx-auto pb-8">
    <div class="relative">
      <div class="absolute inset-0">
        <?= get_img($fields['background_image'], '100vw') ?>
      </div>
      <div class="absolute inset-0 opacity-30 bg-gradient-to-t from-black to-transparent">
      </div>
      <div
        class="relative min-h-[350px] 2xl:min-h-[45vh] py-12 2xl:py-16 4k:py-20 container-banner flex items-end text-skin-light">
        <div>
          <h1 class="text-6xl sm:text-7xl 4k:text-8xl font-heading max-w-3xl">
            <?= $fields['title'] ?>
          </h1>
          <a href="<?= home_url() ?>" class="mt-16 btn-secondary">
            <?= $fields['button_text'] ?>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<?php
get_footer();