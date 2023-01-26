<?php 
/**
Template Name: About page
Template Post Type: page
*/
?>

<?php get_header() ?>



<!-- Learning to listen -->
<div class="container section" id="learning-to-listen">

    <div class="row d-md-flex justify-content-center align-items-center">

        <div class="col-12 col-md-6">
        <?php 
        $image = get_field('learning_to_listen_image');
        if( !empty( $image ) ): ?>
            <img class="w-100 rounded" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif; ?>
        </div>

        <div class="col-12 col-md-6 mt-3 mt-md-0">
            <h1><?php echo get_field('learning_to_listen_heading') ?></h1>
            <?php echo get_field('learning_to_listen_text') ?>
        </div>

    </div>

</div>



<!-- My journey -->

<div class="container section" id="my-journey">
    <div class="row">
        <div class="col-12 my-md-5 text-md-center">
            <h1><?php echo get_field('journey_title') ?></h1>
        </div>
    </div>

    <div class="row d-flex justify-content-start align-items-stretch">


    <?php 
    $rows = get_field('journey_section');
    if( $rows ) {
        $colors = array('pb-pink', 'pb-blue', 'pb-orange', 'pb-lightblue', 'pb-darkblue');
        $i = 0;
        foreach( $rows as $row ) {
            $title = $row['title'];
            $body = $row['body_copy']; ?>

            <div class="col-12 d-flex">
                <div class="card rounded border-<?php echo $colors[$i] ?>">
                    <div class="card-header text-white bg-<?php echo $colors[$i] ?>">
                        <h2><?php echo $title; ?></h2>
                    </div>
                    <div class="card-body">
                        <?php echo $body; ?>
                    </div>
                </div>
            </div>

        <?php $i++ ?>
        <?php
        }
    } ?>




    </div>


</div>


<!-- Core beliefs -->
<div class="container section" id="core-beliefs">
    <div class="row">
        <div class="col-12 my-md-5 text-md-center">
            <h1><?php echo get_field('core_beliefs_heading'); ?></h1>
        </div>
    </div>
    <div class="row d-flex justify-content-start align-items-stretch">
    <?php 
    $rows = get_field('core_belief');
    if( $rows ) {
        $colors = array('pb-pink', 'pb-blue', 'pb-orange', 'pb-lightblue', 'pb-darkblue');
        $i = 0;
        foreach( $rows as $row ) {
            $title = $row['title'];
            $body = $row['body_copy']; ?>

            <div class="col-12 col-md-6 col-lg-12 d-flex      ">
                <div class="my-2 card py-4 rounded border-<?php echo $colors[$i] ?>">
                    <div class="number text-center mx-auto text-white bg-<?php echo $colors[$i] ?>"><?php echo $i + 1 ?>.
                    </div>
                    <div class="card-body">
                        <h2 class="my-4"><?php echo $title; ?></h2>
                        <?php echo $body; ?>
                    </div>
                </div>
            </div>

        <?php $i++ ?>
        <?php
        }
    } ?>
    </div>
</div>





<!-- Offerings -->
<div class="container section" id="offerings">
    <div class="row">

        <div class="col-12 my-md-5 text-center">
            <h1><?php echo get_field('offerings_title') ?></h1>
        </div>




        

        <?php 
        $rows = get_field('offering');
        if( $rows ) {
            $colors = array('btn-danger', 'btn-primary', 'btn-warning');
            $i = 0;
            foreach( $rows as $row ) {
                $title = $row['heading'];
                $description = $row['body_copy'];
                $page_link = $row['page_link'];
                $permalink = get_permalink( $page_link->ID );
                $link_title = get_the_title( $page_link->ID ); ?>
                
                <div class="col-12 my-3 p-5 rounded border">
                    <h2><?php echo $title ?></h2>
                    <p class="my-5"><?php echo $description ?></p>
                    <a class="btn <?php echo $colors[$i] ?>" href="<?php echo $permalink ?>"><?php echo $link_title ?></a>
                </div>
                <?php $i++ ?>
                <?php
            };
        } ?>


    </div>
</div>



<?php get_footer() ?>