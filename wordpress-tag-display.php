<?php
    /* DEFINE VARIABLE OF TAG */
	$tags = get_tags('post_tag'); //taxonomy=post_tag

    /* LOOP TO GET TAG AND PUT IN VARIABLE */
    /* TRY TI GET CONTENT AND HANDLE ERROR PREVENT FATAL PHP ERROR */
    try {
        if ( $tags ) :
            foreach ( $tags as $tag ) : ?>
            <a class="tag" href="<?php echo esc_url( get_tag_link( $tag->term_id ) ); ?>" 
               title="<?php echo esc_attr( $tag->name ); ?>"><?php echo esc_html( $tag->name ); ?>
            </a>
            <?php endforeach; ?>
        <?php endif;     
    } catch (Exception $e) {
        /* IF NO CONTENT THIS SECTION WITH BE ACTIVATE AUTOMATIC */
        echo "Error, Please check tag in all post";
    }
?>