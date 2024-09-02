<?php get_header(); ?>

    <!-- HERO / FEATURE IMAGE
    ================================================== -->
    <div class="container-fluid">
      <section class="row" role="banner" data-type="background" data-speed="2">
        <?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
        <div class="col-md-12 hero jumbo-image" style="background: url('<?php echo $backgroundImg[0]; ?>') no-repeat; background-position: center;
            background-size: cover; left: 50%; padding: 0; position: relative;-webkit-transform: translateX(-50%);transform: translateX(-50%);
            border-bottom: 10px solid #86b043; margin-top: 0px; margin-bottom: 0px; height: 350px;overflow: hidden; clear: both;" >
        </div> <!-- hero jumbo-image -->
      </section><!-- .section -->
    </div> <!-- container-fluid -->


    <!-- CONTENT
    ================================================== -->
    <div class="wrapper">
      <div class="main">

        <!-- MAIN SECTION 
        ================================================== -->
        <div class="wrapper wrapper__text">
          <section id="primary-content" class="primary-content">

                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                <?php the_content(); ?>

                <?php endwhile; else: ?>

                <p><?php _e( 'Sorry, no pages found' ); ?></p>

                <?php endif; ?>
        
          </section> <!-- aboutSection -->
        </div>
        <!-- MAIN SECTION ENDS -->

      </div> <!-- main -->
    </div> <!-- wrapper -->
    

    

   <?php get_footer(); ?>