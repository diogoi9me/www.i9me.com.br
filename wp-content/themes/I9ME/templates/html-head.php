<!DOCTYPE HTML>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width">
    <title><?php wp_title(); ?></title>
    <?php wp_head(); ?>
    
    <link rel="alternate" href="<?php echo get_bloginfo('url'); ?>" hreflang="pt-BR" />
    <link rel="alternate" type="application/rss+xml" title="<?php echo get_bloginfo('name'); ?> Feed" href="<?php echo esc_url(get_feed_link()); ?>">


</head>
<body <?php body_class();?> >