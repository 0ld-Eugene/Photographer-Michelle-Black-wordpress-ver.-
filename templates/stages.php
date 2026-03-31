
      <section class="stages">
        <div class="stages__container container">
          <h2 class="stages__title">
            <?php echo get_field('stages_title'); ?>
          </h2>
          <ol class="stages__list">
            <?php $stages_keys = ['stages_item_1', 'stages_item_2', 'stages_item_3', 'stages_item_4', 'stages_item_5',];
              $counter = 0;
              foreach ($stages_keys as $key) :
              $item = get_field($key);
              if (!$item) continue;
              $counter++;
              ?>
              <li class="stages__item" data-elem="<?php echo $counter; ?>">
              <h4 class="stages__item-title">
                <?php echo esc_html($item['title']); ?>
              </h4>
              <p class="stages__item-desc font-secondary">
                <?php echo esc_html($item['text']); ?>
              </p>
            </li>
            <?php endforeach; ?>
          </ol>
        </div>
        <div class="stages__images">
          <div class="stages__image-item" data-elem="1">
            <picture>
              <source srcset="<?php echo get_template_directory_uri(); ?>/images/stages-item-1.avif" type="image/avif">
              <source srcset="<?php echo get_template_directory_uri(); ?>/images/stages-item-1.webp" type="image/webp">
              <img src="<?php echo get_template_directory_uri(); ?>/images/stages-item-1.jpg" alt="">
            </picture>
          </div>
          <div class="stages__image-item" data-elem="2">
            <picture>
              <source srcset="<?php echo get_template_directory_uri(); ?>/images/stages-item-2.avif" type="image/avif">
              <source srcset="<?php echo get_template_directory_uri(); ?>/images/stages-item-2.webp" type="image/webp">
              <img src="<?php echo get_template_directory_uri(); ?>/images/stages-item-2.jpg" alt="">
            </picture>
          </div>
          <div class="stages__image-item" data-elem="3">
            <picture>
              <source srcset="<?php echo get_template_directory_uri(); ?>/images/stages-item-3.avif" type="image/avif">
              <source srcset="<?php echo get_template_directory_uri(); ?>/images/stages-item-3.webp" type="image/webp">
              <img src="<?php echo get_template_directory_uri(); ?>/images/stages-item-3.jpg" alt="">
            </picture>
          </div>
          <div class="stages__image-item" data-elem="4">
            <picture>
              <source srcset="<?php echo get_template_directory_uri(); ?>/images/stages-item-4.avif" type="image/avif">
              <source srcset="<?php echo get_template_directory_uri(); ?>/images/stages-item-4.webp" type="image/webp">
              <img src="<?php echo get_template_directory_uri(); ?>/images/stages-item-4.jpg" alt="">
            </picture>
          </div>
          <div class="stages__image-item" data-elem="5">
            <picture>
              <source srcset="<?php echo get_template_directory_uri(); ?>/images/stages-item-5.avif" type="image/avif">
              <source srcset="<?php echo get_template_directory_uri(); ?>/images/stages-item-5.webp" type="image/webp">
              <img src="<?php echo get_template_directory_uri(); ?>/images/stages-item-5.jpg" alt="">
            </picture>
          </div>
        </div>
      </section>