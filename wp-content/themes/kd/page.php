<?php get_header(); ?>

<?php // get_template_part('breadcrumb');?>

<div class="container">
        <h1>Sơ đồ dự án Kingdom101 Tô Hiến Thành</h1>		
			<?php while ( have_posts() ) : the_post(); ?>

				<article itemscope itemtype="http://schema.org/CreativeWork" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<h1 id="site-title" class="entry-title" itemprop="about"><?php the_title(); ?></h1>		
                    <div id="post-more-info">
                        <span class="vcard updated"><?php the_date('d/m/Y'); ?></span> - 
                        <span class="vcard author author_name"><span class="fn">In Offset HCM</span></span>
                    </div>
					<div  class="entry-content" itemprop="text">
						<?php the_content(); ?>
					</div>
				
					<?php edit_post_link( __( 'Edit', 'twentythirteen' ), '<span class="edit-link">', '</span>' ); ?>					
				</article>
				
			<?php endwhile; ?>
						
</div>
		
		
<?php get_footer(); ?>
