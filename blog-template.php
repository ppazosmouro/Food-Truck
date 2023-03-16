<?php /* Template Name: Blog */ ?>
<?php get_header(); ?>
<div class="bg-block-cs container-full content-blog-page">
	<div class="container">
		<div class="text-editor">
			<?php
			while ( have_posts() ) :
					the_post();

					the_content();
			endwhile; // End of the loop.
			?>
		</div>
		<div class="lastest-post">
			<div class="filter-catergory-cs" style="color: #fff">
				<?php
					$list_categories = get_categories( array(
					    'orderby' => 'name',
					    'parent'  => 0
					) );
					//var_dump($list_categories);
					?>
					<ul>
						<li data-id="0" class="active">All</li>
						<?php foreach ( $list_categories as $single_cat ): ?>
							<li data-id="<?php echo $single_cat->term_id; ?>"><?php echo esc_html( $single_cat->name ); ?></li>
						<?php endforeach; ?>
					</ul>
			</div>
			<div class="content-lastes-post">
				<?php echo do_shortcode('[post__print]'); ?>
			</div>
			<div class="page-navigation event-load-more" style="color: #fff;">
		        <a data-nextpage="2" data-cat="0" class="load_more_post">Load More</a>
		    </div>
		</div>
	</div>
</div>
<?php get_footer(); ?>