<?php get_header(); ?>

  <div id='main'>
  <?php if (have_posts()) : ?>
  <?php while (have_posts()) : the_post(); ?>
    <div <?php post_class() ?>>
      <h2><a href='<?php the_permalink() ?>'<?php the_title(); ?></a></h2>

      <?php if (has_post_thumbnail()) : ?>
      <div class='post-thumb'>
        <a href='<?php the_permalink() ?>'<?php the_post_thumbnail(); ?></a>
      </div>
    <?php endif; ?>

    <?php the_content(''); ?>
    <ul class='meta'>
      <li><?php the_time('F jS, Y') ?></li>
      <li>Posted in <?php the_category(', ') ?></li>
      <li><?php comments_number('No Comments', '1 Comment','% Comments'); ?></li>
    </ul>
  </div>
<?php endwhile; ?>

<?php else :?>
  <h2>Nothing Found</h2>
  <p>Sorry not found</p>
  <p><a href="<?php echo get_option('home'); ?>"> Return to home</a></p>
<?php endif; ?>

<?php get_footer(); ?>
