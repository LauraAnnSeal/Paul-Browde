<?php 
    $dyw_square = get_field('square_logo', 72);
    $dyw_horizontal = get_field('horizontal_logo', 72);
    $launch = get_field('date', 72);
    $channels = get_field('social_channel', 72)
?>

<!-- 
	MENU BAR
 -->
<div class="container-fluid" id="menu-bar">
    <div class="row d-flex justify-content-between align-items-center">
        <div id="mobile-logo" class="col-6 col-md-5 col-lg-3 col-xxl-2">
            <a href="<?php echo get_site_url()?>">
                <img class="d-md-none" src="<?php $image = get_field('short_logo_and_name', 7);  echo esc_url($image['url']); ?>" alt="<?php echo esc_url($image['url']); ?>">
                <img class="d-none d-md-block" src="<?php $image = get_field('long_logo_and_name', 7);  echo esc_url($image['url']); ?>" alt="<?php echo esc_url($image['url']); ?>">
            </a>
        </div>
        <div class="col-6 text-end">
            <button class="btn btn-danger" id="menu-btn">Menu <i class="fa-regular fa-bars"></i></button>
        </div>
    </div>
</div>



<!-- 
	WRAPPER
 -->
<div id="wrapper"></div>

<!-- 
	MENU (OPEN)
 -->

<div class="container-fluid" id="menu">
    <div class="row">
        <div class="col-12 text-end p-2" id="menu-close">
            <button class="btn btn-primary"><i class="fa-solid fa-xmark"></i> close menu</button>
        </div>
        <div class="col-12 text-center" id="menu-logo">
            <img src="<?php echo get_field('logo', 7); ?>" alt="<?php echo get_bloginfo( 'name' ); ?>">
        </div>
        <div class="col-12" id="menu-links">
            <?php
                $primaryNav = wp_get_nav_menu_items('2');
                
                foreach ( $primaryNav as $navItem ) {

                    if($navItem->title != get_the_title()){
                        echo '<a href="'.$navItem->url.'" class="btn btn-light">'.$navItem->title.'</a> <br>';
                    } else {
                        echo '<a href="'.$navItem->url.'" class="btn btn-light active">'.$navItem->title.'</a> <br>';
                    }
                
                }				

            ?>
        </div>
    </div>
</div>




