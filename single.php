<?php

/**
 * Default Page Template
 */
?>
<?php get_header( 'blog' ); ?>
    <?php spyropress_before_main_container(); ?>
    <section id="blog" class="white-background">
            <div class="<?php get_row_class(); ?>">
                <div class="col-md-12" id="posts">
                    
                        <?php
                        spyropress_before_loop();
                        while( have_posts() ) {
                            the_post();
                            
                            get_template_part( 'templates/formats/content',get_post_format() );
                            comments_template( '', true );
                        }
                        wp_pagenavi();
                        spyropress_after_loop();
                        ?>
                    
                </div>
            </div>
    </section>
    <?php spyropress_after_main_container(); ?>
<?php get_footer(); ?>