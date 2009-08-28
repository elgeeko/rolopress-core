<?php get_header(); ?>
	
		<?php rolopress_before_container(); // Before container hook ?>
		<div id="container">	
			<?php rolopress_before_info(); // Before info hook ?>		
			<div id="info">
			
<?php the_post(); ?>			
			
				<h1 class="page-title"><?php _e( 'Tag Archives:', 'shape' ) ?> <span><?php single_tag_title() ?></span></h1>

<?php rewind_posts(); ?>
			
<?php global $wp_query; $total_pages = $wp_query->max_num_pages; if ( $total_pages > 1 ) { ?>
				<div id="nav-above" class="navigation">
					<div class="nav-previous"><?php next_posts_link(__( '<span class="meta-nav">&laquo;</span> Older posts', 'shape' )) ?></div>
					<div class="nav-next"><?php previous_posts_link(__( 'Newer posts <span class="meta-nav">&raquo;</span>', 'shape' )) ?></div>
				</div><!-- #nav-above -->
<?php } ?>			

<?php while ( have_posts() ) : the_post(); ?>

				<div id="post-<?php the_ID(); ?>" <?php rolopress_post_class(); ?>>
					<?php rolopress_before_entry(); // Before entry hook ?>
					<h2 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php printf( __('Permalink to %s', 'shape'), the_title_attribute('echo=0') ); ?>" rel="bookmark"><?php the_title(); ?></a></h2>

					<div class="entry-meta">
						<span class="meta-prep meta-prep-author"><?php _e('By ', 'shape'); ?></span>
						<span class="author vcard"><a class="url fn n" href="<?php echo get_author_link( false, $authordata->ID, $authordata->user_nicename ); ?>" title="<?php printf( __( 'View all posts by %s', 'shape' ), $authordata->display_name ); ?>"><?php the_author(); ?></a></span>
						<span class="meta-sep"> | </span>
						<span class="meta-prep meta-prep-entry-date"><?php _e('Published ', 'shape'); ?></span>
						<span class="entry-date"><abbr class="published" title="<?php the_time('Y-m-d\TH:i:sO') ?>"><?php the_time( get_option( 'date_format' ) ); ?></abbr></span>
						<?php edit_post_link( __( 'Edit', 'shape' ), "<span class=\"meta-sep\">|</span>\n\t\t\t\t\t\t<span class=\"edit-link\">", "</span>\n\t\t\t\t\t" ) ?>
					</div><!-- .entry-meta -->
					
					<div class="entry-summary">	
<?php the_excerpt( __( 'Continue reading <span class="meta-nav">&raquo;</span>', 'shape' )  ); ?>
					</div><!-- .entry-summary -->

					<div class="entry-utility">
						<span class="cat-links"><span class="entry-utility-prep entry-utility-prep-cat-links"><?php _e( 'Posted in ', 'shape' ); ?></span><?php echo get_the_category_list(', '); ?></span>
						<span class="meta-sep"> | </span>
<?php if ( $tag_ur_it = tag_ur_it(', ') ) : // Returns tags other than the one queried ?>						
						<span class="tag-links"><?php printf( __( 'Also tagged %s', 'shape' ), $tag_ur_it ) ?></span>
<?php endif; ?>						
						<span class="comments-link"><?php comments_popup_link( __( 'Leave a comment', 'shape' ), __( '1 Comment', 'shape' ), __( '% Comments', 'shape' ) ) ?></span>
						<?php edit_post_link( __( 'Edit', 'shape' ), "<span class=\"meta-sep\">|</span>\n\t\t\t\t\t\t<span class=\"edit-link\">", "</span>\n\t\t\t\t\t\n" ) ?>
					</div><!-- #entry-utility -->
				    <?php rolopress_after_entry(); // After entry hook ?>						
				</div><!-- #post-<?php the_ID(); ?> -->

<?php endwhile; ?>			

<?php global $wp_query; $total_pages = $wp_query->max_num_pages; if ( $total_pages > 1 ) { ?>
				<div id="nav-below" class="navigation">
					<div class="nav-previous"><?php next_posts_link(__( '<span class="meta-nav">&laquo;</span> Older posts', 'shape' )) ?></div>
					<div class="nav-next"><?php previous_posts_link(__( 'Newer posts <span class="meta-nav">&raquo;</span>', 'shape' )) ?></div>
				</div><!-- #nav-below -->
<?php } ?>			
			
			</div><!-- #info -->		
			<?php rolopress_after_info(); // After info hook ?>
		</div><!-- #container -->
		<?php rolopress_after_container(); // After container hook ?>
		
<?php get_sidebar(); ?>	
<?php get_footer(); ?>