<!-- HTML Meta Tags -->
<title><?php echo get_bloginfo( 'name' ); ?></title>
<meta name="description" content="<?php get_field('seo_description', 7) ?>">

<!-- Facebook Meta Tags -->
<meta property="og:url" content="<?php echo get_site_url() ?>">
<meta property="og:type" content="website">
<meta property="og:title" content="<?php echo get_bloginfo( 'name' ); ?>">
<meta property="og:description" content="<?php get_field('seo_description', 7) ?>">
<meta property="og:image" content="<?php $image = get_field('image_for_google_seo', 7);  echo esc_url($image['url']); ?>">




<!-- Twitter Meta Tags -->
<meta name="twitter:card" content="summary_large_image">
<meta property="twitter:domain" content="<?php echo get_site_url() ?>">
<meta property="twitter:url" content="<?php echo get_site_url() ?>">
<meta name="twitter:title" content="<?php echo get_bloginfo( 'name' ); ?>">
<meta name="twitter:description" content="<?php get_field('seo_description', 7) ?>">
<meta name="twitter:image" content="<?php $image = get_field('image_for_google_seo', 7);  echo esc_url($image['url']); ?>">
