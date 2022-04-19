<?= get_header();?>
<div id="main">
<div class="site-container">
<div class="the_content" id="content">
<div class="blog">
<?php if ( have_posts() ) : ?>
<?php while ( have_posts() ) : the_post(); ?>
  <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="post-header">
    <?php if ( function_exists( 'add_theme_support' ) ) the_post_thumbnail(); ?>
       <h1><a class="title" href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
       <!-- <div class="author"><php the_author(); ?></div> -->
    </div><!--end post header-->
    <div class="entry clear"> 
       <?php the_content(); ?>
       <!-- <php edit_post_link(); ?> -->
       <?php wp_link_pages(); ?> </div>
    <!--end entry-->
    <div class="post-footer">
       <!-- <div class="comments"><php comments_popup_link( 'Leave a Comment', '1 Comment', '% Comments' ); ?></div> -->
    </div><!--end post footer-->
    <!-- </div>end post -->
	<?php endwhile; /* rewind or continue if all posts have been fetched */ ?>
    <div class="navigation_index">
         <ul>
         <li><div class="alignleft"><i class="fas fa-angle-left"></i><?php next_post_link( '%link','%title',$taxonomy = 'category');?></div></li>
         <li> <div class="alignright"><?php previous_post_link( '%link','%title', $taxonomy = 'category'); ?><i class="fas fa-angle-right"></i></div></li>
         </ul>
    	</div><!--end navigation-->
		<?php else : ?>
			<?php endif; ?>
		</div>
	   </div>
   </div>
</div><!-- #site-content -->
<?php
get_footer();?>
