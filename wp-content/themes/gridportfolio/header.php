<!DOCTYPE html>
<html>
<head> 
  <title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
  <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico" /> 
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" type="text/css" media="screen" title="no title" charset="utf-8"/>
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" title="no title" charset="utf-8"/>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style_002.css" type="text/css" media="screen" title="no title" charset="utf-8"/>
  <link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
   <script src="//ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js" type="text/javascript"></script>
   

<script language="javascript">
$(document).ready(function(){
  // Add the hover handler to the link
  $(".img_hover_trans").hover(
    function(){ // When mouse pointer is above the link
      // Make the image inside link to be transparent
      $(this).find("img").animate(
        {opacity:".5"},
        {duration:300}
      );
    },
    function(){ // When mouse pointer move out of the link
      // Return image to its previous state
      $(this).find("img").animate(
        {opacity:"1"},
        {duration:300}
      );
    }
  );
});
</script>
  <?php wp_head(); ?>
</head>
<body>
<div id="slide">
	<img class="img1" src="<?php echo get_template_directory_uri(); ?>/images/slide_01.jpg" />
	<img class="img2" src="<?php echo get_template_directory_uri(); ?>/images/slide_02.jpg" />
	<img class="img3" src="<?php echo get_template_directory_uri(); ?>/images/slide_03.jpg" />
	<img class="img4" src="<?php echo get_template_directory_uri(); ?>/images/slide_04.jpg" />
	<img class="img5" src="<?php echo get_template_directory_uri(); ?>/images/slide_05.jpg" />	
</div>

<div id="main_container">

  <div id="menu_container">
    <ul class="left_list">
      <li><a href="#">Top</a></li>
      <li><a href="#about">About</a></li>
	  <li><a href="#news">News</a></li>
      <li><a href="#profile">Profile</a></li>
	  <li><a href="#service">Services</a></li>
	  <li><a href="#access">Access</a></li>
      <li><a href="#contact">Contact</a></li>
    </ul>
  
  
    <ul class="right_list">
      <li class="hidden"><a href="http://www.twitter.com"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/twitter-icon.png" /></a></li>
      <li><a href="https://www.facebook.com/keisuke0604"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/facebook-icon.png" /></a></li>
      <li class="hidden"><a href="http://www.flickr.com"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/rss-icon.png" /></a></li>
    </ul>
    
    <div class="clear"></div>
  </div><!--//menu_container-->
  
  <div id="header_container">
    <a href="<?php echo bloginfo('url'); ?>">KEISUKE KOIZUMI<br><span class="sub">OFFICIAL WEBSITE</span></a>
    
   
    
    <div class="clear"></div>
  </div><!--//header_container-->
  
  <div id="header_category_container">
    
    <div class="clear"></div>
  </div><!--//header_category_container-->
  
  <article id="contents">