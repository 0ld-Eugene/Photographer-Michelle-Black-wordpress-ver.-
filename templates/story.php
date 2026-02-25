      <section class="story">
        <div class="story__container container">
          <h3 class="story__title">
            <?php echo get_field('story_title'); ?>
            <span>
              <?php echo get_field('story_title_span'); ?>
            </span>
          </h3>
          <div class="story__content">
            <div class="story__block-a block-a">
              <p class="block-a__text font-accent">
                <?php echo get_field('block_a_text'); ?>
              </p>
              <div class="block-a__decor">
                <svg>
                  <use xlink:href="<?php echo get_template_directory_uri(); ?>/icons/sprite.svg#lens"></use>
                </svg>
              </div>
            </div>
            <div class="story__block-b block-b">
              <h4 class="block-b__title">
                <?php echo get_field('block_b_title'); ?>
              </h4>
              <div class="block-b__text font-secondary">
                <p>
                  <?php echo get_field('block_b_text_1'); ?>
                </p>
                <p>
                  <?php echo get_field('block_b_text_2'); ?>
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>
