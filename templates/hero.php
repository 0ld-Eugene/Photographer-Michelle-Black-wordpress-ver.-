
<section class="hero">
  <div class="hero__container container">
    <?php $hero_title = get_field('hero_title'); ?>
    <?php if ($hero_title) : ?>
      <h1 class="hero__title--mobile">
        <?php echo esc_html($hero_title); ?>
      </h1>
    <?php endif; ?>
    <div class="hero__left">
      <div class="hero__title">
        <?php if ($hero_title) : ?>
        <h1 class="hero__title--desktop">
          <?php echo esc_html($hero_title); ?>
        </h1>
      <?php endif; ?>
      <div class="hero__inner">
        <div class="hero__item item-left font-accent">
          <?php echo get_field('hero_item_left'); ?>
        </div>
        <div class="hero__item item-center font-accent">
          <?php echo get_field('hero_item_center'); ?>
        </div>
        <div class="hero__item item-right font-accent">
          <svg>
            <use xlink:href="<?php echo get_template_directory_uri(); ?>/icons/sprite.svg#hero-lens"></use>
          </svg>
          <span>
            <?php echo get_field('hero_item_right'); ?>
          </span>
        </div>
      </div>
      </div>
      <div class="hero__text">
        <p class="font-secondary">
          <?php echo get_field('hero_text_1'); ?>
        </p>
        <p class="font-secondary">
          <?php echo get_field('hero_text_2'); ?>
        </p>
      </div>
    </div>

    <div class="hero__right">
      <?php
      $image = get_field('hero_image');

      if ($image):

        $url  = $image['url'];
        $base = pathinfo($url, PATHINFO_FILENAME);
        $dir  = dirname($url);
      ?>

        <div class="hero__image">
          <picture>
            <source srcset="<?php echo esc_url($dir . '/' . $base . '.avif'); ?>" type="image/avif">
            <source srcset="<?php echo esc_url($dir . '/' . $base . '.webp'); ?>" type="image/webp">
            <img src="<?php echo esc_url($url); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
          </picture>
        </div>

      <?php endif; ?>
    </div>
  </div>
</section>