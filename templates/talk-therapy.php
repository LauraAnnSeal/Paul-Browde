<?php 
/**
Template Name: Talk Therapy page
Template Post Type: page
*/
?>

<?php get_header() ?>

<div class="container half-section">
    <div class="row">
        <div class="col-12 text-center">
            <h1><?php echo get_field('heading') ?></h1>
            <h2><?php echo get_field('sub_title') ?></h2>
        </div>
    </div>
    <div class="row mt-3"  id="therapy-images">
        <div class="col-12 col-md-8">
            <div class="rounded">
                    <?php 
                    $header_gif = get_field('header_gif');
                    if( !empty( $header_gif ) ): ?>
                        <img src="<?php echo esc_url($header_gif['url']); ?>" alt="<?php echo esc_attr($header_gif['alt']); ?>" />
                    <?php endif; ?>
            </div>
        </div>
        <div class="d-none d-md-block col-4">
            <div class="rounded">
                    <?php 
                    $header_image = get_field('header_image');
                    if( !empty( $header_image ) ): ?>
                        <img src="<?php echo esc_url($header_image['url']); ?>" alt="<?php echo esc_attr($header_image['alt']); ?>" />
                    <?php endif; ?>
            </div>
        </div>
    </div>
</div>



<!-- RELATIONSHIP GUIDEANCE -->
<div class="container half-section">
    <div class="row card rounded py-4 py-md-2 py-lg-4">
        <div class="col-12 my-2 text-center">
            <h1><?php echo get_field('section_1_heading') ?></h1>
        </div>
        <div class="col-12 my-2">
            <?php echo get_field('section_1_text') ?>
        </div>
        <div class="col-12 my-2 text-md-center">
            <a class="text-pb-orange" href="<?php echo get_field('section_1_link') ?>"><?php echo get_field('section_1_link_text') ?></a>
        </div>
    </div>
</div>



<!-- INDIVIDUAL THERAPY -->
<div class="container section">
    <div class="row card rounded py-4 py-md-2 py-lg-4">
        <div class="col-12 my-2 text-center">
            <h1><?php echo get_field('section_2_heading') ?></h1>
        </div>
        <div class="col-12 my-2">
            <?php echo get_field('section_2_text') ?>
        </div>
        <div class="col-12 my-2 text-md-center">
            <a class="text-pb-pink" href="<?php echo get_field('section_2_link') ?>"><?php echo get_field('section_2_link_text') ?></a>
        </div>
    </div>
</div>

<?php get_footer() ?>