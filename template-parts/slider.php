<div class="container-fluid">
  <div class="row">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Wrapper for slides -->
      <div class="carousel-inner">
        <div class="item active">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/slider/Forestree-slider-01.jpg">
        </div>

        <div class="item">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/slider/Forestree-slider-02.jpg">
        </div>

        <div class="item">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/slider/Forestree-slider-03.jpg">
        </div>
        <div class="item">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/slider/Forestree-slider-04.jpg">
        </div>
        <div class="item">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/slider/Forestree-slider-05.jpg">
        </div>
        <div class="item">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/slider/Forestree-slider-06.jpg">
        </div>
        <div class="item">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/slider/Forestree-slider-07.jpg">
        </div>
        <div class="item">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/slider/Forestree-slider-08.jpg">
        </div>
      </div>
      <div class="container">
        <div class="search-slider">
          <div class="container">
            <div class="row">
              <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 bg-fetbrown">
                <h1>Click. Connect. Trade.</h1>
                <form>
                  <select name="" id="fet_make" class="form-control">
                    <?php 
                    $args = array(
                        'taxonomy'    => 'fet_equipment',
                        'hide_empty'  => false,
                        'parent'      => 0,
                    );
                    $fetmakes = get_terms( $args );
                    $fetcounter = 1;
                    foreach ($fetmakes as $value) {
                      echo '<option value"' . $value->term_id . '">' . $value->name . '</option>';
                      $fetcounter++;
                    };

                    ?>
                  </select>
                  <select name="" id="" class="form-control">
                    <?php 
                    $args = array(
                        'taxonomy'    => 'fet_equipment',
                        'hide_empty'  => false,
                        'child_of'      => 0,
                    );
                    $fetmakes = get_terms( $args );
                    $fetcounter = 1;
                    foreach ($fetmakes as $value) {
                      echo '<option value"' . $value->term_id . '">' . $value->name . '</option>';
                      $fetcounter++;
                    };

                    ?>
                  </select>
                  <select class="form-control">
                    <option value="1">All Categories</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                  </select>
                  <select class="form-control">
                    <option value="1">All Makes</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                  </select>
                  <select class="form-control">
                    <option value="1">All Models</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                  </select>
                  <button type="submit" class="btn btn-fetorange">Search</button>
                </form>
                <script type="text/javascript">
                var e = document.getElementById("fet_make");
                var strUser = e.options[e.selectedIndex].value;
                </script>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>
