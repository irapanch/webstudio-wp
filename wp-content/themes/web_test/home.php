<?php
/*
Template Name: home
*/
?>
<?php get_header(); ?>
    <!-- =================MAIN =====================-->
    <main>
      <!--====== HERO=================== -->
      <section class="hero-body">
        <div class="hero-container container">
          <h1 class="hero-title"><?php the_field('title'); ?></h1>
          <button class="hero-button" type="button" data-modal-open>
            Order Service
          </button>
        </div>
      </section>
      <!-- ===========PROPERTIES========================= -->
      <section class="properties-body">
        <div class="container">
          <h2 class="properties-title visually-hidden">Properties</h2>
          <ul class="properties-list list">
            <li class="properties-item">
              <div class="properties-icons">
                <svg class="properties-icon" width="64" height="64">
                  <use href="<?php bloginfo('template_url'); ?>/assets/images/icons.svg#icon-antenna-1"></use>
                </svg>
              </div>
              <h3 class="properties-name title-third">Strategy</h3>
              <p class="properties-text text">
                Our goal is to identify the business problem to walk away with
                the perfect and creative solution.
              </p>
            </li>
            <li class="properties-item">
              <div class="properties-icons">
                <svg class="properties-icon" width="64" height="64">
                  <use href="<?php bloginfo('template_url'); ?>/assets/images/icons.svg#icon-clock-1"></use>
                </svg>
              </div>
              <h3 class="properties-name title-third">Punctuality</h3>
              <p class="properties-text text">
                Bring the key message to the brand's audience for the best price
                within the shortest possible time.
              </p>
            </li>
            <li class="properties-item">
              <div class="properties-icons">
                <svg class="properties-icon" width="64" height="64">
                  <use href="<?php bloginfo('template_url'); ?>/assets/images/icons.svg#icon-diagram-1"></use>
                </svg>
              </div>
              <h3 class="properties-name title-third">Diligence</h3>
              <p class="properties-text text">
                Research and confirm brands that present the strongest digital
                growth opportunities and minimize risk.
              </p>
            </li>
            <li class="properties-item">
              <div class="properties-icons">
                <svg class="properties-icon" width="64" height="64">
                  <use href="<?php bloginfo('template_url'); ?>/assets/images/icons.svg#icon-astronaut-1"></use>
                </svg>
              </div>
              <h3 class="properties-name title-third">Technologies</h3>
              <p class="properties-text text">
                Design practice focused on digital experiences. We bring forth a
                deep passion for problem-solving.
              </p>
            </li>
          </ul>
        </div>
      </section>

      <!--==================== ACTIVITIES ================-->
      <section class="activities-body">
        <div class="container">
          <h2 class="activities-title title-second">What are we doing</h2>
          <ul class="activities-list list">
            <li class="activities-item">
              <img
              srcset="<?php bloginfo('template_url'); ?>/assets/images/activities/img1@2x.jpg 2x"
              class="activities-image"
              src="<?php bloginfo('template_url'); ?>/assets/images/activities/img1.jpg"
              alt="Monitor"
              width="360"
              height="300"
              />
            </li>
            <li class="activities-item">
              <img
                srcset="<?php bloginfo('template_url'); ?>/assets/images/activities/img2@2x.jpg 2x"
                class="activities-image"
                src="<?php bloginfo('template_url'); ?>/assets/images/activities/img2.jpg"
                alt="Smartphones"
                width="360"
                height="300"
              />
            </li>
            <li class="activities-item">
              <img 
              srcset="<?php bloginfo('template_url'); ?>/assets/images/activities/img3@2x.jpg 2x"
                class="activities-image"
                src="<?php bloginfo('template_url'); ?>/assets/images/activities/img3.jpg"
                alt="Smartphone and laptop"
                width="360"
                height="300"
              />
            </li>
          </ul>
        </div>
      </section>

      <!-- =================TEAM ===========-->
      <section class="team-body">
        <div class="container">
          <h2 class="team-title title-second">Our Team</h2>
          <ul class="team-list list">

<!-- --------------- LI -->
<?php
global $post;
$my_posts = get_posts( [
	'numberposts' => -1,
	
] );
if( $my_posts){
foreach( $my_posts as $post ){
	setup_postdata( $post );
  ?>

	
  <li class="team-item">
  <?php the_post_thumbnail(
    array(264,260),
    array(
      'class' => 'team-image',
    )
  ); ?>
  <!-- <img
    class="team-image"
    srcset="<?php bloginfo('template_url'); ?>/assets/images/employees/card1@2x.jpg 2x"
    src="<?php bloginfo('template_url'); ?>/assets/images/employees/card1.jpg"
    alt="The person"
    width="264"
    height="260"
  /> -->
  <div class="team-card">
    <h3 class="team-name title-third"><?php the_title(); ?></h3>
    <p class="team-text text"><?php the_content(); ?></p>
    <ul class="team-icon-list list">
      <li class="team-icon-item">
        <a class="team-icon-link link" href="">
          <svg class="team-icon" width="16" height="16">
            <use href="<?php bloginfo('template_url'); ?>/assets/images/icons.svg#icon-instagram-1"></use>
          </svg>
        </a>
      </li>
      <li class="team-icon-item">
        <a class="team-icon-link link" href="">
          <svg class="team-icon" width="16" height="16">
            <use href="<?php bloginfo('template_url'); ?>/assets/images/icons.svg#icon-twitter-1"></use>
          </svg>
        </a>
      </li>
      <li class="team-icon-item">
        <a class="team-icon-link link" href="">
          <svg class="team-icon" width="16" height="16">
            <use href="<?php bloginfo('template_url'); ?>/assets/images/icons.svg#icon-facebook-1"></use>
          </svg>
        </a>
      </li>
      <li class="team-icon-item">
        <a class="team-icon-link link" href="">
          <svg class="team-icon" width="16" height="16">
            <use href="<?php bloginfo('template_url'); ?>/assets/images/icons.svg#icon-linkedin-1"></use>
          </svg>
        </a>
      </li>
    </ul>
  </div>
</li>
<?php
}}

wp_reset_postdata(); // reset $post

?>


 
          </ul>
        </div>
      </section>
      <!-- =============CUSTOMER=========== -->
      <section class="customers-body">
        <div class="container">
          <h2 class="customers-title title-second">Customers</h2>
          <ul class="customers-list list">
            <li class="customers-item">
              <a class="customers-link link" href="">
                <svg class="customers-icon" width="104" height="56">
                  <use href="<?php bloginfo('template_url'); ?>/assets/images/icons.svg#icon-logo1"></use>
                </svg>
              </a>
            </li>
            <li class="customers-item">
              <a class="customers-link link" href="">
                <svg class="customers-icon" width="104" height="56">
                  <use href="<?php bloginfo('template_url'); ?>/assets/images/icons.svg#icon-logo2"></use>
                </svg>
              </a>
            </li>
            <li class="customers-item">
              <a class="customers-link link" href="">
                <svg class="customers-icon" width="104" height="56">
                  <use href="<?php bloginfo('template_url'); ?>/assets/images/icons.svg#icon-logo3"></use>
                </svg>
              </a>
            </li>
            <li class="customers-item">
              <a class="customers-link link" href="">
                <svg class="customers-icon" width="104" height="56">
                  <use href="<?php bloginfo('template_url'); ?>/assets/images/icons.svg#icon-logo4"></use>
                </svg>
              </a>
            </li>
            <li class="customers-item">
              <a class="customers-link link" href="">
                <svg class="customers-icon" width="104" height="56">
                  <use href="<?php bloginfo('template_url'); ?>/assets/images/icons.svg#icon-logo5"></use>
                </svg>
              </a>
            </li>
            <li class="customers-item">
              <a class="customers-link link" href="">
                <svg class="customers-icon" width="104" height="56">
                  <use href="<?php bloginfo('template_url'); ?>/assets/images/icons.svg#icon-logo6"></use>
                </svg>
              </a>
            </li>
          </ul>
        </div>
      </section>
    </main>
    <!-- =======  /MAIN ========== -->
       <!-- ========= MODAL WinDOW -->
       <div class="backdrop is-hidden" data-modal>
      <div class="backdrop-modal">
        <button type="button" class="backdrop-modal-btn" data-modal-close>
          <svg class="backdrop-modal-btn-icon" width="8" height="8">
            <use href="<?php bloginfo('template_url'); ?>/assets/images/icons.svg#icon-close-modal"></use>
          </svg>
        </button>
        <p class="backdrop-modal-text">
          Leave your contacts and we will call you back
        </p>

        <form class="backdrop-modal-form">
          <div class="backdrop-modal-form-wrapper">
            <label class="backdrop-modal-form-userdata" for="user-name" >
              <span class="backdrop-modal-form-input-desc">Name</span>
            </label>
              <div class="backdrop-modal-form-input-wrapper">
                <input
                  class="backdrop-modal-form-input"
                  type="text"
                  name="user-name"
                  id="user-name"
                  required
                  pattern="^[a-zA-Z]+$"
                  minlength="2"
                />
                <svg
                  class="backdrop-modal-form-input-icon"
                  width="18"
                  height="24"
                >
                  <use href="<?php bloginfo('template_url'); ?>/assets/images/icons.svg#icon-person"></use>
                </svg>
              </div>
            </div>
          <div class="backdrop-modal-form-wrapper">
            <label class="backdrop-modal-form-userdata" for="user-phone-number">
              <span class="backdrop-modal-form-input-desc">Phone</span>
            </label>
              <div class="backdrop-modal-form-input-wrapper">
                <input
                  class="backdrop-modal-form-input"
                  type="tel"
                  name="user-phone-number"
                  id="user-phone-number"
                  required
                  pattern="[0-9]{10}"
                />
                <svg
                  class="backdrop-modal-form-input-icon"
                  width="18"
                  height="24"
                >
                  <use href="<?php bloginfo('template_url'); ?>/assets/images/icons.svg#icon-phone"></use>
                </svg>
              </div>
          </div>
          <div class="backdrop-modal-form-wrapper">
            <label class="backdrop-modal-form-userdata" for="user-email">
              <span class="backdrop-modal-form-input-desc">Email</span>
            </label>
              <div class="backdrop-modal-form-input-wrapper">
                <input
                  class="backdrop-modal-form-input"
                  type="email"
                  name="user-email"
                  id="user-email"
                />
                <svg
                  class="backdrop-modal-form-input-icon"
                  width="18"
                  height="24"
                >
                  <use href="<?php bloginfo('template_url'); ?>/assets/images/icons.svg#icon-email"></use>
                </svg>
              </div>

          </div>
          <div class="backdrop-modal-form-wrapper textarea">
            <label class="backdrop-modal-form-userdata" for="user-comment">
              <span class="backdrop-modal-form-input-desc">Comment</span>
            </label>
              <textarea
                class="backdrop-modal-form-textarea"
                name="user-comment"
                placeholder="Text input"
                id="user-comment"
              ></textarea>
          </div>
         
          <div class="backdrop-modal-form-wrapper checkbox">
            <input
            id="user-privacy"
            class="backdrop-modal-form-checkbox-input visually-hidden"
            type="checkbox"
            name="user-privacy"
            value="true"
            required
            />
            <label class="backdrop-modal-form-checkbox" for="user-privacy"
              >
              <span class="backdrop-modal-form-check">
                <svg
                  class="backdrop-modal-form-check-icon"
                  width="10"
                  height="8"
                  >
                    <use href="<?php bloginfo('template_url'); ?>/assets/images/icons.svg#icon-check-mark"></use>
                  </svg>
              </span>
              I accept the terms and conditions of the
              <a
              class="backdrop-modal-form-link"
              href=""
              >
              Privacy Policy
              </a>
            </label>
          </div>

          <button type="submit" class="backdrop-modal-form-btn">
            Send
          </button>
        </form>
      </div>
    </div>
<?php get_footer(); ?>