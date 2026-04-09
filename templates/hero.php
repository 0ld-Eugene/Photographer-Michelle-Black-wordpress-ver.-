<section class="hero">
  <div class="hero__container container">
    <?php if (!empty($args['title'])) : ?>
      <h1 class="hero__title--mobile">
        <?php echo esc_html($args['title']); ?>
      </h1>
    <?php endif; ?>
    <div class="hero__left">
      <div class="hero__title">
        <?php if (!empty($args['title'])) : ?>
          <h1 class="hero__title--desktop">
            <?php echo esc_html($args['title']); ?>
          </h1>
        <?php endif; ?>
        <div class="hero__inner">
          <?php if (!empty($args['item_left'])) : ?>
            <div class="hero__item item-left font-accent">
              <?php echo esc_html($args['item_left']); ?>
            </div>
          <?php endif; ?>
          <?php if (!empty($args['item_center'])) : ?>
            <div class="hero__item item-center font-accent">
              <?php echo esc_html($args['item_center']); ?>
            </div>
          <?php endif; ?>
          <div class="hero__item item-right font-accent">
            <?php if (!empty($args['item_right'])) : ?>
              <svg>
                <use xlink:href="<?php echo get_template_directory_uri(); ?>/icons/sprite.svg#hero-lens"></use>
              </svg>
              <span>
                <?php echo esc_html($args['item_right']); ?>
              </span>
            <?php endif; ?>
          </div>
        </div>
      </div>
      <div class="hero__text">
        <?php if (!empty($args['text_1'])) : ?>
          <p class="font-secondary">
            <?php echo esc_html($args['text_1']); ?>
          </p>
        <?php endif; ?>
        <?php if (!empty($args['text_2'])) : ?>
          <p class="font-secondary">
            <?php echo esc_html($args['text_2']); ?>
          </p>
        <?php endif; ?>
      </div>
    </div>

    <div class="hero__right">
      <?php
      $image = $args['image'] ?? null;

      if (is_array($image) && !empty($image['url'])) :
        $url  = $image['url'];
        $base = pathinfo($url, PATHINFO_FILENAME);
        $dir  = dirname($url);
        $alt = !empty($image['alt']) ? $image['alt'] : ($args['title'] ?? '');
      ?>

        <div class="hero__image">
          <picture>
            <source srcset="<?php echo esc_url($dir . '/' . $base . '.avif'); ?>" type="image/avif">
            <source srcset="<?php echo esc_url($dir . '/' . $base . '.webp'); ?>" type="image/webp">
            <img src="<?php echo esc_url($url); ?>" alt="<?php echo esc_attr($image['alt']); ?>" loading="lazy" decoding="async">
          </picture>
        </div>

      <?php endif; ?>
    </div>
  </div>
</section>