    <!-- =====FOOTER ============-->
    <footer class="footer">
      <div class="footer-container container">
        <div class="footer-wrap">
          <div class="footer-logo-part">
            <a class="footer-logo logo link" href="./index.html"
              >web<span class="logo-light">Studio</span></a
            >
            <p class="footer-text text text-light">
              Increase the flow of customers and sales for your business with
              digital marketing & growth solutions.
            </p>
          </div>
          <div class="footer-media-part">
            <p class="footer-title text">Social media</p>
            <ul class="footer-icon-list list">
              <li class="footer-icon-item">
                <a class="footer-icon-link link" href="<?php the_field('instagram-link'); ?>">
                  <svg class="footer-icon" width="24" height="24">
                    <use href="<?php bloginfo('template_url'); ?>/assets/images/icons.svg#icon-instagram-1"></use>
                  </svg>
                </a>
              </li>
              <li class="footer-icon-item">
                <a class="footer-icon-link link" href="<?php the_field('twitter-link'); ?>">
                  <svg class="footer-icon" width="24" height="24">
                    <use href="<?php bloginfo('template_url'); ?>/assets/images/icons.svg#icon-twitter-1"></use>
                  </svg>
                </a>
              </li>
              <li class="footer-icon-item">
                <a class="footer-icon-link link" href="<?php the_field('fb-link'); ?>">
                  <svg class="footer-icon" width="24" height="24">
                    <use href="<?php bloginfo('template_url'); ?>/assets/images/icons.svg#icon-facebook-1"></use>
                  </svg>
                </a>
              </li>
              <li class="footer-icon-item">
                <a class="footer-icon-link link" href="<?php the_field('linkedin-link'); ?>">
                  <svg class="footer-icon" width="24" height="24">
                    <use href="<?php bloginfo('template_url'); ?>/assets/images/icons.svg#icon-linkedin-1"></use>
                  </svg>
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="footer-form-part">
          <p class="footer-title text">Subscribe</p>
          <form class="footer-form">
            <label class="footer-form-part-userdata">
              <input
                class="footer-form-part-input"
                type="email"
                name="user-email"
                required
                placeholder="E-mail"
              />
            </label>

            <button type="submit" class="footer-form-part-btn">
              Subscribe
              <svg class="footer-form-part-btn-icon" width="24" height="24">
                <use href="<?php bloginfo('template_url'); ?>/assets/images/icons.svg#icon-send">
                </use>
              </svg>
            </button>
 <!-- <?php echo do_shortcode('[contact-form-7 id="2788546" title="Subscribe form"]') ?>  -->
          </form>
        </div>
      </div>
    </footer>
    <?php wp_footer(); ?>

  </body>
</html>
