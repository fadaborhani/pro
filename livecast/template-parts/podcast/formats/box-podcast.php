<article class="entry-podcast ce-podcast-style-box">
	<div class="entry-media">
		<figure class="entry-img">			
			<?php the_post_thumbnail( 'codeless_show' ); ?>
            <a href="<?php echo get_permalink() ?>" class="image-link"></a>
		</figure>
		<div class="entry-meta-single entry-meta-date">
			<span>
				<?php echo codeless_get_entry_meta_date(); ?>
					&nbsp;<?php esc_html_e('4 episodes', 'livecast'); ?>
				</span>
	    </div>
	    <div class="entry-play">
	    	<span class="entry-icon">
	    		<?php echo codeless_get_podcast_shows_colored( get_the_ID(), 'podcast_shows', 'box3' );  ?>	    			   
    		</span>
	    	<a href="<?php the_permalink(); ?>" class="ce-play">	    			
    			<i class="feather feather-play"></i>
			</a>
			<h3 class="entry-title">
	    		<a href="<?php the_permalink(); ?>" >
	    			<?php the_title(); ?>
				</a>
			</h3>
	    </div>
	</div>	   
</article>