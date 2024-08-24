<?php get_header(); ?>
  

    <!-- HERO
    =================================================== -->
    <section class="hero feature-image" role="banner" data-type="background" data-speed="2">
      <div class="wrapper hero__callout">
        <h1>Problems with your MPI claim?</h1>
        <p>Not getting a fair offer for your Total Loss claim?</p>
        <p>Was your repair not done to your satisfaction?</p>
        <p>Are you being overcharged PST for a recent vehicle purchase?</p>
        <h2>We can help.</h2>
      </div> <!-- hero__headline -->

      <div class="hero__image">
      </div> <!-- hero jumbo-image -->


    </section> <!-- hero feature-image -->
    <!-- ============================================== -->

    <!-- OUR GUARANTEE
    =================================================== -->
    <section class="mainText">
      <h2 class="visually-hidden">Guarantee</h2>
      <article class="wrapper">
        <div class="wrapper__text">
          <p>If any of these issues describe your situation, <strong>YOU HAVE THE RIGHT</strong> to an independent appeal through arbitration / appraisal.</p>
          <p>That's what we do. Accurate Appraisals has over 45 years experience and we have settled thousands of successful appraisals and arbitrations for our clients.</p>
          <h2>Our guarantee…If we don't succeed…you don't pay.</h2>
          <h3>Before you settle for less, talk to us. </h3>
        </div><!-- wrapper__text -->
      </article> <!-- wrapper -->
    </section> <!-- mainText -->
    <!-- ============================================== -->

    <!-- VINTAGE CARS
    =================================================== -->
    <section class="wrapper__fullWidth--section">
      <h2 class="visually-hidden">Vintage Car</h2>
      <article class="wrapper">
        <div class="vintage_section">
          <div class="vintage_car">
            <img src="<?php echo get_theme_file_uri() ?>/img/vintage_car.jpg" alt="">
          </div>
          <div class="vintage_text">
            <h2>Need a Vintage or Collector car appraisal?</h2>
            <p>Do you need an actual cash value for your “baby” in case of fire or theft or unscrupulous insurance companies?</p>
            <h3>We can help with that too.</h3>
          </div>
        </div>
        <div class="sm-wrapper">
          <h2>
            Protect yourself and your vehicle's value. In writing. By pros.
          </h2>
        </div>
      </article>
    </section>
    <!-- ============================================== -->

    <!-- SEPARATOR
    =================================================== -->
    <div class="separator-wrapper">
      <hr class="separator">
    </div>
    
    <!-- ============================================== -->

    <!-- FORM
    =================================================== -->
    <section>
      <h2 class="visually-hidden">Contact Form</h2>
      <aside>
        <div class="wrapper wrapper__text contact">
        <?php if (have_posts() ) : while (have_posts() ) : the_post(); ?>

<?php the_content(); ?>

<?php endwhile; endif; ?>
        </div>
        
      </aside>
    </section>
    <!-- ============================================== -->



<?php get_footer(); ?>