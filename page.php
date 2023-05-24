<?php get_header(); ?>
<div id="content">
    <?php if(have_posts()) : ?>
    <?php while(have_posts()) : the_post(); ?>
        <div class="blogpostcontent container">
            <div class="posttitle row border-bottom mb-4">
                <h1><?php the_title(); ?></h1>
            </div>
            <div class="postcontent row">
                <p>
                <?php the_content();?>
                </p>
            </div>
        </div>
    <?php endwhile; ?>
    <?php endif; ?>
</div>
<?php get_footer(); ?>