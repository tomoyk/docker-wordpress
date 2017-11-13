<?php get_header(); ?>
	<div class="row">
		<div class="large-8 columns site-content">
			<?php if(is_archive()): ?>
				<h5 class="page-title">
					<?php if ( is_day() ) :
						printf( __( '" %s " の一覧', 'wp_dfes_megane' ), get_the_date() );
					elseif ( is_month() ) :
						printf( __( '" %s " の一覧', 'wp_dfes_megane' ), get_the_date( _x( 'F Y', 'monthly archives date format', 'wp_dfes_megane' ) ) );
					elseif ( is_year() ) :
						printf( __( '" %s " の一覧', 'wp_dfes_megane' ), get_the_date( _x( 'Y', 'yearly archives date format', 'wp_dfes_megane' ) ) );
					elseif ( is_category() ) :
						printf( __( '" %s " の一覧', 'wp_dfes_megane' ), single_cat_title( '', false ) );
					elseif( is_tag() ) :
						printf( __( '" %s " の一覧', 'wp_dfes_megane' ), single_tag_title( '', false ) );
					else :
						_e( 'Archives', 'wp_dfes_megane' );
					endif; ?>
				</h5>
				<hr>
			<?php endif; ?>
			<?php while ( have_posts() ) : the_post(); ?>
			<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
				<h5><?php the_time('Y.m.d'); ?></h5>
					<?php if (!is_page()){?>
						<ul class="no-bullet post-meta">
							<?php
								$cats = get_the_category(); 
								foreach( $cats as $cat) { 
									echo '<li><span class="secondary radius label">';
									echo $cat->cat_name . '</span></li>'; 
								}
								$posttags = get_the_tags(); 
								if ($posttags) { 
									foreach($posttags as $tag) { 
									echo '<li><span class="secondary radius label">';
									echo $tag->name . '</span></li>'; 
									} 
								} 
								?>
						</ul> 
					<?php }?>
				<?php the_content(); ?>
				<?php wp_link_pages( ); ?>
				<?php edit_post_link('編集','(',')'); ?>  
			</div>
			<hr>
			<?php endwhile;?>
			<div class="row">
				<div class="large-12 columns">
					<?php wp_dfes_megane_paging_nav(); ?>
				</div>
			</div>
			<?php if (is_single()){?>
				<div class="row">
					<div class="small-6 columns">
						<?php previous_post_link( '%link', '<span class="meta-nav button">' . _x( '&larr;前の記事', '', '' ) . '</span>' ); ?>
					</div>
					<div class="small-6 columns text-right">
						<?php next_post_link( '%link', '<span class="meta-nav button">' . _x( '次の記事&rarr;', '', '' ) . '</span>' ); ?>
					</div>
				</div>
			<?php }?>
		</div>
		<?php get_sidebar(); ?>
	</div>
<?php get_footer(); ?>