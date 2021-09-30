<article class="blog_item">
    <div class="blog_item_img">
        <img class="card-img rounded-0" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
        <a href="<?php the_permalink(); ?>" class="blog_item_date">
            <h3><?php echo get_the_date('j'); ?></h3>

            <p><?php  echo get_the_time('M'); ?></p>
        </a>
    </div>

    <div class="blog_details">
        <a class="d-inline-block" hresf="<?php the_permalink(); ?>">
            <h2><?php the_title(); ?></h2>
        </a>
        <p><?php the_excerpt(); ?> </p>
        <ul class="blog-info-link">
            <li><a href="#"><i class="fa fa-user"></i><?php the_category(', '); ?>
                </a></li>
            <li><a href="#"><i class="fa fa-comments"></i> 03 Comments</a></li>
        </ul>
    </div>
</article>