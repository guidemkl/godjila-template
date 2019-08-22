<?php get_header(); ?>
         <?php 
                          query_posts(array( 
                              'post_type' => 'home_manage',
                              'showposts' => 1
                          ) );  
                      ?>
      <?php while ( have_posts() ) : the_post(); ?>
<div class="site-blocks-cover" data-aos="fade" >
      <div class="container">
        <div class="row align-items-center" style="min-height: 0px !important" >
          <div class="col-lg-5 text-center">
            <div class="featured-hero-product w-100">
              <h1 class="mb-2">HOTDEAL</h1>
              <h4>ON JULY</h4>
              <div class="price mt-3 mb-5"><strong>1,499</strong> <del>$1,999</del></div>
              <p><a href="<?php echo get_site_url(); ?>/camera" class="btn btn-outline-primary rounded-0">Shop Now</a> <a href="<?php echo get_site_url(); ?>/shop" class="btn btn-primary rounded-0">All Products</a></p>
            </div>  
          </div>
          <div class="col-lg-7 align-self-end text-center text-lg-right">
            <img src="<?php echo get_field('home_img'); ?>" alt="Image" class="img-fluid">
          </div>
        </div>
      </div>
    </div>
  <?php endwhile; ?>

    <div class="products-wrap border-top-0" >
      <div class="container-fluid">
        <div class="row no-gutters products">
         <?php  query_posts(array( 'post_type' => 'camera_product', 'showposts' => 3 ) );   ?>
          <?php while (have_posts()) : the_post(); ?> <div class="col-6 col-md-6 col-lg-4">
           <a href="<?php the_permalink(); ?>" class="item"> <img src="<?php echo
    get_field('camera_img'); ?>" alt="Image" class="img-fluid"> <div
    class="item-info"> <h3><?php echo get_field('camera_name'); ?></h3> <span
    class="collection d-block"><?php the_title(); ?></span> <strong
    class="price">$9.50</strong> </div> </a> </div> <?php endwhile; ?> </div>
    </div> </div>
    
    <div class="site-blocks-cover inner-page py-5"  data-aos="fade">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-4 ml-auto order-lg-2 align-self-start">
            <div class="site-block-cover-content">
            <h2 class="sub-title">#New Summer Collection 2019</h2>
            <h1>Jacket</h1>
            <p><a href="#" class="btn btn-black rounded-0">Shop Now</a></p>
            </div>
          </div>
          <div class="col-lg-8 order-1 align-self-end">
            <img src="https://placeimg.com/730/649/animals" alt="Image" class="img-fluid">
          </div>
        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="title-section text-center col-12">
            <h2 class="text-uppercase">สไลด์อยู่ตรงนี้จ้า</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 block-3 products-wrap">
            <div class="nonloop-block-3 owl-carousel">
              
              <div class="product">
                <a href="#" class="item">
                  <img src="https://placeimg.com/730/649/animals" alt="Image" class="img-fluid">
                  <div class="item-info">
                    <h3>The Shoe</h3>
                    <span class="collection d-block">Summer Collection</span>
                    <strong class="price">$9.50</strong>
                  </div>
                </a>
              </div>

              <div class="product">
                <a href="#" class="item">
                  <span class="tag">Sale</span>
                  <img src="https://placeimg.com/730/649/animals" alt="Image" class="img-fluid">
                  <div class="item-info">
                    <h3>Marc Jacobs Bag</h3>
                    <span class="collection d-block">Summer Collection</span>
                    <strong class="price">$9.50 <del>$30.00</del></strong>
                  </div>
                </a>
              </div>

              <div class="product">
                <a href="#" class="item">
                  <img src="https://placeimg.com/730/649/animals" alt="Image" class="img-fluid">
                  <div class="item-info">
                    <h3>The  Belt</h3>
                    <span class="collection d-block">Summer Collection</span>
                    <strong class="price">$9.50</strong>
                  </div>
                </a>
              </div>

              <div class="product">
                <a href="#" class="item">
                  <img src="https://placeimg.com/730/649/animals" alt="Image" class="img-fluid">
                  <div class="item-info">
                    <h3>The Shoe</h3>
                    <span class="collection d-block">Summer Collection</span>
                    <strong class="price">$9.50</strong>
                  </div>
                </a>
              </div>

              <div class="product">
                <a href="#" class="item">
                  <span class="tag">Sale</span>
                  <img src="https://placeimg.com/730/649/animals" alt="Image" class="img-fluid">
                  <div class="item-info">
                    <h3>Marc Jacobs Bag</h3>
                    <span class="collection d-block">Summer Collection</span>
                    <strong class="price">$9.50 <del>$30.00</del></strong>
                  </div>
                </a>
              </div>

              <div class="product">
                <a href="#" class="item">
                  <img src="https://placeimg.com/730/649/animals" alt="Image" class="img-fluid">
                  <div class="item-info">
                    <h3>The  Belt</h3>
                    <span class="collection d-block">Summer Collection</span>
                    <strong class="price">$9.50</strong>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="site-blocks-cover inner-page py-5"  data-aos="fade">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6 ml-auto order-lg-2 align-self-start">
            <div class="site-block-cover-content">
            <h2 class="sub-title">#New Summer Collection 2019</h2>
            <h1>New Denim Coat</h1>
            <p><a href="#" class="btn btn-black rounded-0">Shop Now</a></p>
            </div>
          </div>
          <div class="col-lg-6 order-1 align-self-end">
            <img src="https://placeimg.com/730/649/animals" alt="Image" class="img-fluid">
          </div>
        </div>
      </div>
    </div>
<?php get_footer(); ?>