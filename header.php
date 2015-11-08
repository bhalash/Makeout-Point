<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <title><?php echo page_title('404: Page not found'); ?> - <?php echo site_name(); ?></title>
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro|Source+Code+Pro" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="<?php echo theme_url('assets/css/style.css'); ?>" />
    <link rel="icon" type="image/png" href="<?php echo theme_url('img/favicon.png'); ?>" />
    <meta property="og:title" content="<?php echo site_name(); ?>">
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo current_url(); ?>">
    <meta property="og:image" content="<?php echo theme_url('img/screenshot.png'); ?>">
    <meta property="og:site_name" content="<?php echo site_name(); ?>">
    <meta property="og:description" content="<?php echo site_description(); ?>">
</head>
<body>
    <header class="head" id="head">
        <div class="banner">
            <div class="title">
                <h4><a href="<?php echo base_url(); ?>"><?php echo site_name(); ?></a></h4>
            </div>
        </div>
        <div class="logo-wrap">
            <!-- Set this in functions.php -->
            <div class="logo"><a href="<?php echo twitter_url(); ?>"></a></div>
        </div>
    </header>
    <main class="content">
        <nav>
            <div class="button menu-button"><a href="javascript:void(0)"></a></div>
            <div class="wrap menu-wrap">
                <div class="menu">
                    <form id="search" action="<?php echo search_url(); ?>" method="post">
                        <input id="term" name="term" placeholder="Type and then hit enter to search" tabindex="1" type="search" value="<?php echo search_term(); ?>">
                    </form>
                    <?php if (has_menu_items()) : ?> 
                        <ul class="left">
                            <?php while(menu_items()): ?> 
                                <li <?php echo (menu_active() ? 'class="active"' : ''); ?>>
                                    <a class="list-alt" href="<?php echo menu_url(); ?>" title="<?php echo menu_title(); ?>"><?php echo menu_name(); ?></a>
                                </li>
                            <?php endwhile; ?>
                        </ul>
                        <ul>
                            <?php while(categories()) : ?>
                                <li>
                                    <a href="<?php echo category_url(); ?>" title="<?php echo category_description(); ?>">
                                        <?php echo category_title(); ?> (<?php echo category_count(); ?>)
                                    </a>
                                </li>
                            <?php endwhile; ?>
                        </ul>
                        <ul class="right">
                            <li><a class="beard" href="http://www.bhalash.com" title="Real Men Wear Beards">Real Men Wear Beards</a></li>
                            <li><a class="facebook" href="http://www.facebook.com" title="Facebook">Facebook</a></li>
                            <li><a class="labs" href="http://www.091labs.com" title="091 Labs">091 Labs</a></li>
                            <li><a class="rss" href="<?php rss_url(); ?>" title="RSS Feed">RSS Feed</a></li>
                        </ul>
                    <?php endif; ?>
                </div>
            </div>
        </nav>
