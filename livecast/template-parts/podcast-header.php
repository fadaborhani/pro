<div class="cl-post-header">
    <?php if( codeless_get_podcast_header_style() == 'with_image' ): ?>
        <div class="wrapper-layers">
            <img src="<?php echo esc_url( get_the_post_thumbnail_url(get_the_ID(),'full') );  ?>" alt="<?php esc_attr_e('post-header', 'livecast') ?>"/>
            <div class="overlay"></div>
        </div>
    <?php endif; ?>
    <div class="wrapper-content">
        <div class="container container-content">
            <div class="row">
                <div class="col-sm-12 col-md-9">
                    <article>
                        <?php                        
                        $post_id = get_the_ID();
                        echo codeless_get_podcast_shows_colored( $post_id, 'podcast_shows' ); ?>
                        <h1><?php echo get_the_title() ?></h1>
                        <div class="entry-footer">
                            <?php codeless_output_entry_meta(false) ?>
                        </div>
                        <div class="entry-features">
                            <?php if( codeless_check_content_for_audio() ) echo codeless_print_podcast_features(); ?>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </div>
</div>