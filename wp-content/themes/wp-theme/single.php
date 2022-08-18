<?php get_header(); ?>
<?php if (have_posts()) : the_post(); ?>
  <div class="single-container container">
    <div class="single-header__contain">
      <?php if (has_category()) : ?>
        <div class="category-tag single-category-tag"><?php echo get_the_category_list(' '); ?></div>
      <?php endif; ?>
      <h1 class="single-title">
        <?php the_title(); ?>
      </h1>
      <div class="flex tags-date">
        <p class="single-date"><?php echo get_the_date('Y.m.d'); ?></p>
      </div>
    </div>
    <div class="single-eyecatch eyecatch">
      <?php if (has_post_thumbnail()) : ?>
        <?php the_post_thumbnail(); ?>
      <?php endif; ?>
    </div>
    <div class="main-text">
      <?php the_content(); ?>
    </div>
  </div>
<?php endif; ?>
<?php get_footer(); ?>