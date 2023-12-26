<article class="entry-podcast">
	<div class="entry-media">
		<figure class="entry-img">
			<?php the_post_thumbnail( 'codeless_show' ); ?>
		</figure>
		<div class="entry-meta-single entry-meta-date">
			<span><?php echo codeless_get_entry_meta_date(); ?></span>
	    </div>
	    <div class="entry-play">
	    	<a href="<?php the_permalink(); ?>">
    			<img src="<?php echo get_stylesheet_directory_uri().'/img/play.png'; ?>" alt="<?php esc_attr_e('icon', 'livecast') ?>">
			</a>
	    </div>
	</div>
    <div class="entry-title">
    	<span class="entry-icon">
    		<?php echo codeless_get_podcast_shows_colored( $post->ID, 'podcast_shows' );  ?>
    	</span>
    	<h3>
    		<a href="<?php the_permalink(); ?>">
    			<?php the_title(); ?>
			</a>
		</h3>
    </div>
</article>
