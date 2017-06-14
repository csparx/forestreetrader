<div class="container-fluid">
  <div class="row flex">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 bg-lightgrey">
      <h1 class="text-center fet-title">Featured Dealers</h1>
      <hr class="fet-green-line" />
      <div class="featured-dealers">
        <div><img src="<?php echo get_template_directory_uri(); ?>/assets/img/featured-dealers/Calvalier-web.jpg" /></div>
        <div><img src="<?php echo get_template_directory_uri(); ?>/assets/img/featured-dealers/Carter-web.jpg" /></div>
        <div><img src="<?php echo get_template_directory_uri(); ?>/assets/img/featured-dealers/Chambers-web.jpg" /></div>
        <div><img src="<?php echo get_template_directory_uri(); ?>/assets/img/featured-dealers/Doggett-web.jpg" /></div>
        <div><img src="<?php echo get_template_directory_uri(); ?>/assets/img/featured-dealers/Edwardstree-web.jpg" /></div>
        <div><img src="<?php echo get_template_directory_uri(); ?>/assets/img/featured-dealers/EEB-web.jpg" /></div>
        <div><img src="<?php echo get_template_directory_uri(); ?>/assets/img/featured-dealers/Equipmentparts-web.jpg" /></div>
        <div><img src="<?php echo get_template_directory_uri(); ?>/assets/img/featured-dealers/ForestryFirst-web.jpg" /></div>
        <div><img src="<?php echo get_template_directory_uri(); ?>/assets/img/featured-dealers/Forestryparts-web.jpg" /></div>
        <div><img src="<?php echo get_template_directory_uri(); ?>/assets/img/featured-dealers/HPS-web.jpg" /></div>
      </div>
      <script type="text/javascript">
      jQuery(function ($) {
        $('.featured-dealers').slick({
          infinite: true,
          slidesToShow: 3,
          slidesToScroll: 1,
          autoplay: true,
          autoplaySpeed: 2000,

        });
      });
      </script>

    </div>
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 fetorange-outline">
      <h1><img class="img-responsive center-block" src="<?php echo get_template_directory_uri(); ?>/assets/img/JMWood-logo.png" /></h1>
      <h1 class="text-center fet-title" id="jmwood-title">Click Here For Summer Auction Listings</h1>
    </div>
  </div>
</div>
