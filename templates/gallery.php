<section id="gallery" class="gallery">
  <div class="gallery__container container">
    <div class="gallery__tabs-wrapper">
      <div class="gallery__tabs-buttons" role="tablist" aria-label="Photo categories">

        <?php if (!empty($args['btn_1'])) : ?>
          <button class="gallery__tabs-btn" data-tab="landscape" type="button" role="tab"
            aria-controls="landscape-panel" id="landscape-tab">
            <?php echo esc_html($args['btn_1']); ?>
          </button>
        <?php endif; ?>

        <span class="gallery__tabs-btn--separator">#</span>

        <?php if (!empty($args['btn_2'])) : ?>
          <button class="gallery__tabs-btn" data-tab="fashion" type="button" role="tab"
            aria-controls="fashion-panel" id="fashion-tab">
            <?php echo esc_html($args['btn_2']); ?>
          </button>
        <?php endif; ?>

        <span class="gallery__tabs-btn--separator">#</span>

        <?php if (!empty($args['btn_3'])) : ?>
          <button class="gallery__tabs-btn active" data-tab="street" type="button" role="tab"
            aria-controls="street-panel" id="street-tab">
            <?php echo esc_html($args['btn_3']); ?>
          </button>
        <?php endif; ?>

        <span class="gallery__tabs-btn--separator">#</span>

        <?php if (!empty($args['btn_4'])) : ?>
          <button class="gallery__tabs-btn" data-tab="portrait" type="button" role="tab"
            aria-controls="portrait-panel" id="portrait-tab">
            <?php echo esc_html($args['btn_4']); ?>
          </button>
        <?php endif; ?>

      </div>
      <div class="gallery__tabs-inner">

        <div class="gallery__tabs-images" data-tab="landscape" id="landscape-panel" role="tabpanel">
          <div class="gallery__tabs-track">

            <?php
            // 1. Достаем нашу группу полей для таба
            $tab_group = $args['tab_1'] ?? null;

            // 2. Проверяем, что группа существует и это массив
            if (is_array($tab_group)) :

              // 3. Запускаем цикл по 4 слайдам
              for ($i = 1; $i <= 4; $i++) :
                // Теперь мы ищем картинку ВНУТРИ группы $tab_group
                $img_key = "img_{$i}";
                $slide_img = $tab_group[$img_key] ?? null;

                if (is_array($slide_img) && !empty($slide_img['url'])) :
                  $url  = $slide_img['url'];
                  $base = pathinfo($url, PATHINFO_FILENAME);
                  $dir  = dirname($url);
                  $alt  = !empty($slide_img['alt']) ? $slide_img['alt'] : 'Слайд галереи';
            ?>
                  <div class="gallery__tabs-slide">
                    <picture>
                      <source srcset="<?php echo esc_url($dir . '/' . $base . '.avif'); ?>" type="image/avif">
                      <source srcset="<?php echo esc_url($dir . '/' . $base . '.webp'); ?>" type="image/webp">
                      <img src="<?php echo esc_url($url); ?>" alt="<?php echo esc_attr($alt); ?>">
                    </picture>
                  </div>
            <?php
                endif;
              endfor;
            endif;
            ?>

          </div>
        </div>
        <div class="gallery__tabs-images" data-tab="fashion" id="fashion-panel" role="tabpanel"
          aria-labelledby="fashion-tab">
          <div class="gallery__tabs-track">

            <?php
            // 1. Достаем нашу группу полей для первого таба
            $tab_group = $args['tab_2'] ?? null;

            // 2. Проверяем, что группа существует и это массив
            if (is_array($tab_group)) :

              // 3. Запускаем цикл по 4 слайдам
              for ($i = 1; $i <= 4; $i++) :
                // Теперь мы ищем картинку ВНУТРИ группы $tab_group
                $img_key = "img_{$i}";
                $slide_img = $tab_group[$img_key] ?? null;

                if (is_array($slide_img) && !empty($slide_img['url'])) :
                  $url  = $slide_img['url'];
                  $base = pathinfo($url, PATHINFO_FILENAME);
                  $dir  = dirname($url);
                  $alt  = !empty($slide_img['alt']) ? $slide_img['alt'] : 'Слайд галереи';
            ?>
                  <div class="gallery__tabs-slide">
                    <picture>
                      <source srcset="<?php echo esc_url($dir . '/' . $base . '.avif'); ?>" type="image/avif">
                      <source srcset="<?php echo esc_url($dir . '/' . $base . '.webp'); ?>" type="image/webp">
                      <img src="<?php echo esc_url($url); ?>" alt="<?php echo esc_attr($alt); ?>">
                    </picture>
                  </div>
            <?php
                endif;
              endfor;
            endif;
            ?>
          </div>
        </div>
        <div class="gallery__tabs-images active" data-tab="street" id="street-panel" role="tabpanel"
          aria-labelledby="street-tab">
          <div class="gallery__tabs-track">

            <?php
            // 1. Достаем нашу группу полей для таба
            $tab_group = $args['tab_3'] ?? null;

            // 2. Проверяем, что группа существует и это массив
            if (is_array($tab_group)) :

              // 3. Запускаем цикл по 4 слайдам
              for ($i = 1; $i <= 4; $i++) :
                // Теперь мы ищем картинку ВНУТРИ группы $tab_group
                $img_key = "img_{$i}";
                $slide_img = $tab_group[$img_key] ?? null;

                if (is_array($slide_img) && !empty($slide_img['url'])) :
                  $url  = $slide_img['url'];
                  $base = pathinfo($url, PATHINFO_FILENAME);
                  $dir  = dirname($url);
                  $alt  = !empty($slide_img['alt']) ? $slide_img['alt'] : 'Слайд галереи';
            ?>
                  <div class="gallery__tabs-slide">
                    <picture>
                      <source srcset="<?php echo esc_url($dir . '/' . $base . '.avif'); ?>" type="image/avif">
                      <source srcset="<?php echo esc_url($dir . '/' . $base . '.webp'); ?>" type="image/webp">
                      <img src="<?php echo esc_url($url); ?>" alt="<?php echo esc_attr($alt); ?>">
                    </picture>
                  </div>
            <?php
                endif;
              endfor;
            endif;
            ?>
          </div>
        </div>
        <div class="gallery__tabs-images" data-tab="portrait" id="portrait-panel" role="tabpanel"
          aria-labelledby="portrait-tab">
          <div class="gallery__tabs-track">
            <?php
            // 1. Достаем нашу группу полей для таба
            $tab_group = $args['tab_4'] ?? null;

            // 2. Проверяем, что группа существует и это массив
            if (is_array($tab_group)) :

              // 3. Запускаем цикл по 4 слайдам
              for ($i = 1; $i <= 4; $i++) :
                // Теперь мы ищем картинку ВНУТРИ группы $tab_group
                $img_key = "img_{$i}";
                $slide_img = $tab_group[$img_key] ?? null;

                if (is_array($slide_img) && !empty($slide_img['url'])) :
                  $url  = $slide_img['url'];
                  $base = pathinfo($url, PATHINFO_FILENAME);
                  $dir  = dirname($url);
                  $alt  = !empty($slide_img['alt']) ? $slide_img['alt'] : 'Слайд галереи';
            ?>
                  <div class="gallery__tabs-slide">
                    <picture>
                      <source srcset="<?php echo esc_url($dir . '/' . $base . '.avif'); ?>" type="image/avif">
                      <source srcset="<?php echo esc_url($dir . '/' . $base . '.webp'); ?>" type="image/webp">
                      <img src="<?php echo esc_url($url); ?>" alt="<?php echo esc_attr($alt); ?>">
                    </picture>
                  </div>
            <?php
                endif;
              endfor;
            endif;
            ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>