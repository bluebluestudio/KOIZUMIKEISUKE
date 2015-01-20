<?php get_header(); ?>    
  
  <div id="about">
  	<h2>About</h2>
	<section class="text">
	カンボジア・プノンペンで美容師をさせて頂いています、KEI（keisuke.koizumi）です。<br>
	<br>
	初めてカンボジアを訪れたのは2013年9月。<br>
	当時ストリートチルドレンや孤児院の子どもたちを対象に青空美容室を開催、プノンペン・シェムリアップで4ヵ月間髪を切り歩きました。<br>
	 <br>
	カンボジアの都市部や田舎の生活に触れ、活気と熱気のあるこの国で美容師として活動することを志しました。<br>
	<br>
	現在は「美髪」「デザイン・アート」「空間」をコンセプトに、プノンペンにてサロンワークを中心としながら、ファッションショー・雑誌のHAIR MAKEのお仕事もさせて頂いております。<br>
	 <br>
	一人でも多くの方に喜んで頂けますよう一生懸命施術させて頂きますので、是非一度足を運んで頂けたら幸いでございます。<br>
	</section>
  </div>
  
  <div id="featured_home_top">
  

   
    
  </div><!--//featured_home_top-->
  
  <div id="content">
	  <div id="news">
			<h2 class="news">News</h2>
			<div class="row">	
				<?php
					  $args = array(
								   
								   'post_type' => 'post',
								   'posts_per_page' => 12,
								   'paged' => ( get_query_var('paged') ? get_query_var('paged') : 1),
								   );
					  query_posts($args);
					  $x = 0;
					  while (have_posts()) : the_post(); ?>
					
						<?php if($x == 0) { ?>
						<div class="featured_box first col-xs-4 col-sm-4">
						<?php } elseif($x == 2) { ?>
						<div class="featured_box last col-xs-4 col-sm-4">
						<?php } else { ?>
						<div class="featured_box col-xs-4 col-sm-4">
						<?php } ?>
						
						  <a href="<?php the_permalink(); ?>"class="img_hover_trans"><?php the_post_thumbnail('featured-small'); ?></a>
						  <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
						 <p><?php $temp_arr_content = explode(" ",substr(strip_tags(get_the_content()),0,200)); $temp_arr_content[count($temp_arr_content)-1] = ""; $display_arr_content = implode(" ",$temp_arr_content); echo $display_arr_content; ?><?php if(strlen(strip_tags(get_the_content())) > 200) echo "..."; ?></p>
					   
					   
						</div><!--//featured_box-->
						
						<?php if($x == 2) { $x=-1; ?>
						<div class="clear"></div>
						<div class="post_divider"></div>
						<?php } ?>
						
						<?php $x++; ?>
					
					<?php endwhile; ?>
					
					<div class="clear"></div>
					
					<div class="nav_container">
					  <div class="left"><?php previous_posts_link('&laquo; Previous') ?></div>
					  <div class="right"><?php next_posts_link('Next &raquo;') ?></div>
					  <?php wp_reset_query(); ?>
					  <div class="clear"></div>
					</div>
			</div>
	  </div>
  </div><!--//content-->
  

<?php get_sidebar(); ?>

<?php get_footer(); ?>