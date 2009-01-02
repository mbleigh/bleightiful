<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
  "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
  
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

<title><?php bloginfo('name'); ?> <?php if ( is_single() ) { ?> - Blog <?php } ?> <?php wp_title(); ?></title>

<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> <!-- leave this for stats -->

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="http://feeds.feedburner.com/mbleigh/" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

<?php wp_head(); ?>
</head>
<body>
<div id="page">
  <div id="header">
  		<h1><a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a></h1>
  		<ul id='nav'>
        <li><a href='/' class='current'>Blog</a></li>
        <li><a href='/about'>About</a></li>
        <li class='external'><a href='http://www.linkedin.com/in/mbleigh' rel='me'>LinkedIn</a></li>
        <li class='external'><a href='http://github.com/mbleigh' rel='me' target='_blank'>GitHub</a></li>
        <li class='external'><a href='http://twitter.com/mbleigh' rel='me' target='_blank'>Twitter</a></li>
      </ul>
      <div class='clearfix'></div>
  </div>