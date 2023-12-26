<article id="ce-post-item-<?php the_ID(); ?>" class="ce-post-item">
    <div class="grid-holder"> 
        <div class="grid-holder-inner">  
            <div class="media-wrapper">
            
                <?php 
                
                $post_format = get_post_format() || '';
                
                /**
                 * Generate Post Thumbnail for Single Post and Blog Page
                 */ 
                ?>
                
                <div class="entry-media">
                
                    <div class="post-thumbnail">
                        
                        <?php the_post_thumbnail( array( 370, 300 ) ); ?>
                        <a href="<?php echo get_permalink() ?>" class="image-link"></a>
                    
                    </div><!-- .post-thumbnail --> 

                </div><!-- .entry-media --> 

            </div>
            
            <div class="entry-wrapper">

                <div class="entry-wrapper-content">
            
                        <header class="entry-header">

                            <?php echo codeless_get_category_colored(); ?>
                            
                            <?php the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' ); ?>

                            <div class="entry-meta">

                                <div class="entry-meta-single entry-meta-author">
                                <?php    
                                    $author_name = get_the_author();

                                    $avatar = get_avatar( get_the_author_meta('user_email', $post->post_author) , 32 ) ;
                                    $author = '';

                                    if($avatar !== FALSE)
                                        $author = $avatar;                    

                                    $author .=  '<a href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . get_userdata( get_the_author_meta( 'ID' ) )->display_name . '</a>';

                                    echo wp_kses_post( $author );
                                ?>
                                </div><!-- .entry-meta-single -->

                                <div class="entry-meta-single entry-meta-date">
                                    <i class="<?php echo esc_attr( $settings['date_icon']['value'] ) ?>"></i><?php echo get_the_date('M j, Y'); ?>
                                </div><!-- .entry-meta-single -->
                            </div><!-- .entry-meta -->

                        </header><!-- .entry-header -->

                </div><!-- .entry-wrapper-content -->

            </div><!-- .entry-wrapper -->
            
        </div>
    </div>
</article><!-- #post-## -->