<?php get_header(); ?>

    <div id="content">
    <?php if(have_posts()) : ?>
    <?php while(have_posts()) : the_post(); ?>
        <div class="blogpost container">
            <div class="postcttitle row mb-1"><h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1></div>
            <div class="postinfo row row-cols-auto mb-2"><div class="postdate col"><i class="bi bi-clock"></i> <?php the_time('d/m/Y'); ?></div> <div class="postcategory col"><i class="bi bi-bookmark-heart-fill"></i> <?php the_category(', ') ?></div></div>
            <div class="postexcerpt row mb-2">
                <div class="col">
                <?php the_excerpt(); //wpn_content_limit(get_the_content(),305); ?>
                </div>
            </div>
        </div>
        <?php endwhile; ?>
        <?php endif; ?>
        <div class="pages container mx-auto">
            <nav aria-label="Page navigation">
                <ul class="pagination">
                  <li class="page-item disabled"><p class="page-link">Sayfa <?php htcurrentpagenmber(); ?>/<?php httotalpagenumber(); ?></p></li>
                  <?php wp_pagenavi(); ?>
                </ul>
              </nav>
        </div>
    </div>
<?php get_footer(); ?>