<?php
/**
 * Template Name: Page-camera
 *
 * 
 *
 * @package WordPress
 * @subpackage godjila
 * @since godjila 1.0.0
 */

 get_header(); ?>
    <div class="site-blocks-cover" data-aos="fade" >
      <div class="container">
        <div class="row" style="min-height: 0px !important" >
             <?php while (have_posts()) : the_post(); ?>
              <div class="col-lg-12">
                <h3 style="margin-top: 4.0rem"><?php echo get_field('camera_name'); ?></h3>
                   </div>
                       <div class="col-md-6 col-lg-6">
                         <img src="<?php echo get_field('camera_img'); ?>" style="padding: 4em" alt="Image" class="img-fluid">
                         </div>
                         <div class="col-12 col-md-6 col-lg-6" style="margin-top: 6em">
                            <h3 class="collection d-block"><?php the_title(''); ?></h3>
                            <span class="collection d-block"><?php echo get_field('camera_inform'); ?></span>
                            <strong class="price">$9.50</strong> 
                         </div>
                       <div class="col-3 col-md-3 col-lg-3 border-top" style="position: relative;">
                       <img src="<?php echo get_field('img_1'); ?>" alt="Image" class="img-fluid">
                       </div>
                       <div class="col-3 col-md-3 col-lg-3 border-top">
                       <img src="<?php echo get_field('img_2'); ?>" alt="Image" class="img-fluid">
                       </div>
                          <div class="col-3 col-md-3 col-lg-3 border-top">
                       <img src="<?php echo get_field('img_4'); ?>" alt="Image" class="img-fluid">
                       </div>
                       <div class="col-3 col-md-3 col-lg-3 border-top">
                       <img src="<?php echo get_field('img_5'); ?>" alt="Image" class="img-fluid">
                       </div>
                <?php endwhile;?>       
        </div>
      </div>
    </div>
<?php get_footer(); ?>
