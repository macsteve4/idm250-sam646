<?php get_header(); ?>

<div class="contbar">
    <h4><?php the_archive_title(); ?></h4>
</div>
<div class="largecontainer">
<div class="workcontainer">
    <?php
    while (have_posts()) : the_post();
      get_template_part('components/card');
  ?>


<?php endwhile; ?>
</div>
</div>

<?php get_footer(); ?>