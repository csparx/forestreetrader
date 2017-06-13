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
      <!-- Top Nav Bar Begin -->
      <div class="bg-primary">
        <div class="container">
          <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12 top-bar-align">
              <div class="row">
                <a href="https://www.facebook.com/forestreetrader/">
                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 bg-hover-fetgreen">
                  <h4><i class="fa fa-facebook" aria-hidden="true"></i> <span class="visible-lg-inline-block">Facebook</span></h4>
                </div>
                </a>
                <a href="https://twitter.com/FE_Trader">
                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 bg-hover-fetgreen">
                  <h4><i class="fa fa-twitter" aria-hidden="true"></i> <span class="visible-lg-inline-block">Twitter</span></h4>
                </div>
                </a>
                <a href="https://www.youtube.com/channel/UCZ1p_k-W6gNKhIcunkvgKEw">
                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 bg-hover-fetgreen">
                  <h4><i class="fa fa-youtube" aria-hidden="true"></i> <span class="visible-lg-inline-block">Youtube</span></h4>
                </div>
                </a>
                <a href="https://plus.google.com/+ForesTreeEquipmentTraderMontgomery/">
                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 bg-hover-fetgreen">
                  <h4><i class="fa fa-google-plus" aria-hidden="true"></i> <span class="visible-lg-inline-block">Google+</span></h4>
                </div>
                </a>
                <a href="http://www.forestreetrader.com/fet-newsletter/">
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 bg-hover-fetgreen">
                  <h4><i class="fa fa-envelope" aria-hidden="true"></i> <span class="visible-lg-inline-block">Newsletter</span></h4>
                </div>
                </a>
              </div>
            </div>
            <a href="http://www.southernloggintimesmagazine.com">
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
              <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 top-bar-align">
                  <h4 class="text-right">In Partnership With </h4>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                  <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/SLT-Logo-green.png" />
                </div>
              </div>
            </div>
            </a>
          </div>
        </div>
      </div>
      <!-- Top Nav Bar End -->

      <!-- Main Nav Bar Begin -->
      <div class="container">
        <div class="row">
          <nav class="navbar navbar-light bg-faded main-nav">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
              <ul class="nav navbar-nav navbar-left">
                <li>
                  <a class="navbar-brand fet-logo" href="#">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/forestree-logo-with-blade-430x.png" width="430" height="95" alt="">
                  </a>
                </li>
              </ul>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
              <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <ul class="nav navbar-nav navbar-right main-nav-links">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Media Center</a></li>
                    <li><a href="#">Contact</a></li>
                    <li><a href="#">Login</a></li>
                  </ul>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <ul class="nav navbar-nav navbar-right main-nav-links">
                    <li><a class="bg-fetgreen" href="#">Create Listing</a></li>
                    <li><a class="bg-fetgreen" href="#">Browse Listings</a></li>
                    <li><a class="bg-fetorange" href="#">Auction</a></li>
                  </ul>
                </div>
              </div>

            </div>
          </nav>

        </div>
      </div>
      <!-- Main Nav Bar End -->
    </header>
