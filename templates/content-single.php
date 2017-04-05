<?php while (have_posts()) : the_post(); ?>
  <div class="container">
    <div class="row single-post-wrap">
  <main class="col-md-12 head">
    <article <?php post_class(); ?>>
      <div class="row">
      <div class="col-md-9">
          <img src="<?php the_post_thumbnail_url(); ?>" class="img-fluid">
      </div>
    </div>
      <h1 class="single-post-title"><?php the_title(); ?></h1>
          <div class="blog-meta">
            <?php get_template_part('templates/entry-meta'); ?>
          </div>
      <div class="entry-content">
        <?php the_content(); ?>
      </div>
        <?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
      <!-- <?php comments_template('/templates/comments.php'); ?> -->
    </article>
  </main>
</div>
</div>

<?php endwhile; ?>
