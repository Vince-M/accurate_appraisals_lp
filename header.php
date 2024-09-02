

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <link rel="icon" href="<?php echo esc_url( get_template_directory_uri() ); ?>/img/favicon.ico">

  <title>Accurate Appraisals</title>

  <?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>


  <!-- HEADER
  =================================================== -->
  <header class="header" roled="banner">
    <nav>
      <div class="wrapper wrapper_brand">
       <a href="<?php echo site_url(); ?>"> <img class="brandlogo" src="<?php echo get_theme_file_uri() ?>/img/accurateLogo.svg" width="240" height="60" alt="Accurate Appraisals"></a>
      </div>
    </nav>
  </header>
  <!-- ============================================== -->

  <!-- MAIN
  =================================================== -->
  <main role="main">