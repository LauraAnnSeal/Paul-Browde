<?php 
/**
Template Name: Home page
Template Post Type: page
*/
?>

<?php get_header() ?>


<!-- TOP BANNER -->
<div class="container-fluid" id="home-banner">
    <div class="landscape">
        <img src="<?php echo get_template_directory_uri() ?>/assets/horizontal_banner.jpg" alt="">
    </div>
    <div class="portrait">
        <img src="<?php echo get_template_directory_uri() ?>/assets/vertical_banner.jpg" alt="">
    </div>

    <div class="banner-content">
        <img src="<?php echo get_field('logo', 7); ?>" alt="<?php echo get_bloginfo( 'name' ); ?>">
        <h1><?php echo get_bloginfo( 'name' ) ?></h1>
        <hr>
        <h3><?php echo get_option('blogdescription') ?></h3>
    </div>

</div>


<!-- INTRO -->
<div class="container my-5 py-5" id="intro">
    <div class="row d-md-flex justify-content-center align-items-center">
        <div class="col-12 col-md-4  col-lg-3 headshot text-center text-md-start">
        <?php 
            $headshot = get_field('headshot');
            if( !empty( $headshot ) ): ?>
                <img class="rounded shadow" src="<?php echo esc_url($headshot['url']); ?>" alt="<?php echo esc_attr($headshot['alt']); ?>" />
            <?php endif; ?>
        </div>
        <div class="col-12 col-md-8 col-lg-9 ps-lg-5 mt-5 mt-md-0">
            <h1><?php echo get_field('intro_title'); ?></h1>
            <p><?php echo get_field('intro_text') ?></p>
        </div>
    </div>
</div>


<!-- ABOUT -->
<div class="container my-5 py-5" id="about">
    <div class="row">


        <div class="col-12 text-center">
            <h1><?php echo get_field('about_title') ?></h1>
        </div>


        <div class="col-12 row px-0 mx-0 mt-3">
            <div class="col-6">
                <?php 
                $image_1 = get_field('image_1');
                if( !empty( $image_1 ) ): ?>
                    <img class="rounded shadow w-100" src="<?php echo esc_url($image_1['url']); ?>" alt="<?php echo esc_attr($image_1['alt']); ?>" />
                <?php endif; ?>
            </div>
            <div class="col-6">
                <?php 
                $image_2 = get_field('image_2');
                if( !empty( $image_1 ) ): ?>
                    <img class="rounded shadow w-100" src="<?php echo esc_url($image_2['url']); ?>" alt="<?php echo esc_attr($image_2['alt']); ?>" />
                <?php endif; ?>
            </div>
        </div>

        <div class="col-12 mt-4">
            <p><?php echo get_field('about_text') ?></p>
        </div>

        <div class="col-12 mt-3 text-center">
            <a href="<?php echo get_field('about_link') ?>" class="btn btn-primary"><?php echo get_field('about_button_text') ?></a>
        </div>

    </div>
</div>


<!-- OFFERINGS -->
<div class="container my-5 py-5" id="offerings">
    <div class="row">

        <div class="col-12 text-center">
            <h1><?php echo get_field('offerings_heading') ?></h1>
        </div>




        

        <?php 
        $rows = get_field('offerings');
        if( $rows ) {
            $colors = array('pb-pink', 'pb-blue', 'pb-orange', 'pb-lightblue', 'pb-darkblue');
            $i = 0;
            foreach( $rows as $row ) {
                $title = $row['offering_title'];
                $description = $row['offering_description'];
                $link = $row['link_to_offering'];
                $button_text = $row['offering_link_text'];?>
                
                <div class="col-12 my-3 p-5 rounded border">
                    <h2><?php echo $title ?></h2>
                    <p class="my-5"><?php echo $description ?></p>
                    <a class="btn <?php echo $colors[$i] ?>" href="<?php echo $link ?>"><?php echo $button_text ?></a>
                </div>
                <?php $i++ ?>
                <?php
            };
        } ?>


    </div>
</div>

<?php get_footer() ?>