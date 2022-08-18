<?php get_header(); ?>
<div class="eyecatch single-eyecatch page-eyecatch">
  <div class="page-title">
    <h1 class="page-title__h1"><?php single_cat_title(); ?></h1>
  </div>
</div>
<main>
  <div class="flex">
    <div class="container-top">
      <div class="new-articles">
        <div class="flex">
          <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
              <a href="<?php the_permalink(); ?>" class="magazine-colum">
                <?php if (has_post_thumbnail()) : ?>
                  <?php the_post_thumbnail(); ?>
                <?php endif; ?>
                <div class="text-content">
                  <h3 class="article__title">
                    <?php
                    if (mb_strlen($post->post_title, 'UTF-8') > 30) {
                      $title = mb_substr($post->post_title, 0, 30, 'UTF-8');
                      echo $title . '…';
                    } else {
                      echo $post->post_title;
                    }
                    ?>
                  </h3>
                  <p class="article__date"><?php echo get_the_date('Y-m-d'); ?></p>
                </div>
              </a>
            <?php endwhile; ?>
          <?php else : ?>
            <p>投稿が見つかりません。</p>
          <?php endif; ?>
        </div>
      </div>
    </div>
    <?php get_sidebar(); ?>
  </div>
</main>
<?php get_footer(); ?>