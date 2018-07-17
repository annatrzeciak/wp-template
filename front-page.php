<?php
get_header(); ?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">

            <div class="container">
                <?php if(get_page_by_path('/about-me')){
    $about=get_page_by_path('/about-me');
} elseif(get_page_by_path('/about')){
                $about=get_page_by_path('/about');
    } elseif(get_page_by_path('/o-mnie')){
                $about=get_page_by_path('/o-mnie');
    } elseif(get_page_by_path('/o-nas')){
                $about=get_page_by_path('/o-nas');
}else{
    $args = array(
  'numberposts' => 1,
  'post_type'   => 'page',
        'order' => 'ASC'
);
 
$about = get_posts( $args );
   $about=$page[0];
}
            ?>
                <?php if($about) : ?>
                <div class="about-me-short">
                   <div class="row">
                       <div class="col-sm-6 description">
                           <h4><?php echo $about->post_title?></h4>
                           <p><?php echo substr($about->post_content,0,250)?>...</p>
                           <a class='btn-more'href="<?php echo $about->guid?>">Read more</a>
                       </div>
                       <div class="col-sm-5 ">
                           <?php echo get_the_post_thumbnail( $about->ID ); ?>
                       </div>
                   </div>
                    
                    
                    
                </div>


                <?php endif; ?>

            </div>
            <?php
        $args = array(
  'numberposts' => 2
);
        $posts = get_posts($args);
        
        ?>
        </main>
        <!-- #main -->
    </div>
    <!-- #primary -->

    <?php get_footer();
