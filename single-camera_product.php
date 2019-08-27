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
                <h3 style="margin-top: 6.0rem"><?php echo get_field('camera_name'); ?></h3>
                   </div>
                       <div class="col-md-6 col-lg-6">
                       <div class="mySlides">
                        <div class="numbertext">1 / 6</div>
                        <img src="<?php echo get_field('img_1'); ?>" style="width:100%">
                      </div>

                      <div class="mySlides">
                        <div class="numbertext">2 / 6</div>
                        <img src="<?php echo get_field('img_2'); ?>" style="width:100%">
                      </div>

                      <div class="mySlides">
                        <div class="numbertext">3 / 6</div>
                        <img src="<?php echo get_field('img_4'); ?>" style="width:100%">
                      </div>
                        
                      <div class="mySlides">
                        <div class="numbertext">4 / 6</div>
                        <img src="<?php echo get_field('img_5'); ?>" style="width:100%">
                      </div>
                       <div class="col-12" style="text-align:center; !important">
                      <a class="prev" onclick="plusSlides(-1)">❮</a>
                      <a class="next" onclick="plusSlides(1)">❯</a>
                      </div> 
                      <div class="caption-container">
                        <p id="caption"></p>
                      </div>

                      <div class="row">
                        <div class="column col-3 col-md-3 col-lg-3 border-top ">
                          <img class="demo cursor" src="<?php echo get_field('img_1'); ?>" style="width:100%" onclick="currentSlide(1)" >
                        </div>
                        <div class="column col-3 col-md-3 col-lg-3 border-top ">
                          <img class="demo cursor" src="<?php echo get_field('img_2'); ?>" style="width:100%" onclick="currentSlide(2)" >
                        </div>
                        <div class="column col-3 col-md-3 col-lg-3 border-top ">
                          <img class="demo cursor" src="<?php echo get_field('img_4'); ?>" style="width:100%" onclick="currentSlide(3)" >
                        </div>
                        <div class="column col-3 col-md-3 col-lg-3 border-top ">
                          <img class="demo cursor" src="<?php echo get_field('img_5'); ?>" style="width:100%" onclick="currentSlide(4)" >
                        </div>
                      </div>
                      
                         </div>
                         <div class="col-12 col-md-6 col-lg-6" style="margin-top: 2em">
                            <h3 class="collection d-block"><?php the_title(''); ?></h3>
                            <span class="collection d-block"><?php echo get_field('camera_inform'); ?></span>
                            <strong class="price">$9.50</strong> 
                         </div>
                <?php endwhile;?>  
               
        </div>
      </div>
    </div>
    <div class="container">
  
</div>

<?php get_footer(); ?>
