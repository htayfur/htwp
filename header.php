<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="tr-TR">
<head>
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>">
<title><?php wp_title(); ?></title>
<meta name="robots" content="index, follow" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php wp_get_archives('type=monthly&format=link'); ?>
<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>">
<link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>">
<link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>">
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('stylesheet_url'); ?>">
<link rel="icon" type="image/x-icon" href="<?php bloginfo('stylesheet_directory'); ?>/favicon.ico">
<?php wp_head(); ?>
</head>
<body>
    <header class="border-bottom">
        <div class="container">
            <div class="row justify-content-between my-3">
                <div class="col-4">
                    <div class="logo mt-3 mb-3"><a href="<?php bloginfo('url') ?>" title="Hakan Tayfur">Hakan Tayfur</a></div>
                </div>
                <div class="col-4">
                    <div class="socialmedia mt-3 mb-4"><a href="https://twitter.com/hkntyfr"><i class="bi bi-twitter"></i></a> <a href="https://instagram.com/hkntyfr/"><i class="bi bi-instagram"></i></a> <a href="https://www.youtube.com/c/HTayfur"><i class="bi bi-youtube"></i></a> <a href="https://tr.linkedin.com/in/hakantayfur"><i class="bi bi-linkedin"></i></a></div>
                </div>
            </div>
            <div class="row menus">
                <nav>
                    <ul>
                    <?php echo strip_tags(wp_nav_menu( array('theme_location' => 'first-menu','container'=> false,'items_wrap' => '%3$s','echo'=>false,'before'=>'<li>','after'=>'</li>')),'<ul><li><a>'); ?>
                    </ul>
                </nav>
            </div>
            <div class="row menus">
                <nav>
                    <ul>
                    <?php echo strip_tags(wp_nav_menu( array('theme_location' => 'second-menu','container'=> false,'items_wrap' => '%3$s','echo'=>false,'before'=>'<li>','after'=>'</li>')),'<ul><li><a>'); ?>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
