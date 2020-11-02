<?php
/**
 * @package shopress
 */ ?>
<div class="shopress-breadcrumb-section" style='background: url("<?php echo( has_header_image() ? get_header_image() : get_theme_support( 'custom-header', 'default-image' ) ); ?>") repeat fixed center 0 #143745;'>
    <div class="overlay">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="shopress-breadcrumb-title">
              <h1><?php the_title(); ?></h1>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<div class="clearfix"></div>