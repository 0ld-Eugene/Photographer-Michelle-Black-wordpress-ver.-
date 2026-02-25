
      <section id="about" class="about">
        <div class="about__container container">
          <div class="about__inner">
            <div class="about__content">
              <h2 class="about__title">
                <?php echo get_field('about_title'); ?>
              </h2>
              <div class="about__box">
                <div class="about__column about__column--left font-secondary">
                  <p class="about__text">
                    <?php echo get_field('text_1_left'); ?>
                  </p>
                  <p class="about__text">
                    <?php echo get_field('text_2_left'); ?>
                  </p>
                </div>
                <div class="about__column about__column--right font-secondary">
                  <p class="about__text">
                    <?php echo get_field('text_1_right'); ?>
                  </p>
                  <p class="about__text">
                    <?php echo get_field('text_2_right'); ?>
                  </p>
                </div>
              </div>
            </div>
            <p class="about__decor font-accent">
              <?php echo get_field('about_text_decor'); ?>
            </p>
          </div>
        </div>
      </section>