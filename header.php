<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> >
  <head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewpoint" content="width=device-width, intial-scale=1" />
    <title><?php wp_title(); ?></title>

    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
    <script src="https://use.fontawesome.com/ef8c7632d4.js"></script>

    <?php wp_head(); ?>


  </head>
  <body>
    <header>
      <div class="container-fluid">
        <div class="row bg-primary">
          <div class="col-lg-7 col-lg-offset-1 col-md-7 col-md-offset-1  col-sm-7 col-sm-offset-1  col-xs-7 col-xs-offset-1 ">
            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2"><h4><i class="fa fa-facebook" aria-hidden="true"></i> <span class="visible-lg">Facebook</span></h4></div>
            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2"><h4><i class="fa fa-twitter" aria-hidden="true"></i> <span class="visible-lg">Twitter</span></h4></div>
            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2"><h4><i class="fa fa-youtube" aria-hidden="true"></i> <span class="visible-lg">Youtube</span></h4></div>
            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2"><h4><i class="fa fa-google-plus" aria-hidden="true"></i> <span class="visible-lg">Google+</span></h4></div>
            <div class="col-lg-3 col-md-2 col-sm-2 col-xs-2"><h4><i class="fa fa-envelope" aria-hidden="true"></i> <span class="visible-lg">Newsletter</span></h4></div>
          </div>

          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6"><h4>In Partnership With </h4></div>
            <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5"><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/SLT-Logo-green.png" /></div>
            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
          </div>

        </div>
      </div>
    </header>
