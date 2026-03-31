<section class="cost">
  <div class="cost__container container">
    <div class="cost__info">
      <div class="cost__top">
        <div class="cost__title">
          <h2>
            <?php echo get_field('cost_title'); ?>
          </h2>
          <p>
            <?php echo get_field('cost_text_1'); ?>
          </p>
        </div>
        <p class="cost__text">
          <?php echo get_field('cost_text'); ?>
        </p>
      </div>
      <div class="cost__svg">
        <svg viewBox="0 0 296 261">
          <use xlink:href="<?php echo get_template_directory_uri(); ?>/icons/sprite.svg#select"></use>
        </svg>
      </div>
      <div class="cost__bottom">
        <span class="cost__fps">
          <?php echo get_field('cost_text_2'); ?>
        </span>
        <div class="cost__quality">
          <span class="cost__4k">
            <?php echo get_field('cost_text_3'); ?>
          </span>
          <span class="cost__hd">
            <?php echo get_field('cost_text_4'); ?>
          </span>
        </div>
      </div>
    </div>
    <div class="cost__items">
      <?php
    $currency = get_field('cost_currency') ?: '$';
    $item_keys = ['cost_item_1', 'cost_item_2', 'cost_item_3', 'cost_item_4'];
    $image_names = [
        'cost_item_1' => 'price-portrait',
        'cost_item_2' => 'price-landscape',
        'cost_item_3' => 'price-fashion',
        'cost_item_4' => 'price-street',
    ];

    foreach ($item_keys as $key) :
        $item = get_field($key);
        if (!$item) continue;

        // Получаем данные изображения: может быть ID или массив
        $image_data = $item['image'];

        // Если это ID (число), получаем полный массив через ACF-функцию
        if (is_numeric($image_data)) {
            $image_data = acf_get_attachment($image_data);
        }

        // Если после преобразования это не массив или нет URL – пропускаем карточку
        if (!is_array($image_data) || empty($image_data['url'])) {
            continue;
        }

        $url   = $image_data['url'];
        $base  = pathinfo($url, PATHINFO_FILENAME);
        $dir   = dirname($url);
        $data_src_name = $image_names[$key];
    ?>
      <div class="cost__item">
        <header class="cost__item-header">
          <div class="cost__item-title">
            <?php echo esc_html($item['title']); ?>
          </div>
          <div class="cost__item-price">
            <?php echo esc_html($item['price'] . $currency); ?>
          </div>
        </header>
        <div class="cost__item-image corner-border"
          data-src="<?php echo get_template_directory_uri(); ?>/images/<?php echo $data_src_name; ?>.png">
          <span class="corner top-left"></span>
          <span class="corner top-right"></span>
          <span class="corner bottom-left"></span>
          <span class="corner bottom-right"></span>
          <picture>
            <source srcset="<?php echo esc_url($dir . '/' . $base . '.avif'); ?>" type="image/avif">
            <source srcset="<?php echo esc_url($dir . '/' . $base . '.webp'); ?>" type="image/webp">
            <img src="<?php echo esc_url($url); ?>" alt="<?php echo esc_attr($image_data['alt']); ?>">
          </picture>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>