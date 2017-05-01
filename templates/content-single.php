<?php while (have_posts()) : the_post(); ?>
<?php $title = get_field('staff_title'); ?>
  <div class="container">
    <div class="row single-post-wrap">
  <main class="col-md-12 head">
    <article <?php post_class(); ?>>
      <div class="row">
      <div class="col-md-4">
          <img src="<?php the_post_thumbnail_url(); ?>" class="img-fluid rounded">
      </div>
      <div class="entry-content col-md-8">
        <h1 class="single-post-title"><?php the_title(); ?></h1>
        <h4><?php echo $title; ?></h4>
        <?php the_content(); ?>
      </div>
    </div>
        <?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
      <!-- <?php comments_template('/templates/comments.php'); ?> -->
    </article>
  </main>
</div>
</div>

<?php endwhile; ?>
