<?php get_header(); ?>

<main>
  <div class="container wrapper">
    <?php if(have_posts()): ?>
      <?php while(have_posts()):the_post(); ?>
        <h2 class="part-title"><?php the_title(); ?></h2>
        <div id="item">
          <div class="item-img">
            <img src="<?php the_post_thumbnail_url('full'); ?>" alt="">
          </div>
          <div class="item-box">
            <?php the_content(); ?>
            <p>&yen;<?php echo esc_html(get_post_meta(get_the_ID(), 'price', true)); ?> +tax</p>
            <dl>
              <dt>SIZE：</dt>
              <dd><?php echo esc_html(get_post_meta(get_the_ID(), 'size', true)); ?></dd>
              <dt>COLOR：</dt>
              <dd><?php echo esc_html(get_post_meta(get_the_ID(), 'color', true)); ?></dd>
              <dt>MATERIAL：</dt>
              <dd><?php echo esc_html(get_post_meta(get_the_ID(), 'material', true)); ?></dd>
            </dl>
          </div>
        </div>
      <?php endwhile; ?>
    <?php endif; ?>
    <a class="item-text" href="<?php echo esc_url(home_url('/category/products/')); ?>">Back To Products</a>
  </div>
</main>

<?php get_footer(); ?>