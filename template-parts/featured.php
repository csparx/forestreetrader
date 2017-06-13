<div class="container-fluid">
  <div class="row">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
      <h1 class="text-center fet-title">Featured Dealers</h1>
      <hr class="fet-green-line" />
      <div class="featured-dealers">
        <?php
        $images = glob(ABSPATH.'assets/');
        var_dump($images);
        ?>
      </div>
      <!-- <script type="javascript">
      jQuery(function ($) {
        $('.featured-dealers').slick({
          infinite: true,
          slidesToShow: 3,
          slidesToScroll: 3
        });
      });
      </script> -->

    </div>
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 fetorange-outline">
      <img class="img-responsive center-block" src="<?php echo get_template_directory_uri(); ?>/assets/img/JMWood-logo.png" />
      <h1 class="text-center fet-title">Click Here For Summer Auction Listings</h1>
    </div>
  </div>
</div>
