</main>
<footer id="footer" class="footer">
   <div class="footer__container container">
      <div class="footer__patch">
         <picture>
            <source srcset="<?php echo get_template_directory_uri(); ?>/images/patch.avif" type="image/avif">
            <source srcset="<?php echo get_template_directory_uri(); ?>/images/patch.webp" type="image/webp">
            <img src="<?php echo get_template_directory_uri(); ?>/images/patch.png" alt="">
         </picture>
      </div>
      <div class="footer__inner">
         <div class="footer__photo footer__photo--mobile corner-border">
            <span class="corner top-left"></span>
            <span class="corner top-right"></span>
            <span class="corner bottom-left"></span>
            <span class="corner bottom-right"></span>
            <div class="footer__img-box">
               <picture>
                  <source srcset="<?php echo get_template_directory_uri(); ?>/images/footer.avif" type="image/avif">
                  <source srcset="<?php echo get_template_directory_uri(); ?>/images/footer.webp" type="image/webp">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/footer.png" alt="">
               </picture>
            </div>
         </div>
         <div class="footer__left">
            <div class="footer__contacts" id="contacts">
               <h2 class="footer__title">
                  Contact me
               </h2>
               <ul class="footer__socials">
                  <li class="footer__item">
                     <a href="#">Telegram</a>
                  </li>
                  <li class="footer__item">
                     <a href="#">Phone</a>
                  </li>
                  <li class="footer__item">
                     <a href="#">Email</a>
                  </li>
               </ul>
            </div>
            <div class="footer__photo corner-border">
               <span class="corner top-left"></span>
               <span class="corner top-right"></span>
               <span class="corner bottom-left"></span>
               <span class="corner bottom-right"></span>
               <div class="footer__img-box">
                  <picture>
                     <source srcset="<?php echo get_template_directory_uri(); ?>/images/footer.avif" type="image/avif">
                     <source srcset="<?php echo get_template_directory_uri(); ?>/images/footer.webp" type="image/webp">
                     <img src="<?php echo get_template_directory_uri(); ?>/images/footer.png" alt="">
                  </picture>
               </div>
            </div>
         </div>
         <div class="footer__right">
            <p class="footer__cta font-accent">
               <span class="line-1">Shall we capture</span>
               <span class="line-2">your life together?</span>
            </p>
            <button class="footer__btn corner-border" type="button" aria-label="Select a date for booking">
               <span class="corner top-left"></span>
               <span class="corner top-right"></span>
               <span class="corner bottom-left"></span>
               <span class="corner bottom-right"></span>
               Select a date
            </button>
         </div>
      </div>
      <div class="footer__bottom">
         <a href="#" class="footer__pivacy font-secondary">
            Privacy policy
         </a>
         <div class="footer__triangle">
            <!--  -->
            <svg>
               <use xlink:href="<?php echo get_template_directory_uri(); ?>/icons/sprite.svg#rect"></use>
            </svg>
         </div>
         <p class="footer__copyright font-secondary">
            &copy;2026. All rights reserved
         </p>
      </div>
      <div class="footer__stripe">
         <!--  width="1160" height="12"  -->
         <svg>
            <use xlink:href="<?php echo get_template_directory_uri(); ?>/icons/sprite.svg#bottom-line"></use>
         </svg>
      </div>
   </div>
</footer>
<!-- закрывающий враппер -->
</div>

<?php wp_footer(); ?>
</body>

</html>