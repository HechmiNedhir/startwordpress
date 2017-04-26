<div class="blog-post">
    <h2 class="blog-post-itle"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> </h2>
    <p class="blog-post-meta"><?php the_date(); ?> par <a href="#"><?php the_author(); ?></a></p>
    <?php the_excerpt(); ?>
</div><!-- /.blog-post -->